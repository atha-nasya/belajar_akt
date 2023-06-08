<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jurnalumum_model extends Model
{
    use HasFactory;

    protected $table="tabel_akuntansi_jurnal_umum";
    protected $primaryKey ="id";

    public function tampil_jurnal(){
        $query =\DB::table('tabel_akuntansi_jurnal_umum')->get();
        return $query;
    }
}
