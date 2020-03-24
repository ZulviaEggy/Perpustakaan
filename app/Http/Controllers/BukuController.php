<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Buku;
use App\Models\Kategori;
use File;
use Excel;
use App\Exports\BukuExport;
use App\Imports\BukuImport;
use App\Exports\FormatBukuExport;
use RealRashid\SweetAlert\Facades\Alert;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $buku = DB::table('Buku')->value('kategori_id');
        if ($buku != NULL){
            $buku = DB::table('Buku')
            ->join('kategori_buku', 'kategori_buku.id', '=', 'buku.kategori_id')
            ->select('buku.*', 'kategori_buku.nama_kategori','kategori_buku.rak')
            ->paginate( 20 );
       } else {
        $buku = DB::table('Buku')            
        ->select('buku.kode_buku')
        ->get();
       }
        return view('page.buku.list_buku', compact('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategorie = Kategori::all();
        return view('post.create_book', [ 'kategorie' => $kategorie]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kode_buku'             => 'required|min:1|max:64',
            'judul_buku'           => 'required',
            'tahun_terbit'         => 'required',
            'penulis'           => 'required',
            'penerbit'         => 'required',
            'jumlah'           => 'required',
            
        ]);
        $buku = new Buku();
        $buku->kode_buku     = $request->input('kode_buku');
        $buku->judul_buku   = $request->input('judul_buku');
        $buku->kategori_id = $request->input('kategori_id');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->edisi = $request->input('edisi');
        $buku->penulis = $request->input('penulis');
        $buku->penerbit = $request->input('penerbit');
        $buku->kota_terbit = $request->input('kota_terbit');
        $buku->volume = $request->input('volume');
        $buku->deskripsi = $request->input('deskripsi');
        $buku->ISBN = $request->input('ISBN');
        $buku->jumlah = $request->input('jumlah');
        if ($request->hasFile('cover')){
            $file = $request->file('cover');
            $photo = $file->getClientOriginalName();
            $extension = $file-> getClientOriginalExtension();
            $real = $file-> getRealPath();
            $mime = $file->getMimeType();
            $ukuran_file = $file-> getSize();
            $destination = public_path() . '/uploads/';
            $request->file('cover') -> move($destination, $file->getClientOriginalName());
            $buku->cover = $photo;
        } else {
            $buku->cover = NULL;
        }
        $buku->save();
        alert()->success('Sukses.','Buku berhasil ditambahkan!');
        return redirect()->route('buku.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $book = Buku::with('kategori')->find($id);
        return view('page.buku.detail_book', [ 'book' => $book ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $buku = Buku::find($id);
        $kategorie = Kategori::all();
        return view('page.buku.edit_buku', [ 'kategorie' => $kategorie, 'buku' => $buku ]);
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
            'kode_buku'             => 'required|min:1|max:64',
            'judul_buku'           => 'required',
            'tahun_terbit'         => 'required',
            'penulis'           => 'required',
            'penerbit'         => 'required',
            'jumlah'           => 'required',
          
        ]);
        $buku = Buku::find($id);
        $buku->kode_buku     = $request->input('kode_buku');
        $buku->judul_buku   = $request->input('judul_buku');
        $buku->kategori_id = $request->input('kategori_id');
        $buku->tahun_terbit = $request->input('tahun_terbit');
        $buku->edisi = $request->input('edisi');
        $buku->penulis = $request->input('penulis');
        $buku->penerbit = $request->input('penerbit');
        $buku->kota_terbit = $request->input('kota_terbit');
        $buku->volume = $request->input('volume');
        $buku->deskripsi = $request->input('deskripsi');
        $buku->ISBN = $request->input('ISBN');
        $buku->jumlah = $request->input('jumlah');
        
        $buku->save();
        alert()->success('Berhasil.','Data telah diubah!');
        return redirect()->route('buku.index');
      }

      

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $buku = Buku::find($id);
        File::delete('uploads/'.$buku->cover);
        if($buku){
            $buku->delete();
        }
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('buku.index');
    }

    public function editPhoto($id)
    {
        $buku = Buku::find($id);
        return view('page.buku.edit_photo', ['buku' => $buku ]);
    }


    public function updatePhoto(Request $request, $id)
    {
        //var_dump('bazinga');
        //die();
        $validatedData = $request->validate([
            'cover'         => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ]);
        $buku = Buku::find($id);
       
        if ($request->hasFile('cover')){
            $image_path = public_path("/uploads/".$buku->cover);
            if(File::exists($image_path)){
                File::delete($image_path);
            }
            $file = $request->file('cover');
            $photo = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $real = $file-> getRealPath();
            $mime = $file->getMimeType();
            $ukuran_file = $file-> getSize();
            $filename = md5(time()).'.'.$extension;
            $file->move(public_path().'\uploads', $photo);
            $buku->cover = $photo;
        } else {
            return $request;
            $buku->cover='';
        }

        $buku->save();
        alert()->success('Berhasil.','Foto telah diubah!');
        return redirect()->route('buku.edit',[$buku]);
      }


      public function format()
      {
        $nama = 'laporan_buku'.'.xlsx';
        return Excel::download(new FormatBukuExport, $nama);
      }



      public function import(Request $request) 
	{
		// validasi
		$this->validate($request, [
			'file' => 'required|mimes:csv,xls,xlsx'
		]);
 
		// menangkap file excel
		$file = $request->file('file');
 
		// membuat nama file unik
		$nama_file = rand().$file->getClientOriginalName();
 
		// upload ke folder file_siswa di dalam folder public
		$file->move('file_buku',$nama_file);
 
		// import data
		Excel::import(new BukuImport, public_path('/file_buku/'.$nama_file));
 
 
        // alihkan halaman kembali
        alert()->success('Berhasil.','Data telah diimport!');
        return redirect()->route('buku.index');
	}
  
}
