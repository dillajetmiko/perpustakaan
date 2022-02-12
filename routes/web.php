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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function(){
//     return view('blank_page');
// });
// Route::get('/', 'C_blankpage@home');

Route::get('/register', 'C_Register@getRegister');
Route::post('/postRegister', 'C_Register@postRegister');

Route::get('/login', 'C_login@getLogin')->name('login');
Route::post('/postLogin', 'C_login@postLogin');

Route::get('/login1', 'C_login@getLogin1')->name('login');
Route::post('/postLogin1', 'C_login@postLogin1');

Route::get('/logout',function(){
    Auth::logout();
    return  redirect ('/login');
});

Route::get('/', 'C_login@getLogin');
Route::get('pageAksesKhusus','C_blankpage@aksesKhusus');

Route::get('/home', 'C_blankpage@home');
Route::get('/halamansiswa', 'C_blankpage@home1');

Route::get('/jenisbuku', 'C_jenisbuku@jenisbuku');
Route::get('/jenisbuku/tambahJenisbuku','C_jenisbuku@tambahJenisbuku');
Route::post('/jenisbuku/insertJenisbuku','C_jenisbuku@insertJenisbuku');
Route::get('/jenisbuku/editJenisbuku/{id_jenis}','C_jenisbuku@editJenisbuku');
Route::post('/jenisbuku/updateJenisbuku','C_jenisbuku@updateJenisbuku');
Route::get('/jenisbuku/hapus/{id_jenis}','C_jenisbuku@hapus');

Route::get('/penerbit', 'C_penerbit@penerbit');
Route::get('/penerbit/tambahPenerbit','C_penerbit@tambahPenerbit');
Route::post('/penerbit/insertPenerbit','C_penerbit@insertPenerbit');
Route::get('/penerbit/editPenerbit/{id_penerbit}','C_penerbit@editPenerbit');
Route::post('/penerbit/updatePenerbit','C_penerbit@updatePenerbit');
Route::get('/penerbit/hapus/{id_penerbit}','C_penerbit@hapus');

Route::get('/bahasa', 'C_bahasa@bahasa');
Route::get('/bahasa/tambahBahasa','C_bahasa@tambahBahasa');
Route::post('/bahasa/insertBahasa','C_bahasa@insertBahasa');
Route::get('/bahasa/editBahasa/{id_bahasa}','C_bahasa@editBahasa');
Route::post('/bahasa/updateBahasa','C_bahasa@updateBahasa');
Route::get('/bahasa/hapus/{id_bahasa}','C_bahasa@hapus');

Route::get('/anggota', 'C_anggota@anggota');
Route::get('/anggota/tambahAnggota','C_anggota@tambahAnggota');
Route::post('/anggota/insertAnggota','C_anggota@insertAnggota');
Route::get('/anggota/editAnggota/{NIS_NIP}','C_anggota@editAnggota');
Route::post('/anggota/updateAnggota','C_anggota@updateAnggota');
Route::get('/anggota/hapus/{NIS_NIP}','C_anggota@hapus');

Route::get('/pegawai', 'C_pegawai@pegawai');
Route::get('/pegawai/tambahPegawai','C_pegawai@tambahPegawai');
Route::post('/pegawai/insertPegawai','C_pegawai@insertPegawai');
Route::get('/pegawai/editPegawai/{NIP}','C_pegawai@editPegawai');
Route::post('/pegawai/updatePegawai','C_pegawai@updatePegawai');
Route::get('/pegawai/hapus/{NIP}','C_pegawai@hapus');

Route::get('/asal', 'C_asal@asal');
Route::get('/asal/tambahAsal','C_asal@tambahAsal');
Route::post('/asal/insertAsal','C_asal@insertAsal');
Route::get('/asal/editasal/{id_asal}','C_asal@editAsal');
Route::post('/asal/updateAsal','C_asal@updateAsal');
Route::get('/asal/hapus/{id_asal}','C_asal@hapus');

Route::get('/penerimaan', 'C_penerimaan@penerimaan');
Route::get('/penerimaan/tambahPenerimaan','C_penerimaan@tambahPenerimaan');
Route::post('/penerimaan/insertPenerimaan','C_penerimaan@insertPenerimaan');
Route::get('/penerimaan/editPenerimaan/{id_penerimaan}','C_penerimaan@editPenerimaan');
Route::post('/penerimaan/updatePenerimaan','C_penerimaan@updatePenerimaan');
Route::get('/penerimaan/hapus/{id_penerimaan}','C_penerimaan@hapus');

Route::get('/peminjaman', 'C_peminjaman@peminjaman');
Route::get('/peminjaman/tambahPeminjaman','C_peminjaman@tambahPeminjaman');
Route::post('/peminjaman/insertPeminjaman','C_peminjaman@insertPeminjaman');
Route::get('/peminjaman/editPeminjaman/{id_peminjaman}','C_peminjaman@editPeminjaman');
Route::post('/peminjaman/updatePeminjaman','C_peminjaman@updatePeminjaman');
Route::get('/peminjaman/hapus/{id_peminjaman}','C_peminjaman@hapus');

Route::get('/buku', 'C_buku@Buku');
Route::get('/buku/tambahBuku','C_buku@tambahBuku');
Route::post('/buku/insertBuku','C_buku@insertBuku');
Route::get('/buku/editBuku/{noISBN}','C_buku@editBuku');
Route::post('/buku/updateBuku','C_buku@updateBuku');
Route::get('/buku/hapus/{noISBN}','C_buku@hapus');

Route::get('/eksemplarbuku', 'C_eksemplar_buku@eksemplarbuku');
Route::get('/eksemplarbuku/tambahEksemplarbuku','C_eksemplar_buku@tambahEksemplarbuku');
Route::post('/eksemplarbuku/insertEksemplarbuku','C_eksemplar_buku@insertEksemplarbuku');
Route::get('/eksemplarbuku/editEksemplarbuku/{kode_buku}','C_eksemplar_buku@editEksemplarbuku');
Route::post('/eksemplarbuku/updateEksemplarbuku','C_eksemplar_buku@updateEksemplarbuku');
Route::get('/eksemplarbuku/hapus/{kode_buku}','C_eksemplar_buku@hapus');

Route::get('/detailpeminjaman', 'C_detail_peminjaman@detailpeminjaman');
Route::get('/lihatdetailpeminjaman/{id_peminjaman}', 'C_detail_peminjaman@lihatdetailpeminjaman');
Route::get('/detailpeminjaman/tambahDetailpeminjaman/{id_peminjaman}','C_detail_peminjaman@tambahDetailpeminjaman');
Route::post('/detailpeminjaman/insertDetailpeminjaman','C_detail_peminjaman@insertDetailpeminjaman');
Route::get('/detailpeminjaman/editDetailpeminjaman/{id_peminjaman}&{kode_buku}','C_detail_peminjaman@editDetailpeminjaman');
Route::post('/detailpeminjaman/updateDetailpeminjaman','C_detail_peminjaman@updateDetailpeminjaman');
Route::get('/detailpeminjaman/hapus/{id_peminjaman}&{kode_buku}','C_detail_peminjaman@hapus');

Route::get('/detailpenerimaan', 'C_detail_penerimaan@detailpenerimaan');
Route::get('/lihatdetailpenerimaan/{id_penerimaan}', 'C_detail_penerimaan@lihatdetailpenerimaan');
Route::get('/detailpenerimaan/tambahDetailpenerimaan/{id_penerimaan}','C_detail_penerimaan@tambahDetailpenerimaan');
Route::post('/detailpenerimaan/insertDetailpenerimaan','C_detail_penerimaan@insertDetailpenerimaan');
Route::get('/detailpenerimaan/editDetailpenerimaan/{id_penerimaan}&{noISBN}','C_detail_penerimaan@editDetailpenerimaan');
Route::post('/detailpenerimaan/updateDetailpenerimaan','C_detail_penerimaan@updateDetailpenerimaan');
Route::get('/detailpenerimaan/hapus/{id_penerimaan}&{noISBN}','C_detail_penerimaan@hapus');

Route::get('/pengembalian', 'C_pengembalian@pengembalian');
Route::get('/pengembalian/editPengembalian/{id_peminjaman}/{kode_buku}','C_pengembalian@editPengembalian');
Route::post('/pengembalian/updatePengembalian','C_pengembalian@updatePengembalian');

Route::get('/history', 'C_history@history');
Route::get('/history1', 'C_history@history1');
Route::get('/history2', 'C_history@history2');

Route::get('/halamansiswa/buku', 'C_halaman_siswa@buku');
Route::get('/halamansiswa/history', 'C_halaman_siswa@history');