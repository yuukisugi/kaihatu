<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Arr;

class Reported extends Mailable
{
    use Queueable, SerializesModels;

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function build()
    {
        $target = $this->data['target'];
        $id = $this->data['id'];
        $comment = $this->data['comment'];
        $category_id = $this->data['report_category_id'];
        $category_name = \App\ReportCategory::where('id', $category_id)->value('name');
        $url_pattern = config('report.targets')[$target]['url'];
        $url = '';

        if(is_string($url_pattern)) { // 文字列の場合

            $url = str_replace('{id}', $id, $url_pattern);

        } else if(is_callable($url_pattern)) { // コールバック関数の場合

            $url = $url_pattern($id);

        }

        $emails = config('report.emails');
        $from = config('report.from');

        return $this->to($emails)
            ->from($from)
            ->subject('違反報告がありました')
            ->view('emails.reported')
            ->with([
                'category_name' => $category_name,
                'comment' => $comment,
                'url' => $url,
            ]);
    }
}