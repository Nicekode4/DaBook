<!-- <?php
$number = 20;
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
?> -->

<?php

for ($i=0; $i < 51; $i++) { 
    $randNum[] = rand(0,9);
}
print_r(array_count_values($randNum));


$lande = array(
"O",
"X"
);
?>
<table>
    <tr>
    <td> </td>
    <td>0</td>
    <td>1</td>
    <td>2</td>
    <td>3</td>
    <td>4</td>
    <td>5</td>

    </tr>
    <tr>
    <td>0</td>
    <?php 
        for ($i=0; $i < 6; $i++) { 
            echo "<td>" . $lande[rand(0,1)] . "</td>";
        }
        ?>>
    </tr>
    <tr>
    <td>1</td>
    <?php 
        for ($i=0; $i < 6; $i++) { 
            echo "<td>" . $lande[rand(0,1)] . "</td>";
        }
        ?>
    </tr>
    <tr>
    <td>2</td>
    <?php 
        for ($i=0; $i < 6; $i++) { 
            echo "<td>" . $lande[rand(0,1)] . "</td>";
        }
        ?>
    </tr>
    <tr>
    <td>3</td>
    <?php 
        for ($i=0; $i < 6; $i++) { 
            echo "<td>" . $lande[rand(0,1)] . "</td>";
        }
        ?>
    </tr>
    <tr>
    <td>4</td>
    <?php 
        for ($i=0; $i < 6; $i++) { 
            echo "<td>" . $lande[rand(0,1)] . "</td>";
        }
        ?>
    </tr>
    <tr>
    <td>5</td>
    <?php 
        for ($i=0; $i < 6; $i++) { 
            echo "<td>" . $lande[rand(0,1)] . "</td>";
        }
        ?>
    </tr>
</table>

<?php
$maxNumber = 10;
$counter = 0;
$jump = 2;
 
while ($counter <= $maxNumber) {
  echo $counter . "<br>";
  $counter += $jump;
}
?>

<?php
//Definere et variabel med en tom string
$output = ''; 

//Et loop der looper 1000 gange
for ($i = 0; $i < 10; $i++) {

    //Tilføjer en bindestreg til hvert output ved hvert loop
  $output .= $i . '-';
}
 
//Fjerner bindestregen til højre for index tallet 
$output = trim($output, '-');
echo $output;
?>

<?php
for ($i = 0; $i < 10; $i++) {
  for ($j = 0; $j < 10; $j++) {
     echo $i . $j . '-';    
  }
  echo '<br>';
}
?>

<ul>
 <?php
for ($i=0; $i < 10; $i++) { 
    echo "<li><img src='assets\images\dog-$i.jpg' alt=''></li>" . "<br>";
}
?>
 
</ul>
<?php
for ($i=1; $i < 8; $i++) { 
    switch ($i) {
        case 1:
            echo "<p style='color: blue;'>Mandag $i</p>" . "<br>";
            break;
            case 2:
                echo "<p style='color: blue;'>Tirsdag $i</p>" . "<br>";
                break;
                case 3:
                    echo "<p style='color: blue;'>Onsdag $i</p>" . "<br>";
                    break;
                    case 4:
                        echo "<p style='color: blue;'>Torsdag $i</p>" . "<br>";
                        break;
                        case 5:
                            echo "<p style='color: blue;'>Fredag $i</p>" . "<br>";
                            break;
                            case 6:
                                echo "<p style='color: yellow;'>Lørdag $i</p>" . "<br>";
                                break;
                                case 7:
                                    echo "<p style='color: red;'>Søndag $i</p>" . "<br>";
                                    break;
        
        default:
            # code...
            break;
    }
}
?>
