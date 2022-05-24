@extends('navbar')

@section('Data Restoran')

@section('konten')
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="/css/datareservasi.css">

<div class="container">
    <h2> Data Reservasi Restorant </h2>
	<div class="row">
        <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
                <thead>
                    <th>nama pemesan</th>
                    <th>no Hp</th>
                    <th>jumlah Pesanan</th>
                    <th>harga Total</th>
                    <th>status</th>
                </thead>
            <tbody>
                @foreach($restorant as $resto)
                <tr>
                    <td>{{$resto->nama_pemesan}}</td>
                    <td>{{$resto->no_hp}}</td>
                    <td>{{$resto->jumlah_pesanan}}</td>
                    <td>{{$resto->harga_total}}</td>
                    <td>{{$resto->status}}</td>
                    <td>
                        <a href="/restorant/edit/{{ $resto->nama_pemesan}}">Ubah</a>

                        <a style="color:red;" href="/restorant/hapus/{{ $resto->nama_pemesan}}">Batalkan</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
