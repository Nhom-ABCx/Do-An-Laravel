<?php

namespace App\Http\Controllers;

use App\Models\DonViVanChuyen;
use App\Models\NguoiVanChuyen;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage; //thu vien luu tru~ de tao lien ket den public

class NguoiVanChuyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = NguoiVanChuyen::all();
        $donViVanChuyen = DonViVanChuyen::all();
        foreach ($data as $nvc)
            $this->fixImage($nvc);
        // dd($data);
        return view('NguoiVanChuyen.NguoiVanChuyen-index', ['nvc' => $data, 'dvvc' => $donViVanChuyen]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DonViVanChuyen::all();
        return view('NguoiVanChuyen.NguoiVanChuyen-create', ['dvvc' => $data]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request->validate(
        //     [
        //         'HoTen'=>['required','max:50'],
        //         'NgaySinh'=>['required'],
        //         'GioiTinh'=>['required'],
        //         'DiaChi'=>['required'],
        //         'HinhAnh'=>['required','mimes:jpg,png'],
        //         'Phone'=>['required'],
        //         'DonVivanChuyenId'=>['required']
        //     ]
        // );
        $nvc = new NguoiVanChuyen();
        $nvc->fill([
            //dd($request->input('HoTen')),
            'HoTen' => $request->input('HoTen'),
            'NgaySinh' => $request->input('NgaySinh'),
            'GioiTinh' => $request->input('GioiTinh'),
            'DiaChi' => $request->input('DiaChi'),
            'HinhAnh' => '',
            'Phone' => $request->input('Phone'),
            'DonViVanChuyenId' => $request->input('DonViVanChuyenId')
        ]);

        $nvc->save();
        if ($request->hasFile('HinhAnh')) {
            $nvc->HinhAnh = $request->file('HinhAnh')->store('assets/images/avatar/Shipper/' . $nvc->id, 'public');
            //cat chuoi ra, chi luu cai ten thoi
            $catChuoi = explode("/", $nvc->HinhAnh);
            $nvc->HinhAnh = $catChuoi[5];
        }
        $nvc->save();
        return Redirect::route('NguoiVanChuyen.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\NguoiVanChuyen  $nguoiVanChuyen
     * @return \Illuminate\Http\Response
     */
    public function show(NguoiVanChuyen $nguoiVanChuyen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\NguoiVanChuyen  $nguoiVanChuyen
     * @return \Illuminate\Http\Response
     */
    public function edit(NguoiVanChuyen $nguoiVanChuyen)
    {

        $dvvc = DonViVanChuyen::all();
        //dd($nguoiVanChuyen);
        return view('NguoiVanChuyen.NguoiVanChuyen-edit', ['dvvc' => $dvvc, 'nvc' => $nguoiVanChuyen]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\NguoiVanChuyen  $nguoiVanChuyen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, NguoiVanChuyen $nguoiVanChuyen)
    {

        //Hình ảnh phải lưu trong public và phải có bước tạo link thì người dùng mới thấy dc
        //store() tự đặt hình bằng chuỗi random, nên tạo thư mục theo mã/tên sp để dễ quản lý
        if ($request->hasFile('HinhAnh')) {
            $nguoiVanChuyen->HinhAnh = $request->file('HinhAnh')->store('assets/images/avatar/Shipper/' . $nguoiVanChuyen->id, 'public');
            //cat chuoi ra, chi luu cai ten thoi
            $catChuoi = explode("/", $nguoiVanChuyen->HinhAnh);
            $nguoiVanChuyen->HinhAnh = $catChuoi[5];
        }

        // $input['password'] = bcrypt($input['password']);
        // Student::create($input);
        $request->validate([
            'HoTen' => 'required',
            'NgaySinh' => 'required|date',
            'GioiTinh' => 'required',
            'DiaChi' => 'required|max:255',
            'HinhAnh' => 'required',
            'Phone' => 'required|min:10',
            'DonViVanChuyenId' => 'required'
        ]);
        $nguoiVanChuyen->fill([
            'HoTen' => $request->input('HoTen'),
            'NgaySinh' => $request->input('NgaySinh'),
            'GioiTinh' => $request->input('GioiTinh'),
            'DiaChi' => $request->input('DiaChi'),
            'Phone' => $request->input('Phone'),
            'DonViVanChuyenId' => $request->input('DonViVanChuyenId')
        ]);
        $nguoiVanChuyen->save();
        return Redirect::route('NguoiVanChuyen.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\NguoiVanChuyen  $nguoiVanChuyen
     * @return \Illuminate\Http\Response
     */
    public function destroy(NguoiVanChuyen $nguoiVanChuyen)
    {
        $nguoiVanChuyen->delete();
        return Redirect::route('NguoiVanChuyen.index');
    }
    //phương thức hỗ trợ load hình ảnh và thay thế bằng hình mạc định nếu ko tìm thấy file
    public function fixImage(NguoiVanChuyen $NguoiVanChuyen)
    {
        //chạy lệnh sau: php artisan storage:link     de tu tao 1 lien ket den' folder public
        // nếu trong đường dẫn "storage/app/public" + "assets/images/product-image/..." tồn tại hình ảnh

        if (Storage::disk('public')->exists("assets/images/avatar/Shipper/" . $NguoiVanChuyen->id . "/" . $NguoiVanChuyen->HinhAnh)) {
            $NguoiVanChuyen->HinhAnh = Storage::url("assets/images/avatar/Shipper/" . $NguoiVanChuyen->id . "/" . $NguoiVanChuyen->HinhAnh);
        } elseif (Storage::disk('public')->exists("assets/images/avatar/Shipper/" . $NguoiVanChuyen->HinhAnh))
            $NguoiVanChuyen->HinhAnh = Storage::url("assets/images/avatar/Shipper/" . $NguoiVanChuyen->HinhAnh);
        else
            $NguoiVanChuyen->HinhAnh = Storage::url("assets/images/avatar/empty.png");
    }

    //API
    public function API_NguoiVanChuyen()
    {
        $data = NguoiVanChuyen::all();
        //return json_encode($data);
        return response()->json($data, 200);
    }
}