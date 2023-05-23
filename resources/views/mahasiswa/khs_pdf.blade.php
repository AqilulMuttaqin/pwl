<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2 class="text-center">JURUSAN TEKNOLOGI INFORMASI-POLITEKNIK NEGERI MALANG</h2>
        <h1 class="text-center p-4">KARTU HASIL STUDI (KHS)</h1>
        <h6><b>Nama: </b>{{ $mahasiswa->nama }}</h6>
        <h6><b>Nim: </b>{{ $mahasiswa->nim }}</h6>
        <h6><b>Kelas: </b>{{ $mahasiswa->kelas->nama_kelas }}</h6>
        <table class="table">
            <thead>
                <td><b>Mata Kuliah</b></td>
                <td><b>SKS</b></td>
                <td><b>Semester</b></td>
                <td><b>Nilai</b></td>
            </thead>
            @foreach($khs as $k)
            <tr>
                <td>{{ $k->nama_matkul }}</td>
                <td>{{ $k->sks }}</td>
                <td>{{ $k->semester }}</td>
                <td>{{ $k->pivot->nilai }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>