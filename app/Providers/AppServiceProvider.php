<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\Conversation;
use App\Models\KhachHang;
use App\Models\Message;
use App\Models\NhanVien;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //truyen du lieu sang layout
        view()->composer('layouts.Layout', function ($view) {
            $dsCacCuocTroChuyen = DB::select("select d.*
                            from messages d
                            inner join  (select max(b.id) as maxID,b.ConversationId
                                        from conversations a
                                        inner join messages b
                                        on a.id=b.ConversationId
                                        where a.NhanVienId=?
                                        group by b.ConversationId) c
                            on c.maxID=d.id
                            limit 5",[Auth::user()->id]);
            //chuyen no thanh array
            //$dsCacCuocTroChuyen=json_decode(json_encode($dsCacCuocTroChuyen),true);
            dd($dsCacCuocTroChuyen[0]);
            $view->with("conversation", $dsCacCuocTroChuyen);
        });
    }
}
