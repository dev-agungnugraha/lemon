@extends('admin.templates.default')

@section('content')

    <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Data Kontrak</h3></br>
                <a href="{{ route('admin.kontrak.create') }}" class="btn btn-primary">Tambah</a>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-2" style="height: 500px;">
                <table id="dataTable" class="table table-bordered table-striped table-head-fixed text-nowrap">
                  <thead>
                  <tr>
                    <th>Id</th>
                    <th>Nama Paket</th>
                    <th>No Kontrak</th>
                    <th>Nama Rekanan</th>
                    <th>Alamat Rekanan</th>
                    <th>Nilai Kontrak</th>
                    <th>Tanggal Kontrak</th>
                    <th>Tgl SPMK</th>
                    <th>Masa Pelaksanaan</th>
                    <th>Masa Pemeliharaan</th>
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
      ajax : "{{ route('admin.kontrak.data') }}",
      columns : [
        {data : 'DT_RowIndex', orderable : false, searchable : false},
        {data : 'namapaket'},
        {data : 'nokontrak'},
        {data : 'namarekanan'},
        {data : 'alamatrekanan'},
        {data : 'nilaikontrak'},
        {data : 'tglkontrak'},
        {data : 'tglspmk'},
        {data : 'masapelaksanaan'},
        {data : 'masapemeliharaan'},
        {data : 'alasanaddendum'},
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