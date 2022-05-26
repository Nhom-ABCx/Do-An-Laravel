<?php
//https://viblo.asia/p/crawl-data-bang-laravel-va-goutte-L4x5x3ewlBM
namespace App\Http\Controllers;

use Goutte\Client;
use Symfony\Component\DomCrawler\Crawler;
use App\Models\SanPham;
use App\Models\CT_SanPham;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Storage; //thu vien luu tru~ de tao lien ket den public
use App\Models\HinhAnh;
use Illuminate\Http\Request;

class CrawlData extends Controller
{
    public function index($type)
    {
        switch ($type) {
            case 'TGDD':
                $this->TGDD();
                break;
            case 'DienLanh':
                $this->DienLanh();
                break;
            case 'LapTop':
                $this->LapTop();
                break;
            default:
                # code...
                break;
        }
    }
    //crawl data tu`the gioi di dong
    public function TGDD()
    {
        //cai nay` tu ve~ bua` de crawl data

        $baseUrl = 'https://www.thegioididong.com';
        $urlAll = '/dtdd#c=42&o=9&pi=4';

        $client = new Client();

        $crawler = $client->request('GET', $baseUrl . $urlAll);
        $list = $crawler->filter('ul.listproduct li.__cate_42');
        $index = 0;
        echo "Total List: " . $list->count();
        $list->each(
            function (Crawler $node) use ($baseUrl, $client, &$index) {
                $index = $index + 1;
                dump($index);

                //
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

                //lay url hinh` anh?
                $hinhAnh = $pageDetail->filter('div.box01__tab.scrolling img')->each(
                    function (Crawler $node) {
                        return $node->attr('data-src');
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
                    "HinhAnh" => $hinhAnh,
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

                //Hình ảnh phải lưu trong public và phải có bước tạo link thì người dùng mới thấy dc
                //store() tự đặt hình bằng chuỗi random, nên tạo thư mục theo mã/tên sp để dễ quản lý
                if (!empty($request['HinhAnh'])) {

                    foreach ($request['HinhAnh'] as $hinhAnh) {
                        //download image from url
                        $url = $hinhAnh;
                        try {
                            $contents = file_get_contents($url);
                            $name = substr($url, strrpos($url, '/') + 1);
                            $path = 'assets/images/product-image/' . $sanPham->id . '/' . $name;
                            Storage::disk('public')->put($path, $contents);
                            //code...
                        } catch (\Throwable $th) {
                            //throw $th;
                        }

                        HinhAnh::create([
                            "SanPhamId" => $sanPham->id,
                            "HinhAnh" => $name,
                        ]);
                    }
                }

                $sanPham->save(); //luu lại đường dẫn hình

                //return Redirect::back()->with("SanPhamMoi", 'Thêm sản phẩm mới ' . $sanPham->TenSanPham . ' thành công');

            }
        );
        dd("sucsses");
    }

    //crawl data tu` dien may xanh
    public function DienLanh()
    {
        //dien may xanh moi TGDD no giong nhau
        $baseUrl = 'https://www.dienmayxanh.com';
        $urlAll = '/tu-dong';

        $client = new Client();

        $crawler = $client->request('GET', $baseUrl . $urlAll);
        $list = $crawler->filter('ul.listproduct li.__cate_166');
        $index = 0;
        echo "Total List: " . $list->count();
        $list->each(
            function (Crawler $node) use ($baseUrl, $client, &$index) {
                $index = $index + 1;
                dump($index);

                //
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

                //lay url hinh` anh?
                $hinhAnh = $pageDetail->filter('div.box01__tab.scrolling img')->each(
                    function (Crawler $node) {
                        return $node->attr('data-src');
                    }
                );

                $price = str_replace("₫", "", str_replace(".", "", $pageDetail->filter('p.box-price-present')->text()));

                $request = [
                    "TenSanPham" => $name,
                    "ThuocTinhChung" => $thuocTinhChung,
                    "HangSanXuatId" => rand(1, 11),
                    "LoaiSanPhamId" => 2,
                    "TrangThai" => "1",
                    "ThuocTinh" => empty(!$thuocTinh->all()) ? $thuocTinh->all() : ["ThuocTinh"],
                    "ThuocTinhToHop" => empty(!$thuocTinhToHop->all()) ? $thuocTinhToHop->all() : ["ThuocTinhToHop"],
                    "MoTa" => "Mô tả ko crawl dc",
                    "Datatable" => "",
                    "HinhAnh" => $hinhAnh,
                ];


                //--------
                //--------
                //--------
                //--------
                //--------
                //----------------------------------copy past tu` crossjoin

                //$data = [["128 GB", "256 GB", "512 GB", "1024 GB"], ["Vàng đồng", "Xám", "Bạc", "Xanh dương"]];
                $data = $request["ThuocTinhToHop"];
                //The kind of explodes all elements in the array and sets them as paramenters.(...$options)
                $array = [];
                if (count($data) > 1)
                    foreach (Arr::crossJoin(...$data) as $items) {
                        $thuocTinhValue = json_encode($items, JSON_UNESCAPED_UNICODE);

                        $array[] = ["BienThe" => $thuocTinhValue, "GiaBan" => $price, "TrangThai" => 1];
                    }
                else
                    foreach ($data as $items) {
                        $thuocTinhValue = json_encode($items, JSON_UNESCAPED_UNICODE);

                        $array[] = ["BienThe" => [$thuocTinhValue], "GiaBan" => $price, "TrangThai" => 1];
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
                    'ThuocTinh' => $thuocTinhChung,
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

                //Hình ảnh phải lưu trong public và phải có bước tạo link thì người dùng mới thấy dc
                //store() tự đặt hình bằng chuỗi random, nên tạo thư mục theo mã/tên sp để dễ quản lý
                if (!empty($request['HinhAnh'])) {

                    foreach ($request['HinhAnh'] as $hinhAnh) {
                        //download image from url
                        $url = $hinhAnh;
                        try {
                            $contents = file_get_contents("https:" . $url);
                            $name = substr($url, strrpos($url, '/') + 1);
                            $path = 'assets/images/product-image/' . $sanPham->id . '/' . $name;
                            Storage::disk('public')->put($path, $contents);
                            //code...
                        } catch (\Throwable $th) {
                            //throw $th;
                        }

                        HinhAnh::create([
                            "SanPhamId" => $sanPham->id,
                            "HinhAnh" => $name,
                        ]);
                    }
                }

                $sanPham->save(); //luu lại đường dẫn hình

                //return Redirect::back()->with("SanPhamMoi", 'Thêm sản phẩm mới ' . $sanPham->TenSanPham . ' thành công');

            }
        );
        dd("sucsses");
    }
    //crawl data tu` dien may xanh
    public function LapTop()
    {
        //dien may xanh moi TGDD no giong nhau
        $baseUrl = 'https://www.dienmayxanh.com';
        $urlAll = '/laptop-ldp';

        $client = new Client();

        $crawler = $client->request('GET', $baseUrl . $urlAll);
        $list = $crawler->filter('div.listproduct.listproduct-block');
        $index = 0;
        echo "Total List: " . $list->count();
        $list->each(
            function (Crawler $node) use ($baseUrl, $client, &$index) {
                $index = $index + 1;
                dump("list 1: " . $index);

                $index2 = 0;
                $node->filter('div.item')->each(
                    function (Crawler $prod) use ($baseUrl, $client, &$index2) {
                        $index2 = $index2 + 1;
                        dump("crawl product: "  . $index2);


                        //
                        // $name = $node->filter('h3')->text();

                        // $price = $node->filter('strong.price')->text();
                        // $price = preg_replace('/\D/', '', $price);
                        // $star = $node->filter('i.icon-star')->count();
                        //
                        $href = $prod->filter('a')->attr('href');
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

                        //lay url hinh` anh?
                        $hinhAnh = $pageDetail->filter('div.box01__tab.scrolling img')->each(
                            function (Crawler $node) {
                                return $node->attr('data-src');
                            }
                        );

                        $price = str_replace("₫", "", str_replace(".", "", $pageDetail->filter('p.box-price-present')->text()));

                        $request = [
                            "TenSanPham" => $name,
                            "ThuocTinhChung" => $thuocTinhChung,
                            "HangSanXuatId" => rand(1, 11),
                            "LoaiSanPhamId" => 3,
                            "TrangThai" => "1",
                            "ThuocTinh" => empty(!$thuocTinh->all()) ? $thuocTinh->all() : ["ThuocTinh"],
                            "ThuocTinhToHop" => empty(!$thuocTinhToHop->all()) ? $thuocTinhToHop->all() : ["ThuocTinhToHop"],
                            "MoTa" => "Mô tả ko crawl dc",
                            "Datatable" => "",
                            "HinhAnh" => $hinhAnh,
                            "GiaTien" => (int)$price,
                        ];

                        //--------
                        //--------
                        //--------
                        //--------
                        //--------
                        //----------------------------------copy past tu` crossjoin

                        //$data = [["128 GB", "256 GB", "512 GB", "1024 GB"], ["Vàng đồng", "Xám", "Bạc", "Xanh dương"]];
                        $data = $request["ThuocTinhToHop"];
                        //The kind of explodes all elements in the array and sets them as paramenters.(...$options)
                        $array = [];
                        if (count($data) > 1)
                            foreach (Arr::crossJoin(...$data) as $items) {
                                $thuocTinhValue = json_encode($items, JSON_UNESCAPED_UNICODE);

                                $array[] = ["BienThe" => $thuocTinhValue, "GiaBan" => $request['GiaTien'], "TrangThai" => 1];
                            }
                        else
                            foreach ($data as $items) {
                                $thuocTinhValue = json_encode([$items], JSON_UNESCAPED_UNICODE);

                                $array[] = ["BienThe" => $thuocTinhValue, "GiaBan" => $request['GiaTien'], "TrangThai" => 1];
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
                            'ThuocTinh' => $thuocTinhChung,
                            'HangSanXuatId' => $request['HangSanXuatId'],
                            'LoaiSanPhamId' => $request['LoaiSanPhamId'],
                            'ThuocTinhToHop' => $request['ThuocTinh'],
                        ]);


                        //lay het' bang? ra, so sanh' luu vai` DB
                        foreach (json_decode($request['Datatable'], true) as $item) {
                            //xài DB::insert mà ko xài CT_SanPham::create([])  tai vi no' loi~ chu~ khi them vao
                            DB::insert(
                                'insert into ct_san_phams(SanPhamId,SoLuongTon,GiaNhap,GiaBan,ThuocTinhValue,TrangThai) values (?, ?, ?, ?, ?, ?)',
                                [$sanPham->id, 0, 0, $item['GiaBan'], $item['BienThe'], $item['TrangThai']]
                            );
                        }

                        //Hình ảnh phải lưu trong public và phải có bước tạo link thì người dùng mới thấy dc
                        //store() tự đặt hình bằng chuỗi random, nên tạo thư mục theo mã/tên sp để dễ quản lý
                        if (!empty($request['HinhAnh'])) {

                            foreach ($request['HinhAnh'] as $hinhAnh) {
                                //download image from url
                                $url = $hinhAnh;
                                try {
                                    $contents = file_get_contents("https:" . $url);
                                    $name = substr($url, strrpos($url, '/') + 1);
                                    $path = 'assets/images/product-image/' . $sanPham->id . '/' . $name;
                                    Storage::disk('public')->put($path, $contents);
                                    //code...
                                } catch (\Throwable $th) {
                                    //throw $th;
                                }

                                HinhAnh::create([
                                    "SanPhamId" => $sanPham->id,
                                    "HinhAnh" => $name,
                                ]);
                            }
                        }

                        $sanPham->save(); //luu lại đường dẫn hình

                        //return Redirect::back()->with("SanPhamMoi", 'Thêm sản phẩm mới ' . $sanPham->TenSanPham . ' thành công');
                    }
                );

                dd("end list 1 tranh' bi trung`");
            }
        );
        dd("sucsses");
    }
}
