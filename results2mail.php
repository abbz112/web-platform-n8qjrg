<!doctype html>
<html lang="en">
<head>
<title>Audio test processing</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="audtest.css">
</head>
<body>
<main>

<?php
  $nocturne=$_POST[("nocturne")];
  $q1t1=$_POST[("Tag 1")];
  $q1t2=$_POST[("Tag 2")];
  $q1t3=$_POST[("Tag 3")];
  $q1t4=$_POST[("Tag 4")];
  $q1t5=$_POST[("Tag 5")];

//For each additional channel on your html test page you will need an additional line above with the appropriate letter ("dres" etc). You will then need to edit line 20 (beginning "echo") to add "<p>Slider D ".$lvld."</p>" etc. & line 22 (beginning "mail") to add "." Slider D".$lvld" etc.

  $mail="a.millward2@edu.salford.ac.uk";

  echo "<p>Thanks. Your results have been sent</p><p>Tag 1".$q1t1."</p><p>Tag 2".$q1t2."</p><p>Tag 3".$q1t3."</p><p>Tag 4".$q1t4."</p><p>Tag 5".$q1t5."</p>;

  mail($mail,"Audio Test Results P1 ".$nocturne,"Q1T1".$q1t1."Q1T2".$q1t2."Q1T3".$q1t3."Q1T4".$q1t4."Q1T5".$q1t5);
?>

<a href="page2.html">Next</a>

</main>
</body>
</html>
