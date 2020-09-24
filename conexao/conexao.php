
<?php
$conectar = mysqli_connect("localhost", "root", "W@s159874", "db_teste");
if (!$conectar) {
    die("Erro ao conectar ao banco: " . mysqli_error($conectar));
}
?> 