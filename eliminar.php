<?php
$idmaterial = $_GET['idmaterial'];
include ('conexion.php');

$sql = "delete from componentes where idmaterial = $idmaterial";
$result = mysqli_query($conexion, $sql);
if ($result) {
    echo "<script language='JavaScript'>alert('Material eliminado exitosamente');location.assign('components.php');</script>";
} else {
    echo "<script language='JavaScript'>alert('Error al eliminar el material');location.assign('components.php');</script>";
}
?>