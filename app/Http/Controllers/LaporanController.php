<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Buku;
use App\Models\Kategori;
use App\Models\Status;
use App\Models\Peminjaman;
use Carbon\Carbon;
use Illuminate\Support\Facades\Redirect;
use DB;
use Excel;
use PDF;
use App\Exports\BukuExport;
use App\Exports\TransaksiExport;
use RealRashid\SweetAlert\Facades\Alert;


class LaporanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function buku()
    {   $datas = Buku::all();
        return view('laporan.buku', ['datas' => $datas]);
    }

    public function bukuPdf()
    {

        $datas = Buku::all();
        $pdf = PDF::loadView('laporan.buku_pdf', compact('datas'))->setPaper('a4','landscape');
        alert()->success('Berhasil.','Data telah dieksport!');
        return $pdf->download('laporan_buku_'.date('Y-m-d_H-i-s').'.pdf');
    }

    public function bukuExcel(Request $request)
    {
        $nama = 'laporan_buku_'.date('Y-m-d_H-i-s');
        Excel::create($nama, function ($excel) use ($request) {
        $excel->sheet('Laporan Data Buku', function ($sheet) use ($request) {
        
        $sheet->mergeCells('A1:H1');

       // $sheet->setAllBorders('thin');
        $sheet->row(1, function ($row) {
            $row->setFontFamily('Calibri');
            $row->setFontSize(11);
            $row->setAlignment('center');
            $row->setFontWeight('bold');
        });

        $sheet->row(1, array('LAPORAN DATA BUKU'));

        $sheet->row(2, function ($row) {
            $row->setFontFamily('Calibri');
            $row->setFontSize(11);
            $row->setFontWeight('bold');
        });

        $datas = Buku::all();

       // $sheet->appendRow(array_keys($datas[0]));
        $sheet->row($sheet->getHighestRow(), function ($row) {
            $row->setFontWeight('bold');
        });

         $datasheet = array();
         $datasheet[0]  =   array("NO", "KODE BUKU", "JUDUL", "PENULIS", "PENERBIT",  "KATEGORI","RAK","TAHUN TERBIT","ISBN","JUMLAH");
         $i=1;

        foreach ($datas as $data) {

           // $sheet->appendrow($data);
          $datasheet[$i] = array($i,
                        $data['id'],
                        $data['kode_buku'],
                        $data['judul_buku'],
                        $data['kategori_id'],
                        $data['tahun_terbit'],
                        $data['edisi'],
                        $data['penulis'],
                        $data['penerbit'],
                        $data['ISBN'],
                        $data['jumlah']
                    );
          
          $i++;
        }

        $sheet->fromArray($datasheet);
    });

})->export('xlsx');

}
function export()
{
    $nama = 'laporan_buku_'.date('Y-m-d_H-i-s').'.xlsx';
    alert()->success('Berhasil.','Data telah dieksport!');
    return Excel::download(new BukuExport, $nama);
}

public function transaksi()
    {
        $peminjaman =DB::table('Peminjaman')
        ->join('status', 'status.id', '=', 'peminjaman.status_id')
        ->join('buku', 'buku.kode_buku', '=', 'peminjaman.buku_id')
        ->select('buku.judul_buku','peminjaman.*', 'status.name','status.class')
        ->paginate( 20 );

        alert()->success('Berhasil.','Data telah dieksport!');
        return view('laporan.transaksi', ['peminjaman' => $peminjaman]);
    }


    public function transaksiPdf(Request $request)
    {
        $peminjaman = Peminjaman::query()
        ->join('status', 'status.id', '=', 'peminjaman.status_id')
        ->join('buku', 'buku.kode_buku', '=', 'peminjaman.buku_id')
        ->select('buku.judul_buku','peminjaman.*', 'status.name','status.class')
        ->paginate( 20 );

        if($request->get('status_id')) 
        {
             if($request->get('status_id') == 3) {
                $peminjaman->where('status_id','Dipinjam');
            } else if($request->get('status_id') == 2){
                $peminjaman->where('status', 'Diperpanjang');
            } else {
                $peminjaman->where('status', 'Dikembalikan');
            }
        }

        // if(Auth::user()->level == 'user')
        // {
        //     $q->where('anggota_id', Auth::user()->anggota->id);
        // }

        // $datas = $q->get();

       // return view('laporan.transaksi_pdf', compact('datas'));
       $pdf = PDF::loadView('laporan.transaksi_pdf', compact('peminjaman'))->setPaper('a4','landscape');
       return $pdf->download('laporan_transaksi_'.date('Y-m-d_H-i-s').'.pdf');
    }


function export2()
{
    $nama = 'laporan_transaksi_'.date('Y-m-d_H-i-s').'.xlsx';
    alert()->success('Berhasil.','Data telah dieksport!');
    return Excel::download(new TransaksiExport, $nama);
}
}
