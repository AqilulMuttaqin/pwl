@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Data Mahasiswa</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Mahasiswa Page</li>
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
    <section class="content">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session("success") }}
            </div>
        @endif
      <!-- Default box -->
      <div class="card">
        <div class="card-body">
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
            <a href="{{url('mahasiswa')}}" class="btn btn-success">Kembali</a>
            <a href="/mahasiswa/{{$mahasiswa->id}}/cetak_pdf" class="btn btn-warning">Cetak</a>
        </div>
      </div>
    </section>
</div>
@endsection