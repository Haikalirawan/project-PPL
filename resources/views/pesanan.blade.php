@extends('layouts.main')


@section('container')
<!-- CARD PESANAN -->
<p class="fw-bold fs-3 pl-4"><i class="fa-solid fa-cart-shopping"></i> Keranjang anda</p>
<p class="fw-bold fst-italic fs-4 text-secondary pt-2 pl-3">Total : Rp. {{ $totalHarga }}-,</p>
<div class="container-fluid">
    <div class="row">

        @foreach($dataPesanan as $pesanan)
        <div class="col-lg-3">
            <div class="cards pt-2">
                <div class="card" style="width: 18rem;">
                    <img src="/img/{{ $pesanan->thumbnail }}" class="card-img-top" alt="pesanan pertama">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pesanan->title }}</h5>
                        <p class="card-text">Deskripsi - {{ $pesanan->description }}.</p>
                        <p class="card-text text-secondary">Harga - Rp. {{ $pesanan->price }} /kg</p>
                        <p class="card-text text-secondary">Status Produk - {{ ($pesanan->status === "1") ? 'Disetujui' : 'Tidak Disetujui'  }}</p>
                        <p class="card-text text-secondary fst-italic">Tanggal pemesanan : {{ $pesanan->order_date }}</p>
                        <p class="card-text text-success fw-bold fst-italic">Jumlah Pemesanan : {{ $pesanan->amount }}</p>
                        <a href="/dashboard_customer/{{ $dataCustomer->id }}" class="btn btn-outline-danger float-end">Batal</a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

        <div class="spacer" style="height: 30px;"></div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 offset-10">
                    <button type="button" class="btn btn-success btn-lg" data-bs-toggle="modal" data-bs-target="#metodePembayaran">Bayar Sekarang</button>
                </div>
            </div>
        </div>








        <!-- MODAL METODE PEMBAYARAN-->
        <div class="modal fade" id="metodePembayaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Menu pembayaran</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="d-grid gap-2 pt-1">
                                <a class="btn btn-outline-success rounded fs-5" data-bs-toggle="collapse" href="#whatsapp" role="button" aria-expanded="false" aria-controls="whatsapp"><i class="fa-brands fa-whatsapp"></i> Whatsapp</a>
                                <div class="collapse" id="whatsapp">
                                    <div class="card card-body">
                                        1. Buka kontak di hp anda <br>
                                        2. Klik tanda + untuk menambah kontak <br>
                                        3. Beri nama E-mbako Patner pada kolom nama kontak <br>
                                        4. Masukkan nomor 082301989832 pada kolom nomor <br>
                                        5. Buka aplikasi whatsapp anda <br>
                                        6. Cari naam E-mbako Patner <br>
                                        7. Mulai chat dengan kami
                                    </div>
                                </div>
                            </div>
                            <div class="d-grid gap-2 pt-3">
                                <a href="#" class="btn btn-outline-danger rounded fs-5" data-bs-toggle="collapse" data-bs-target="#email" aria-expanded="false" aria-controls="email"><i class="fa-solid fa-envelope"></i> Email me</a>
                                <div class="collapse" id="email">
                                    <div class="card card-body">
                                        1. Buka gmail di hp anda <br>
                                        2. Klik tombol tulis pada pojok bawah untuk memulai percakapan <br>
                                        3. Masukkan email EmbakoPatners@gmail.com pada kolom kepada <br>
                                        4. Masukkan "Penawaran metode pembayaran" pada kolom subjek <br>
                                        5. Tulis pesan gmail anda pada kolom dibawah <br>
                                        6. Anda juga dapat melampirkan dokumen/foto/file pada tombol clip di pojok kanan atas <br>
                                        7. Setelah dirasa cukup, kirim email anda pada kami dengan menekan tombol kirim
                                    </div>
                                </div>
                            </div>


                            <div class="d-grid gap-2 pt-5">
                                <a href="#" class="btn btn-outline-secondary rounded fs-5" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"><i class="fa-solid fa-diamond-turn-right"></i> Pilih Cara Lain</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endsection