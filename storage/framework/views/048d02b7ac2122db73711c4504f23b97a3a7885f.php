<!--Navbar -->
<nav id="header" class="mb-1 navbar navbar-expand-lg navbar-dark green menuFixed">
  <a class="navbar-brand" href="/">
    <img src="/img/logoBlanc.png" class="logo" alt="logo"> 
  </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-4"
    aria-controls="navbarSupportedContent-4" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item menu-option menuElem">
        <a class="nav-link" href="/">
           Accueil
        </a>
      </li>
      <li class="nav-item menu-option menuElem">
        <a class="nav-link" href="/carte">
           Carte
        </a>
      </li>
      <li class="nav-item menu-option menuElem">
        <a class="nav-link" href="/contact">
           Contactez-nous !
        </a>
      </li>
      <?php if(auth()->guard()->guest()): ?>
        <li class="nav-item">
          <a class="nav-link" href="#" onclick="inscriptRegister()">
            <i >  Connexion / inscription </i>
          </a>
        </li>
      <?php else: ?>
        <li class="nav-item menuElem">
          <a class="nav-link" href="monEspace">
            <i >  Mon espace </i>
          </a>
        </li>
        <li class="nav-item">
          <a href="<?php echo e(route('logout')); ?>"
                           onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();"><img src="/img/logout.png" alt="Deconnexion"></a>
                        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                            <?php echo e(csrf_field()); ?>

                        </form>
        </li>
      <?php endif; ?>

      <!-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-4" data-toggle="dropdown" aria-haspopup="true"
          aria-expanded="false">
          <i class="fas fa-user"></i> Profile </a>
        <div class="dropdown-menu dropdown-menu-right dropdown-info" aria-labelledby="navbarDropdownMenuLink-4">
          <a class="dropdown-item" href="#">My account</a>
          <a class="dropdown-item" href="#">Log out</a>
        </div>
      </li> -->
    </ul>
  </div>
</nav>
<!--/.Navbar -->