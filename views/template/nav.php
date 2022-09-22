<!-- <nav>
    <ul>
        <li><a href="/accueil">Accueil</a></li>
        <li><a href="/groupe">Le groupe</a></li>
        <li><a href="/gallerie">Gallerie</a></li>
        <li><a href="/contact">Contact</a></li>

    </ul>
</nav> -->
<nav class="navbar navbar-expand-lg bg-black">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon bg-light"></span>
    </button>
    <div class="collapse navbar-collapse " id="navbarNav">
      <ul class="navbar-nav  m-auto text-center">
        <li class="nav-item">
          <a class="nav-link <?php if (isset($activeAccueil)){ $activeAccueil; } ?>" href="/home">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if (isset($activeGroupe)){ $activeGroupe; } ?>" href="/groupe">Le groupe</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if (isset($activeGallerie)){ $activeGallerie; } ?>" href="/gallerie">Gallerie</a>
        </li>
        <li class="nav-item">
          <a class="nav-link <?php if (isset($activeContact)){ $activeContact; } ?>" href="/contact">Nous contacter</a>
        </li>
      </ul>
    </div>
  </div>
</nav>