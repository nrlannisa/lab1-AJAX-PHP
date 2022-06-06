<?php
// Array with names
$a[] = "Arau, Perlis";
$a[] = "Dungun, Terangganu";
$a[] = "Bukit Besi, Terangganu";
$a[] = "Chendering, Terangganu";
$a[] = "Seri Iskandar, Perak";
$a[] = "Tapah, Perak";
$a[] = "Teluk Intan, Perak";
$a[] = "Samarahan, Sarawak";
$a[] = "Mukah, Sarawak";
$a[] = "Sungai Petani, Kedah";
$a[] = "Alor Setar, Kedah";
$a[] = "Bukit Mertajam, Pulau Pinang";
$a[] = "Bertam, Pulau Pinang";
$a[] = "Balik Pulau, Pulau Pinang";
$a[] = "Rembau, Negeri Sembilan";
$a[] = "Seremban 3, Negeri Sembilan";
$a[] = "Alor Gajah, Melaka";
$a[] = "Jasin, Melaka";
$a[] = "Bandaraya Melaka, Melaka";
$a[] = "Segamat, Johor";
$a[] = "Pasir Gudang, Johor";
$a[] = "Jengka, Pahang";
$a[] = "Raub, Pahang";
$a[] = "Bukit Sekilau, Pahang";
$a[] = "Tawau, Sabah";
$a[] = "Kota Bahru, Kelantan";
$a[] = "Dengkil, Selangor";
$a[] = "Puncak Alam, Selangor";
$a[] = "Puncak Perdana, Selangor";
$a[] = " Seksyen 17 (INTEC), Shah Alam, Selangor";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from ""
if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($a as $name) {
    if (stristr($q, substr($name, 0, $len))) {
      if ($hint === "") {
        $hint = $name;
      } else {
        $hint .= ", $name";
      }
    }
  }
}

// Output "no suggestion" if no hint was found or output correct values
echo $hint === "" ? "no suggestion" : $hint;
?>