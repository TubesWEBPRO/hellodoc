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
</div>

<div  style="margin-left:130px;">
<div class="row">
<div class="col-3">

<div class="container" style="border:1px solid #cecece; background-color:white;">
<ul class="list-group list-group-flush">
  <li class="list-group-item"  style="background-color = grey;" >Pilih Tindakan Kebidanan dan Kandungan</li>
  <br>
</ul>
<form>
    <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"><img src="<?= base_url('assets/search2.png')?>" style="width: 20px;"></span>
    </div>
    <input type="text" class="form-control" placeholder="Pilih Tindakan">
    <div>
    <span><button type="button" class="btn btn-secondary"> -> </button> </span>
    </div>
    </div>

    <div class="" style="overflow-y:scroll; overflow-x:hidden;height:150px;">
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Apendikrogram
    </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Bedah Nissen Fundoplication
    </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Bedah Saluran Cerna
    </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Calon Polyp Detection and Removal
    </label>
    </div>
    <div class="form-check">
    <label class="form-check-label">
    <input type="radio" class="form-check-input" name="optradio">Cutting of Abdominal Adhesion
    </label>
    </div>
    </div>
   </form>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
</div>

<div class="col-8">
<h3 style="text-align:center;">Pilih Rumah Sakit Yang Tersedia</h3>

<a href="<?= base_url('index.php/RSinfo_controller')?>" style="text-decoration: none;color:black;">
  <div class="card mt-3">
  <div class="row ">
    <div class="col-md-4">
        <img src="<?= base_url('assets/RSHS.jpg')?>" class="w-60" style="width:162px;height:125px;">
      </div>
      <div class="col-md-8 px-3">
        <div class="card-block px-2" style="margin-left:-70px;">
          <h5>Rumah Sakit Dr. Hasan Sadikin</h5>
        </div>
        <div style="margin-left:-60px;">
          <h6>Jl. Pasteur No. 38 Kota Bandung – Jawa Barat</h6>
        </div>
        <div class="row">
        <div class="col-3" style="margin-right:70px;margin-top:10px;margin-left:-60px;font-size:13px;"><p class="badge badge-secondary">Telp: 022 2034953</p></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;background-color:white;color:grey;border:1px solid #cecece;margin:auto;font-weight: normal;">Lihat Detail</button></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;border:1px solid #cecece;margin:auto;font-weight: normal;">Pesan Rumah Sakit</button></div>
        </div>
      </div>

    </div>
  </div>

</a>

<a href="<?= base_url('index.php/RSinfo_controller1')?>" style="text-decoration: none;color:black;">
  <div class="card mt-3">
  <div class="row ">
    <div class="col-md-4">
        <img src="<?= base_url('assets/RSALISLAM.jpg')?>" class="w-60" style="width:162px;height:125px;">
      </div>
      <div class="col-md-8 px-3">
        <div class="card-block px-2" style="margin-left:-70px;" >
          <h5>RS Al Islam Bandung</h5>
        </div>
        <div style="margin-left:-60px;">
          <h6>Jl. Soekarno Hatta No. 644 Bandung Kota Bandung – Jawa Barat</h6>
        </div>
        <div class="row">
        <div class="col-3" style="margin-right:70px;margin-top:10px;margin-left:-60px;font-size:13px;"><p class="badge badge-secondary">Telp: 022 7565588</p></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;background-color:white;color:grey;border:1px solid #cecece;margin:auto;font-weight: normal;">Lihat Detail</button></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;border:1px solid #cecece;margin:auto;font-weight: normal;">Pesan Rumah Sakit</button></div>
        </div>
      </div>

    </div>
  </div>

</a>

<a href="<?= base_url('index.php/RSinfo_controller2')?>" style="text-decoration: none;color:black;">
  <div class="card mt-3">
  <div class="row ">
    <div class="col-md-4">
        <img src="<?= base_url('assets/RSMuhammadiyah.jpg')?>" class="w-60" style="width:162px;height:125px;">
      </div>
      <div class="col-md-8 px-3">
        <div class="card-block px-2" style="margin-left:-70px;">
          <h5>RS Muhammadiyah Bandung</h5>
        </div>
        <div style="margin-left:-60px;">
          <h6>Jl. KH Ahmad Dahlan No. 53 Kota Bandung – Jawa Barat</h6>
        </div>
        <div class="row">
        <div class="col-3" style="margin-right:70px;margin-top:10px;margin-left:-60px;font-size:13px;"><p class="badge badge-secondary">Telp: 022 7301062</p></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;background-color:white;color:grey;border:1px solid #cecece;margin:auto;font-weight: normal;">Lihat Detail</button></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;border:1px solid #cecece;margin:auto;font-weight: normal;">Pesan Rumah Sakit</button></div>
        </div>
      </div>

    </div>
  </div>

</a>

<a href="<?= base_url('index.php/RSinfo_controller3')?>" style="text-decoration: none;color:black;">
  <div class="card mt-3">
  <div class="row ">
    <div class="col-md-4">
        <img src="<?= base_url('assets/RSAdvent.jpg')?>" class="w-60" style="width:162px;height:125px;">
      </div>
      <div class="col-md-8 px-3">
        <div class="card-block px-2" style="margin-left:-70px;">
          <h5>RS Advent Bandung</h5>
        </div>
        <div style="margin-left:-60px;">
          <h6>Jalan Cihampelas No. 161, Cipaganti, Coblong Kota Bandung – Jawa Barat</h6>
        </div>
        <div class="row">
        <div class="col-3" style="margin-right:70px;margin-top:10px;margin-left:-60px;font-size:13px;"><p class="badge badge-secondary">Telp: 022 2034386</p></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;background-color:white;color:grey;border:1px solid #cecece;margin:auto;font-weight: normal;">Lihat Detail</button></div>
        <div class="col-4"><button type="button" class="btn_btn-warning" style="height:30px;weight:30px;border:1px solid #cecece;margin:auto;font-weight: normal;">Pesan Rumah Sakit</button></div>
        </div>
      </div>

    </div>
  </div>
</a>
</div>  
</div>
</div>
</div>

<?php $this->load->view('Page_footer')?>
