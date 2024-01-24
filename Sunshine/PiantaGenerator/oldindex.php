<!DOCTYPE html>

<?php

    if (isset($_REQUEST['choice'])) {

        $selected_choice = $_REQUEST['choice'];

    }
    else {

        $selected_choice = "a";

    }

    if (isset($_REQUEST['choice1'])) {

        $selected_choice1 = $_REQUEST['choice1'];

    }
    else {

        $selected_choice1 = "a";

    }

    if (isset($_REQUEST['choice2'])) {

        $selected_choice2 = $_REQUEST['choice2'];

    }
    else {

        $selected_choice2 = "a";

    }

    if (isset($_REQUEST['choice3'])) {

        $selected_choice3 = $_REQUEST['choice3'];

    }
    else {

        $selected_choice3 = "a";

    }
?>

<html>
  <head>
    <meta charset="utf-8">
    <title>Pianta Generator v1</title>
  </head>
  <body>
    <p><big>Pianta Accessory Generator</big></p>
  <form action="index.php" method="get">

  <p>Select Hat</p>

  <select name="choice" size="1" onchange="this.form.submit()">
      <option value="a" <?php if($selected_choice == "a"){ print "selected='selected'"; } ?> >None</option>
      <option value="b" <?php if($selected_choice == "b"){ print "selected='selected'"; } ?> >Normal Hat</option>
      <option value="c" <?php if($selected_choice == "c"){ print "selected='selected'"; } ?> >Straw Hat</option>
      <option value="d" <?php if($selected_choice == "d"){ print "selected='selected'"; } ?> >Sailor Cap</option>
      <option value="e" <?php if($selected_choice == "e"){ print "selected='selected'"; } ?> >Shine Cap</option>
      <option value="f" <?php if($selected_choice == "f"){ print "selected='selected'"; } ?> >Bell-boy Cap</option>
      <option value="g" <?php if($selected_choice == "g"){ print "selected='selected'"; } ?> >Backwards Cap</option>
  </select>

  <br><br>

  <p>Select Accessory</p>

  <select name="choice1" size="1" onchange="this.form.submit()">
      <option value="a" <?php if($selected_choice1 == "a"){ print "selected='selected'"; } ?> >None</option>
      <option value="b" <?php if($selected_choice1 == "b"){ print "selected='selected'"; } ?> >Neckerchief</option>
      <option value="c" <?php if($selected_choice1 == "c"){ print "selected='selected'"; } ?> >Bowtie</option>
  </select>

  <br><br>

  <p>Select Glasses</p>

  <select name="choice2" size="1" onchange="this.form.submit()">
      <option value="a" <?php if($selected_choice2 == "a"){ print "selected='selected'"; } ?> >None</option>
      <option value="b" <?php if($selected_choice2 == "b"){ print "selected='selected'"; } ?> >Glasses</option>
      <option value="c" <?php if($selected_choice2 == "c"){ print "selected='selected'"; } ?> >Sunglasses</option>
  </select>

  <br><br>

  <p>Mustache?</p>

  <select name="choice3" size="1" onchange="this.form.submit()">
      <option value="a" <?php if($selected_choice3 == "a"){ print "selected='selected'"; } ?> >None</option>
      <option value="b" <?php if($selected_choice3 == "b"){ print "selected='selected'"; } ?> >Yes</option>
  </select>

  </form>

<br><br>

      <?php

      if ($_GET["choice"] == "a")
        $hat = 0;
      if ($_GET["choice"] == "b")
        $hat = 1;
      if ($_GET["choice"] == "c")
        $hat = 16;
      if ($_GET["choice"] == "d")
        $hat = 32;
      if ($_GET["choice"] == "e")
        $hat = 64;
      if ($_GET["choice"] == "f")
        $hat = 128;
      if ($_GET["choice"] == "g")
        $hat = 256;

      if ($_GET["choice1"] == "a")
        $access = 0;
      if ($_GET["choice1"] == "b")
        $access = 512;
      if ($_GET["choice1"] == "c")
        $access = 1024;

      if ($_GET["choice2"] == "a")
        $glass = 0;
      if ($_GET["choice2"] == "b")
        $glass = 8;
      if ($_GET["choice2"] == "c")
        $glass = 4;

      if ($_GET["choice3"] == "a")
        $must = 0;
      if ($_GET["choice3"] == "b")
        $must = 2;

        echo("Set your Pianta's Accessory value to: ");
        echo ($hat + $access + $glass + $must);
	echo nl2br(" \n Thanks to sunn for the values");

        ?>

  </body>
</html>
