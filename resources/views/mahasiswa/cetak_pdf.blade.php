<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Membuat Laporan PDF Mahasiswa</title>
</head>

<body>
    <style type="text/css">
        table tr td,
        table tr th {
            font-size: 9pt;
        }
    </style>
    <center>
        <h5>Laporan Mahasiswa {{ $mahasiswa->nama }}</h4>
    </center>


    <table class='table table-striped'>
        <thead>
            <tr>
                <th scope="col">Mata Kuliah</th>
                <th scope="col">Sks</th>
                <th scope="col">Semester</th>
                <th scope="col">Nilai</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($nilai as $n)
        <tr>
            <td>{{ $n->matakuliah->nama_matkul}}</td>
            <td>{{ $n->matakuliah->sks}}</td>
            <td>{{ $n->matakuliah->semester }}</td>
            <td>{{ $n->nilai}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
</body>

</html>
