  
  

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <a class="navbar-brand" href="index3.php">
  <i class="fas fa-capsules fa-lg"></i>
  Horizon Medicine
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      
      <li class="nav-item active">
        <a class="nav-link" href="#equipe">Equipe</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#planos">Planos</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#comentarios">Clientes</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#info">Sobre</a>
      </li>
      <li class="nav-item dropdown active">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Consulta
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="consulta/consulta.php">Agendar Consulta</a>
          <a class="dropdown-item" href="consulta/Visualizar.php">Visualizar Consulta</a>
         
          <a class="dropdown-item" href="consulta/cancelar.php">Cancelar Consulta</a>
        </div>
        <li class="nav-link">
            <a href="logout.php">sair</a>
        </li> 
    </ul>
    <div class="form-inline my-2 my-lg-0">
    
    <a  href="#" class="separar"> <i class=" on far fa-user-circle fa-2x hj"></i></a>
    <?php session_start(); include('verifica_login.php'); ?> <div class=""> Bem-vindo, <?php echo $_SESSION['nome'];?>
</div> 
</div>
 
 
  </div>
</nav>