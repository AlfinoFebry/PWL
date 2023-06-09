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
          <h3 class="card-title">Tabel Mahasiswas</h3>

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

          <a href="{{url('mahasiswa/create')}}" class="btn btn-sm btn-success my-2">Tambah Data</a>

          <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Kelas</th>
                            <th>HP</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($mhs->count() > 0)
                        @foreach($paginate as $m)
                        <tr>
                            <td>
                                @if($m->foto)
                                <img src="{{asset('storage/'.$m->foto)}}" width="100px" />
                                @else
                                N/A
                                @endif
                            <td>{{$m->nim}}</td>
                            <td>{{$m->nama}}</td>
                            <td>{{$m->kelas->nama_kelas}}</td>
                            <td>{{$m->hp}}</td>
                            <td class="d-flex">
                                <!-- Bikin tombol edit dan delete -->
                                <a href="{{ url('/mahasiswa/'. $m->nim) }}" class="btn btn-sm btn-info mx-2">Show</a>

                                <a href="{{ url('/mahasiswa/'. $m->nim.'/edit') }}"
                                    class="btn btn-sm btn-primary mx-2">Edit</a>

                                <form method="POST" action="{{ url('/mahasiswa/'.$m->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger mx-2">Delete</button>
                                </form>

                                <a href="{{ url('/mahasiswa/detail-nilai/'. $m->nim) }}"
                                    class="btn btn-sm btn-warning mx-2">Nilai</a>
                            </td>
                        </tr>
                        @endforeach
                        @else
                        <tr>
                            <td colspan="6" class="text-center">Data tidak ada</td>
                        </tr>
                        @endif
                    </tbody>
                </table>
        </div>
        <!-- /.card-body -->
        <!-- /.card-body -->
        <div class="card-footer">
        {{ $paginate->links('pagination::bootstrap-4') }}

          ~Alfino Febry Krissaputra
          
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>

@endsection

