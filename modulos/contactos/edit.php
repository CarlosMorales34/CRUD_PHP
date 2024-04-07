<?php
include("../../conexion.php");

if(isset($_GET['id'])){
    $txtId = (isset($_GET['id'])?$_GET['id']:"");
    $stm = $conexión->prepare("SELECT * FROM contactos WHERE id=:txtId");
    $stm->bindParam(":txtId", $txtId);
    $stm->execute();
    $registro = $stm->fetch(PDO::FETCH_LAZY);
    $nombre = $registro['nombre'];
    $telefono = $registro['telefono'];
    $fecha = $registro['fecha'];
}

if($_POST){
    $txtId = (isset($_POST['txtId'])?$_POST['txtId']:"");
    $nombre = (isset($_POST['nombre'])?$_POST['nombre']:"");
    $telefono = (isset($_POST['telefono'])?$_POST['telefono']:"");
    $fecha = (isset($_POST['fecha'])?$_POST['fecha']:"");

    $stm = $conexión->prepare("UPDATE  contactos SET nombre=:nombre,telefono=:telefono,fecha=:fecha WHERE id=:txtId");
    $stm->bindParam(":nombre", $nombre);
    $stm->bindParam(":telefono", $telefono);
    $stm->bindParam(":fecha", $fecha);
    $stm->bindParam(":txtId", $txtId);
    $stm->execute();

    header("location:index.php");
}
?>

<?php include("../../template/header.php");?>

<form action="" method="post">

  <input type="hidden" class="form-control" value="<?php echo $txtId; ?>" name="txtId">
  <label for="">Nombre</label>
  <input type="text" class="form-control" value="<?php echo $nombre; ?>" name="nombre" placeholder="Ingresa tu nombre">
  <label for="">Telefono</label>
  <input type="text" class="form-control" value="<?php echo $telefono; ?>" name="telefono" placeholder="Ingresa tu número de teléfono">
  <label for="">Fecha</label>
  <input type="date" class="form-control" value="<?php echo $fecha; ?>" name="fecha">
  

<div class="modal-footer">
  <a href="index.php" class ="btn btn-danger">Cancelar</a>
  <button type="submit" class="btn btn-primary">Actualizar</button>
</div>
</form>

<?php include("../../template/footer.php");?>
