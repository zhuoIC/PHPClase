<?php
include_once 'biblioteca.php';
show_head();
?>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-4 offset-md-4 ">
            <h1 class="text-center">Inicio de sesión</h1>
            <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>" >
                <div class="form-group">
                    <label for="inputUser" class="">Usuario:</label>
                    <input type="text" name="user" id="inputUser" required="required" autofocus="autofocus" value="" class="form-control"/>
                </div>
                <div class="form-group">
                    <label for="inputPassword" class="">Contraseña:</label>
                    <input type="password" name="password" id="inputPassword" required="required" value="" class="form-control"/>
                </div>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary">Iniciar sesión</button>
                </div>
            </form>
        </div>
    </div>
</div> <!-- COntainer -->
<?php
show_footer();
?>