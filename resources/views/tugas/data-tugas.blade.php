@extends('layouts.app')

@section('title', 'New User')

@push('style')
<!-- CSS Libraries -->
@endpush

@section('main')
<html>
<body>
<div class="main-content">
    <section class="section">
        <div class="section-header">
            <h1>New User</h1>
            <div class="section-header-breadcrumb">
                <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                <div class="breadcrumb-item"><a href="#">Users</a></div>
                <div class="breadcrumb-item">New User</div>
            </div>
        </div>
        <!-- -------------- -->
        <!-- tombol start -->
        <div class="card-tools">
            <a href="{{ route('create-data-tugas')}}" class="btn btn-success">Tambah Biodata<i class="fas fa-plus-square"></i></a>
        </div>
        <!-- tombol end -->
<br>
        <!-- form start -->
        <div class="table-responsive">
            <table class="table-striped table">
                <tr>

                                        <th>Nama Ibu</th>
                                        <th>No KTP</th>
                                        <th>Tanggal Lahir</th>
                                        <th>Agama</th>
                                        <th>Pendidikan</th>
                                        <th>Pekerjaan</th>
                                        <th>Range Pendapatan</th>
                                        <th>Penghasilan</th>
                                        <th>Status Hidup</th>
                                        <th>Alamat</th>
                                        <th>No Handphone</th>
                                        <th>Provinsi</th>
                                        <th>Kabupaten</th>
                                        <th>Kecamatan</th>
                                        <th>Kelurahan</th>
                                        <th>ACTIONS</th>
                                    </tr>
                                    @foreach ($dtTugas as $item)

                                    <tr>
                                        <td>
                                        {{$item->nama_ibu}}
                                        </td>

                                        <td>
                                        {{$item->no_ktp}}
                                        </td>

                                        <td>
                                        {{$item->tanggal_lahir}}
                                        </td>

                                        <td>
                                        {{$item->agama}}
                                        </td>

                                        <td>
                                        {{$item->pendidikan}}
                                        </td>

                                        <td>
                                        {{$item->pekerjaan}}
                                        </td>

                                        <td>
                                        {{$item->range_pendapatan}}
                                        </td>

                                        <td>
                                        {{$item->penghasilan}}
                                        </td>

                                        <td>
                                        {{$item->status_hidup}}
                                        </td>

                                        <td>
                                        {{$item->alamat}}
                                        </td>

                                        <td>
                                        {{$item->no_handphone}}
                                        </td>

                                        <td>
                                        {{$item->provinsi}}
                                        </td>

                                        <td>
                                        {{$item->kabupaten}}
                                        </td>

                                        <td>
                                        {{$item->kecamatan}}
                                        </td>

                                        <td>
                                        {{$item->kelurahan}}
                                        </td>

                                        <td>
                                        <a href="{{ url('edit-data-tugas', $item->id) }}" class="fas fa-edit"></a> | 
                                        <a href="{{ url('delete-data-tugas', $item->id) }}" class="fas fa-trash-alt" style="color: red;"></a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    

            </table>
        </div>
        <!-- form end -->
        
        
    </section>
</div>

@include('sweetalert::alert')

</body>
</html>

@endsection

@push('scripts')
<!-- JS Libraies -->

<!-- Page Specific JS File -->
@endpush