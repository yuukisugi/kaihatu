<?php

return [

    // 違反報告を受信する管理者メールアドレス
    'emails' => [
        'admin@example.com',
    ],

    // 報告メールの送信者
    'from' => 'from@example.com',

    // 対象モデル（キーはテーブル名）
    'targets' => [
        'posts' => [
            'model' => \App\Post::class,
            'url' => 'post/{id}'
        ],
        'books' => [
            'model' => \App\Book::class,
            'url' => function($id) { // コールバック関数でもOK

                return url('/book/'. $id);

            }
        ],
    ],

];