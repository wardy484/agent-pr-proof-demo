<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

Route::get('/', function () {
    $filters = [
        'all' => 'All',
        'planned' => 'Planned',
        'in-progress' => 'In progress',
        'shipped' => 'Shipped',
    ];

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

    $selectedStatus = (string) request()->query('status', 'all');

    if (! array_key_exists($selectedStatus, $filters)) {
        $selectedStatus = 'all';
    }

    if ($selectedStatus !== 'all') {
        $releases = array_values(array_filter(
            $releases,
            fn (array $release): bool => Str::slug($release['status']) === $selectedStatus,
        ));
    }

    return view('releases.index', compact('filters', 'releases', 'selectedStatus'));
});
