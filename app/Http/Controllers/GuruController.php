<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Guru;
use File;
use RealRashid\SweetAlert\Facades\Alert;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('page.guru.guru', ['guru' => $guru]);
    }

     /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $guru = Guru::all();
        return view('post.tambah_guru', [ 'guru' => $guru]);
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
            'NIP'               => 'required',
            'nama_lengkap'        => 'required',
           
        ]);
        $guru = new Guru();
        $guru->NIP   = $request->input('NIP');
        $guru->nama_lengkap    = $request->input('nama_lengkap');
        $guru->alamat    = $request->input('alamat');
        $guru->gender    = $request->input('gender');
        $guru->tempat_lahir    = $request->input('tempat_lahir');
        $guru->tanggal_lahir    = $request->input('tanggal_lahir');
        $guru->no_telp    = $request->input('no_telp');
        $guru->agama   = $request->input('agama');
        $guru->email    = $request->input('email');
        if ($request->hasFile('photo')){
            $file = $request->file('photo');
            $photo = $file->getClientOriginalName();
            $extension = $file-> getClientOriginalExtension();
            $real = $file-> getRealPath();
            $mime = $file->getMimeType();
            $ukuran_file = $file-> getSize();
            $destination = public_path() . '/photo/guru/';
            $request->file('photo') -> move($destination, $file->getClientOriginalName());
            $guru->photo = $photo;
        } else {
            $guru->photo = NULL;
        }
        $guru->save();
        alert()->success('Sukses.','Guru berhasil ditambahkan!');
        return redirect()->route('guru.index');
    }

      /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $guru = Guru::find($id);
        return view('page.guru.detail_guru', [ 'guru' => $guru ]);
    }

     /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $guru = Guru::find($id);
        return view('page.guru.edit_guru', [ 'guru' => $guru ]);
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
            'NIP'               => 'required',
            'nama_lengkap'        => 'required',
           
        ]);
        $guru = Guru::find($id);
        $guru->NIP   = $request->input('NIP');
        $guru->nama_lengkap    = $request->input('nama_lengkap');
        $guru->alamat    = $request->input('alamat');
        $guru->gender    = $request->input('gender');
        $guru->tempat_lahir    = $request->input('tempat_lahir');
        $guru->tanggal_lahir    = $request->input('tanggal_lahir');
        $guru->no_telp    = $request->input('no_telp');
        $guru->agama   = $request->input('agama');
        $guru->email    = $request->input('email');
      
        $guru->save();
        alert()->success('Sukses.','Data berhasil diubah!');
        return redirect()->route('guru.index');
      }

      public function editPhoto($id)
      {
        $guru = Guru::find($id);
        return view('page.guru.edit_photo', ['guru' => $guru ]);
      }

      public function updatePhoto(Request $request, $id)
      {
          //var_dump('bazinga');
          //die();
          $validatedData = $request->validate([
              'photo'         => 'required|image|mimes:jpeg,png,jpg|max:2048'
          ]);
          $guru = Guru::find($id);
         
          if ($request->hasFile('photo')){
              $image_path = public_path("/photo/guru/".$guru->photo);
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
              $file->move(public_path().'\photo\guru', $photo);
              $guru->photo = $photo;
          } else {
              return $request;
              $guru->photo='';
          }
  
          $guru->save();
          alert()->success('Berhasil.','Foto telah diubah!');
          return redirect()->route('guru.edit',[$guru]);
        }

            /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        $guru = Guru::find($id);
        File::delete('photo/guru'.$guru->photo);
        if($guru){
            $guru->delete();
        }
        alert()->success('Berhasil.','Data telah dihapus!');
        return redirect()->route('guru.index');
    }
  
}
