@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Keluarga</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Keluarga Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- Main content -->
    <section class="content">
      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Keluarga</h3>
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
          <form method="post" action="{{ $url_form }}">
            @csrf
            {!! (isset($keluarga))? method_field('PUT') : '' !!}
        
            <div class="form-group">
              <label>ID</label>
              <input class="form-control" @error('id') is-invalid @enderror type="text" value="{{ isset($keluarga)? $keluarga->id : old('id') }}" name="id">
              @error('id')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label>Nama</label>
              <input class="form-control" @error('nama') is-invalid @enderror type="text" value="{{ isset($keluarga)? $keluarga->nama : old('nama') }}" name="nama">
              @error('nama')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            @if (isset($keluarga))
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select class="form-control" @error('jenis_kelamin') is-invalid @enderror name="jenis_kelamin">
                <option value="">--Pilih Jenis Kelamin--</option>
                <option value="Laki-laki" {{ $keluarga->jenis_kelamin == 'Laki-laki'? 'selected' : '' }}>Laki-laki</option>
                <option value="Perempuan" {{ $keluarga->jenis_kelamin == 'Perempuan'? 'selected' : '' }}>Perempuan</option>
              </select>
              @error('jenis_kelamin')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            @else
            <div class="form-group">
              <label>Jenis Kelamin</label>
              <select class="form-control" @error('jenis_kelamin') is-invalid @enderror name="jenis_kelamin">
                <option value="">--Pilih Jenis Kelamin--</option>
                <option value="Laki-laki">Laki-laki</option>
                <option value="Perempuan">Perempuan</option>
              </select>
              @error('jenis_kelamin')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            @endif
            <div class="form-group">
              <label>Tanggal Lahir</label>
              <input type="date" class="form-control" name="tgl_lahir" value="{{ isset($keluarga)? $keluarga->tgl_lahir : old('tgl_lahir') }}">
              @error('tgl_lahir')
                  <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label>Status</label>
              <input class="form-control" @error('status') is-invalid @enderror type="text" value="{{ isset($keluarga)? $keluarga->status : old('status') }}" name="status">
              @error('status')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">submit</button>
          </form>
        </div>
        <!-- /.card-body -->
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