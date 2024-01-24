<!-- resources/views/Biodata.blade.php -->

@extends('layouts.app')

@section('content')
@section('main')
<div class="main-content">
    <section class="section">
        <div class="section-header">
<ln>
<h1>BIODATA</h1>
            <form action="{{ url ('update-data-tugas',$Peg->id) }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">

                <label for="nama">NAMA IBU</label>
                <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" value="{{ $Peg->nama_ibu}}" required>
            </div>

            <div class="form-group">
                <label for="no_ktp">No KTP</label>
                <input type="text" class="form-control" id="no_ktp" name="no_ktp" value="{{ $Peg->no_ktp}}" required>
            </div>

            <div class="form-group">
                <label for="agama">TANGGAL LAHIR</label>
                <input type="date" class="form-control" id="tanggal_lahir" name="tanggal_lahir" value="{{ $Peg->tanggal_lahir}}" required>
            </div>

            <div class="form-group">
                <label for="agama">AGAMA</label>
                <select class="form-control" id="agama" name="agama" value="{{ $Peg->agama}}" required>
                    <option value="" disabled selected>Pilih Agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Buddha">Buddha</option>
                    <option value="Konghucu">Konghucu</option>
        <!-- Tambahkan opsi lain sesuai kebutuhan -->
                </select>
            </div>

            <div class="form-group">
                <label for="pendidikan">PENDIDIKAN</label>
                <select class="form-control" id="pendidikan" name="pendidikan" value="{{ $Peg->pendidikan}}" required>
                    <option value="" disabled selected>Pilih Pendidikan</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA/SMK">SMA/SMK</option>
                    <option value="Diploma">Diploma</option>
                    <option value="Sarjana (S1)">Sarjana (S1)</option>
                    <option value="Magister (S2)">Magister (S2)</option>
                    <option value="Doktor (S3)">Doktor (S3)</option>
        <!-- Tambahkan opsi lain sesuai kebutuhan -->
                </select>
            </div>

            <div class="form-group">
            <label for="pekerjaan">PEKERJAAN IBU</label>
            <select class="form-control" id="pekerjaan" name="pekerjaan" value="{{ $Peg->pekerjaan}}" required>
                    <option value="" disabled selected>Pilih Pekerjaan Ibu</option>
                    <option value="Ibu Rumah Tangga">Ibu Rumah Tangga</option>
                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                    <option value="Pegawai Negeri Sipil (PNS)">Pegawai Negeri Sipil (PNS)</option>
                    <option value="Wiraswasta">Wiraswasta</option>
                    <option value="Petani">Petani</option>
                    <option value="Pensiunan">Pensiunan</option>
        <!-- Tambahkan opsi lain sesuai kebutuhan -->
                </select>
            </div>

            <div class="form-group">
            <label for="range_pendapatan">RANGE PENDAPATAN</label>
            <select class="form-control" id="range_pendapatan" name="range_pendapatan" value="{{ $Peg->range_pendapatan}}" required>
                    <option value="" disabled selected>Pilih Range Pendapatan</option>
                    <option value="Kurang dari 1 juta">Kurang dari 1 juta</option>
                    <option value="1 juta - 5 juta">1 juta - 5 juta</option>
                    <option value="5 juta - 10 juta">5 juta - 10 juta</option>
                    <option value="10 juta - 20 juta">10 juta - 20 juta</option>
                    <option value="Lebih dari 20 juta">Lebih dari 20 juta</option>
        <!-- Tambahkan opsi lain sesuai kebutuhan -->
            </select>
            </div>

            <div class="form-group">
                <label for="pendidikan_ibu">PENGHASILAN</label>
                <input type="text" class="form-control" id="penghasilan" name="penghasilan" value="{{ $Peg->penghasilan}}" required>
            </div>

            <div class="form-group">
                <label for="status_hidup">STATUS HIDUP</label>
                <select class="form-control" id="status_hidup" name="status_hidup" value="{{ $Peg->status_hidup}}" required>
                    <option value="" disabled selected>Pilih Status Hidup</option>
                    <option value="Menikah">Menikah</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                    <option value="Cerai">Cerai</option>
                    <option value="Duda/Janda">Duda/Janda</option>
        <!-- Tambahkan opsi lain sesuai kebutuhan -->
                </select>
            </div>

            <div class="form-group">
                <label for="pendidikan_ibu">ALAMAT</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $Peg->alamat}}" required>
            </div>

            <div class="form-group">
                <label for="pendidikan_ibu">NO HANDPHONE</label>
                <input type="text" class="form-control" id="no_handphone" name="no_handphone" value="{{ $Peg->no_handphone}}" required>
            </div>

            <div class="form-group">
                <label for="provinsi">PROVINSI</label>
                <select class="form-control" id="provinsi" name="provinsi" value="{{ $Peg->provinsi}}"required>
                    <option value="" disabled selected>Pilih Provinsi</option>
                    <option value="Kalimantan Barat">Kalimantan Barat</option>
                    <option value="Kalimantan Tengah">Kalimantan Tengah</option>
                    <option value="Kalimantan Selatan">Kalimantan Selatan</option>
                    <option value="Kalimantan Timur">Kalimantan Timur</option>
                    <option value="Kalimantan Utara">Kalimantan Utara</option>
                </select>
            </div>


            <div class="form-group">
    <label for="kabupaten">KABUPATEN</label>
    <select class="form-control" id="kabupaten" name="kabupaten" value="{{ $Peg->kabupaten}}" required>
        <option value="" disabled selected>Pilih Kabupaten</option>
        <optgroup label="Kalimantan Barat">
            <option value="Pontianak">Pontianak</option>
            <option value="Singkawang">Singkawang</option>
            <option value="Ketapang">Ketapang</option>
            <!-- Tambahkan opsi lain sesuai dengan kabupaten di Kalimantan Barat -->
        </optgroup>
        <optgroup label="Kalimantan Tengah">
            <option value="Palangka Raya">Palangka Raya</option>
            <option value="Sampit">Sampit</option>
            <option value="Kuala Kapuas">Kuala Kapuas</option>
            <!-- Tambahkan opsi lain sesuai dengan kabupaten di Kalimantan Tengah -->
        </optgroup>
        <optgroup label="Kalimantan Selatan">
            <option value="Banjarmasin">Banjarmasin</option>
            <option value="Banjarbaru">Banjarbaru</option>
            <option value="Martapura">Martapura</option>
            <!-- Tambahkan opsi lain sesuai dengan kabupaten di Kalimantan Selatan -->
        </optgroup>
        <optgroup label="Kalimantan Timur">
            <option value="Balikpapan">Balikpapan</option>
            <option value="Samarinda">Samarinda</option>
            <option value="Bontang">Bontang</option>
            <!-- Tambahkan opsi lain sesuai dengan kabupaten di Kalimantan Timur -->
        </optgroup>
        <optgroup label="Kalimantan Utara">
            <option value="Tanjung Selor">Tanjung Selor</option>
            <option value="Tarakan">Tarakan</option>
            <option value="Bulungan">Bulungan</option>
            <!-- Tambahkan opsi lain sesuai dengan kabupaten di Kalimantan Utara -->
        </optgroup>
    </select>
