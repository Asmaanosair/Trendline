<?php

namespace App\Mail;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\HTTP\Request;

class order_mail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(Request $request)
    {
               return $this->view('mail2',['msg'=>$request->msg,'name'=>$request->name,'phone'=>$request->phone,'product'=>$request->product,
            'mail'=>$request->mail])->to('info@trendline-group.com')->from($request->mail)->subject(' Order Mail Trendline Group');
    }
}
