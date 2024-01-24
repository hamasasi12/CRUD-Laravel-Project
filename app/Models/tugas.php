<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
    protected $table = "tugas";
    protected $primaryKey = "id";
    protected $fillable = [
        'id','nama_ibu','no_ktp','tanggal_lahir','agama','pendidikan','pekerjaan','range_pendapatan','penghasilan','status_hidup',
        'alamat','no_handphone','provinsi','kabupaten','kecamatan','kelurahan'
    ];
}
// $table->string('nama', 100);
//             $table->string('no_ktp', 100);
//             $table->date('tanggal_lahir');
//             $table->string('agama', 100);
//             $table->string('pendidikan', 100);
//             $table->string('pekerjaan', 100);
//             $table->string('range_pendapatan',);
//             $table->string('penghasilan', 100);
//             $table->string('status_hidup',100);
//             $table->string('alamat',100);
//             $table->string('no_handphone',100);
//             $table->string('provinsi',100);
//             $table->string('kabupaten',100);
//             $table->string('kecamatan',100);
//             $table->string('kelurahan',100);