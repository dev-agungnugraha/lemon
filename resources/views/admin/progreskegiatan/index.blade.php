@extends('admin.templates.default')

@section('content')

    <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kontrak</h3></br>
                <a href="{{ route('admin.progreskegiatan.create') }}" class="btn btn-primary">Tambah</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-2" style="height: 500px;">
                <table id="dataTable" class="table table-bordered table-striped table-head-fixed text-nowrap">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama Paket</th>
                    <th>Nilai Kontrak</th>
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
  <input type="submit" value="Simpan" style="display: none;">
</form>
@endsection

@push('scripts')
<script>
  $(function () {
    $("#dataTable").DataTable({
      "responsive": true, "lengthChange": true, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      processing : true,
      serverside : true,
      ajax : "{{ route('admin.progreskegiatan.data') }}",
      columns : [
        {data : 'DT_RowIndex', orderable : false, searchable : false},
        {data : 'namapaket'},
        {data : 'nilaikontrak'},
        {data : 'action'}
      ],
    }).buttons().container().appendTo('#dataTable_wrapper .col-md-6:eq(0)');
    // $('#dataTable').DataTable({
    //   processing : true,
    //   serverside : true,
    //   ajax : "{{ route('admin.book.data') }}",
    //   columns : [
    //     {data : 'DT_RowIndex', orderable : false, searchable : false},
    //     {data : 'title'},
    //     {data : 'description', "sWidth" : "200px"},
    //     {data : 'author'},
    //     {data : 'cover'},
    //     {data : 'action'}
    //   ],
    // });
  });
</script>
@endpush