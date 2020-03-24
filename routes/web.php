<?php

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
// admin


Route::resource('buku', 'BukuController');
Route::get('buku/delete/{id}', 'BukuController@destroy');
Route::get('/buku/{buku_id}/editPhoto', 'BukuController@editPhoto')->name('buku.editPhoto');
Route::put('/buku/{buku_id}/edit', 'BukuController@updatePhoto')->name('buku.updatePhoto');
Route::get('/format_buku', 'BukuController@format');
Route::post('/import_buku', 'BukuController@import');

Route::get('/kategori', 'KategoriController@index')->name('kategori.index');
Route::get('/tambah_kategori', 'KategoriController@create')->name('kategori.create');
Route::post('/kategori', 'KategoriController@store')->name('kategori.store');
Route::get('/kategori/{kategori_id}/edit', 'KategoriController@edit')->name('kategori.edit');
Route::put('/kategori/{kategori_id}', 'KategoriController@update')->name('kategori.update');
Route::get('kategori/delete/{kategori_id}', 'KategoriController@destroy')->name('kategori.destroy');

Route::get('/peminjaman', 'PeminjamanController@index')->name('peminjaman.index');
Route::get('/tambah_peminjaman', 'PeminjamanController@create')->name('peminjaman.create');
Route::post('/peminjaman', 'PeminjamanController@store')->name('peminjaman.store');
Route::get('/peminjaman/{peminjaman_id}/show', 'PeminjamanController@show')->name('peminjaman.show');
Route::put('/peminjaman/{peminjaman_id}', 'PeminjamanController@update')->name('peminjaman.update');
Route::get('/perpanjangan/{perpanjangan_id}/edit', 'PeminjamanController@perpanjangan')->name('perpanjangan.edit');
Route::put('/perpanjangan/{perpanjangan_id}', 'PeminjamanController@updatePerpanjangan')->name('perpanjangan.update');
Route::get('/tambah_pengembalian{pengembalian_id}/edit', 'PeminjamanController@tambah_Pengembalian')->name('tambah.pengembalian.edit');
Route::get('peminjaman/delete/{peminjaman_id}', 'PeminjamanController@destroy')->name('peminjaman.destroy');

Route::get('/pengembalian', 'PengembalianController@index')->name('pengembalian.index');
Route::put('/pengembalian/{pengembalian_id}', 'PeminjamanController@updatePengembalian')->name('pengembalian.update');
Route::get('/pengembalian/{pengembalian_id}/edit', 'PeminjamanController@tambahPengembalian')->name('pengembalian.edit');

Route::get('/', 'HomeController@index')->name('home.index');

Route::get('/laporan/buku', 'LaporanController@buku');
Route::get('/laporan/buku/pdf', 'LaporanController@bukuPdf');
Route::get('/laporan/buku/excel', 'LaporanController@export');
Route::post('/laporan/buku', 'LaporanController@store')->name('laporan.store');

Route::get('/laporan/trs', 'LaporanController@transaksi');
Route::get('/laporan/trs/pdf', 'LaporanController@transaksiPdf');
Route::get('/laporan/trs/excel', 'LaporanController@export2');

Route::get('/siswa', 'SiswaController@index')->name('siswa.index');
Route::get('/tambah_siswa', 'SiswaController@create')->name('siswa.create');
Route::post('/siswa', 'SiswaController@store')->name('siswa.store');
Route::get('/siswa/{siswa_id}', 'SiswaController@show')->name('siswa.show');
Route::get('/siswa/{siswa_id}/edit', 'SiswaController@edit')->name('siswa.edit');
Route::put('/siswa/{siswa_id}', 'SiswaController@update')->name('siswa.update');
Route::get('/siswa/{siswa_id}/editPhoto', 'SiswaController@editPhoto')->name('siswa.editPhoto');
Route::put('/siswa/{siswa_id}/edit', 'SiswaController@updatePhoto')->name('siswa.updatePhoto');
Route::get('siswa/delete/{id}', 'SiswaController@destroy');
Route::get('/format_siswa', 'SiswaController@format');
Route::post('/import_siswa', 'SiswaController@import');

Route::resource('guru', 'GuruController');
Route::get('/guru/{guru_id}/editPhoto', 'GuruController@editPhoto')->name('guru.editPhoto');
Route::put('/guru/{guru_id}/edit', 'GuruController@updatePhoto')->name('guru.updatePhoto');
Route::get('guru/delete/{id}', 'GuruController@destroy');


//User
Route::resource('/user_dashboard', 'UserController');

Route::get('/user', function () {
    return view('user_pages_cards');
});
Route::get('/register', function () {
    return view('auth-temp.register');
});

Route::get('/forgot_password', function () {
    return view('auth-temp.forgot_password');
});
Route::get('/login/anggota', function () {
    return view('auth-temp.login');
});
Route::get('/login', function () {
    return view('auth-temp.loginstaff');
});



Route::get('/profile', function () {
    return view('dashboard.profile');
});

Route::get('/profile_user', function () {
    return view('user.profile_user');
});

Route::get('/laporan', function () {
    return view('laporan.transaksi');
});

Route::get('/laporan_buku', function () {
    return view('laporan.buku');
});




Route::get('/staff', function () {
    return view('page.staff');
});

Route::get('/create_book', function () {
    return view('post.create_book');
});
Route::get('/tambah_guru', function () {
    return view('post.tambah_guru');
});

Route::get('/tambah_staff', function () {
    return view('post.tambah_staff');
});

Route::get('/cari_siswa', function () {
    return view('post.cari_siswa');
});



Route::get('/absensi', function () {
    return view('page.absensi');
});