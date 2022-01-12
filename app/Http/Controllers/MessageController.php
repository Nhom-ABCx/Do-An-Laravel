<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\Conversation;
use App\Models\KhachHang;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //lay ra danh sach cac cuoc tro chuyen
        $dsCacCuocTroChuyen = Conversation::where("conversations.NhanVienId", Auth::user()->id)->get();

            foreach ($dsCacCuocTroChuyen as $item) {
                //lay' ra cai' tin nhan cuoi' cung` luu kem` vao`
                $mess = Message::where("ConversationId", $item->id)->orderByDesc('created_at')->first();
                if (!empty($mess))
                    Arr::add($item, "mess", $mess);
                else
                    Arr::add($item, 'mess', null);
            }
        $conv=Conversation::where("KhachHangId",$request["KhachHangId"])->where("NhanVienId",Auth::user()->id)->first();
        $tinNhan=Message::where("ConversationId",$conv->id)->orderBy('created_at')->get();

        $khachHang=KhachHang::find($request["KhachHangId"]);

        return view('Message.Message-index', ["dsCacCuocTroChuyen"=>$dsCacCuocTroChuyen,'request' => $request,"tinNhan"=>$tinNhan,"khachHang"=>$khachHang]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreMessageRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMessageRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function show(Message $message)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function edit(Message $message)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMessageRequest  $request
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMessageRequest $request, Message $message)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(Message $message)
    {
        //
    }
    public function API_GetAll_Message_Admin(Request $request)
    {
        //gia lap cuoc tro` chuyen giua khach hang va admin 1
        $conv = Conversation::where("KhachHangId", $request['KhachHangId'])
            ->where("NhanVienId", 1)->first();
        //dang mo phong? la chat voi Admin nen bang? dConersation.NhanvienId la 1
        $data = Message::where("ConversationId", $conv->id)
            ->orderByDesc('created_at')->get(); //sap xep theo luot mua giam dan`

        if (!empty($data))
            return response()->json($data, 200);
    }
    public function API_Them_Message_Admin(Request $request)
    {
        //gia lap cuoc tro` chuyen giua khach hang va admin 1
        $conv = Conversation::where("KhachHangId", $request['KhachHangId'])
            ->where("NhanVienId", 1)->first();
        //gui tin nhan khach hang` len Admin
        //kiem tra du lieu
        $validate = Validator::make($request->all(), [
            'Body' => ['required'],
            'KhachHangId' => ['required', 'exists:khach_hangs,id'],
            //'ConversationId' => ['required', 'exists:conversations,id'], //chua can` den'
        ]);
        //neu du lieu no' sai thi`tra? ve` loi~
        if ($validate->fails())
            return response()->json($validate->errors(), 400);

        $mess = Message::create([
            'Body'       => $request['Body'],
            'KhachHangId' => $request['KhachHangId'],
            'ConversationId' => $conv->id,
            //'ConversationId' => $request['ConversationId'],
        ]);
        //neu du lieu ko co rong~ thi tra ve voi status la 200
        if (!empty($mess))
            return response()->json(["Sucssess" => True], 200);
    }
}
