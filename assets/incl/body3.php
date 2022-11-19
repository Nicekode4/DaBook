
<!-- Opgave 1 -->
<!-- <?php 
$sql = "SELECT id, title
FROM song
    ORDER BY title";
    $result = $db->query($sql);
    var_dump($result);
?> -->

<?php 
$sql = "SELECT id
FROM artist
WHERE name = 'Pink Floyd'";
    $result = $db->query($sql);
print_r($result);
var_dump($result[1]);
foreach ($result as $key => $value) {
    echo $value;
}
//Find ud af hvordan man navigere result arrayet
    // $sql = "SELECT title, content
    // FROM song
    // WHERE artist_id = $artId";
    //     $result = $db->query($sql);
    //     var_dump($result);
?>