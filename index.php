<?php include 'template/header.php' ?>

<?php
include_once "model/conexion.php";
$sentencia = $bd->query("select * from mascotas3");
$mascotas3 = $sentencia->fetchAll(PDO::FETCH_OBJ); 
?>

<div class="containder mt-5">
    <div class="row">
        <div class="col-7">
        <div class="card">
                <div class="card-header">
                    Lista de mascotas

                </div>
                <div class="p-4">
                    <table class="table align-middle">
                        <thead>
                            <tr>
                                <th scope="col"></th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Dueño</th>
                                <th scope="col">Edad</th>
                                <th scope="col">Fehca.Nacimiento</th>
                                <th scope="col" colspan="2">Opciones</th>
                            </tr>
                        </thead>
                        <tbody>

                            <?php
                                foreach($mascotas3 as $dato) {
                            ?>
                            
                            <tr>
                                <td scope="row"><?php echo $dato->id; ?></td>
                                <td><?php echo $dato->nombre; ?></td>
                                <td><?php echo $dato->dueño; ?></td>
                                <td><?php echo $dato->edad; ?></td>
                                <td><?php echo $dato->fecha_nacimiento; ?></td>
        
    

                            </tr>
                            <?php
                                }
                            ?>
                        </tbody>
                    </table>    

                </div>
            </div>
                
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Ingresar datos:

                </div>
                <form class="p-4" method="POST" action="registrar.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre: </label>
                        <input type="text" class="form-control" name="txtNombre" autofocus required>

                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dueño: </label>
                        <input type="text" class="form-control" name="txtDueño" autofocus required>
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Edad: </label>
                        <input type="text" class="form-control" name="txtEdad" autofocus required>
                        
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de Nacimiento: </label>
                        <input type="text" class="form-control" name="txtFechaNacimiento" autofocus required>
                        
                    </div>


                    <div class="d-grid">
                        <input type="hidden"  name="oculto" value="1">
                        <input type="submit" class="btn btn-primary" value="Registrar">
                        
                    </div>

                </form>

            </div>
        </div>



    </div>
</dvi>
<?php include 'template/footer.php' ?>