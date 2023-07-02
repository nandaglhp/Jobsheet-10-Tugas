<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Membuat Laporan PDF Dengan DOMPDF Laravel</title>
</head>
<body>
    <style type="text/css">
    table tr td,
    table tr th{
        font-size: 9pt;
    }
    </style>
    <center>
    <h5>Laporan Artikel</h4>
    </center>

    <table class='table table-bordered'>
    <thead>
        <tr>
            <th>No</th>
            <th>judul</th>
            <th>Isi</th>
            <th>Gambar</th>
        </tr>
    </thead>
    <tbody>

        @foreach($articles as $a)
        <tr>
            <td>{{$loop->iteration }}</td>
            <td>{{$a->title}}</td>
            <td>{{$a->content}}</td>
            {{-- <td><img src="{{ public_path('storage/images/' . $a->featured_image) }}" alt="Featured Image" width="100"></td> --}}
            <td><img src="{{ asset('storage/'. $a->featured_image) }}" alt="Featured Image" width="100"></td>
        </tr>
        @endforeach
    </tbody>
    </table>
</body>
</html>
