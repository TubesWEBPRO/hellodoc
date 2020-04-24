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
            <table>
                <tr>
                <td>
                   
                    <div class="seacrhIcon">
                        
                    </div>
                </td>
                <td>
                    
                    <div class="searchIcon">
                
                    </div>
                    
                </td>

                </tr>

            </table>
        </div>
    </div>

    <div class="container contain-cariDokter" style="margin-top: 10px; margin-left: 62px;">
        <h3 class="text-black subJudul" style="margin-left: 24px; margin-bottom: 16px; margin-top: 40px;">Pilih Spesialisasi Dokter</h3>
        <div class="d-flex flex-row flex-wrap m-4" style="margin-bottom: 0px;"> 
                <a href="<?= base_url('index.php/detaildokter')?>" style=" text-decoration: none;"><div class="p-0 w-30 background-top-inner" style="background: url('<?=base_url('assets/card1.jpg') ?>') top; width: 300px; height: 166px;">
                    <span class="badge badge-primary" style="margin-left: 89px; margin-right: 89px;">Dokter Kandungan</span>
                </div></a>
                
        </div>
        <div class="d-flex flex-row flex-wrap m-4"> 
                
        </div>
    </div>
        
<?php $this->load->view('Page_footer')?>
<hr style="margin-top: 40px;">
<div class="footer-copyright" style="text-align: center;">
  <p>2020 HelloDoc!</p>
</div>