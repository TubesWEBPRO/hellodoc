<?php $this->load->view('Page_header')?>

<div class="col-12 " style="margin-top: 63px; background-color: blue; margin-top: 96px; height: 184px;">
  <div class="float-right col-5">
        <img src="<?= base_url('assets/Home_doc.png')?>" style="width: 127px; margin-top: 0px; margin-bottom: 0px; position: absolute; left: 198px;">
    </div>
    <div class="hdr-2" style="margin-left: 85px; padding-top: 40px;">
            <div aria-label="breadcrumb">
            </div>
            <h3 class="text-white jdl" style="margin-bottom: 0px;">Temukan Dokter di Sekitar Anda</h3>
            <ul class="text-white list">
                <li>Pilih dan Buat Janji dengan Dokter</li>
                <li>Dokter dari Rumah Sakit Ternama</li>
                <li>Jadwal Booking Dokter yang Pasti</li>
            </ul>
        </div>
      </div>




  

<!-- Modal -->
<div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Filter</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p style="color:#7C7C7C;">Hari Praktik Dokter</p>
        <label class="switch">
          <input type="checkbox">
          <span class="slider round"></span>
        </label>
        <small class="text-muted">Tersedia Besok</small>
        <p style="color:#7C7C7C;">Buat Janji sebelum pukul 13:00 WIB untuk konsultasi hari ini.</p>
        <p>Pilih Hari</p>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Senin</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Selasa</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Rabu</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Kamis</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Jumat</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Sabtu</label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
          <label class="form-check-label" for="defaultCheck1">Minggu</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary btn-block" data-dismiss="modal">Terapkan</button>
      </div>
    </div>
  </div>
</div>

    <div class="p-4" style="margin-left: 76px;">
          <h3 style="margin-bottom: 30px;">Cari Dokter</h3>
            <!--1-->
                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px; margin-bottom: 30px;">
                  <div class="d-flex flex-row flex-wrap"> 
                  <div class="p-1">
                      <img src="<?= base_url('assets/dr.3.jpg')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Ni Putu Titien Sri Kusumayanti</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;"></p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Bandung</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-left:15px;">RS Al Islam Bandung</p>
                    </div>

                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp135.000</p>
                      <div class="doctor-button" id="button">
                        <a href="<?= base_url('index.php/profildokter')?>" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div>  

                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px; margin-bottom: 30px;">
                  <div class="d-flex flex-row flex-wrap"> 
                    <div class="p-1">
                      <img src="<?= base_url('assets/dr.8.jpg')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Amelia Abdullah</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;"></p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Bandung</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px;margin-left:15px;">RS Muhammadiyah Bandung</p>
                    </div>

                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp250.000</p>
                      <div class="doctor-button" id="button">
                        <a href="<?= base_url('index.php/Profildokter_controller1')?>" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div> 

                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px; margin-bottom: 30px;">
                  <div class="d-flex flex-row flex-wrap"> 
                    <div class="p-1">
                      <img src="<?= base_url('assets/dr.5.jpg')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Inneke Sirowanto</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;"></p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Bandung</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px;margin-left:15px;">RS Advent Bandung</p>
                    </div>

                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp200.000</p>
                      <div class="doctor-button" id="button">
                        <a href="<?= base_url('index.php/Profildokter_controller2')?>" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div>  

                <div class="card p-2" style="width: 667px; height: 130px; margin-top: 16px; margin-bottom: 30px;">
                  <div class="d-flex flex-row flex-wrap"> 
                    <div class="p-1">
                      <img src="<?= base_url('assets/dr.10.jpg')?>" style="border-radius: 100%; margin-top: 10px; margin-left:5px;" width="80px">
                    </div>

                    <div class="card-body p-1" style="margin-left: 25px; margin-top:10px;">
                      <h6 class="card-title">dr. Olivia Franciska Laksmana</h6>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-top:-5px;"></p>
                      <i><img src="<?= base_url('assets/location3.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px; margin-bottom: 4px; margin-left:15px;">Bandung</p>
                      <i><img src="<?= base_url('assets/healthcare.png')?>" width="15px;" style="position:absolute; right: 523px; margin-top:0px;"></i>
                      <p class="card-text" style="font-size: 11px;margin-left:15px;">RS Dr. Hasan Sadikin</p>
                    </div>

                    <div class="p-1">
                      <p class="text-primary" style="margin: 10px; font-size: 13px;">Biaya mulai dari</p>
                      <p class="text-primary" style="font-weight: bold; margin-left: 24px; font-size: 14px; margin-top:-10px;">Rp150.000</p>
                      <div class="doctor-button" id="button">
                        <a href="<?= base_url('index.php/Profildokter_controller3')?>" class="btn btn-outline-secondary btn-detail">Lihat Detail</a>
                        <a href="#" class="btn btn-warning btn-janji">Buat Janji</a>
                      </div>
                    </div>
                  </div>  
                </div> 
      </div> 


<?php $this->load->view('Page_footer')?>
<hr style="margin-top: 40px;">
<div class="footer-copyright" style="text-align: center;">
  <p>2020 HelloDoc!</p>
</div>