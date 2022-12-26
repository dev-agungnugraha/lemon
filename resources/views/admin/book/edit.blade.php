@extends('admin.templates.default')

@section('content')
<div class="container-fluid">
    <div class="row">
        <!-- left column -->
        <div class="col-md-6">
        <!-- general form elements -->
        <div class="card card-primary">
            <div class="card-header">
            <h3 class="card-title">Edit Data Buku</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{ route('admin.book.update', $book)}}" method="POST" id="formBuku" enctype="multipart/form-data">
                @csrf
               @method('PUT')

            <div class="card-body">
                <div class="form-group">
                <label for="title">Nama Buku</label>
                  <input type="text" class="form-control" id="title" name="title" value="{{ $book->title ?? old('title') }}" placeholder="Masukkan data buku">
                </div>
                <div class="form-group">
                <label for="description">Deskripsi</label>
                  <textarea class="form-control" rows="3" id="description" name="description" value="{{ $book->description ?? old('description') }}" placeholder="Masukkan deskripsi"></textarea>
                </div>
                <div class="form-group">
                <label for="author_id">Nama Penulis</label>
                <select name="author_id" id="author_id" class="form-control select2bs4" style="width: 100%;">
                @foreach($authors as $author)  
                  <option value="{{ $author->id}}"
                    @if($author->id === $book->author_id)
                        selected
                    @endif
                  >
                    {{$author->name}}
                  </option>
                @endforeach
                </select>
                </div>
                <div class="form-group">
                <label for="cover">Sampul</label>
                  <input type="file" class="form-control" style="width: 100%;" id="cover" name="cover" value="{{ $book->cover ?? old('cover') }}"placeholder="Masukkan Sampul">
                </div>
                <div class="form-group">
                <label for="qty">Jumlah</label>
                  <input type="text" class="form-control" id="qty" name="qty" value="{{ $book->qty ?? old('qty') }}"placeholder="Masukkan jumlah buku">
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
      document.getElementById('formPBuku').submit();
    }
  });
  $('#formBuku').validate({
    rules: {
      title: {
        required: true,
        minlength: 5
      },
      description: {
        required: true,
        minlength: 5
      },
      qty: {
        required: true,
        // minlength: 5
      },
    },
    messages: {
      title: {
        required: "Masukkan nama buku",
        minlength: "Harap masukkan lebih dari 3 huruf"
      },
      description: {
        required: "Masukkan deskripsi buku",
        minlength: "Harap masukkan lebih dari 3 huruf"
      },
      qty: {
        required: "Masukkan jumlah buku",
        // minlength: "Harap masukkan lebih dari 3 huruf"
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