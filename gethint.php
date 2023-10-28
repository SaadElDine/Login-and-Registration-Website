<?php
// Array with names
$a[] = "Ahmed";
$a[] = "Aly";
$a[] = "Adel";
$a[] = "Adham";
$a[] = "Bousi";
$a[] = "Saad";
$a[] = "Sami";
$a[] = "Heba";
$a[] = "Ingy";
$a[] = "Johanna";
$a[] = "Kitty";
$a[] = "Morougue";
$a[] = "Nina";
$a[] = "Ophelia";
$a[] = "Mona";
$a[] = "Maisara";
$a[] = "Wael";
$a[] = "Candy";
$a[] = "Doris";
$a[] = "Eman";
$a[] = "Evita";
$a[] = "Sunniva";
$a[] = "Noha";
$a[] = "Unni";
$a[] = "Violet";
$a[] = "Liza";
$a[] = "Elizabeth";
$a[] = "Edris";
$a[] = "Hisham";
$a[] = "Youssef";

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
echo $hint
?>