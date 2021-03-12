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

Route::livewire('/login', 'auth.login')
    ->layout('layouts.auth')->name('auth.login');

Route::livewire('/', 'frontend.home')->layout('layouts.master')->name('frontend.home');

Route::livewire('/campus/berita', 'frontend.campus.berita')->layout('layouts.master')->name('campus.berita');
Route::livewire('/fasilitas', 'frontend.campus.fasilitas')->layout('layouts.master')->name('campus.fasilitas');
Route::livewire('/karya-guru', 'frontend.campus.karya-guru')->layout('layouts.master')->name('campus.karya-guru');
Route::livewire('/library', 'frontend.campus.library')->layout('layouts.master')->name('campus.library');
Route::livewire('/scholarship', 'frontend.campus.scholarship')->layout('layouts.master')->name('campus.scholarship');
Route::livewire('/supporting', 'frontend.campus.supporting')->layout('layouts.master')->name('campus.supporting');

Route::livewire('/beasiswa', 'frontend.cultures.beasiswa')->layout('layouts.master')->name('cultures.beasiswa');
Route::livewire('/highlight', 'frontend.cultures.highlight')->layout('layouts.master')->name('cultures.highlight');
Route::livewire('/service', 'frontend.cultures.service')->layout('layouts.master')->name('cultures.service');
Route::livewire('/learning-management', 'frontend.cultures.learning-management')->layout('layouts.master')->name('cultures.learning-management');
Route::livewire('/student-leadership', 'frontend.cultures.student-leadership')->layout('layouts.master')->name('cultures.student-leadership');
Route::livewire('/teacher-leadership', 'frontend.cultures.teacher-leadership')->layout('layouts.master')->name('cultures.teacher-leadership');
Route::livewire('/wikrama-life', 'frontend.cultures.wikrama-life')->layout('layouts.master')->name('cultures.wikrama-life');
Route::livewire('/wikrama-values', 'frontend.cultures.wikrama-values')->layout('layouts.master')->name('cultures.wikrama-values');

Route::livewire('/kerjasama', 'frontend.discover-wikrama.kerjasama')->layout('layouts.master')->name('discover-wikrama.kerjasama');
Route::livewire('/discover/penghargaan', 'frontend.discover-wikrama.penghargaan')->layout('layouts.master')->name('discover-wikrama.penghargaan');
Route::livewire('/peraturan-sekolah', 'frontend.discover-wikrama.peraturan-sekolah')->layout('layouts.master')->name('discover-wikrama.peraturan-sekolah');
Route::livewire('/rencana-strategi', 'frontend.discover-wikrama.rencana-strategi')->layout('layouts.master')->name('discover-wikrama.rencana-strategi');
Route::livewire('/school-alliance', 'frontend.discover-wikrama.school-alliance')->layout('layouts.master')->name('discover-wikrama.school-alliance');
Route::livewire('/testimoni-alumni', 'frontend.discover-wikrama.testimoni-alumni')->layout('layouts.master')->name('discover-wikrama.testimoni-alumni');
Route::livewire('/testimoni-perusahaan', 'frontend.discover-wikrama.testimoni-perusahaan')->layout('layouts.master')->name('discover-wikrama.testimoni-perusahaan');
Route::livewire('/yayasan', 'frontend.discover-wikrama.yayasan')->layout('layouts.master')->name('discover-wikrama.yayasan');

Route::livewire('/education-proses', 'frontend.education.education-proses')->layout('layouts.master')->name('education.education-proses');
Route::livewire('/first-year', 'frontend.education.first-year')->layout('layouts.master')->name('education.first-year');
Route::livewire('/graduation', 'frontend.education.graduation')->layout('layouts.master')->name('education.graduation');
Route::livewire('/parentship', 'frontend.education.parentship')->layout('layouts.master')->name('education.parentship');
Route::livewire('/school-calendar', 'frontend.education.school-calendar')->layout('layouts.master')->name('education.school-calendar');
Route::livewire('/school-intro', 'frontend.education.school-intro')->layout('layouts.master')->name('education.school-intro');
Route::livewire('/second-year', 'frontend.education.second-year')->layout('layouts.master')->name('education.second-year');
Route::livewire('/third-year', 'frontend.education.third-year')->layout('layouts.master')->name('education.third-year');

