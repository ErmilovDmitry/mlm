<footer class="footer content-info text-white">
  <div class="shade"></div>
  <div class="container-fluid">
    <div class="footer_wrap">
      <div class="row">
        <div class="col-lg-3">
          <img src="@asset('images/logo_mlm_white@2x.png')" alt="logo white" class="logo_mlm_white">
        </div>
        <div class="col-lg-3">
          <h5>NOTRE UNIVERS</h5>
          <ul class="footer_menu">
            <li>Nos produits</li>
            <li>Nos services</li>
            <li>Nos collections</li>
          </ul>

        </div>
        <div class="col-lg-3">
          <h5>NOS MAGASINS</h5>
          <ul class="footer_menu">
            <li><img src="@asset('images/store.png')" alt="store" class="footer_image"></li>
            <li>Trouver un magasin</li>
            <li>Ouvrir mon magasin</li>
          </ul>

        </div>
        <div class="col-lg-3">
          <h5>NOUS CONTACTER</h5>
          <ul class="footer_menu">
            <li>Nous contacter</li>
            <li>Prendre rendez-vous</li>
          </ul>
          <h5>NOUS SUIVRE</h5>
          <ul class="footer_menu">
            <li class="social">
              <svg class="icon icon-facebook"><use xlink:href="#icon-facebook"></use></svg>
              <svg class="icon icon-instagram"><use xlink:href="#icon-instagram"></use></svg>
            </li>
            <li>Inspirations, conseils, nouveautés,
on vous dit tout ici.</li>
            <input placeholder="Votre email" class="footer__input"/><button class="btn btn-fill">Ok</button>
          </ul>
        </div>
      </div>
    </div>
    @php dynamic_sidebar('sidebar-footer') @endphp
  </div>
</footer>
<div class="epilog">
  <div class="row ml-auto mr-auto col-md-8 text-center">
    Conditions d'utilisation - Cookies - Conditions de vente - Conditions d'utilisation des avis - Crédits : Lutece
  </div>
</div>
