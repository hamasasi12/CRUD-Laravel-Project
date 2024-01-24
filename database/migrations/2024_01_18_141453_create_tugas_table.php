<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tugas', function (Blueprint $table) {
            $table->id();
            $table->string('nama_ibu', 100);
            $table->string('no_ktp', 100);
            $table->date('tanggal_lahir');
            $table->string('agama', 100);
            $table->string('pendidikan', 100);
            $table->string('pekerjaan', 100);
            $table->string('range_pendapatan',);
            $table->string('penghasilan', 100);
            $table->string('status_hidup',100);
            $table->string('alamat',100);
            $table->string('no_handphone',100);
            $table->string('provinsi',100);
            $table->string('kabupaten',100);
            $table->string('kecamatan',100);
            $table->string('kelurahan',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tugas');
    }
};
