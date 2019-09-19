<div class="container-fliud d-none d-lg-block">
  <div class="topper">
    <a href="tel:0146283696" class="nav-link"><svg class="icon icon-phone"><use xlink:href="#icon-phone"></use></svg> 01 46 28 36 96</a>
  </div>
</div>
<header class="banner">
  <nav class="navbar navbar-transparent navbar-color-on-scroll navbar-expand-lg bg-white" color-on-scroll="100">
    <!-- fixed-top -->
    <div class="container-fluid">
      <a class="navbar-brand" href="{{ home_url('/') }}" data-placement="bottom">
        <img src="@asset('images/logo_mlm@2x.png')" class="brand">
      </a>
      <div class="collapse navbar-collapse" id="sectionsNav">
         @if (has_nav_menu('primary_navigation'))
          {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'navbar-nav']) !!}
        @endif
        <!-- <a class="nav-link navbar__magasins">magasins</a>
        <button class="btn navbar__cta">JE PRENDS RENDEZ-VOUS</button> -->
      </div>
      <div class="navbar-translate logo-container ">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sectionsNav" aria-controls="sectionsNav" aria-expanded="false" aria-label="Toggle navigation">
        	<svg class="icon icon-menu"><use xlink:href="#icon-menu"></use></svg>
        </button>
      </div>
      <a class="nav-link navbar__magasins">magasins</a>
      <button class="btn navbar__cta">JE PRENDS RENDEZ-VOUS</button>
    </div>
  </nav>
</header>
