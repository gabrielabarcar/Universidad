<div class="container" style="margin-top: 80px">
    <div class="jumbotron">
        <h2>Registro de estudiantes</h2>
    </div>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Cédula</th>
                    <th>nombre</th>
                    <th>apellido</th>
                    <th>edad</th>
                    <th>acción</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                foreach ($estudiantes as $estudiante):
                ?>
                    <tr>
                        <th><?=$estudiante->getCedula();?></th>
                        <th><?=$estudiante->getNombre();?></th>
                        <th><?=$estudiante->getApellido();?></th>
                        <th><?=$estudiante->getEdad();?></th>
                        <th>
                            <a href="#" class="btn btn-primary">Editar</a>
                            <a href="#" class="btn btn-danger">Eliminar</a>
                        </th>
                    </tr>
                    <?php endforeach;?>
            </tbody>
        </table>
    </div>    
</div>