<?php 
 
 class Prodi { 
 
 public static string $nama = "Sistem Informasi"; 
 
 public static function setNama() { 
 return self::$nama; 
 } 
 } 
 
 class Mahasiswa extends Prodi { 
 
 public static function setProdi() { 
 
 return parent::setNama(); 
 } 
 } 
 
 echo Mahasiswa::setProdi();