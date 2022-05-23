@extends('navbar')

@section('konten')
<div class="card-text">
                <div class="card-header1">
                 <h1 style="font-size:3.5vw; font-family:monospace; padding-top:15px; padding-left:55px";>fzl French Fries</h1>
                     </div>
                        <div class="card-body">
                        <blockquote class="blockquote mb-0">
                        <p style="font-size:20px;">Welcome to french fries website. enjoy it your order</p>
                </div>
            </div>
            <div class="card-text">
                <div class="card-header">
                 <h1 style="font-family:monospace; font-size:35px; padding-left:50px";>Varian Menu<br><br></h1>
            </div>
<div class="row">
           <div class="card1 col-sm-3" style= "width:300px">
             <img src="images/kentanggorengori.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title"> <br><br> KENTANG GORENG ORIGINAL</h4>
                    <p class="card-text">kentang goreng original dengan cita rasa yang masih tradisional dan sangat enak loch.</p>
                    <a href = "/tambahdata" class="btn btn-primary">pilih</a>
                </div>
            </div>

            <div class="card2 col-sm-3" style= "width:340px">
             <img src="images/mayo.jpg" alt="Card image">
                <div class="card-body">
                    <h4 class="card-title"><br><br>KENTANG GORENG MAYO</h4>
                    <p class="card-text">kentang goreng Mayones adalah favorit best seller dari toko kami. dengan cita rasa mayones yang sempurna dan bumbu rahasia.</p>
                    <a href = "/tambahdata" class="btn btn-primary">pilih</a>
                </div>
            </div>

        <div class="card3 col-sm-3" style= "width:300px">
            <img src="images/setan.jpg" alt="Card image">
            <div class="card-body">
                <h4 class="card-title">KENTANG GORENG SETAN</h4>
                <p class="card-text">kentang goreng setan adalah kentang goreng dengan bumbu cabai dan memilki beberapa level yang membuat anda semakin tertantang</p>
                <a href = "/tambahdata" class="btn btn-primary">pilih</a>
            </div>
        </div>

        <div class="card-text">
                <div class="card-header">
                 <h1 style="font-family: monospace font-size 35px; padding-left:50px";>Varian Topping<br><br></h1>
        </div>

      {{-- varian topping --}}
      <div class="row">
        <div class="sauce col-sm-6" style="width:200px;">
            <div class="card-body">
                 <h5 class="Card title">Saus Bolognese</h5>
                 <h5 class="card-title">Rp.5.000</h5>
                 <p class="card-text">Saus Bolognese adalah saus berbasis daging dalam masakan Italia, khas kota Bologna.</p>
                 <a href = "/tambahdata" class="btn btn-primary">pilih</a>
             </div>
         </div>
        <div class="sauce col-sm-6" style="width:200px; margin-left:20px;">
             <div class="card-body">
                <h5 class="Card title">Saus Cabai rawit</h5>
                <h5 class="card-title">Rp.7.000</h5>
                <p class="card-text">Saus cabai rawati asli dari cabai-cabai pilihan yang berasal dari petani</p>
                <a href = "/tambahdata" class="btn btn-primary">pilih</a>
                </div>
            </div>
        <div class="sauce col-sm-6" style="width:200px; margin-left:20px;">
                <div class="card-body">
                    <h5 class="Card title">Saus barbeque</h5>
                    <h5 class="card-title">Rp.8.000</h5>
                    <p class="card-text">Saus barbeque adalah saus yang memiliki cita rasa yang unik karena rasa yang didapat yaitu asam, manis, gurih, dan juga sedikit pedas.</p>
                    <a href = "/tambahdata" class="btn btn-primary">pilih</a>
                </div>
            </div>
            <div class="sauce col-sm-6" style="width:200px; margin-left:20px;">
                <div class="card-body">
                    <h5 class="Card title">Saus Balado</h5>
                    <h5 class="card-title">Rp.5.000</h5>
                    <p class="card-text">Balado merupakan salah satu masakan khas Indonesia dari Sumatra Barat yang memiliki citarasa pedas</p>
                    <a href = "/tambahdata" class="btn btn-primary">pilih</a>
                </div>
            </div>
            <div class="sauce col-sm-6" style="width:200px; margin-left:20px;">
                <div class="card-body">
                    <h5 class="Card title">Black papper</h5>
                    <h5 class="card-title">Rp.8.000</h5>
                    <p class="card-text">Saus black pepper atau peppercorn sauce seringkali jadi pilihan di restoran steak. Cita rasa pedas dan sensasi hangat dari lada hitam ini cocok disajikan saat cuaca dingin.</p>
                    <a href = "/tambahdata" class="btn btn-primary">pilih</a>
                </div>
            </div>
        </div>
        <div class="card-text">
                <div class="card-header">
                 <h1 style="font-size:2vw; font-family: monospace font-size 30px; padding-left:50px; margin-top:10px";>Tentang kami<br><br></h1>

                <div class="w3-display-container">
                    <img src="images/cafe.jpg" alt="cafe" style="width:100%" class="w3-opacity";>
                    <h1 style="margin-top:5px; padding-top:20px; margin-left:30px";>Tentang Kami</h1>
                    <div class="top-text" style="margin-left:30px";>fzl Friench fries ditemukan oleh chef indonesia yang bernama sutoyo. beliau menemukan kentang goreng ketika sedang iseng-iseng memotong <br> kentang. ketika itu sutoyo berpikiran untuk membuat kentang seperti stick jajanan. bottom-left</div>
                </div>
            
    <div class="card-header" style="margin-top:30px";>
        <h1 style="font-size:35px; padding-left:50px";>JAM OPERASIONAL<br><br></h1>
        <div class="w3-row">
            <div class="w3-half">
            <p>senin 10.00 - 24.00</p>
            <p>selasa 10.00 - 24.00</p>
            <p>Rabu 10:00 - 24:00</p>
        </div>
        <div class="w3-half">
            <p>Jumat 10:00 - 12:00</p>
            <p>Sabtu 10:00 - 23:00</p>
             <p>Minggu 10:00 - 24.00</p>
        </div>
    </div>

    {{-- footer --}}
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>MENU</h3>
                        <ul>
                            <li><a href="#">KENTANG GORENG ORI</a></li>
                            <li><a href="#">KENTANG GORENG MAYO</a></li>
                            <li><a href="#">KENTANG GORENG SETAN</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>SERVICE</h3>
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">About</a></li>
                            <li><a href="#">Countact</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>FZL frienchfries</h3>
                        <p>fzl Friench fries ditemukan oleh chef indonesia yang bernama sutoyo. beliau menemukan kentang goreng ketika sedang iseng-iseng memotong kentang. ketika itu sutoyo berpikiran untuk membuat kentang seperti stick jajanan. bottom-left.</p>
                    </div>
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">FZL frienchfries©2018</p>
            </div>
        </footer>
    </div>
@endsection
