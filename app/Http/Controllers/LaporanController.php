<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\LapBuku;
use Maatwebsite\Excel\Facades\Excel; //library Excel
use App\Exports\LapBukuExport;

class LaporanController extends Controller
{
    public function index(){
        $lap = LapBuku::sortable()->paginate(5);
        return view('home0133', [
            'lap' => $lap,
        ]);
    }

    public function tambah(){
        return view('tambah0133');
    }

    public function store(Request $request){
        LapBuku::create([
            'tanggal'=>$request->tanggal,
            'jml_buku'=>$request->jml_buku
        ]);
        return redirect()->route('laporan');
    }

    public function edit($id){
        $data = LapBuku::where('id', $id)->get();
        return view('edit0133',[
            'data' => $data,
            'indeks' => $id
        ]);
    }

    public function update(Request $request, $id){
        LapBuku::where('id', $id)->update([
            'tanggal'=>$request->tanggal,
            'jml_buku'=>$request->jml_buku
        ]);
        return redirect()->route('laporan');
    }

    public function destroy($id){
        $data = LapBuku::where('id', $id)->first();
        $data->delete();

        return redirect()->route('laporan');
    }

    public function export_excel(){
		return Excel::download(new LapBukuExport, 'Data_1461900133.xlsx');
	}
}
