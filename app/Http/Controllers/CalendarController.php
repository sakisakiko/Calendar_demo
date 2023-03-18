<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalendarController extends Controller
{
    public function getEvents()
    {
        return [
            [
                'title' => '美容院',
                'description' => '人気の美容室予約取れた',
                'start' => '2023-04-10',
                'end'   => '2023-04-10',
            ],
            [
                'title' => '旅行',
                'description' => '人気の旅館の予約が取れた',
                'start' => '2023-03-20 10:00:00',
                'end'   => '2021-03-22 18:00:00',
                'url'   => 'https://admin.juno-blog.site',
            ],
            [
                'title' => '給料日',
                'start' => '2023-04-30',
                'color' => '#ff44cc',
            ],
        ];
    }
}