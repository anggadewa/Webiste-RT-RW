<?php 

function daftar($no_kk, $nama, $nik_noktp, $jeniskelamin, $agama, $telfon){
  global $link;

  //mencegah sql injection

  $nama  = mysqli_real_escape_string($link, $nama);
  $nik_noktp  = mysqli_real_escape_string($link, $nik_noktp);
  $agama  = mysqli_real_escape_string($link, $agama);
  $telfon  = mysqli_real_escape_string($link, $telfon);
  
 
  $query = "INSERT INTO warga (no_kk, nama, nik_noktp, jeniskelamin, agama, telfon) VALUES ('$no_kk', '$nama', '$nik_noktp', '$jeniskelamin', '$agama', '$telfon')";

  if ( mysqli_query($link, $query) ) {
    return true;
  }else {
    return false;
  }

}


function uji($nik_noktp){
  global $link;
  $nik_noktp  = mysqli_real_escape_string($link, $nik_noktp);
  $query = "SELECT * FROM warga WHERE nik_noktp = '$nik_noktp' ";

  if ( $result = mysqli_query($link, $query) ) {
    if(mysqli_num_rows($result) == 0 ) return true;
    else return false;
  }
}

 ?>