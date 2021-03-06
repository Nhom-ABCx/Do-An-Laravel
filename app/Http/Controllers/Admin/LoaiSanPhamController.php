<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use App\Models\LoaiSanPham;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use PDO;

class LoaiSanPhamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = LoaiSanPham::from(app(LoaiSanPham::class)->getTable());

        $this->filter($data, $request);




        return view('Admin.LoaiSanPham.LoaiSanPham-index', [
            'loaiSp' => $data,
            'request' => $request,
            'icons' => $this->listIcons(),
        ]);
    }
    /**
     * ham` nay` co tac dung filter theo request
     *  chu? yeu' xai` lai ho index va` daxoa
     */
    public static function filter(&$data, Request $request)
    {
        if (!empty($request['Ten']))
            $data = $data->where('TenLoai', 'LIKE', '%' . $request['Ten'] . '%');

        //$data = $data->get()->toTree();
        $data = $data->get();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view("Admin.LoaiSanPham.LoaiSanPham-create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //https://github.com/lazychaser/laravel-nestedset
        $request->validate([
            'TenLoai' => ['required', 'unique:loai_san_phams,TenLoai', 'max:255'],
            'MoTa' => ['max:255'],
            'Icon' => ['nullable', 'json'],
            'parent_id' => [],
        ]);



        $loaiSanPham = LoaiSanPham::create([
            "Code" => $this->getCodeLoaiSanPham($request),   //viet thanh chu~ INH HOA
            'TenLoai' => $request['TenLoai'],
            'MoTa' => $request['MoTa'] ?? '',
            'Icon' => json_decode($request['Icon'], true) ?? null,
        ]);

        if ($request['parent_id']) {
            $node = LoaiSanPham::find($request['parent_id']);
            $node->appendNode($loaiSanPham);
        }

        return Redirect::back()->with("themMoi", 'Th??m lo???i ' . $loaiSanPham->TenLoai . ' th??nh c??ng');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function show($loaiSanPham, Request $request)
    {
        if ($loaiSanPham == "Store")
            return view("Admin.LoaiSanPham.LoaiSanPham-show-model", [
                "titleModel" => "Th??m lo???i s???n ph???m",
                "lstLoaiSanPham" => LoaiSanPham::all(),
                "icons" => $this->listIcons(),
                "routeUrl" => route('LoaiSanPham.store'),
                "method" => "POST", //PATCH
                "loaiSanPham" => null,
            ]);
        if ($loaiSanPham == "Edit")
            return view("Admin.LoaiSanPham.LoaiSanPham-show-model", [
                "titleModel" => "S???a lo???i s???n ph???m",
                "lstLoaiSanPham" => LoaiSanPham::all(),
                "icons" => $this->listIcons(),
                "routeUrl" => route('LoaiSanPham.update', $request['LoaiSanPhamId']),
                "method" => "PUT", //PATCH
                "loaiSanPham" => LoaiSanPham::find($request['LoaiSanPhamId']),
            ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiSanPham $loaiSanPham)
    {
        // return view('Admin.LoaiSanPham.LoaiSanPham-edit', [ 'loaiSanPham' => $loaiSanPham]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LoaiSanPham $loaiSanPham)
    {
        //https://github.com/lazychaser/laravel-nestedset
        $request->validate([
            // 'TenLoai' => ['required', 'unique:loai_san_phams,TenLoai', 'max:255'],
            'TenLoai' => ['required', 'max:255'],
            'MoTa' => ['max:255'],
            'Icon' => ['nullable', 'json'],
            'parent_id' => [],
        ]);

        $loaiSanPham->fill([
            // "Code" => $this->getCodeLoaiSanPham($request),   //viet thanh chu~ INH HOA
            'TenLoai' => $request['TenLoai'],
            'MoTa' => $request['MoTa'] ?? '',
            'Icon' => json_decode($request['Icon'], true) ?? null,
        ]);
        $loaiSanPham->save();

        if ($request['parent_id']) {
            $node = LoaiSanPham::find($request['parent_id']);
            $node->appendNode($loaiSanPham);
        }

        return Redirect::back()->with("themMoi", 'Update lo???i ' . $loaiSanPham->TenLoai . ' th??nh c??ng');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function destroy(LoaiSanPham $loaiSanPham)
    {
        if (count($loaiSanPham->SanPham)) {
            $loaiSanPham->delete();
            $loaiSanPham->save();
            return Redirect::route("LoaiSanPham.index");
        }
        //xoa vinh~ vien~ khi loa san pham ko co san pham
        $loaiSanPham->forceDelete();
        return Redirect::route("LoaiSanPham.index");
    }
    public function DaXoa(Request $request)
    {
        $data = LoaiSanPham::onlyTrashed();

        $this->filter($data, $request);

        $string = file_get_contents(storage_path() . "/app/public/assets/google-icon-data.json");
        $arrayJsonIcon = json_decode($string, true);

        return view("Admin.LoaiSanPham.LoaiSanPham-index", ['loaiSp' => $data, 'request' => $request, 'icons' => $arrayJsonIcon]);
    }
    public function KhoiPhucLoaiSanPham($id)
    {
        $data = LoaiSanPham::onlyTrashed()->find($id);
        $data->restore();
        return Redirect::route('LoaiSanPham.DaXoa');
    }
    public static function showSelectOption($categories, $selectedParentId, $parent_id = null, $char = '')
    {
        foreach ($categories as $key => $item) {
            // N???u l?? chuy??n m???c con th?? hi???n th???
            if ($item['parent_id'] == $parent_id) {

                if ($item['id'] == $selectedParentId)
                    echo "<option value='" . $item['id'] . "' selected >";
                else
                    echo "<option value='" . $item['id'] . "'>";
                echo $char . $item['TenLoai'];
                echo '</option>';

                // X??a chuy??n m???c ???? l???p
                unset($categories[$key]);

                // Ti???p t???c ????? quy ????? t??m chuy??n m???c con c???a chuy??n m???c ??ang l???p
                LoaiSanPhamController::showSelectOption($categories, $selectedParentId, $item['id'], $char . '--');
            }
        }
    }

    /**
     * T??nh to??n t??n lo???i s???n ph???m v?? l???y v??? Code c???a n??
     * get the first character of the name
     * ex: if name is "Nguyen Van A" => get the first character of "NVA"
     */
    private function getCodeLoaiSanPham(Request $request): string
    {
        $code = "";
        $listName = explode(" ", trim($request->TenLoai));
        foreach ($listName as $item) {
            $code .= substr($item, 0, 1);
        }
        //neu' no' chi? co' 1 chu~ "Nguyen" =>NYN
        if (strlen($code) == 1) {
            $tenLoai = str_replace(" ", "", trim($request->TenLoai));
            $left = substr($tenLoai, 0, 1);
            $mid = substr($tenLoai, strlen($tenLoai) / 2, 1);
            $right = substr($tenLoai, -1, 1);
            $code = $left . $mid . $right;
        }
        //neu' co' parent_id  thi` se~ thanh`  CHA-CON
        if (!empty($request['parent_id'])) {
            $loaiCode = LoaiSanPham::find($request['parent_id'])->Code;
            if (!empty($loaiCode)) {
                $code = $loaiCode . "-" . $code;
            }
        }
        return strtoupper($code);
    }
    private function listIcons()
    {
        $string = file_get_contents(storage_path() . "/app/public/assets/google-icon-data.json");
        return json_decode($string, true);
    }
}
