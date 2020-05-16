<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SKL</title>
    <style type="text/css">
            body {
                width: 100%;
                height: 100%;
                margin: 0;
                padding: 0;
                background-color: #Fff;
                font: 12pt "Times New Roman", Times, serif;
            }
            * {
                box-sizing: border-box;
                -moz-box-sizing: border-box;
            }
            .page {
                width: 210mm;
                min-height: 297mm;
                padding: 10mm 20mm;
                margin: 10mm auto;
                border: 1px #fff solid;
                border-radius: 5px;
                background: white;
                box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
            }
            .subpage {
                /* padding: 1cm; */
                border: 5px rgb(255, 255, 255) solid;
                height: 257mm;
                outline: 2cm #FFF solid;
            }
            
            @page {
                size: A4;
                margin: 0;
            }
            @media print {
                html, body {
                    width: 210mm;
                    height: 297mm;        
                }
                .page {
                    margin: 0;
                    /* padding-left: 20mm; */
                    border: initial;
                    border-radius: initial;
                    width: initial;
                    min-height: initial;
                    box-shadow: initial;
                    background: initial;
                    page-break-after: always;
                    /* background-color: khaki; */
                }
            }
            h1, h2, h3, h4, h5 {
                padding: 0;
                margin: 0;
            }
            .tengah {
                text-align: center;
            }
            .kanan {
                text-align: right;
                padding-right: 4px;
                border-right-style:hidden;
            }

            table {
                width: 100%;
                margin: 0;
            }
            p { margin : 0}
        </style>
</head>
<body>
    <div class="book">
        <div class="page">
            <div class="subpage">
                <table style="border-bottom: 2px black; border-bottom-style: double;">

                    <tr>
                        <td>
                            <img src="<?= base_url('assets');?>/images/logo_prov.png" width="70px" alt="Logo Provinsi">
                        </td>
                        <td class="tengah">
                            <h4>
                                PEMERINTAH PROVINSI KALIMANTAN SELATAN <br>
                                DINAS PENDIDIKAN DAN KEBUDAYAAN
                            </h4>
                            <h2>SMA NEGERI 1 JORONG</h2>
                            <small>Alamat : Jln. A Yani Km. 96 Kec. Jorong Kab. Tanah Laut Kode Pos 70882 Tlp 08115173836</small>
                        </td>
                    </tr>
                </table>
                <br>
                <div class="tengah">
                    <h2><u>SURAT KETERANGAN</u></h2>
                    <h4>Nomor : 421.3/156/SMA-JRG/2020</h4>
                </div>
                <br><br><br><br>
                <p>Yang bertanda tangan di bawah ini, Kepala Sekolah Menengah Atas (SMA) Negeri 1 Jorong, Kab. Tanah Laut menerangkan bahwa :</p>
                <br>
                <table>
                    <tr>
                        <td style="padding-left: 20px;">Nama</td>
                        <td>:</td>
                        <td><?= $siswa['nama'] ;?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 20px;">Tempat dan Tanggal Lahir</td>
                        <td>:</td>
                        <td><?= $siswa['tempat_lahir'].', '.$siswa['tgl_lahir'] ;?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 20px;">Nomor Induk Siswa Nasional</td>
                        <td>:</td>
                        <td><?= $siswa['nisn'] ;?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 20px;">Nomor Pendaftaran</td>
                        <td>:</td>
                        <td><?= $siswa['nomor_daftar'] ;?></td>
                    </tr>
                    <tr>
                        <td style="padding-left: 20px;">Sekolah Asal</td>
                        <td>:</td>
                        <td><?= $siswa['sekolah_asal'] ;?></td>
                    </tr>
                </table>
                <br><br>
                <p>Berdasarkan Keputusan Rapat Dewan Guru pada hari Senin, 27 April 2020 pukul 11.00 WITA - selesai memutuskan bahwa siswa yang namanya tercantum di atas dinyatakan :</p>
                <br>
                <br>
                <div class="tengah">
                   <span style="font-size: 20pt; font-weight: bold;"> LULUS / </span><span style="font-size: 20pt; font-weight: bold;text-decoration: line-through">TIDAK LULUS</span>
                </div>
                <br>
                <br>
                <br>
                <p>dari satuan pendidikan setelah memenuhi seluruh kriteria sesuai dengan peraturan perundang-undangan</p>
                <br><br><br>
                <table>
                    <tr>
                        <td width="30%"></td>
                        <td width="15%">
                        <!-- <img src="assets/img/foto.jpg" width="70px" style="position: absolute;" alt=""> -->
                        </td>
                        <td></td>
                        <td width="5%"></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Jorong, 02 Mei 2020</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                        <!-- <img src="<?= base_url();?>assets/img/stamp.png" width="100px" style="position: absolute; left: 310px; bottom: 250px" alt=""> -->
                        </td>
                        <td></td>
                        <td colspan="2">Kepala Sekolah</td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="2">
                        <!-- <img src="<?= base_url();?>assets/img/ttd.png" width="100px" style="position: absolute; left: 380px" alt=""> -->
                        </td>
                        
                    </tr>
                  
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="2" style="height: 50px; vertical-align: bottom;">HARYADI, S.Pd</td>
                        
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td colspan="2">NIP. 19700612 199201 1 001</td>
                        
                    </tr>
                </table>



            </div>    
        </div>
     
       
    
    </div>
</body>
</html>