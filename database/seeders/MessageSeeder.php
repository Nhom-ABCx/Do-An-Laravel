<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Message;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Message::create([
            'id' => 1,
            'Body' => 'Hello Admin',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 17,
            'created_at' => '2020-12-31 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 2,
            'Body' => 'Mon nay` ban nhu nao`?',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 17,
            'created_at' => '2021-01-02 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 3,
            'Body' => 'Gia bao nhieu',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 17,
            'created_at' => '2021-01-04 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 4,
            'Body' => '200k ban ko',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 17,
            'created_at' => '2021-01-07 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 5,
            'Body' => 'abcxyz thoi ko mua nua',
            'NhanVienId' => NULL,
            'KhachHangId' => 2,
            'ConversationId' => 17,
            'created_at' => '2021-01-08 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 6,
            'Body' => 'Hello khach',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 17,
            'created_at' => '2021-01-01 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 7,
            'Body' => 'Mon nay sieu re~',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 17,
            'created_at' => '2021-01-03 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 8,
            'Body' => 'mua di mua di',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 17,
            'created_at' => '2021-01-05 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 9,
            'Body' => 'ban voi gia sale mua di dung ngai',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 17,
            'created_at' => '2021-01-06 17:00:00',
            'updated_at' => NULL
        ]);



        Message::create([
            'id' => 10,
            'Body' => 'khong mua t chem',
            'NhanVienId' => 1,
            'KhachHangId' => NULL,
            'ConversationId' => 17,
            'created_at' => '2021-01-09 17:00:00',
            'updated_at' => NULL
        ]);
    }
}
