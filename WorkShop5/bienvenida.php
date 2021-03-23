<?php 

$_SESSION['usuario']=$usuario;

session_start();
if(!isset($_SESSION['usuario'])){
    
}else{

}    

?>

      <div class="form-group">
        <label for="idnombre">BIENVENIDO:</label>
        <input type="text" REQUIRED disabled class="form-control" id="idnombre" value="<?php echo $_SESSION['usuario']; ?>">
      </div>