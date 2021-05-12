<?php
session_start();
if (isset($_SESSION['usuario'])) {
?>

<div class="container">
    <div class="row">
        <div class="col">
            <p class="display-1 text-center">✅</p>
            <p class="display-1 text-center text-success">YA TIENES SESION</p>
            <p class="display-4 text-center">Eres un crack :D</p>
            <p class="display-5 text-center">Regresa a <a href="index.php">Home</a></p>
        </div>
    </div>
</div>

<?php
} else {
  header('location: sesion');
}
?>