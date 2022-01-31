@if ($pesan = Session::get('sukses'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>{{ $pesan }}</strong>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="close" ></button>
    </div>
@endif
