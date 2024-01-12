@extends('layouts.app')
@section('title')
Pangkat
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
         <h3 class="page-title">Pangkat</h3>
      </div>
      <div class="col-auto float-right ml-auto">
         @can('role-create')
         <a href="{{ route('roles.create') }}" class="btn add-btn add-role"> Tambah </a>
         @endcan
      </div>
   </div>
</div>
<div class="table-responsive">
   <table class="datatable table table-stripped data-table mb-0">
      <thead>
         <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Dibuat pada</th>
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
            destroy: true,
            scrollX: false,
            columns: [
                {data: 'DT_RowIndex',name: 'DT_RowIndex',orderable:false,searchable:false},
                {data: 'name', orderable: false},
                {data: 'created_at', orderable: false},
                {data: 'action', name: 'action', orderable: false,searchable: false},
            ]
        });
      });
    </script>
@endsection
