@extends('navbar')
@section('Edit Data Restoran')

@section('konten')
    @foreach($restorant as $resto)
        <div class="col-md-4 formdata text-center">
            <form action="/restorant/update" method ="post">
                @csrf
                <div class="mb-3">
                    <input type=text, name="id", placeholder = "id", required="required", size="65", value="{{$resto->id}}", readonly>
                </div>
                <div class="mb-3">
                    <input type=text, name="nama_pemesan", placeholder = "Nama pemesan", required="required", size="65", value="{{$resto->nama_pemesan}}">
                </div>
                <div class="mb-3">
                    <input type=text, name="no_hp", placeholder = "No hp", required="required", size="65", value="{{$resto->no_hp}}">
                </div>
                <div class="mb-3">
                    <input type=text, name="jumlah_pesanan", placeholder = "Jumlah Pesanan", required="required", size="65", value="{{$resto->jumlah_pesanan}}">
                </div>
                <div class="mb-3">
                    <input type=text, name="harga_total", placeholder = "e.g Rp.5000", required="required", size="65", value="{{$resto->harga_total}}">
                </div>
                <div class="mb-3">
                    <input type=text, name="status", placeholder = "Take away", required="required", size="65", value="{{$resto->status}}">
                </div>
                <input type="submit" value="Konfirmasi Perubahan">
            </form>
        </div>
    @endforeach
@endsection
