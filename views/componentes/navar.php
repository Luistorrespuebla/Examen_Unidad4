<div style="display:inline-block">
  <nav class="navbar navbar-expand-lg navbar-light bg-light" >
    <div class="container-fluid">
      <a class="navbar-brand" href="inicio">Inicio</a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="inventario">Inventario</a>
              </li>
              <?php if(!isset($_SESSION['usuario'])): ?>
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="login">Iniciar sesión</a>
              </li>
              <?php else: ?>
              <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <?=$_SESSION['usuario']['nombre'] ?>
                  </a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="informacion">Información</a></li>
                      <li><button class="dropdown-item" id="btn-cerrrar">Cerrar sesión</button></li>
                  </ul>
              </li>
              <?php endif?>
        </ul>
      </div>
    </div>
  </nav>
</div>
<br><br>
