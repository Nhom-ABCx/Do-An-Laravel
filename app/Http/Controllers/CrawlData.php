<?php
//https://viblo.asia/p/crawl-data-bang-laravel-va-goutte-L4x5x3ewlBM
namespace App\Http\Controllers;

use App\Http\Controllers\Admin\SanPhamController;
use FontLib\Table\Type\name;
use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\SanPham;
use App\Models\CT_SanPham;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;

class CrawlData extends Controller
{
    //crawl data tu`the gioi di dong
    public function TGDD()
    {
        //cai nay` tu ve~ bua` de crawl data

        $baseUrl = 'https://www.thegioididong.com';
        $urlAll = '/dtdd#c=42&o=9&pi=4';

        $client = new Client();

        $crawler = $client->request('GET', $baseUrl . $urlAll);
        $crawler->filter('ul.listproduct li.__cate_42')->each(
            function (Crawler $node) use ($baseUrl, $client) {
                // $name = $node->filter('h3')->text();

                // $price = $node->filter('strong.price')->text();
                // $price = preg_replace('/\D/', '', $price);
                // $star = $node->filter('i.icon-star')->count();
                //
                $href = $node->filter('a')->attr('href');
                $pageDetail = $client->request('GET', $baseUrl . $href);

                $name = $pageDetail->filter('h1')->text();
                $price = $pageDetail->filter('div.box-price p.box-price-present')->text();
                $price = preg_replace('/\D/', '', $price);
                //
                $thuocTinhChung = collect($pageDetail->filter('ul.parameter__list li')->each(
                    //tung` phan` tu cua table Cau hinh`
                    function (Crawler $item) {
                        $left = $item->filter('p.lileft')->text();
                        $right = collect($item->filter('div.liright span')->each(
                            function (Crawler $span) {
                                return $span->text();
                            }
                        ))->implode(', ');
                        return [$left, $right];
                    }
                ));
                //gop lai cho no' theo mang? chuan? cua request
                $thuocTinhChung = [$thuocTinhChung->pluck(0)->all(), $thuocTinhChung->pluck(1)->all()];
                //
                $rawThuocTinh = $pageDetail->filter('div.scrolling_inner')->each(
                    function (Crawler $node) {
                        return $node->filter('div.box03 > a.box03__item.item')->each(
                            function (Crawler $item) {
                                return $item->text();
                            }
                        );
                    }
                );

                $thuocTinhToHop = collect($rawThuocTinh)->map(function ($item) {
                    return $item;
                })->reject(function ($item) {
                    //neu' null thi` xoa' no' di
                    return empty($item);
                })->values();

                $thuocTinh = $thuocTinhToHop->map(
                    function ($value, $key) {
                        return 'ThuocTinh ' . $key;
                    }
                );

                $request = [
                    "TenSanPham" => $name,
                    "ThuocTinhChung" => $thuocTinhChung,
                    "HangSanXuatId" => rand(1, 11),
                    "LoaiSanPhamId" => rand(1, 6),
                    "TrangThai" => "1",
                    "ThuocTinh" => $thuocTinh->all(),
                    "ThuocTinhToHop" => $thuocTinhToHop->all(),
                    "MoTa" => "Mô tả ko crawl dc",
                    "Datatable" => "",
                ];

                //--------
                //--------
                //--------
                //--------
                //--------
                //----------------------------------copy past tu` crossjoin

                //$data = [["128 GB", "256 GB", "512 GB", "1024 GB"], ["Vàng đồng", "Xám", "Bạc", "Xanh dương"]];
                $data = $thuocTinhToHop->all();
                //The kind of explodes all elements in the array and sets them as paramenters.(...$options)
                $array = [];
                if (!empty($data))
                    foreach (Arr::crossJoin(...$data) as $items) {
                        $thuocTinhValue = json_encode($items, JSON_UNESCAPED_UNICODE);

                        //neu' trong CTSanPham no' co' to? hop thuoc tinh' do' thi` lay' ra gia' tien`
                        if (!empty($sanPham))
                            $ctSanPham = CT_SanPham::where("SanPhamId", $sanPham->id)->whereRaw('JSON_CONTAINS(ThuocTinhValue, ?)', [$thuocTinhValue])->first();
                        $giaBan = $ctSanPham->GiaBan ?? 0;

                        $array[] = ["BienThe" => $thuocTinhValue, "GiaBan" => $giaBan, "TrangThai" => $ctSanPham->TrangThai ?? 0];
                    }
                $request['Datatable'] = json_encode($array);
                //----------------------------------copy past tu` store sang

                //gop key va` value lai thanh` 1 mang? de luu vo dang json
                if (!empty($request['ThuocTinhChung']))
                    $thuocTinhChung =  collect($request['ThuocTinhChung'][0])->combine($request['ThuocTinhChung'][1]);

                $sanPham = SanPham::create([
                    'TenSanPham' => trim($request['TenSanPham']),
                    'MoTa' => $request['MoTa'] ?? '',
                    'TrangThai' => $request['TrangThai'] ?? false,
                    'ThuocTinh' => $thuocTinhChung ?? [],
                    'HangSanXuatId' => $request['HangSanXuatId'],
                    'LoaiSanPhamId' => $request['LoaiSanPhamId'],
                    'ThuocTinhToHop' => $request['ThuocTinh'],
                ]);

                //lay het' bang? ra, so sanh' luu vai` DB
                foreach (json_decode($request['Datatable'], true) as $item) {
                    //neu' trong DB da~ ton` tai SP do' thi` cap nhat lai gia' ban', ngc lai tao moi'
                    $ctSanPham = CT_SanPham::where("SanPhamId", $sanPham->id)->whereRaw('JSON_CONTAINS(ThuocTinhValue, ?)', [$item['BienThe']])->first();
                    if (!empty($ctSanPham)) {
                        $ctSanPham->update([
                            'GiaBan' => $item['GiaBan'],
                            'TrangThai' => $item['TrangThai'],
                        ]);
                    } else {
                        //xài DB::insert mà ko xài CT_SanPham::create([])  tai vi no' loi~ chu~ khi them vao
                        DB::insert(
                            'insert into ct_san_phams(SanPhamId,SoLuongTon,GiaNhap,GiaBan,ThuocTinhValue,TrangThai) values (?, ?, ?, ?, ?, ?)',
                            [$sanPham->id, 0, 0, $item['GiaBan'], $item['BienThe'], $item['TrangThai']]
                        );
                    }
                }

                //return Redirect::back()->with("SanPhamMoi", 'Thêm sản phẩm mới ' . $sanPham->TenSanPham . ' thành công');
            }
        );
        dd("sucsses");
    }
}