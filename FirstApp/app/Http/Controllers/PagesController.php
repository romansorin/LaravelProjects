<?php

namespace App\Http\Controllers;

class PagesController extends Controller {
    public function home() {

        /*return view('welcome', [
        'tasks' => $tasks,
        'foo'   => 'foobar',
        ]);*/
        //return view('welcome')->withTasks($tasks)->withFoo('foo');

        return view('welcome', [
            'foo'   => 'bar',
            'tasks' => [
                'Go to the store',
                'Go to the market',
                'Go to work',
                'Go to the concert',
            ],
        ]);

        /* This is insane. */
    }
    public function about() {
        return view('/about');
    }

    public function contact() {
        return view('/contact');
    }
}