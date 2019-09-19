{{--
  Template Name: Template Services Page
--}}

@extends('layouts.app')

@section('content')

<div class="wrap container-fluid">
  <div class="main-teaser">
    <div class="display-table">
      <div class="table-cell">
        <h3 class="section_subtitle text-white">Section subtitle</h3>
        <h1 class="section_title text-white">LES SERVICES</h1>
      </div>
    </div>
  </div>
</div>

<div class="section section-text col-md-8 ml-auto mr-auto">
  <div class="">
    <div class="text-center">
      <h3 class="section_subtitle">Section subtitle</h3>
      <h1 class="section_title">LES SERVICES</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque in tincidunt quam, a mattis metus. Ut bibendum hendrerit odio, ac pharetra massa mollis sed.</p>
    </div>
  </div>
</div>

<div class="">
  <div class="container-fluid no-padding bg-rose">
    <div class="row flex-column-reverse flex-lg-row">
      <div class="col-lg-6 px-0 ">
        <!-- order-lg-2 -->
        <img src="@asset('images/photo_une_expertise.jpg')" alt="photo_une_expertise" class="w-100">
      </div>
      <div class="col-lg-4 offset-lg-1 px-0">
        <!-- order-md-1 -->
        <div class="display-table section_text">
          <div class="table-cell">
            <img src="@asset('images/Une_expertise@2x.png')" alt="Une_expertise" class="large_icon">
            <h1 class="section_title">UNE EXPERTISE</h1>
            <p>Découvrez la sélection de produits exceptionnels réunis pour vous pas mon lit et moi</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-white">
  <div class="container-fluid no-padding">
    <div class="row">
      <div class="col-lg-4 offset-lg-1 px-0 text-right">
        <div class="display-table section_text">
          <div class="table-cell">
            <img src="@asset('images/Une_experience@2x.png')" alt="Une_expérience" class="large_icon">
            <h1 class="section_title">UNE EXPÉRIENCE SUR MESURE</h1>
            <p>Vivez l’expérience unique du cocon Ergosleep pour mesurer votre ADN du sommeil.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 offset-lg-1 px-0">
        <img src="@asset('images/photo_une_experience.jpg')" alt="photo_une_experience" class="w-100">
      </div>
    </div>
  </div>
</div>

<div class="">
  <div class="container-fluid no-padding bg-rose">
    <div class="row flex-column-reverse flex-lg-row">
      <div class="col-lg-6 px-0">
        <img src="@asset('images/personnalisation_photo.jpg')" alt="personnalisation_photo" class="w-100">
      </div>
      <div class="col-lg-4 offset-lg-1 px-0">
        <div class="display-table section_text">
          <div class="table-cell">
            <img src="@asset('images/personnalisation@2x.png')" alt="personnalisation" class="large_icon">
            <h1 class="section_title">AU BOUT DE LA PERSONNALISATION</h1>
            <p>En magasin ou chez vous, nos experts sont à vos côtés pour concrétiser vos projets. Partagez avec nous vos envies, vos idées, vos contraintes, votre budget… et nous vous apportons les solutions idéales.</p>
            <p>Choix de matières, de motifs, de couleurs, de finitions… Nous vous offrons des conseils sur-mesure, pour un projet unique.</p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="ad_banner gap-around">
  <img src="@asset('images/banner_minor.jpg')" alt="banner" class="ad_banner__img">
</div>

<div class="">
  <div class="container-fluid gap-around">
    <div class="row">
      <div class="col-lg-4 offset-lg-1 px-0 text-right">
        <div class="display-table section_text">
          <div class="table-cell">
            <img src="@asset('images/paiement@2x.png')" alt="paiement" class="large_icon">
            <h1 class="section_title">FACILITÉS DE PAIEMENT</h1>
            <p>mon lit et moi vous propose de régler vos achats jusqu'en 60 fois sans frais.</p>
          </div>
        </div>
      </div>
      <div class="col-lg-6 offset-lg-1 px-0">
        <img src="@asset('images/paiement_photo.jpg')" alt="photo_une_experience" class="w-100">
      </div>
    </div>
  </div>
</div>

<div class="">
  <div class="container-fluid no-padding bg-rose">
    <div class="row flex-column-reverse flex-lg-row">
      <div class="col-lg-6 px-0">
        <img src="@asset('images/livraison_photo.jpg')" alt="livraison photo" class="w-100">
      </div>
      <div class="col-lg-4 offset-lg-1 px-0">
        <div class="display-table section_text">
          <div class="table-cell">
            <img src="@asset('images/Livraison@2x.png')" alt="personnalisation" class="large_icon">
            <h1 class="section_title">LIVRAISON</h1>
            <p>Détendez-vous, nous nous occupons de tout.</p>
            <p>Notre service livraison installe votre commande est recyclé votre ancienne literie.</p>
          </div>
        </div>
      </div>
      </div>
    </div>
  </div>
</div>

<div class="section_store">
  <div class="container-fluid no-padding bg-shop">
  <div class="shade"></div>
  <div class="col-md-9 ml-auto mr-auto text-center mb-5">
    <h3 class="section_subtitle text-white">Tout commence ici</h3>
    <h1 class="section_title text-white">VOTRE QUÊTE DU LIT PARFAIT</h1>
  </div>

    <div class="container-fluid mb-5">
      <div class="row">
        <div class="col-lg-6 offset-xl-1 col-xl-5">
          <div class="pattern_left">
            <div class="card card_mlm">
              <h1 class="section_title">JE TROUVE MON MAGASIN</h1>
              <p>Rencontrons-nous dans l'un de nos 46 magasins en France, nos experts vouus conseilleront le lit idéal.</p>
              <button class="btn btn-fill">TROUVER MON MAGASIN</button>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-xl-5">
          <div class="pattern_right">
            <div class="card card_mlm">
              <h1 class="section_title">JE PRENDS RENDEZ-VOUS</h1>
              <p>Rencontrons-nous dans l'un de nos 46 magasins en France, nos experts vouus conseilleront le lit ideál.</p>
              <button class="btn btn-fill">PRENDE RENDEZ-VOUZ</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="icons section-white">
  <div class="container-fluid no-padding">
    <div class="row">
      <div class="offset-lg-1"></div>
      <div class="col-lg-2 icons__item">
        <img src="@asset('images/Une_expertise@2x.png')" alt="personnalisation" class="small_icon">
        <div class="icons__text">
          Une expertise
        </div>
      </div>
      <div class="col-lg-2 icons__item">
        <img src="@asset('images/Une_experience@2x.png')" alt="personnalisation" class="small_icon">
        <div class="icons__text">
          Une expérience</br>sur mesure
        </div>
      </div>
      <div class="col-lg-2 icons__item">
        <img src="@asset('images/personnalisation@2x.png')" alt="personnalisation" class="small_icon">
        <div class="icons__text">
          Au bout de la</br> personnalisation
        </div>
      </div>
      <div class="col-lg-2 icons__item">
        <img src="@asset('images/paiement@2x.png')" alt="personnalisation" class="small_icon">
        <div class="icons__text">
          Facilités de </br>paiement
        </div>
      </div>
      <div class="col-lg-2 icons__item">
        <img src="@asset('images/Livraison@2x.png')" alt="personnalisation" class="small_icon">
        <div class="icons__text">
          Livraison
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
