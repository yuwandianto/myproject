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

 /**
 * cek login admin
 */
function is_login_admin() {
    error_reporting(0);

    if ($_SESSION['id']) {
        return true;
    }
    return false;
}

/**
 * harus login sebagai admin
 */

function must_admin() {
    if (! is_login_admin()) {
        redirect('','refresh');
    }
}

 