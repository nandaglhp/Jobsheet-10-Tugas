@extends('mahasiswa.layout')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center align-items-center">
        <div class="card" style="width: 24rem;">
            <div class="card-header"> Edit Mahasiswa </div>
            <div class="card-body">
                @if ($errors->any())
                <div class="alert alert-danger">
                    <strong>Whoops!</strong> There were some problems with your input.<br><br>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="post" action="{{ route('mahasiswa.update', $Mahasiswa->Nim) }}" id="myForm">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="Nim">Nim</label>
                    <input type="text" name="Nim" class="form-control" id="Nim" aria-describedby="Nim" value="{{$Mahasiswa->Nim}}" >
                </div>
                <div class="form-group">
                    <label for="Nama">Nama</label>
                    <input type="text" name="Nama" class="form-control" id="Nama" aria-describedby="Nama" value="{{$Mahasiswa->Nama}}">
                </div>
                <div class="form-group">
                    <label for="image">Foto</label>
                    <img src="{{ asset('storage/gambar_mhs/' . $Mahasiswa->foto) }}"  width="100px" alt="Foto Mahasiswa">
                    <input type="file" class="form-control-file" required="required" name="foto">
                </div>
                <div class="form-group">
                    <label for="Kelas">Kelas</label>
                    <select name="kelas_id" class="form-control" id="Kelas" aria-describedby="Kelas">
                        @foreach ($kelas as $kls)
                            <option value="{{$kls->id}}" {{ $Mahasiswa->kelas_id == $kls->id ? "selected" : ""}}>{{$kls->nama_kelas}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="Jurusan">Jurusan</label>
                    <input type="text" name="Jurusan" class="form-control" id="Jurusan" aria-describedby="Jurusan" value="{{$Mahasiswa->Jurusan}}" >
                </div>
                <div class="form-group">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
</div>
</div>
@endsection
