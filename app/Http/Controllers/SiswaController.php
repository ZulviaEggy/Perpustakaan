<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Siswa;
use File;
use Excel;
use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use RealRashid\SweetAlert\Facades\Alert;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('page.siswa.siswa', ['siswa' => $siswa]);
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = Siswa::all();
        return view('post.tambah_siswa', [ 'siswa' => $siswa]);
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
            'NIS'               => 'required',
            'nama_siswa'        => 'required',
           
        ]);
        $siswa = new Siswa();
        $siswa->NIS    = $request->input('NIS');
        $siswa->nama_siswa    = $request->input('nama_siswa');
        $siswa->alamat    = $request->input('alamat');
        $siswa->gender    = $request->input('gender');
        $siswa->kelas    = $request->input('kelas');
        $siswa->tempat_lahir    = $request->input('tempat_lahir');
        $siswa->tanggal_lahir    = $request->input('tanggal_lahir');
        $siswa->no_telp    = $request->input('no_telp');
        $siswa->agama   = $request->input('agama');
        $siswa->email    = $request->input('email');
        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $photo = $file->getClientOriginalName();
            $extension = $file-> getClientOriginalExtension();
            $real = $file-> getRealPath();
            $mime = $file->getMimeType();
            $ukuran_file = $file-> getSize();
            $destination = public_path() . '/photo/siswa/';
            $request->file('photo') -> move($destination, $file->getClientOriginalName());
            $siswa->photo = $photo;
        } else {
            $siswa->photo = NULL;
        }
        $siswa->save();
        alert()->success('Sukses.','Siswa berhasil ditambahkan!');
        return redirect()->route('siswa.index');
    }

     /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $siswa = Siswa::find($id);
        return view('page.siswa.detail_siswa', [ 'siswa' => $siswa ]);
    }
     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $siswa = Siswa::find($id);
        return view('page.siswa.edit_siswa', [ 'siswa' => $siswa ]);
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
            'NIS'               => 'required',
            'nama_siswa'        => 'required',
           
        ]);
        $siswa = Siswa::find($id);
        $siswa->NIS    = $request->input('NIS');
        $siswa->nama_siswa    = $request->input('nama_siswa');
        $siswa->alamat    = $request->input('alamat');
        $siswa->gender    = $request->input('gender');
        $siswa->kelas    = $request->input('kelas');
        $siswa->tempat_lahir    = $request->input('tempat_lahir');
        $siswa->tanggal_lahir    = $request->input('tanggal_lahir');
        $siswa->no_telp    = $request->input('no_telp');
        $siswa->agama   = $request->input('agama');
        $siswa->email    = $request->input('email');
      
        $siswa->save();
        alert()->success('Sukses.','Data berhasil diubah!');
        return redirect()->route('siswa.index');
      }

      public function editPhoto($id)
      {
          $siswa = Siswa::find($id);
          return view('page.siswa.editPhoto', ['siswa' => $siswa ]);
      }
  
  
      public function updatePhoto(Request $request, $id)
      {
          //var_dump('bazinga');
          //die();
          $validatedData = $request->validate([
              'photo'         => 'required|image|mimes:jpeg,png,jpg|max:2048'
          ]);
          $siswa = Siswa::find($id);
         
          if ($request->hasFile('photo')){
              $image_path = public_path("/photo/siswa/".$siswa->photo);
              if(File::exists($image_path)){
                  File::delete($image_path);
              }
              $file = $request->file('photo');
              $photo = $file->getClientOriginalName();
              $extension = $file->getClientOriginalExtension();
              $real = $file-> getRealPath();
              $mime = $file->getMimeType();
              $ukuran_file = $file-> getSize();
              $filename = md5(time()).'.'.$extension;
              $file->move(public_path().'\photo\siswa', $photo);
              $siswa->photo = $photo;
          } else {
              return $request;
              $siswa->photo='';
          }
  
          $siswa->save();
          alert()->success('Berhasil.','Foto telah diubah!');
          return redirect()->route('siswa.edit',[$siswa]);
        }

            /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $siswa = Siswa::find($id);
        File::delete('photo/siswa'.$siswa->photo);
        if($siswa){
            $siswa->delete();
        }
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('siswa.index');
    }

    public function format()
      {
        $nama = 'siswa'.'.xlsx';
        return Excel::download(new SiswaExport, $nama);
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
		$file->move('file_siswa',$nama_file);
 
		// import data
		Excel::import(new SiswaImport, public_path('/file_siswa/'.$nama_file));
 
 
        // alihkan halaman kembali
        alert()->success('Berhasil.','Data telah diimport!');
        return redirect()->route('siswa.index');
	}
}
