@extends('mahasiswa.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb
        ">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="pull-left mt-2 text-center" >
                <h1>KARTU HASIL STUDI</h1>
            </div>
        </div>
    </div>

    <table>
        <tr>
            <td>Nama : {{$Mahasiswas->Nama}}</td>
        </tr>
        <tr>
            <td>NIM : {{$Mahasiswas->Nim}}</td>
        </tr>
        <tr>
            <td>Kelas : {{$Mahasiswas->kelas->nama_kelas}}</td>
        </tr>
    </table>

    <table class="table table-bordered">
        <tr>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Semester</th>
            <th>Nilai</th>
        </tr>
        @foreach ($nilai as $n)
        <tr>
            <td>{{ $n->matakuliah->nama_matkul}}</td>
            <td>{{ $n->matakuliah->sks}}</td>
            <td>{{ $n->matakuliah->semester }}</td>
            <td>{{ $n->nilai}}</td>
        </tr>
        @endforeach
    </table>
    <a href="{{route('mahasiswa.cetak_pdf', $Mahasiswas->Nim)}}" class="btn btn-danger d-flex justify-content-center">Cetak PDF</a>
    <a href="{{ route('mahasiswa.index') }}" class="btn btn-success mt-3">Kembali</a>
@endsection
