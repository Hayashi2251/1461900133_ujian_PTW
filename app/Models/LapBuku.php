<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable; //library Kyslik/Column-Sortable

class LapBuku extends Model
{
    use HasFactory;
    use Sortable;

    protected $table = 'lap_buku';
    protected $primaryKey = 'id';
    public $timestamps=false;

    protected $fillable = [
        'jml_buku',
        'tanggal'
    ];

    public $sortable = ['id', 'jml_buku', 'tanggal'];
}
