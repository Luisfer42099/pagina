<h1>Registrarse</h1>
<?php //require_once 'controllers/errorController.php'; 
    //$error = errorController->error_form();
?>

<?php if(isset($_SESSION['register']) && $_SESSION['register'] == 'complete'): ?>
    <strong>Registro guardado en forma correcta</strong>
<?php elseif(isset($_SESSION['register']) && $_SESSION['register'] == 'failed'):?>
    <strong>El Registro no ha sido grabado, Favor verificar datos</strong>
<?php endif; ?>

<?php utils::deleteSession('register'); ?>

<form action="<?=base_url?>usuario/save" method="POST">
    <label for="nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" placeholder="Digite Nombre" required/>
    
    
    <label for="apellido">Apellido</label>
    <input type="text" name="apellido" id="apellido" placeholder="Digite Apellido" required />
    
    
    <label for="email">email</label>
    <input type="email" name="email" id="email" placeholder="Digite Correo" required />
    

    <label>Clave</label>
    <input type="password" name="password" id="password" placeholder="Digite Clave" required />   
    
    
    <input type="submit" value="Registrarse" />   
    
</form>