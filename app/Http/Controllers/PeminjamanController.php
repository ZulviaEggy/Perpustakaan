<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;
use App\Models\Peminjaman;
use App\Models\Status;
use App\User;
use File;
use Session;
use Illuminate\Support\Facades\Redirect;
use RealRashid\SweetAlert\Facades\Alert;


class PeminjamanController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
       
    }
    public function index()
    {
        $peminjaman = DB::table('peminjaman')
            ->join('status', 'status.id', '=', 'peminjaman.status_id')
            ->join('buku', 'buku.kode_buku', '=', 'peminjaman.buku_id')
            ->select('buku.judul_buku','peminjaman.*', 'status.name','status.class')
            ->paginate( 20 );
        return view('page.transaksi.peminjaman',  compact('peminjaman'));
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function create()
    {
        $status = Status::get();
        $user = User::get();
        $buku = Buku::where('jumlah', '>', 0)->get();
        return view('page.transaksi.tambah_peminjaman', [ 'status' => $status, 'buku' => $buku, 'user' => $user]);
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Buku $buku)
    {
     
        $validatedData = $request->validate([
            'buku_id'               => 'required|min:1|max:64',
            'status_id'             => 'required',
            'kode_pinjam'           => 'required',
            'tanggal_peminjaman'    => 'required',
            'tanggal_harus_kembali' => 'required'
           
        ]);
       
        $pinjam = new Peminjaman();
        $pinjam->buku_id     = $request->input('buku_id');
        $pinjam->kode_pinjam    = $request->input('kode_pinjam');
        $pinjam->status_id   = $request->input('status_id');
        $pinjam->tanggal_peminjaman = date("Y-m-d", strtotime(request('tanggal_peminjaman')));
        $pinjam->tanggal_harus_kembali =date("Y-m-d", strtotime(request('tanggal_harus_kembali')));
        $buku = Buku::where('kode_buku',$request->buku_id);
        $value = $buku->value('jumlah');
        if ($value > 0){
        $pinjam 
            ->join('buku', 'buku.kode_buku', '=', 'peminjaman.buku_id')
            ->where('buku.kode_buku', $pinjam->buku_id)
            ->update(['buku.jumlah' =>($value - 1),
                ]);  
        $pinjam->save(); 
        alert()->success('Berhasil.','Data telah ditambahkan!');
        } else {
            alert()->warning('Oopss..', 'Stok buku ini tidak ada');
        }
        return redirect()->route('peminjaman.index');

    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $buku = Buku::find($id);
        $status = Status::all();
        $user = User::all();
        $pinjam = Peminjaman::find($id);
        return view('page.transaksi.show', [ 'status' => $status, 'buku' => $buku, 'user' => $user, 'pinjam' => $pinjam ]);
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //var_dump('bazinga');
        //die();
        $validatedData = $request->validate([
            'buku_id'               => 'required|min:1|max:64',
            'status_id'             => 'required',
            'kode_pinjam'           => 'required',
            'tanggal_peminjaman'    => 'required',
            'keterlambatan'         => 'required',
            'denda'                 => 'required',
            'tanggal_harus_kembali' => 'required'
          
        ]);
        $pinjam = Peminjaman::find($id);
        $pinjam->buku_id     = $request->input('buku_id');
        $pinjam->kode_pinjam    = $request->input('kode_pinjam');
        $pinjam->status_id   = $request->input('status_id');
        $pinjam->tanggal_peminjaman = date("Y-m-d", strtotime(request('tanggal_peminjaman')));
        $pinjam->tanggal_harus_kembali =date("Y-m-d", strtotime(request('tanggal_harus_kembali')));
        $pinjam->keterlambatan     = $request->input('keterlambatan');
        $pinjam->denda    = $request->input('denda');
        $pinjam->save();
        alert()->success('Berhasil.','Perpanjangan sukses dilakukan!');
        return redirect()->route('peminjaman.index');
      }

      /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function perpanjangan($id)
    {
        $buku = Buku::find($id);
        $status = Status::all();
        $user = User::all();
        $pinjam = Peminjaman::find($id);
        return view('page.transaksi.tambah_perpanjangan', [ 'status' => $status, 'buku' => $buku, 'user' => $user, 'pinjam' => $pinjam ]);
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePerpanjangan(Request $request, $id)
    {
        //var_dump('bazinga');
        //die();
        $validatedData = $request->validate([
            'buku_id'             => 'required|min:1|max:64',
            'status_id'           => 'required',
            'kode_pinjam'           => 'required',
            'tanggal_peminjaman'         => 'required',
            'keterlambatan'         => 'required',
            'denda'                 => 'required',
            'tanggal_harus_kembali'         => 'required'
          
        ]);
        $pinjam = Peminjaman::find($id);
        $pinjam->buku_id     = $request->input('buku_id');
        $pinjam->kode_pinjam    = $request->input('kode_pinjam');
        $pinjam->status_id   = $request->input('status_id');
        $pinjam->tanggal_peminjaman = date("Y-m-d", strtotime(request('tanggal_peminjaman')));
        $pinjam->tanggal_harus_kembali =date("Y-m-d", strtotime(request('tanggal_harus_kembali')));
        $pinjam->keterlambatan     = $request->input('keterlambatan');
        $pinjam->denda    = $request->input('denda');
        $pinjam->save();
        alert()->success('Berhasil.','Perpanjangan sukses dilakukan!');
        return redirect()->route('peminjaman.index');
      }

        /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function tambahPengembalian($id)
    {
        $buku = Buku::find($id);
        $status = Status::all();
        $user = User::all();
        $pinjam = Peminjaman::find($id);
        return view('page.transaksi.tambah_pengembalian', [ 'status' => $status, 'buku' => $buku, 'user' => $user, 'pinjam' => $pinjam ]);
    }
      /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updatePengembalian(Request $request, $id)
    {
        //var_dump('bazinga');
        //die();
        $validatedData = $request->validate([
            'buku_id'             => 'required|min:1|max:64',
            'status_id'           => 'required',
            'kode_pinjam'           => 'required',
            'tanggal_peminjaman'         => 'required',
            'keterlambatan'         => 'required',
            'denda'                 => 'required',
            'tanggal_harus_kembali'         => 'required'
          
        ]);
        $pinjam = Peminjaman::find($id);
        $pinjam->buku_id     = $request->input('buku_id');
        $pinjam->kode_pinjam    = $request->input('kode_pinjam');
        $pinjam->status_id   = $request->input('status_id');
        $pinjam->tanggal_peminjaman = date("Y-m-d", strtotime(request('tanggal_peminjaman')));
        $pinjam->tanggal_harus_kembali =date("Y-m-d", strtotime(request('tanggal_harus_kembali')));
        $pinjam->keterlambatan     = $request->input('keterlambatan');
        $pinjam->denda    = $request->input('denda');
        $buku = Buku::where('kode_buku',$request->buku_id);
        $value = $buku->value('jumlah');
        $pinjam->update([
            'status_id' => '2'
            ]);
        $pinjam 
        ->join('buku', 'buku.kode_buku', '=', 'peminjaman.buku_id')
        ->where('buku.kode_buku', $pinjam->buku_id)
        ->update([ 'buku.jumlah'=>($value + 1),
                ]);
        $pinjam->save();
        alert()->success('Berhasil.','Buku telah dikembalikan!');
        return redirect()->route('peminjaman.index');
      }

 /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $pinjam = Peminjaman::find($id);
        if($pinjam){
            $pinjam->delete();
        }
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('peminjaman.index');
    }
}
