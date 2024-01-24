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

    if (isset($_REQUEST['choice4'])) {

        $selected_choice4 = $_REQUEST['choice4'];

    }
    else {

        $selected_choice4 = "a";

    }
    if (isset($_REQUEST['choice5'])) {

        $selected_choice5 = $_REQUEST['choice5'];

    }
    else {

        $selected_choice5 = "a";

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

  <br><br>

  <p>Body Color</p>

  <select name="choice4" size="1" onchange="this.form.submit()">
      <option value="a" <?php if($selected_choice4 == "a"){ print "selected='selected'"; } ?> >Light Blue</option>
      <option value="b" <?php if($selected_choice4 == "b"){ print "selected='selected'"; } ?> >Blue</option>
      <option value="c" <?php if($selected_choice4 == "c"){ print "selected='selected'"; } ?> >Yellow</option>
      <option value="d" <?php if($selected_choice4 == "d"){ print "selected='selected'"; } ?> >Brown</option>
      <option value="e" <?php if($selected_choice4 == "e"){ print "selected='selected'"; } ?> >Dark Pink</option>
      <option value="f" <?php if($selected_choice4 == "f"){ print "selected='selected'"; } ?> >Lime Green</option>
      <option value="g" <?php if($selected_choice4 == "g"){ print "selected='selected'"; } ?> >Pink</option>
      <option value="h" <?php if($selected_choice4 == "h"){ print "selected='selected'"; } ?> >Dark Orange</option>
      <option value="i" <?php if($selected_choice4 == "i"){ print "selected='selected'"; } ?> >Medium Blue</option>
      <option value="j" <?php if($selected_choice4 == "j"){ print "selected='selected'"; } ?> >Peach</option>
      <option value="k" <?php if($selected_choice4 == "k"){ print "selected='selected'"; } ?> >Ultra Lime Green</option>
      <option value="l" <?php if($selected_choice4 == "l"){ print "selected='selected'"; } ?> >Ultra Dark Blue</option>
      <option value="m" <?php if($selected_choice4 == "m"){ print "selected='selected'"; } ?> >Ultra Purple</option>
      <option value="n" <?php if($selected_choice4 == "n"){ print "selected='selected'"; } ?> >Ultra Blue</option>
      <option value="o" <?php if($selected_choice4 == "o"){ print "selected='selected'"; } ?> >Grey</option>
  </select>
  <br><br>
  <p>Does your Pianta have a special object? (Backpack, Ducky Float, Broom, Ukulele)</p>

  <select name="choice5" size="1" onchange="this.form.submit()">
      <option value="a" <?php if($selected_choice5 == "a"){ print "selected='selected'"; } ?> >No</option>
      <option value="b" <?php if($selected_choice5 == "b"){ print "selected='selected'"; } ?> >Yes</option>
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

      if ($_GET["choice4"] == "a")
        $color = 0;
      if ($_GET["choice4"] == "b")
        $color = 1;
        if ($_GET["choice4"] == "c")
          $color = 2;
          if ($_GET["choice4"] == "d")
            $color = 3;
            if ($_GET["choice4"] == "e")
              $color = 4;
              if ($_GET["choice4"] == "f")
                $color = 5;
                if ($_GET["choice4"] == "g")
                  $color = 6;
                  if ($_GET["choice4"] == "h")
                    $color = 7;
                    if ($_GET["choice4"] == "i")
                      $color = 8;
                      if ($_GET["choice4"] == "j")
                        $color = 9;
                        if ($_GET["choice4"] == "k")
                          $color = 10;
                          if ($_GET["choice4"] == "l")
                            $color = 11;
                            if ($_GET["choice4"] == "m")
                              $color = 12;
                              if ($_GET["choice4"] == "n")
                                $color = 13;
                                if ($_GET["choice4"] == "o")
                                  $color = 14;


                                  if ($_GET["choice5"] == "a")
                                    $special = 0;
                                  if ($_GET["choice5"] == "b")
                                    $special = 2048;


        echo("Set your Pianta's Accessory value to: ");
        echo ($hat + $access + $glass + $must + $special);
        echo nl2br(" \n Set your Pianta's color value to: ");
        echo ($color);
        echo nl2br(" \n Thanks to sunn for the values");



        ?>
        <br>

<p>Preview:</p>

        <img src="site3.php?id=<?php echo $_GET["choice"]; ?><?php echo $_GET["choice1"]; ?><?php echo $_GET["choice2"]; ?><?php echo $_GET["choice3"]; ?><?php echo $_GET["choice4"]; ?>" alt="Image created by a PHP script" width="178" height="182">


  </body>
</html>
