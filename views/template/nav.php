<div class="row nav1 d-flex justify-content-between bg-dark bg-gradient" style="--bs-bg-opacity: .9;">
<div class="col-2">
<a href="/accueil"><img src="../../assets/imgs/banniereWoodsLake2.png" alt=""></a>
</div>
  <div class="col-8">
    <nav class="navbar navbar-expand-lg">
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
            <li class="nav-item">
              <button class="btn btn-lg btn-success" href="/contact">S'inscrire</button>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

</div>