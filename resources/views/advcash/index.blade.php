@extends('layouts.app')

@section('title')
    Uang Muka
@endsection

@section('content')
<div class="page-header">
    @if ($message = Session::get('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      {{ $message }}
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    @endif
    <div class="row align-items-center">
      <div class="col">
        <h3 class="page-title">Daftar Uang Muka</h3>
      </div>
      <div class="col-auto float-right ml-auto">
        @can('worktype-create')
        <a href="{{ route('cash.create') }}" class="btn add-btn add-advcash"> Tambah </a>
        @endcan
      </div>
    </div>
  </div>

  <div class="table-responsive">
    <table class="data-table table table-stripped">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Karyawan</th>
                <th>Tanggal Pembayaran di Muka</th>
                <th>Jumlah</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
@endsection

@section('scripts')
<script>
     $(function () {

      var table = $('.data-table').DataTable({
          processing: false,
          serverSide: true,
          pageLength: 10,
          scrollY: false,
          scrollX: false,
          columns: [
              {data: 'DT_RowIndex',name: 'DT_RowIndex',orderable: false, searchable: false},
              {data: 'user_name', orderable: false},
              {data: 'date_advance',searchable: true},
              {data: 'amount', orderable: false},
              {data: 'action', name: 'action', orderable: false,searchable: false},
          ]
      });


    });
</script>
@endsection