Route::livewire('/bdp', 'frontend.program-keahlian.bdp')->layout('layouts.master')->name('program-keahlian.bdp');
Route::livewire('/general', 'frontend.program-keahlian.general')->layout('layouts.master')->name('program-keahlian.general');
Route::livewire('/mmd', 'frontend.program-keahlian.mmd')->layout('layouts.master')->name('program-keahlian.mmd');
Route::livewire('/otkp', 'frontend.program-keahlian.otkp')->layout('layouts.master')->name('program-keahlian.otkp');
Route::livewire('/perhotelan', 'frontend.program-keahlian.perhotelan')->layout('layouts.master')->name('program-keahlian.perhotelan');
Route::livewire('/rpl', 'frontend.program-keahlian.rpl')->layout('layouts.master')->name('program-keahlian.rpl');
Route::livewire('/tbg', 'frontend.program-keahlian.tbg')->layout('layouts.master')->name('program-keahlian.tbg');
Route::livewire('/tkj', 'frontend.program-keahlian.tkj')->layout('layouts.master')->name('program-keahlian.tkj');
Route::livewire('/register', 'auth.register')
    ->layout('layouts.auth')->name('auth.register');


Route::group(['middleware' => 'auth'], function () {
    Route::livewire('/dashboard', 'backend.dashboard.index')
        ->layout('layouts.app')->name('backend.dashboard.index');

    Route::livewire('/berita', 'backend.berita.index')->layout('layouts.app')->name('berita.index');
    Route::livewire('/berita/create', 'backend.berita.create')->layout('layouts.app')->name('berita.create');
    Route::livewire('/berita/edit/{id}', 'backend.berita.edit')->layout('layouts.app')->name('berita.edit');

    Route::livewire('/galery', 'backend.galery.index')->layout('layouts.app')->name('galery.index');
    Route::livewire('/galery/create', 'backend.galery.create')->layout('layouts.app')->name('galery.create');
    Route::livewire('/galery/edit/{id}', 'backend.galery.edit')->layout('layouts.app')->name('galery.edit');

    Route::livewire('/prestasi', 'backend.prestasi.prestasi.index')->layout('layouts.app')->name('prestasi.index');
    Route::livewire('/prestasi/create', 'backend.prestasi.prestasi.create')->layout('layouts.app')->name('prestasi.create');
    Route::livewire('/prestasi/edit/{id}', 'backend.prestasi.prestasi.edit')->layout('layouts.app')->name('prestasi.edit');

    Route::livewire('/penghargaan', 'backend.prestasi.penghargaan.index')->layout('layouts.app')->name('penghargaan.index');
    Route::livewire('/penghargaan/create', 'backend.prestasi.penghargaan.create')->layout('layouts.app')->name('penghargaan.create');
    Route::livewire('/penghargaan/edit/{id}', 'backend.prestasi.penghargaan.edit')->layout('layouts.app')->name('penghargaan.edit');

    Route::livewire('/prestasi-tahunan', 'backend.prestasi.prestasi-tahunan.index')->layout('layouts.app')->name('prestasi-tahunan.index');
    Route::livewire('/prestasi-tahunan/create', 'backend.prestasi.prestasi-tahunan.create')->layout('layouts.app')->name('prestasi-tahunan.create');
    Route::livewire('/prestasi-tahunan/edit/{id}', 'backend.prestasi.prestasi-tahunan.edit')->layout('layouts.app')->name('prestasi-tahunan.edit');

    Route::livewire('/lembagakerjasama', 'backend.discover.lembagakerjasama.index')->layout('layouts.app')->name('lembagakerjasama.index');
    Route::livewire('/lembagakerjasama/create', 'backend.discover.lembagakerjasama.create')->layout('layouts.app')->name('lembagakerjasama.create');
    Route::livewire('/lembagakerjasama/edit/{id}', 'backend.discover.lembagakerjasama.edit')->layout('layouts.app')->name('lembagakerjasama.edit');

    Route::livewire('/ptkerjasama', 'backend.discover.ptkerjasama.index')->layout('layouts.app')->name('ptkerjasama.index');
    Route::livewire('/ptkerjasama/create', 'backend.discover.ptkerjasama.create')->layout('layouts.app')->name('ptkerjasama.create');
    Route::livewire('/ptkerjasama/edit/{id}', 'backend.discover.ptkerjasama.edit')->layout('layouts.app')->name('ptkerjasama.edit');

    Route::livewire('/schoolalliance', 'backend.discover.schoolalliance.index')->layout('layouts.app')->name('schoolalliance.index');
    Route::livewire('/schoolalliance/create', 'backend.discover.schoolalliance.create')->layout('layouts.app')->name('schoolalliance.create');
    Route::livewire('/schoolalliance/edit/{id}', 'backend.discover.schoolalliance.edit')->layout('layouts.app')->name('schoolalliance.edit');

    Route::livewire('/testimonialumni', 'backend.testimoni.testimonialumni.index')->layout('layouts.app')->name('testimonialumni.index');
    Route::livewire('/testimonialumni/create', 'backend.testimoni.testimonialumni.create')->layout('layouts.app')->name('testimonialumni.create');
    Route::livewire('/testimonialumni/edit/{id}', 'backend.testimoni.testimonialumni.edit')->layout('layouts.app')->name('testimonialumni.edit');

    Route::livewire('/testimoniperusahaan', 'backend.testimoni.testimoniperusahaan.index')->layout('layouts.app')->name('testimoniperusahaan.index');
    Route::livewire('/testimoniperusahaan/create', 'backend.testimoni.testimoniperusahaan.create')->layout('layouts.app')->name('testimoniperusahaan.create');
    Route::livewire('/testimoniperusahaan/edit/{id}', 'backend.testimoni.testimoniperusahaan.edit')->layout('layouts.app')->name('testimoniperusahaan.edit');

    Route::livewire('/jurusan/bdp', 'backend.jurusan.bdp.index')->layout('layouts.app')->name('bdp.index');
    Route::livewire('/jurusan/bdp/create', 'backend.jurusan.bdp.create')->layout('layouts.app')->name('bdp.create');
    Route::livewire('/jurusan/bdp/edit/{id}', 'backend.jurusan.bdp.edit')->layout('layouts.app')->name('bdp.edit');

    Route::livewire('/jurusan/general', 'backend.jurusan.general.index')->layout('layouts.app')->name('general.index');
    Route::livewire('/jurusan/general/create', 'backend.jurusan.general.create')->layout('layouts.app')->name('general.create');
    Route::livewire('/jurusan/general/edit/{id}', 'backend.jurusan.general.edit')->layout('layouts.app')->name('general.edit');
    
    Route::livewire('/jurusan/mmd', 'backend.jurusan.mmd.index')->layout('layouts.app')->name('mmd.index');
    Route::livewire('/jurusan/mmd/create', 'backend.jurusan.mmd.create')->layout('layouts.app')->name('mmd.create');
    Route::livewire('/jurusan/mmd/edit/{id}', 'backend.jurusan.mmd.edit')->layout('layouts.app')->name('mmd.edit');

    Route::livewire('/jurusan/otkp', 'backend.jurusan.otkp.index')->layout('layouts.app')->name('otkp.index');
    Route::livewire('/jurusan/otkp/create', 'backend.jurusan.otkp.create')->layout('layouts.app')->name('otkp.create');
    Route::livewire('/jurusan/otkp/edit/{id}', 'backend.jurusan.otkp.edit')->layout('layouts.app')->name('otkp.edit');
    
    Route::livewire('/jurusan/hotel', 'backend.jurusan.hotel.index')->layout('layouts.app')->name('hotel.index');
    Route::livewire('/jurusan/hotel/create', 'backend.jurusan.hotel.create')->layout('layouts.app')->name('hotel.create');
    Route::livewire('/jurusan/hotel/edit/{id}', 'backend.jurusan.hotel.edit')->layout('layouts.app')->name('hotel.edit');

    Route::livewire('/jurusan/rpl', 'backend.jurusan.rpl.index')->layout('layouts.app')->name('rpl.index');
    Route::livewire('/jurusan/rpl/create', 'backend.jurusan.rpl.create')->layout('layouts.app')->name('rpl.create');
    Route::livewire('/jurusan/rpl/edit/{id}', 'backend.jurusan.rpl.edit')->layout('layouts.app')->name('rpl.edit');

    Route::livewire('/jurusan/tbg', 'backend.jurusan.tbg.index')->layout('layouts.app')->name('tbg.index');
    Route::livewire('/jurusan/tbg/create', 'backend.jurusan.tbg.create')->layout('layouts.app')->name('tbg.create');
    Route::livewire('/jurusan/tbg/edit/{id}', 'backend.jurusan.tbg.edit')->layout('layouts.app')->name('tbg.edit');

    Route::livewire('/jurusan/tkj', 'backend.jurusan.tkj.index')->layout('layouts.app')->name('tkj.index');
    Route::livewire('/jurusan/tkj/create', 'backend.jurusan.tkj.create')->layout('layouts.app')->name('tkj.create');
    Route::livewire('/jurusan/tkj/edit/{id}', 'backend.jurusan.tkj.edit')->layout('layouts.app')->name('tkj.edit');
});
