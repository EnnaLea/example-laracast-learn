<?php

use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/jobs', function () {
    return view('jobs', [
        'jobs' => [
            [
                'id' => '1',
                'title' => 'Director',
                'salary' => '$590000,'
            ],
            [ 
                'id' => '2',
                'title'=> 'Programmer',
                'salary' => '$190000',
            ],
            [
                'id' => '3',
                'title'=> 'Teacher',
                'salary' => '$49000'
            ]
        ],
    ]);
});

Route::get('/jobs/{id}', function ($id) {
    $jobs = [
        [
            'id' => 1,
            'title' => 'Director',
            'salary' => '$590000,'
        ],
        [ 
            'id' => 2,
            'title'=> 'Programmer',
            'salary' => '$190000',
        ],
        [
            'id' => 3,
            'title'=> 'Teacher',
            'salary' => '$49000'
        ]
    ];

       $job =  Arr::first($jobs , fn($job) => $job['id'] == $id );


    return view('job', ['job' => $job ]);
});