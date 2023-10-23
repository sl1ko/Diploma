<?php

require_once('db.php');

$selected = $_POST['selected'];
$name = $_POST['name'];
$number = $_POST['number'];


if (empty($name) || empty($number)){
    echo "Заполните все поля";
}


$sql = "INSERT INTO users (selected,name,number) VALUES ('".$selected."','".$name."', '".$number."')";

echo '<script>
    location.href="index.php"
</script>';


$conn -> query($sql);

?>