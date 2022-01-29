<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('Landingpage.home');
})->name('/');

Route::get('sejarah', function () {
    return view('Landingpage.sejarah');
})->name('sejarah');

Route::get('struktur-organisasi', function () {
    return view('Landingpage.struktur_organisasi');
})->name('struktur-organisasi');

Route::get('visi-misi', function () {
    return view('Landingpage.visi-misi');
})->name('visi-misi');

Route::get('beasiswa', function () {
    return view('Landingpage.beasiswa');
})->name('beasiswa');

Route::get('kurikulum', function () {
    return view('Landingpage.kurikulum');
})->name('kurikulum');

Route::get('kesiswaan', function () {
    return view('Landingpage.kesiswaan');
})->name('kesiswaan');

Route::get('foto', function () {
    return view('Landingpage.foto');
})->name('foto');

Route::get('video', function () {
    return view('Landingpage.video');
})->name('video');

Route::get('fasilitas', function () {
    return view('Landingpage.fasilitas');
})->name('fasilitas');

Route::get('berita', function () {
    return view('Landingpage.berita');
})->name('berita');

Route::get('contact', function () {
    return view('Landingpage.contact');
})->name('contact');

Route::get('unduh', function () {
    return view('Landingpage.unduh');
})->name('unduh');
