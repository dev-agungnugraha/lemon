@extends('admin.templates.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Tambah Data Kontrak</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.kontrak.store')}}" method="POST" id="form" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div class="form-group">
                  <label for="paket_id">Nama Paket</label>
                    <select name="paket_id" id="paket_id" class="form-control select2bs4" style="width: 100%;">
                      @foreach($pakets as $paket)  
                        <option value="{{ $paket->id}}">{{$paket->name}}</option>
                      @endforeach
                    </select>
                </div>
                <div class="form-group">
                <label for="nokontrak">No Kontrak</label>
                  <input type="text" class="form-control" id="nokontrak" name="nokontrak" value="{{ old('nokontrak') }}"placeholder="Masukkan No Kontrak">
                </div>
                <div class="form-group">
                <label for="namarekanan">Nama Rekanan</label>
                  <input type="text" class="form-control" id="namarekanan" name="namarekanan" value="{{ old('namarekanan') }}"placeholder="Masukkan Nama Rekanan">
                </div>
                <div class="form-group">
                <label for="alamatrekanan">Alamat Rekanan</label>
                  <input type="text" class="form-control" id="alamatrekanan" name="alamatrekanan" value="{{ old('alamatrekanan') }}"placeholder="Masukkan Alamat Rekanan">
                </div>
                <div class="form-group">
                <label for="nilaikontrak">Nilai Kontrak</label>
                  <input type="text" class="form-control" id="nilaikontrak" name="nilaikontrak" value="{{ old('nilaikontrak') }}"placeholder="Masukkan Nilai Kontrak">
                </div>
                <div class="form-group">
                <label for="tglkontrak">Tanggal Kontrak</label>
                  <input type="text" class="form-control" id="tglkontrak" name="tglkontrak" value="{{ old('tglkontrak') }}"placeholder="Masukkan Tanggal Kontrak">
                </div>
                <div class="form-group">
                <label for="tglspmk">Tanggal SPMK</label>
                  <input type="text" class="form-control" id="tglspmk" name="tglspmk" value="{{ old('tglspmk') }}"placeholder="Masukkan Tanggal SPMK">
                </div>
                <div class="form-group">
                <label for="masapelaksanaan">Masa Pelaksaaan</label>
                  <input type="text" class="form-control" id="masapelaksanaan" name="masapelaksanaan" value="{{ old('masapelaksanaan') }}"placeholder="Masa Pelaksanaan">
                </div>
                <div class="form-group">
                <label for="masapemeliharaan">Masa Pemeliharaan</label>
                  <input type="text" class="form-control" id="masapemeliharaan" name="masapemeliharaan" value="{{ old('masapemeliharaan') }}"placeholder="Masa Pemeliharaan">
                </div>
                <div class="form-group">
                <label for="alasanaddendum">Alasan Addendum</label>
                  <input type="text" class="form-control" id="alasanaddendum" name="alasanaddendum" value="{{ old('alasanaddendum') }}"placeholder="alasan addendum">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
            </form>
        </div>
        </div>
        </div>
        </div>
        <!-- /.card -->

@endsection
@push('scripts')
<!-- jquery-validation -->
<script src="{{ asset('assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
<script src="{{ asset('assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
<!-- Select2 -->
<!-- Select2 -->
<link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<!-- Select2 -->
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
<script>
$(function () {
  //Initialize Select2 Elements
  $('.select2').select2()

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })

  $.validator.setDefaults({
    submitHandler: function () {
      document.getElementById('form').submit();
    }
  });
  $('#form').validate({
    rules: {
      namarekanan: {
        required: true,
        minlength: 5
      },
      alamatrekanan: {
        required: true,
        minlength: 5
      },
      masapelaksanaan: {
        required: true,
      },
    },
    messages: {
      namarekanan: {
        required: "Masukkan nama buku",
        minlength: "Harap masukkan lebih dari 3 huruf"
      },
      alamatrekanan: {
        required: "Masukkan deskripsi buku",
        minlength: "Harap masukkan lebih dari 3 huruf"
      },
      masapelaksanaan: {
        required: "Masukkan jumlah buku",
      },
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>

@endpush