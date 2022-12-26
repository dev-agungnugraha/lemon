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

                <!-- Date -->
                <div class="form-group">
                  <label>Tanggal Kontrak:</label>
                    <div class="input-group date" id="reservationdate" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdate" value="{{ old('tglkontrak') }}"/>
                        <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
                </div>

                <!-- Date -->
                <div class="form-group">
                  <label>Tanggal SPMK:</label>
                    <div class="input-group date" id="reservationdatespmk" data-target-input="nearest_">
                        <input type="text" class="form-control datetimepicker-input" data-target="#reservationdatespmk" value="{{ old('tglspmk') }}"/>
                        <div class="input-group-append" data-target="#reservationdatespmk" data-toggle="datetimepicker">
                            <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                        </div>
                    </div>
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
<link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
<!-- Select2 -->
<script src="{{ asset('assets/plugins/select2/js/select2.full.min.js') }}"></script>
<!-- daterange picker -->
<!-- <link rel="stylesheet" href="{{ asset('assets/plugins/daterangepicker/daterangepicker.css') }}"> -->
<!-- InputMask -->
<!-- <script src="{{ asset('assets/plugins/moment/moment.min.js') }}"></script> -->
<script>
$(function () {

  //Initialize Select2 Elements
  $('.select2').select2()

  //Initialize Select2 Elements
  $('.select2bs4').select2({
    theme: 'bootstrap4'
  })

  //Datemask dd/mm/yyyy
  $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });
    //Date picker
    $('#reservationdatespmk').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

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