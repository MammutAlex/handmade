<?php

use SleepingOwl\Admin\Navigation\Page;

// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\App\User::class)->setTitle('test')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('Dashboard')
//		  ->setUrl(route('admin.dashboard'))
//		  ->setPriority(100);
//
//	  $page->addPage(\App\User::class);
// });
//
// // or
//
// AdminSection::addMenuPage(\App\User::class)

return [
    [
        'title' => 'Портфоліо',
        'icon' => 'fa fa-dashboard',
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
    [
        'title' => 'Information',
        'icon' => 'fa fa-exclamation-circle',
        'url' => route('admin.information'),
    ],
    [
        'title' => 'News',
        'priority' => 100,
        'icon' => 'fa fa-newspaper-o'
    ],
];