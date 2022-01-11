<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Auth;
use App\Models\Conversation;
use App\Models\Message;
use Illuminate\Support\Arr;

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
            $dsCacCuocTroChuyen = Conversation::where("conversations.NhanVienId", Auth::user()->id)->limit(5)->get();

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
