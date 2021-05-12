<?php
  require_once 'app/config.php';
?>

<!doctype html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <?php
    require_once 'app/dependences.php';
  ?>
  <title><?=NOMBRE_SERVIDOR; if (isset($_GET['view'])){echo ' | ' . $_GET['view'];}?></title>
</head>
<body>

<?php
  require_once 'views/includes/header.php'
?>

<?php
  if (isset($_GET['view'])) {
    switch ($_GET['view']) {
      case 'home':
        include_once 'views/home.php';
        break;
      case 'login':
        include_once 'views/login.php';
        break;
      case 'registro':
        include_once 'views/registro.php';
        break;
      case 'comprobar':
        include_once 'views/comprobar.php';
        break;
      case 'sesion':
        include_once 'views/session.php';
        break;
      case 'salir':
        include_once 'procesos/logout.php';
        break;
      default:
        include_once 'views/error404.php';
        break;
    }
  } else {
    header('location: home');
  }
?>

<?php
  require_once 'views/includes/footer.php'
?>

</body>
</html>