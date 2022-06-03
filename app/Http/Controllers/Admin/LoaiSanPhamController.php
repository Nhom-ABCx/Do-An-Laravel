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

        return view('Admin.LoaiSanPham.LoaiSanPham-index', ['loaiSp' => $data, 'request' => $request]);
    }
    /**
     * ham` nay` co tac dung filter theo request
     *  chu? yeu' xai` lai ho index va` daxoa
     */
    public static function filter(&$data, Request $request)
    {
        if (!empty($request['Ten']))
            $data = $data->where('TenLoaiSanPham', 'LIKE', '%' . $request['Ten'] . '%');

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
            'parent_id' => [],
        ]);
        //get the first character of the name
        //ex: if name is "Nguyen Van A" => get the first character of "NVA"
        $listName = explode(" ", $request->TenLoai);
        $code = "";
        foreach ($listName as $item) {
            $code .= substr($item, 0, 1);
        }

        $loaiSanPham = LoaiSanPham::create([
            "Code" => $code,
            'TenLoai' => $request['TenLoai'],
            'MoTa' => $request['MoTa'] ?? '',
        ]);

        if ($request['parent_id']) {
            $node = LoaiSanPham::find($request['parent_id']);
            $node->appendNode($loaiSanPham);
        }

        return Redirect::back()->with("themMoi", 'Thêm loại ' . $loaiSanPham->TenLoai . ' thành công');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function show(LoaiSanPham $loaiSanPham)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LoaiSanPham  $loaiSanPham
     * @return \Illuminate\Http\Response
     */
    public function edit(LoaiSanPham $loaiSanPham)
    {
        return view('Admin.LoaiSanPham.LoaiSanPham-edit', ['loaiSanPham' => $loaiSanPham]);
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
        // $request->validate(
        //     [
        //         "TenLoai" => $request["TenLoai"],
        //         "MoTa" => $request["MoTa"]
        //     ]
        // );
        $loaiSanPham->fill(
            [
                "TenLoai" => $request->input("TenLoai"),
                "MoTa" => $request->input("MoTa")
            ]
        );
        $loaiSanPham->save();
        return Redirect::route('LoaiSanPham.index');
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

        return view("Admin.LoaiSanPham.LoaiSanPham-index", ['loaiSp' => $data, 'request' => $request]);
    }
    public function KhoiPhucLoaiSanPham($id)
    {
        $data = LoaiSanPham::onlyTrashed()->find($id);
        $data->restore();
        return Redirect::route('LoaiSanPham.DaXoa');
    }
    public static function showSelectOption($categories, $parent_id = null, $char = '')
    {
        foreach ($categories as $key => $item) {
            // Nếu là chuyên mục con thì hiển thị
            if ($item['parent_id'] == $parent_id) {

                echo "<option value='" . $item['id'] . "'>";
                echo $char . $item['TenLoai'];
                echo '</option>';

                // Xóa chuyên mục đã lặp
                unset($categories[$key]);

                // Tiếp tục đệ quy để tìm chuyên mục con của chuyên mục đang lặp
                LoaiSanPhamController::showSelectOption($categories, $item['id'], $char . '--');
            }
        }
    }
}
