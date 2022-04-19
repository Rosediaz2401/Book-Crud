<?php include("template/cabecera.php");?>

<?php
include("admin/config/bd.php");

$sentenciaSQL =$conexion->prepare("SELECT * FROM libros");
$sentenciaSQL->execute();
$listaLibros= $sentenciaSQL->fetchAll(PDO::FETCH_ASSOC);
?>

<?php foreach($listaLibros as $libro) {?>
<div class="col">
  <div class="card" style="width: 18rem;">
    <img src="./img/<?php echo $libro['imagen']; ?>" class="card-img-top" alt="...">
    <div class="card-body">
    <h5 class="card-title"><?php echo $libro['nombre']; ?></h5>
    <a name="" id="" class="btn btn-primary" href="#" role="button">Ver Mas</a>
    </div>
  </div>
</div>
<?php } ?>


<?php include("template/pie.php")?>