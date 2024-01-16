<?php

// $file = fopen("text.txt", "r");

// echo fread($file, filesize("text.txt"));

// fclose($file);


// $myfile = fopen("cat.txt", "w");
// fwrite($myfile, "dsadasad\n");
// fwrite($myfile, "Ahmad\n");
// fwrite($myfile, "Mohammad\n");
// fwrite($myfile, "Aya\n");
// fclose($myfile);



$myfile = fopen("names.txt", "a");
fwrite($myfile, "dsadasad\n");
fwrite($myfile, "Ahmad\n");
fwrite($myfile, "Mohammad\n");
fwrite($myfile, "Aya\n");
fclose($myfile);
