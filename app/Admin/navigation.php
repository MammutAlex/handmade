<?php

    use SleepingOwl\Admin\Navigation\Page;

    return [
        [
            'title' => 'Портфоліо',
            'icon'  => 'fa fa-dashboard',
            'pages' => [
                (new Page(\App\Tags::class))
                    ->setIcon('fa fa-users')
                    ->setPriority(0),
                (new Page(\App\Portfolio::class))
                    ->setIcon('fa fa-users')
                    ->setPriority(0),
            ]
        ],
        (new Page(\App\Blog::class))
            ->setIcon('fa fa-users')
            ->setPriority(0),
    ];