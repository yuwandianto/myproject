<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * jangan tamplilkan semua error
 */
//error_reporting(0);

/**
 * cek login siswa
 */
function is_login_siswa() {
    error_reporting(0);

    if ($_SESSION['nisn']) {
        return true;
    }
    return false;
}

/**
 * harus login sebagai siswa
 */

 function must_siswa() {
     if (! is_login_siswa()) {
         redirect('','refresh');
     }
 }

 