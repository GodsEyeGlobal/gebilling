<?php
// extensions/Others/Godsv1AboutPage/routes/web.php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/about', function () {
    $raw = DB::table('settings')->where('key', 'godsv1.about')->value('value');

    $about = null;
    if (is_string($raw) && $raw !== '') {
        $decoded = json_decode($raw, true);
        if (is_array($decoded)) {
            $about = $decoded;
        }
    }

    return view('godsv1-about-page::front.about', [
        'about' => $about,
    ]);
})->middleware('web')->name('godsv1.about.show');