</div>


<div class="form-group">
    <label for="kecamatan">KECAMATAN</label>
    <select class="form-control" id="kecamatan" name="kecamatan" value="{{ $Peg->kecamatan}}" required>
        <option value="" disabled selected>Pilih Kecamatan</option>
        <option value="Banjarmasin Barat">Banjarmasin Barat</option>
        <option value="Banjarmasin Utara">Banjarmasin Utara</option>
        <option value="Banjarmasin Selatan">Banjarmasin Selatan</option>
        <option value="Banjarmasin Timur">Banjarmasin Timur</option>
        <option value="Banjarmasin Tengah">Banjarmasin Tengah</option>
        <option value="Banjarmasin Kota">Banjarmasin Kota</option>
        <option value="Banjarbaru">Banjarbaru</option>
        <option value="Banjar">Banjar</option>
        <option value="Barito Kuala">Barito Kuala</option>
        <!-- Tambahkan opsi lain sesuai dengan kecamatan di Kalimantan Selatan -->
    </select>
</div>


<div class="form-group">
    <label for="kelurahan">KELURAHAN</label>
    <select class="form-control" id="kelurahan" name="kelurahan" value="{{ $Peg->kelurahan}}" required>
        <option value="" disabled selected>Pilih Kelurahan</option>
        <optgroup label="Banjarmasin Barat">
            <option value="Melayu">Melayu</option>
            <option value="Simpang Tiga">Simpang Tiga</option>
            <option value="Sungai Baru">Sungai Baru</option>
            <!-- Tambahkan opsi lain sesuai dengan kelurahan di Banjarmasin Barat -->
        </optgroup>
        <optgroup label="Banjarmasin Utara">
            <option value="Gadang">Gadang</option>
            <option value="Kelayan Tengah">Kelayan Tengah</option>
            <option value="Sungai Jingah">Sungai Jingah</option>
            <!-- Tambahkan opsi lain sesuai dengan kelurahan di Banjarmasin Utara -->
        </optgroup>
        <!-- Tambahkan optgroup dan option sesuai dengan kelurahan di kecamatan lainnya -->
    </select>
</div>

            <button type="submit" class="btn btn-primary">Submit</button>

            </form>
            
    </div>
@endsection