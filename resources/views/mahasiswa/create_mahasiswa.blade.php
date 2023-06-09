@extends('layout.template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Mahasiswa</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Data Mahasiswa</li>
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
          <h3 class="card-title">Tabel Mahasiswa</h3>

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
            <form method="post" enctype="multipart/form-data" action="{{ $url_form }}">
              @csrf
              {!! (isset($mhs))? method_field('PUT') : '' !!}

              <div class="form-group">
                <label>Nim</label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror" value="{{ isset($mhs)? $mhs->nim : old('nim')}}" name="nim">
                  @error('nim')
                    <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label>Nama</label>
                <input type="text" class="form-control @error('nama') is-invalid @enderror" value="{{ isset($mhs)? $mhs->nama : old('nama')}}" name="nama">
                  @error('nama')
                    <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label>JK</label>
                <input type="text" class="form-control @error('jk') is-invalid @enderror" value="{{ isset($mhs)? $mhs->jk : old('jk')}}" name="jk">
                  @error('jk')
                    <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label>Tempat lahir</label>
                <input type="text" class="form-control @error('tempat_lahir') is-invalid @enderror" value="{{ isset($mhs)? $mhs->tempat_lahir : old('tempat_lahir')}}" name="tempat_lahir">
                  @error('tempat_lahir')
                    <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="text" class="form-control @error('tanggal_lahir') is-invalid @enderror" value="{{ isset($mhs)? $mhs->tanggal_lahir : old('tanggal_lahir')}}" name="tanggal_lahir">
                  @error('tanggal_lahir')
                    <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label>Alamat</label>
                <input type="text" class="form-control @error('alamat') is-invalid @enderror" value="{{ isset($mhs)? $mhs->alamat : old('alamat')}}" name="alamat">
                  @error('alamat')
                    <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                <label>No HP</label>
                <input type="text" class="form-control @error('hp') is-invalid @enderror" value="{{ isset($mhs)? $mhs->hp : old('hp')}}" name="hp">
                  @error('hp')
                    <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                            <label for="kelas_id">Kelas</label>
                            <select name="kelas_id" class="form-control @error('kelas_id') is-invalid @enderror">
                                <option value="">-- Pilih Kelas --</option>
                                @foreach ($kelas as $k)
                                    <option value="{{ $k->id }}"
                                        {{ old('kelas_id') == $k->id ? 'selected' : (isset($mahasiswa) && $mahasiswa->kelas_id == $k->id ? 'selected' : '') }}>
                                        {{ $k->nama }}</option>
                                @endforeach
                            </select>
                            @error('kelas_id')
                                <div class="error invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
              <div class="form-group">
                <label>Jurusan</label>
                <input type="text" class="form-control @error('jurusan') is-invalid @enderror" value="{{ isset($mhs)? $mhs->jurusan : old('jurusan')}}" name="jurusan">
                  @error('jurusan')
                    <span class="error invalid-feedback">{{ $message }}</span>
                  @enderror
              </div>
              <div class="form-group">
                  <label>Foto</label>
                  <input type="file" class="form-control-file @error('image') is-invalid @enderror" name="image">
                  @error('image')
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

