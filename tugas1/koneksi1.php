<?php 
    $varkoneksi = mysqli_connect("localhost", "root", "", "sekolah"); 
    
    if($varkoneksi) 
    { 
        echo "Koneksi ke database berhasil"; 
    } 
    else 
    { 
        echo "Koneksi ke database gagal, mohon periksa lagi file koneksi ke database Anda"; 
    } 
?>i