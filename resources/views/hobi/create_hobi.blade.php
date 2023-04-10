@extends('layouts.template')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Hobi</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data Hobi Page</li>
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
          <h3 class="card-title">Data Hobi</h3>
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
            {!! (isset($hobi))? method_field('PUT') : '' !!}
        
            <div class="form-group">
              <label>ID</label>
              <input class="form-control" @error('id') is-invalid @enderror type="text" value="{{ isset($hobi)? $hobi->id : old('id') }}" name="id">
              @error('id')
                <span class="error invalid-feedback">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label>Hobi</label>
              <input class="form-control" @error('daftar_hobi') is-invalid @enderror type="text" value="{{ isset($hobi)? $hobi->daftar_hobi : old('daftar_hobi') }}" name="daftar_hobi">
              @error('daftar_hobi')
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