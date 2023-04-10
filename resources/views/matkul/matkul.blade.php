@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Mata Kuliah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Mata Kuliah Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      @if (session()->has('success'))
        <div class="alert alert-success">
          {{ session("success") }}
        </div>
      @endif
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Mata Kuliah</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <a href="{{url('matkul/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>
          <table class="table table-bordered tabel-hover">
            <thead class="table">
              <tr class="text-center bg-secondary">
                <td>No</td>
                <td>Mata Kuliah</td>
                <td>Sks</td>
                <td>Jam</td>
                <td>Action</td>
              </tr>
            </thead>
            <tbody>
            @php
            $no = 1;
            @endphp
            @if ($matkul->count() > 0)
            @foreach ($matkul as $m)
            <tr>
              <td class="text-center">{{ $no++ }}</td>
              <td>{{ $m->nama_matkul }}</td>
              <td>{{ $m->sks }}</td>
              <td>{{ $m->jam }}</td>
              <td>
                <!-- Bikin tombol edit dan delete -->
                <a href="{{ url('/matkul/'. $m->id.'/edit') }}" class="btn btn-sm btn-warning">edit</a>
                <form method="POST" action="{{ url('/matkul/'.$m->id) }}" >
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-sm btn-danger">hapus</button>
                </form>
              </td>
            </tr>
            @endforeach
            @else
              <tr><td colspan="6" class="text-center">Data tidak ada</td></tr>  
            @endif
            </tbody>
          </table>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->
    </section>
    <!-- /.content -->
  </div>
@endsection
