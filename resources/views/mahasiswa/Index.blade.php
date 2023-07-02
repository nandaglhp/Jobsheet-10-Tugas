@extends('mahasiswa.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left mt-2">
                <h2>JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
            </div>
            <div class="float-right my-2">
                <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Input Mahasiswa</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="my-3">
        <form action="{{ route('mahasiswa.index') }}" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Search by Name">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">Search</button>
                </div>
            </div>
        </form>
    </div>

    <table class="table table-bordered">
        <tr>
            <th>Nim</th>
            <th>Nama</th>
            <th>Foto</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($mahasiswas as $Mahasiswa)
        <tr>
            <td>{{ $Mahasiswa->Nim }}</td>
            <td>{{ $Mahasiswa->Nama }}</td>
            <td><img src="{{ asset('storage/gambar_mhs/' . $Mahasiswa->foto) }}"  width="100px" alt="Foto Mahasiswa"></td>
            <td>{{ $Mahasiswa->kelas->nama_kelas}}</td>
            <td>{{ $Mahasiswa->Jurusan }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy',$Mahasiswa->Nim) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('mahasiswa.show',$Mahasiswa->Nim) }}">Show</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
                <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$Mahasiswa->Nim) }}">Edit</a>
                <a class="btn btn-primary" href="/nilai/{{$Mahasiswa->Nim}}">Nilai</a>
            </td>

        </tr>
        @endforeach
    </table>
    <div class="pagination">
        @if ($mahasiswas->currentPage() > 1)
            <a href="{{ $mahasiswas->previousPageUrl() }}" class="btn btn-primary">Previous <br> </a>
        @endif

        @if ($mahasiswas->hasMorePages())
            <a href="{{ $mahasiswas->nextPageUrl() }}" class="btn btn-primary">Next</a>
        @endif
    </div>
@endsection
