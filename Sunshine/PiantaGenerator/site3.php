<?php
// Download the image files if we don't have them

//if(isset($_GET['id'])){
  $id = $_GET['id'];
//} else {
//}

// if($id == "a")
//   $imageFile = "smile.png";
//
// if($id == "b")
//   $imageFile = "star.png";

if($id[0] == "a"){
$imageFile = "nothing.png";
}
elseif($id[0] == "b"){
$imageFile = "montemHB.png";
}
elseif($id[0] == "c"){
$imageFile = "montemHC.png";
}
elseif($id[0] == "d"){
$imageFile = "montemHD.png";
}
elseif($id[0] == "e"){
$imageFile = "montemHE.png";
}
elseif($id[0] == "f"){
$imageFile = "montemHF.png";
}
elseif($id[0] == "g"){
$imageFile = "montemHG.png";
}
else{
//Catch anything
}

if($id[1] == "a"){
$imageFile1 = "nothing.png";
}
elseif($id[1] == "b"){
$imageFile1 = "montemAB.png";
}
elseif($id[1] == "c"){
$imageFile1 = "montemAC.png";
}
else{
//Catch anything
}

if($id[2] == "a"){
$imageFile2 = "nothing.png";
}
elseif($id[2] == "b"){
$imageFile2 = "montemGB.png";
}
elseif($id[2] == "c"){
$imageFile2 = "montemGC.png";
}
else{
//Catch anything
}

if($id[3] == "a"){
$imageFile3 = "nothing.png";
}
elseif($id[3] == "b"){
$imageFile3 = "montemM.png";
}
else{
//Catch anything
}

if($id[4] == "a"){
$bgFile = "montemLB.png";
}
elseif($id[4] == "b"){
$bgFile = "montem.png";
}
elseif($id[4] == "c"){
$bgFile = "montemY.png";
}
elseif($id[4] == "d"){
$bgFile = "montemB.png";
}
elseif($id[4] == "e"){
$bgFile = "montemDP.png";
}
elseif($id[4] == "f"){
$bgFile = "montemLG.png";
}
elseif($id[4] == "g"){
$bgFile = "montemLP.png";
}
elseif($id[4] == "h"){
$bgFile = "montemO.png";
}
elseif($id[4] == "i"){
$bgFile = "montemMB.png";
}
elseif($id[4] == "j"){
$bgFile = "montemP.png";
}
elseif($id[4] == "k"){
$bgFile = "montemUG.png";
}
elseif($id[4] == "l"){
$bgFile = "montemUB.png";
}
elseif($id[4] == "m"){
$bgFile = "montemUP.png";
}
elseif($id[4] == "n"){
$bgFile = "montemUBL.png";
}
elseif($id[4] == "o"){
$bgFile = "montemG.png";
}
else{
//Catch anything
}

// function get_file($file, $from) {
//     if (!file_exists(__DIR__ . "/" . $file)) { file_put_contents(__DIR__ . "/" . $file, file_get_contents($from)); }
// }
// get_file("background-layer-1.png", "http://i.imgur.com/6pgf3WK.png");
// get_file("icon-layer-2.png", "http://i.imgur.com/0sJt52z.png");
// get_file("stars-layer-3.png", "http://i.imgur.com/1Tvlokk.png");
// get_file("icon-layer-4.png", "http://i.imgur.com/072BAJS.png");
//
// $bgFile = __DIR__ . "/background-layer-1.png"; // 93 x 93
// $imageFile = __DIR__ . "/icon-layer-2.png"; // 76 x 76
//
// if ($id == "a")
//   echo(fart);
//   $watermarkFile = __DIR__ . "/stars-layer-3.png"; // 133 x 133
//
// if ($id == "b")
//   echo(fart);
//   $watermarkFile = __DIR__ . "/icon-layer-4.png"; // 133 x 133

// We want our final image to be 76x76 size
$x = 178;
$y = 182;

// dimensions of the final image
$final_img = imagecreatetruecolor($x, $y);

$image_1 = imagecreatefrompng($bgFile);
$image_2 = imagecreatefrompng($imageFile);
$image_3 = imagecreatefrompng($imageFile1);
$image_4 = imagecreatefrompng($imageFile2);
$image_5 = imagecreatefrompng($imageFile3);

imagealphablending($final_img, true);
imagesavealpha($final_img, true);

imagecopy($final_img, $image_1, 0, 0, 0, 0, $x, $y);
imagecopy($final_img, $image_2, 0, 0, 0, 0, $x, $y);
imagecopy($final_img, $image_3, 0, 0, 0, 0, $x, $y);
imagecopy($final_img, $image_4, 0, 0, 0, 0, $x, $y);
imagecopy($final_img, $image_5, 0, 0, 0, 0, $x, $y);

ob_start();
imagepng($final_img);
$watermarkedImg = ob_get_contents(); // Capture the output
ob_end_clean(); // Clear the output buffer

header('Content-Type: image/png');
echo $watermarkedImg; // outputs: `http://i.imgur.com/f7UWKA8.png`
