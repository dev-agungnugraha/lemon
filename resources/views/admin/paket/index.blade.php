@extends('admin.templates.default')

@section('content')

    <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Paket</h3></br>
                <a href="{{ route('admin.paket.create') }}" class="btn btn-primary">Tambah Paket</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-2" style="height: 500px;">
                <table id="dataTable" class="table table-bordered table-striped table-head-fixed text-nowrap">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama Paket Kegiatan</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
<form action="" id="deleteForm" method="POST">
  @csrf 
  @method("DELETE")
  <input type="submit" value="hapus" style="display: none;">
</form>
@endsection

@push('scripts')
<script>
  $(function () {
    $("#dataTable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      processing : true,
      serverside : true,
      ajax : "{{ route('admin.paket.data') }}",
      columns : [
        {data : 'DT_RowIndex', orderable : false, searchable : false},
        {data : 'name'},
        {data : 'action'}
      ],
    }).buttons().container().appendTo('#dataTable_wrapper .col-md-6:eq(0)');
    // $('#dataTable_').DataTable({
    //   processing : true,
    //   serverside : true,
    //   ajax : "{{ route('admin.author.data') }}",
    //   columns : [
    //     {data : 'id'},
    //     {data : 'name'},
    //   ]
    // });
  });
</script>
@endpush