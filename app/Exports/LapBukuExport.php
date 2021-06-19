<?php

namespace App\Exports;

use App\Models\LapBuku;
use Maatwebsite\Excel\Concerns\FromCollection;
use Illuminate\Database\Eloquent\Collection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class LapBukuExport implements FromCollection, WithHeadings, ShouldAutoSize
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        $laporan = LapBuku::all();
        $data = [];
        foreach ($laporan as $u) {

            $data[] = [
                'id' => $u->id ?? '-',
                'tanggal' => $u->tanggal ?? '-',
                'jml_buku' => $u->jml_buku ?? '-'
            ];
        }

        $collection = new Collection($data);

        // dd($collection);
        return $collection;
    }
    public function headings(): array
    {
        return [
            'ID',
            'Tanggal',
            'Jumlah Buku Yang Dipinjam'
        ];
    }
}
