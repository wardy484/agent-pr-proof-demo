<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $releases = [
        [
            'title' => 'Customer export',
            'summary' => 'Download customer records as a CSV file.',
            'status' => 'Shipped',
        ],
        [
            'title' => 'Invoice reminders',
            'summary' => 'Send a reminder before an invoice becomes overdue.',
            'status' => 'In progress',
        ],
        [
            'title' => 'Team permissions',
            'summary' => 'Give account owners control over billing access.',
            'status' => 'Planned',
        ],
    ];

    return view('releases.index', compact('releases'));
});
