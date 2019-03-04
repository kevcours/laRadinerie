@extends('layouts.app')

@section('content')
<div class="container"> 
  <!-- Section: Contact v.1 -->
  <section class="my-5">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-5">Nous Contactez :</h2>
  <!-- Section description -->
  <p class="text-center w-responsive mx-auto pb-5">Vous rencontrez un probleme avec notre Site ou bien vous avez des questions ?</p>
  <p class="text-center w-responsive mx-auto pb-5">N'hésitez pas à nous le faire savoir avec le formulaire si dessous ou passez à l'agence en cas de necessité !</p>

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-5 mb-lg-0 mb-4">

      <!-- Form with header -->
      <div class="card">
        <div class="card-body">
          <!-- Header -->
          <div class="form-header green accent-1">
            <h3 class="mt-2"><i class="fas fa-envelope"></i> </h3>
          </div>
          <!-- Body -->
          <div class="md-form">
            <i class="fas fa-user prefix grey-text"></i>
            <input type="text" id="form-name" class="form-control">
            <label for="form-name">Votre nom</label>
          </div>
          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <input type="text" id="form-email" class="form-control">
            <label for="form-email">Votre mail</label>
          </div>
          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <input type="text" id="form-Subject" class="form-control">
            <label for="form-Subject">Sujet</label>
          </div>
          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
            <textarea type="text" id="form-text" class="form-control md-textarea" rows="3"></textarea>
            <label for="form-text">Message</label>
          </div>
          <div class="text-center">
            <button class="btn btn-light-green">Envoyer</button>
          </div>
        </div>
      </div>
      <!-- Form with header -->

    </div>
    <!-- Grid column -->

    <!-- Grid column -->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-section" class="z-depth-1-half map-container-section mb-4" style="height: 400px">
        <iframe src="https://maps.google.com/maps?q=Manhatan&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0" allowfullscreen></iframe>
      </div>
      <!-- Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating form-header green logoContact accent-1">
            <i class="fas fa-map-marker-alt"></i>
          </a>
          <p>Gap, 05000</p>
          <p class="mb-md-0">France</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating form-header logoContact green accent-1">
            <i class="fas fa-phone"></i>
          </a>
          <p>04 92 92 92 92</p>
          <p class="mb-md-0">Lundi - Vendredi , 8:00-22:00</p>
        </div>
        <div class="col-md-4">
          <a class="btn-floating form-header logoContact green accent-1">
            <i class="fas fa-envelope"></i>
          </a>
          <p>laRadinerie@contact.org</p>
        </div>
      </div>

    </div>
    <!-- Grid column -->

  </div>
  <!-- Grid row -->

  </section>
  <!-- Section: Contact v.1 -->
        </div>
@endsection