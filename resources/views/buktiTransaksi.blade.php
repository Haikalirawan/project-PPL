@extends('layouts.mainMitra')

@section('container')

<div class="container-fluid">
    <div class="row justify-content-start py-2">
        <div class="col-lg">
            <h5 class="fw-bold pb-5">Bukti Transaksi Produk</h5>

            <div class="col-lg-12">
                <img src="{{ asset('storage/'. $dataPembayaran->image) }}" class="img-fluid img-thumbnail rounded mx-auto d-block mb-2" width="500" height="500" alt="Belum ada Transaksi">
            </div>
            <div class="col-lg-2 offset-5">
                <div class="d-grid gap-2">
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal">Ambil Uang saya</button>
                </div>
            </div>


        </div>
    </div>
</div>







<!-- MODAL-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Data diri anda</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="Price" class="form-label">Pilih Bank : </label>
                        <select class="form-select" name="status" aria-label="Default select example">
                            <option selected>Silahkan Pilih</option>
                            <option value="BCA">BCA</option>
                            <option value="BRI">BRI</option>
                            <option value="BNI">BNI</option>
                            <option value="MANDIRI">MANDIRI</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="Price" class="form-label">No Rekening : </label>
                        <input class="form-control" name="rekening" type="text" required placeholder="6101xxxxxxxxxxxx">
                    </div>
                    <div class="mb-3">
                        <label for="Price" class="form-label">Nama Lengkap : </label>
                        <input class="form-control" name="rekening" type="text" required placeholder="Nama yang tertera pada buku tabungan">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal">Ajukan</button>
            </div>
        </div>
    </div>
</div>

@endsection