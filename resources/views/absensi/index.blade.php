@extends('../layouts/mainapp')

@section('title', 'Data Absensi')
@section('pagetitle', 'Absensi Mahasiswa')

@section('container')

    {{-- jika message berhasil --}}
    @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Jika message gagal --}}
    @if (session()->has('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    {{-- Show error from validation --}}
    @if (count($errors) > 0)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1 class="mb-3">Data Absensi Mahasiswa</h1>

    <!-- Button trigger modal -->
    {{-- <a class="btn btn-info" href="{{ url('jadwal/create') }}">Buat Jadwal Matakuliah Baru</a> --}}
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        Presensi Kehadiran
    </button>
    <div class="table-responsive">
        <table class="table table-striped table-hover">

            <div class="position-relative mb-5">
                <div class="position-absolute top-0 end-0"></div>
            </div>
            <thead>
                <th>No</th>
                <th>Nama Mahasiswa</th>
                <th>Matakuliah</th>
                <th>Keterangan</th>
                <th>action</th>
            </thead>
            {{-- @php($no = 1)
            @foreach ($jadwal as $item) --}}
                <tr>
                    <td>1</td>
                    <td>Daniel Celo Onibala</td>
                    <td>Pemrograman Website</td>
                    <td><button class="btn btn-sm btn-success" disabled>Hadir</button></td>
                    <td>
                        {{-- inline div --}}
                        <div class="btn-group" role="group">
                            <a href="" class="btn btn-outline-warning btn-sm text-dark">Edit</a>
                            {{-- create small space between button --}}
                            &nbsp; | &nbsp;
                            <form action="" method="post">
                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-outline-danger btn-sm" onclick="return confirm('Apakah Yakin Menghapus Data')">Delete</button>
                            </form>
                        </div>
                    </td>
                </tr>
                {{-- @php($no++)
            @endforeach --}}
        </table>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
@endsection
