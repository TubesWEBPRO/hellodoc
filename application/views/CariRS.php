<?php $this->load->view('Page_headerdokter')?>

<body>
    <div class="col-12 " style="background-position: right bottom;margin-top:63px;background-image:linear-gradient(#00b2ff, #006bff),url('<?=base_url('assets/caridokter.png') ?>')">
        <div class="hdr-2">
            <div aria-label="breadcrumb">
                <ol class="breadcrumb bg-transparent">
                    <li class="breadcrumb-item "><a href="#" class="text-white">Beranda</a></li>
                    <li class="breadcrumb-item "><a href="#" class="text-white">Pilih Rumah Sakit</a></li>
                </ol>
            </div>
            <h3 class="text-white jdl">Cari Rumah Sakit</h3>
            <ul class="text-white list">
                <li>Temukan rumah sakit yang tepat dan terdekat dari lokasi</li>
                <li>Bandingkan estimasi biaya tindakan medis dari berbagai rumah sakit dan klinik terbaik di Indonesia</li>
                <li>Booking jadwal konsultasi dengan dokter pilihanmu</li>
            </ul>
            <table>
                <tr>
                <td>
                    <p class="text-white srch">Saya mencari informasi mengenai:</p>
                    <div class="seacrhIcon">
                        <i><img src="<?= base_url('assets/search2.png')?>" width="20px;" style="position:absolute; left: 193px; margin-top:15px;"></i>
                        <input type="search" id="searchSpecialities" class="searchProcedure" placeholder="Cari Rumah" autocomplete="off">
                    </div>
                </td>
                <td>
                    <p class="text-white lok">Lokasi:</p>
                    <div class="searchIcon">
                        <i><img src="<?= base_url('assets/location1.png')?>" width="23px;" style="position:absolute; left: 670px; margin-top:15px;"></i>
                        <i><img src="<?= base_url('assets/location2.png')?>" width="35px;" style="position:absolute; left: 968px; margin-top:11px;"></i>
                        <input type="search" class="searchLocation" placeholder="Semua Lokasi" disabled>
                    </div>
                    
                </td>

                <td><button type="button" class="btn btn-warning btnCari">Cari</button></td>
                </tr>

            </table>
        </div>
    </div>
</div>


<div class="list-wraper">


<div class="row justify-content-md-center">
<div class="col-md-3" style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('index.php/DetailRS_controller')?>"> <img class="card-img-top" src="<?= base_url('assets/RS-card_1.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-card" href="">Cek Kolesterol</a> <br>
    <a class="isi-card" href="">Tes Narkoba</a> <br>
    <a class="isi-card" href="">Tes HIV</a> <br>
    <a class="isi-card" href="">Profil Lemak</a> <br>
  </div>
</div>
<a href="" class="pil-lanjutan" style="font-size:10px;">Lihat Semua Laboratorium Klinik</a>
</div>

<div class="col-md-3"  style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('index.php/DetailRS_controller')?>""> <img class="card-img-top" src="<?= base_url('assets/RS-card_2.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-card" href="">Endoskopsi</a> <br>
    <a class="isi-card" href="">Oprasi turun Berok</a> <br> <br> <br>
  </div>
</div>
<a href="" class="pil-lanjutan" style="font-size:10px;">Lihat Semua Sistem Pencernaan</a>
</div>

<div class="col-md-3" style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('index.php/DetailRS_controller')?>""> <img class="card-img-top" src="<?= base_url('assets/RS-card_3.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-card" href="">Oprasi caesar</a> <br>
    <a class="isi-card" href="">Melahirkan Normal</a> <br>
    <a class="isi-card" href="">Bayi Tabung</a> <br>
    <a class="isi-card" href="">Vaksin HPV</a> <br>
  </div>
</div>
<a href="<?= base_url('index.php/DetailRS_controller')?>"" class="pil-lanjutan" style="font-size:10px;">Lihat Semua Kebidanan dan Kandungan</a>
</div>

</div>

<div class="row justify-content-md-center">
<div class="col-md-3" style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('index.php/DetailRS_controller')?>""> <img class="card-img-top" src="<?= base_url('assets/RS-card_4.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-card" href="">CT scan</a> <br>
    <a class="isi-card" href="">MRI scan</a> <br>
    <br> <br>
  </div>
</div>
<a href="" class="pil-lanjutan" style="font-size:10px;">Lihat Semua Radiologi</a>
</div>

<div class="col-md-3" style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('index.php/DetailRS_controller')?>""> <img class="card-img-top" src="<?= base_url('assets/RS-card_5.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-card" href="">Oprasi Katarak</a> <br>
    <a class="isi-card" href="">LASIK</a> <br>
    <a class="isi-card" href="">Pengobatan Mata Juling</a> <br>
     <br>
  </div>
</div>
<a href="" class="pil-lanjutan" style="font-size:10px;">Lihat Semua Mata</a>
</div>

<div class="col-md-3 " style="margin-bottom:40px;">
<div class="card" style="width: 18rem;">
  <a href="<?= base_url('index.php/DetailRS_controller')?>""> <img class="card-img-top" src="<?= base_url('assets/RS-card_6.jpg')?>" alt="Card image cap"> </a>
  <div class="card-body">
    <a class="isi-card" href="" style="">Sunat</a> <br>
    <a class="isi-card" href="">ESWL</a> <br>
    <a class="isi-card" href="">USG Prostat</a> <br>
     <br>
  </div>
</div>
<a href="" class="pil-lanjutan"style="font-size:10px;" align:"right">Lihat Semua Saluran Kemih</a>
</div>

</div>
</div>


</div>    <!-- style="background-image: linear-gradient(to left, rgba(0,255,255,0) 19%, #3670d2) -->

<?php $this->load->view('Page_footer')?>