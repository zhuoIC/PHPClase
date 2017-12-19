<?php
include_once 'biblioteca.php';
include_once 'dao.php';
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
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $user = $_POST['user'];
    $password = $_POST['password'];
    if(empty($user)){
        echo "<p>Debe intoducir un nombre de usuario</p>";
    }
    else if(empty($password)){
        echo "<p>Debe introducir una contraseña de usuario</p>";
    }
    else{
        // Realizamos la conexión a la base de datos y se comprueba si el usaurio existe
        $dao= new Dao();
        if(!$dao->isConnected()){
            echo "<p>".$dao->error."</p>";
        }
        else if($dao->validateUser($user, $password)){
            // Guardar la sesión de usuario
            // Redireccionamos a otra página
            echo "<script language=\"javascript\">window.location.href=\"inventory.php\"</script>";
        }
        else{
            echo "<p>Usuario o/y contraseña incorrectos</p>";
        }
    }
}
else{
    echo "No entra en el if";
}
show_footer();
?>