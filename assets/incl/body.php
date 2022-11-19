<?php

$number = 10;
$name = "Gitte";
$error = 1000;

if ($number === 10) {
    echo "Den er 10";
}
if ($number < 25) {
    echo "Den mindre end 25";
}
if ($number >= 40) {
    echo "Den er større eller lig med 40";
}

if ($number === 10) {
    echo "$number = 10";
}elseif($number === 20) {
    echo "$number = 20";
} elseif ($number === 30) {
    echo "$number = 30";
}

else {
    echo "$number = ?";
}
if ($number < 15) {
    echo "$number < 15";
}elseif ($number > 25) {
    echo "$number > 25";
}else {
    echo "Ingen af betingelserne opfyldt";
}

if ($number === 15 || $name === "Peter") {
    echo "Korrekt";
}

if ($number > 18 || $name === "Gitte") {
    echo "Hej Hej fru Hansen!";
}elseif ($number < 18 || $name === "Bøllebob") {
    echo "Hej Lille Jeppe";
}else {
    echo "Creep";
}

switch ($error) {
    case 1000:
        # code...
        break;
        case 1001:
            # code...
            break;
            case 1002:
                # code...
                break;
    default:
        # code...
        break;
}
?>

<?php
$a = 10;
$b = 30;
$c = 6;
$d = "";
$besked = " ";

if ($a != 10) {
    $besked = $besked . "En led stodder ";
} else {
    $besked = $besked . "Jeg ";
}

if ($b == $a * 3) {
    if ($c < $b / 6) {
        $besked = $besked . "er ligeglad med ";
    } elseif ($c <= $b / 6) {
        $besked = $besked . "husker ikke ";
    } else {
        $besked = $besked . "elsker ";
    }
} else {
    $besked = $besked . "hader ";
}

if ($d) {
    $besked = $besked . "alt ";
} else {
    $besked = $besked . "at ";
}
echo $besked . "kode"; 
?>

<?php
$number = array(
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8,
    9,
    10,
    "Nægt",
)

?>

<table><td>
    <!-- <?php
    $days = array(
      "Mandag",
      "Tirsdag",
      "Onsdag",
      "Torsdag",
      "Fredag",
      "Lørdag",
      "Søndag"
    );
for ($i=0; $i < 8; $i++) { 
  echo "<tr>$i </tr><tr>" . $days[$i] . "</tr><br>";
}
?> -->
</td>
  </table>


  <!-- <?php
    $days = array(
      1,
      2,
      3,
      4,
      5,
      6,
      7,
      8,
      9,
      10
    );
  $length = count($days);  
for ($i=10; $i > 0; $i--) { 
  unset($days[$length]);
  $length = $length - 1;
  echo "<br>";
  foreach ($days as $key => $value) {
    echo $value . ",";
    
  }
}
?>  -->

<p>Years</p>
<select name="" id="">
<?php
$years = 2022;
for ($i=0; $i < 10; $i++) { 
  echo "<option value='$years'>$years</option>";
  $years -= 1;
}
?>
</select>

<p>Month</p>
<select name="" id="">
<?php
$month = 1;
for ($i=0; $i < 12; $i++) { 
  if ($i < 9) {
    echo "<option value='$month'>"  . "0" . $month . "</option>";
    $month += 1;
  }else {
    echo "<option value='$month'>$month</option>";
    $month += 1;
  }

}
?>
</select>

<p>Days</p>
<select name="" id="">
<?php
$days = 1;
for ($i=0; $i < 31; $i++) { 
  if ($i < 9) {
    echo "<option value='$days'>"  . "0" . $days . "</option>";
    $days += 1;
  }else {
    echo "<option value='$days'>$days</option>";
    $days += 1;
  }

}
?>
</select>

<?php
$song = new song;

echo  $song->showInfo();

$song->title = "I take it back";
$song->author = "Lil PP";
$song->rating = 3.4;

echo  $song->showInfo();
?>

</body