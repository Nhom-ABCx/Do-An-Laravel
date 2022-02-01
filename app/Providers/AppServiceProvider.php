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
            $dsCacCuocTroChuyen = Conversation::where("NhanVienId", Auth::user()->id)
            ->orderBy("KhachHangId")->limit(5)->get();

            foreach ($dsCacCuocTroChuyen as $item) {
                $mess = Message::where("ConversationId", $item->id)->orderByDesc('created_at')->first();

                if (!empty($mess))
                    Arr::add($item, "mess", $mess);
                else
                    Arr::add($item, 'mess', null);
            }

            $view->with("conversation", $dsCacCuocTroChuyen);
        });
    }
}
