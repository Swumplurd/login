<div class="container mt-5">
  <div class="row">
    <div class="col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-4 offset-lg-4">
      <form method="post" id="form-login" onsubmit="return login()">
        <div class="form-group">
          <label for="usuario">User</label>
          <input required type="text" class="form-control" id="usuario" aria-describedby="emailHelp" placeholder="User">
          <small id="helpId" class="text-muted">Introduce tu Usuario</small>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input required type="password" class="form-control" id="password" aria-describedby="emailHelp" placeholder="Password">
          <small id="helpId" class="text-muted">Introduce tu contraseña</small>
        </div>
        <small class="text-muted">Registrate en: <a href="registro">Registro</a></small>
        <button id="btn-enviar" class="btn btn-outline-primary btn-block">Login</button>
      </form>
    </div>
  </div>
</div>

<script>
  function login() {
    $.ajax({
      type: 'POST',
      data: {
        usuario: $('#usuario').val(),
        password: $('#password').val()
      },
      url: 'procesos/login.php',
      success: (response) => {
        response = response.trim();
        if (response == 1) {
          window.location = 'comprobar';
        } else {
          swal('>:(', 'Tu quien eres?', 'error');
        }
      }
    });
    return false;
  }
</script>