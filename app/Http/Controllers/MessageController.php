<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Http\Requests\StoreMessageRequest;
use App\Http\Requests\UpdateMessageRequest;
use App\Models\Conversation;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Validator;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Message.Message-index', []);
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
