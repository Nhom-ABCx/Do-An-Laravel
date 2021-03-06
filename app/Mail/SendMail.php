<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class SendMail extends Mailable
{
    use Queueable, SerializesModels;
    public $data;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        //trả về 1 email với cái
        //subject('Tiêu đề)
        //view('')  //có thể gửi web view đến cho ngta

        return $this->subject($this->data['TieuDe'])->from('noreply@domain.com', $this->data["NguoiGui"])
        ->view($this->data['View'],["Data"=>$this->data['Data']]);
    }
}
