<a href="{{ route('admin.author.edit', $model) }}" class="btn btn-warning">Edit</a>
<button href="{{ route('admin.author.destroy', $model) }}" class="btn btn-danger" id="delete">Hapus</button>

<script src="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<link rel="stylesheet" href="{{ asset('assets/plugins/sweetalert2/sweetalert2.min.css') }}">

<!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->

<script>
    $('button#delete').on('click', function(e) {
        e.preventDefault();

        var href = $(this).attr('href');

        Swal.fire({
            title: 'Apakah yakin Hapus?',
            text: "Data tidak bisa dikembalikan !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus saja!'
            }).then((result) => {
            if (result.value) {
                document.getElementById('deleteForm').action = href;
                document.getElementById('deleteForm').submit();
                Swal.fire(
                'Hapus!',
                'Data kamu telah terhapus.',
                'success'
                )
            }
            })

        
    })
</script>