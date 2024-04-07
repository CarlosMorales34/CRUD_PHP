<?php 
include("../../conexion.php");
 $stm = $conexión->prepare("SELECT * FROM contactos");
 $stm->execute();
 $contactos = $stm->fetchAll(PDO::FETCH_ASSOC);

if(isset($_GET['id'])){
$txtId = (isset($_GET['id'])?$_GET['id']:"");
$stm = $conexión->prepare("DELETE FROM contactos WHERE id=:txtId");
$stm->bindParam(":txtId", $txtId);
$stm->execute();
header("location:index.php");
}

?>

<?php include("../../template/header.php");?>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#create">
    Nuevo
    </button>

    <div
        class="table-responsive"
    >
        <table
            class="table"
        >
            <thead class="table-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Teléfono</th>
                    <th>Fecha</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($contactos as  $contacto) { ?>
                <tr class="">
                    <td scope="row"><?= $contacto['id'] ?></td>
                    <td scope="row"><?= $contacto['nombre'] ?></td>
                    <td scope="row"><?= $contacto['telefono'] ?></td>
                    <td scope="row"><?= $contacto['fecha'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $contacto['id'] ?>;" class="btn btn-success">Editar</a>
                        <a href="index.php?id=<?= $contacto['id'] ?>;" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                
                <?php } ?> 
                
            </tbody>
        </table>
    </div>
<?php include("create.php");?>


<?php include("../../template/footer.php");?>