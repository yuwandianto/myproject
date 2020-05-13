<style>
    a:hover {
        text-decoration: none;
    }
    .form-control {
      width: 100%;
    }
</style>
<div class="main">
  <div class="main-inner">
    <div class="container">
    
        <div class="row">
            <div class="span12">
                <?php if ( $this->session->flashdata('pesan')): ?>
                  <div class="alert <?= $this->session->flashdata('jenis') ?>">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?= $this->session->flashdata('pesan') ;?>
                  </div>
                <?php endif;?>
                <!-- <div class="widget widget-nopad">
                    <div class="widget-content" style="padding: 20px;">
                        <div class="news-item-detail">
                            <a href="javascript:void(0)">BACALAH PETUNJUK PENDAFTARAN DI BAWAH INI !</a>
                            <ol style="margin-left: 14px; font-size: 10pt">
                                <li>Setiap pendaftar harus melengkapi data sesuai dengan formulir yang disediakan (yang tidak melengkapi data maka dinyatakan membatalkan proses pendaftaran)</li>
                                <li>Nomor Induk Siswa Nasional bersifat UNIK dan hanya bisa digunakan untuk melakukan pendaftaran satu kali</li>
                                <li>Calon peserta didik berusia paling tinggi 21 (dua puluh satu) tahun pada tanggal 13 Juli 2020 dengan dibuktikan akta kelahiran atau surat keterangan lahir yang dilegalisasi oleh lurah/kepala desa sesuai dengan domisili calon peserta didik.</li>
                                <li>Calon peserta didik harus memiliki ijazah/surat keterangan lulus atau bentuk lain yang sejenis kecuali bagi calon peserta didik yang berasal dari Sekolah di luar negeri.</li>
                                <li>Calon peserta didik hanya diizinkan mendaftar sekali, dan setelah terdaftar tidak dapat mencabut kembali</li>
                                <li>Peserta didik baru yang telah diterima (lulus seleksi) wajib mendaftar ulang dengan menyerahkan tanda bukti pendaftaran/diterima dan dokumen lain yang menjadi persyaratan sesuai jadwal yang ditentukan.</li>
                                <li>Jika hasil verifikasi dinyatakan adanya pemalsuan dokumen maka peserta didik baru tersebut dinyatakan gugur/batal diterima di sekolah tersebut.</li>
                                <li>Setelah mengisi formulir pendaftaran calon peserta didik dapat mencetak bukti pendaftaran</li>
                            </ol>
                        </div>

                    </div>
                </div> -->
            </div>
        </div>
      <div class="row">
        <div class="span9">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Kelengkapan Data Pendaftar</h3>
              
            </div>
            <!-- /widget-header -->
            <div class="widget-content" style="padding: 10px">

              <div class="widget small-stats-container">
                  <br>                 
                <?= form_open('siswa/lengkapidata', 'class="form-horizontal"');?>
									<fieldset>
                    
                    <div class="control-group">											
											<label class="control-label" for="nisn">NISN</label>
											<div class="controls">
												<input type="text" class="span4" value="<?= $siswa['nisn'];?>" readonly>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

										
										<div class="control-group">											
											<label class="control-label" for="nama">Nama Lengkap</label>
											<div class="controls">
												<input type="text" class="span7" name="nama" id="nama" value="<?= $siswa['nama'];?>" required>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                    <div class="control-group">											
											<label class="control-label" for="tempat_lahir">Tempat Lahir</label>
											<div class="controls">
												<input type="text" class="span7" name="tempat_lahir" id="tempat_lahir" value="<?= $siswa['tempat_lahir'];?>" required>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                    <div class="control-group">											
											<label class="control-label" for="nama">Tanggal Lahir</label>
											<div class="controls">
                        <table>
                          <tr>
                            <td>
												      <input type="text" class="span1" name="tgl_lahir" id="tgl_lahir" value="<?= $siswa['tgl_lahir'];?>" required> 
                            </td>
                            <td> - </td>
                            <td>
												      <input type="text" class="span1" name="bln_lahir" id="bln_lahir" value="<?= $siswa['bln_lahir'];?>" required>
                            </td>
                            <td> - </td>
                            <td>
												      <input type="text" class="span2" name="thn_lahir" id="thn_lahir" value="<?= $siswa['thn_lahir'];?>" required>
                            </td>
                          </tr>
                        </table>
                        <?php if (form_error('tgl_lahir')) {echo '<p>'.form_error('tgl_lahir').'</p>';} ;?>
                        <?php if (form_error('bln_lahir')) {echo '<p>'.form_error('bln_lahir').'</p>';} ;?>
                        <?php if (form_error('thn_lahir')) {echo '<p>'.form_error('thn_lahir').'</p>';} ;?>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                    <div class="control-group">											
											<label class="control-label" for="jk">Jenis Kelamin</label>
											<div class="controls">
                        <table>
                          <tr>
                            <td width="13px">
												      <input type="radio" name="jk" id="jk" value="1" <?php if ($siswa['jk'] == '1') { echo 'checked';} ;?> required> 
                            </td>
                            <td> Laki-laki </td>
                            <td width="20px"></td>
                            <td width="13px">
												      <input type="radio" name="jk" id="jk" value="2" <?php if ($siswa['jk'] == '2') { echo 'checked';} ;?> required>
                            </td>
                            <td> Perempuan </td>
                          </tr>
                        </table>

											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                    <div class="control-group">											
											<label class="control-label" for="agama">Agama</label>
											<div class="controls">
												<select name="agama" id="agama" class="span4" required>
                          <option value="">-- Pilih agama yang dianut --</option>
                          <option <?php if ($siswa['agama'] == 'Islam') { echo 'selected'; } ;?>>Islam</option>
                          <option <?php if ($siswa['agama'] == 'Kristen') { echo 'selected'; } ;?>>Kristen</option>
                          <option <?php if ($siswa['agama'] == 'Protestan') { echo 'selected'; } ;?>>Protestan</option>
                          <option <?php if ($siswa['agama'] == 'Hindu') { echo 'selected'; } ;?>>Hindu</option>
                          <option <?php if ($siswa['agama'] == 'Budha') { echo 'selected'; } ;?>>Budha</option>
                          <option <?php if ($siswa['agama'] == 'Konghucu') { echo 'selected'; } ;?>>Konghucu</option>
                        </select>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                    <div class="control-group">											
											<label class="control-label" for="penerima_kip">Penerima KIP</label>
											<div class="controls">
                        <table>
                          <tr>
                            <td width="13px">
												      <input type="radio" name="penerima_kip" id="penerima_kip" value="Ya" <?php if ($siswa['penerima_kip'] == 'Ya') { echo 'checked';} ;?> required> 
                            </td>
                            <td> Ya <td>
                            <td width="20px"></td>
                            <td width="13px">
												      <input type="radio" name="penerima_kip" id="penerima_kip" value="Tidak" <?php if ($siswa['penerima_kip'] == 'Tidak') { echo 'checked';} ;?> required>
                            </td>
                            <td> Tidak </td>
                          </tr>
                        </table>

											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                    <div class="control-group">											
											<label class="control-label" for="lamat_jalan">Alamat</label>
											<div class="controls">
												<textarea name="alamat_jalan" id="alamat_jalan" rows="2" class="span7" placeholder="Nama Jalan, gang, nomor rumah"><?= $siswa['alamat_jalan'];?></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                    <div class="control-group">											
											<label class="control-label" for="rt">RT / RW</label>
											<div class="controls">
                        <table>
                          <tr>
                            <td>
                              <input type="text" class="span1" name="rt" id="rt" value="<?= $siswa['rt'];?>" placeholder="RT" required>
                            </td>
                            <td> / </td>
                            <td>
                              <input type="text" class="span1" name="rw" id="rw" value="<?= $siswa['rw'];?>" placeholder="RW" required>
                            </td>
                          </tr>
                        </table>
												
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                    <div class="control-group">											
											<label class="control-label" for="desa">Desa</label>
											<div class="controls">
												<input type="text" class="span7" name="desa" id="desa" value="<?= $siswa['desa'];?>" required placeholder="Nama desa tempat tinggal sekarang">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                    <div class="control-group">											
											<label class="control-label" for="kecamatan">Kecamatan</label>
											<div class="controls">
												<input type="text" class="span7" name="kecamatan" id="kecamatan" value="<?= $siswa['kecamatan'];?>" required placeholder="Nama kecamatan tempat tinggal sekarang">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                    <div class="control-group">											
											<label class="control-label" for="sekolah_asal">Sekolah Asal</label>
											<div class="controls">
												<input type="text" class="span7" name="sekolah_asal" id="sekolah_asal" value="<?= $siswa['sekolah_asal'];?>" required placeholder="Nama sekolah jenjang sebelumnya">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                    <div class="control-group">											
											<label class="control-label" for="tahun_lulus">Tahun Lulus</label>
											<div class="controls">
												<input type="number" class="span3" name="tahun_lulus" id="tahun_lulus" value="<?= $siswa['tahun_lulus'];?>" required placeholder="Tahun lulus jenjang sebelumnya">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

                    <div class="control-group">											
											<label class="control-label"></label>
											<div class="controls">
												<input type="submit" class="btn btn-success">
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->

									</fieldset>
								<?= form_close() ;?>

              </div>
              
            </div> <!-- /widget-content -->
                  
          </div>
        
    
          <!-- /widget -->

        </div>
        <!-- /span6 -->

        <div class="span3">
          <div class="widget widget-nopad">
            <div class="widget-header"> <i class="icon-list-alt"></i>
              <h3> Foto Pendaftar</h3>
              
            </div>
            <!-- /widget-header -->
            <div class="widget-content" style="padding: 10px">

              <div class="widget small-stats-container" style="text-align: center">            
                <img src="./uploads/foto/<?=$siswa['foto'];?>" width="60%" alt="Foto Pendaftar">
                <hr>
                <?= form_open_multipart('siswa/uplodfoto');?>
                <input type="file" name="foto" id="foto" required>
                <button type="submit" class="btn btn-success">Simpan</button>
                <?= form_close() ;?>
              </div>
              
            </div> <!-- /widget-content -->
                  
          </div>
        
    
          <!-- /widget -->

        </div>
        <!-- /span6 -->


      </div>
      <!-- /row --> 
    </div>
    <!-- /container --> 
  </div>
  <!-- /main-inner --> 
</div>
<!-- /main -->