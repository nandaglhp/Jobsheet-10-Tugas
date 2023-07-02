@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Form Pengunggah Berkas</div>
                <div class="card-body">
                    <form action="/articles" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="title">Title:</label>
                            <input type="text" class="form-control" required="required" name="title">
                        </div>
                        <div class="form-group">
                            <label for="content">Content:</label>
                            <textarea name="content" class="form-control" required="required"></textarea>
                        </div>
                        <div class="form-group">
                            <label for="image">Featured Image:</label>
                            <input type="file" class="form-control-file" required="required" name="image">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
