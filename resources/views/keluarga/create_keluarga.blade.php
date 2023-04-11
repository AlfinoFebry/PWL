@extends('layout.template')
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
              <li class="breadcrumb-item active">Data Keluarga</li>
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
          <h3 class="card-title">Tabel Keluarga</h3>

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
            <form method="post" action="{{ $keluarga_form }}">
              @csrf
              {!! (isset($klg))? method_field('PUT') : '' !!}

              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control @error('nama_keluarga') is-invalid @enderror" value="{{ isset($klg)? $klg->nama_keluarga : old('nama_keluarga')}}" name="nama_keluarga">
                  @error('nama_keluarga')
                    <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label>Status Keluarga</label>
                <input type="text" class="form-control @error('status') is-invalid @enderror" value="{{ isset($klg)? $klg->status : old('status')}}" name="status">
                  @error('status')
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

