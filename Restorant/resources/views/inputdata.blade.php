@extends('navbar')
@section('Input Data Restorant')

@section('konten')

    <div class="col-md-4 formdata text-center">
        <div class="table">
        <form action="/restorant/store" method ="post">
            @csrf
            <div class="mb-3">
                <input type=text, name="nama_pemesan", placeholder = "Nama pemesan", required="required", size="65">
            </div>
            <div class="mb-3">
                <input type=text, name="no_hp", placeholder = "No hp", required="required", size="65">
            </div>
            <div class="mb-3">
                <input type=text, name="jumlah_pesanan", placeholder = "Jumlah Pesanan", required="required", size="65">
            </div>
            <div class="mb-3">
                <input type=text, name="harga_total", placeholder = "e.g Rp.5000", required="required", size="65">
            </div>
            <div class="mb-3">
                <input type=text, name="status", placeholder = "Take away", required="required", size="65">
            </div>
            <input type="submit" value="Buat Pesanan">
        </form>
        </div>
    </div>

@endsection
