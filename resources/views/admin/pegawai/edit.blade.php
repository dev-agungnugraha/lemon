@extends('admin.templates.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Edit Data Pegawai</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.pegawai.update', $pegawai) }}" method="POST" id="formPegawai">
                @csrf
                @method("PUT")
            <div class="card-body">
                <div class="form-group">
                <label for="name">Nama Pegawai</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ old('name') ?? $author->name }}"placeholder="Masukkan data pegawai">
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Ubah</button>
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
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      document.getElementById('formPegawai').submit();
    }
  });
  $('#formPegawai').validate({
    rules: {
      name: {
        required: true,
        minlength: 5
      },
    },
    messages: {
      name: {
        required: "Masukkan nama pegawai",
        minlength: "Harap masukkan lebih dari 3 huruf"
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