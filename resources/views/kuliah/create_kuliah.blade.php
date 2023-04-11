@extends('layout.template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data MataKUliah</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data MataKUliah</li>
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
          <h3 class="card-title">Tabel matakuliah</h3>

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
            <form method="post" action="{{ $kuliah_form }}">
              @csrf
              {!! (isset($mk))? method_field('PUT') : '' !!}

              <div class="form-group">
                <label>hari MataKuliah</label>
                <input type="text" class="form-control @error('nama_matkul') is-invalid @enderror" value="{{ isset($mk)? $mk->nama_matkul : old('nama_matkul')}}" name="nama_matkul">
                  @error('nama_matkul')
                    <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label>hari</label>
                <input type="text" class="form-control @error('hari') is-invalid @enderror" value="{{ isset($mk)? $mk->hari : old('hari')}}" name="hari">
                  @error('hari')
                    <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              
              <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <!-- /.card-body -->
        <!-- /.card-body -->
        <div class="card-footer">
          ~Alfino Febry Krissaputra
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

@endsection

