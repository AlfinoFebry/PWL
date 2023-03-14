@extends('layout.template')
@section('content')
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data artikel</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item active">Dashboard</li>
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
          <h3 class="card-title">Tabel Artikel</h3>

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
        <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>ID Artikel</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tanggal Publish</th>
                  </tr>
                  </thead>
                  <tbody>
                  @foreach($art as $a)
                  <tr>
                    <td>{{ $a -> id_artikel}}</td>
                    <td>{{ $a -> judul}}</td>
                    <td>{{ $a -> penulis}}</td>
                    <td>{{ $a -> tanggal_publish}}</td>
                  </tr>
                  @endforeach
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID Artikel</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tanggal Publish</th>
                  </tr>
                  </tfoot>
          </table>
                
        </div>
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


@push('custom_js')
    <script>
        alert("selamat datang")
    </script>
@endpush