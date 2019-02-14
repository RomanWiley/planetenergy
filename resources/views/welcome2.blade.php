@extends('layouts.app')
@section('content')

  <!-- Page Content -->
  <div class="container">
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4 pe-jumbotron">
      <h1 class="display-3">Duurzame energie voor iedereen!</h1>
      <p class="lead">Planet Energy is een platform dat o.a. de mogelijkheid geeft aan mensen met een laag inkomen om te investeren in duurzame energie. Dit wordt gedaan dmv leningen en subsidies. Verder is Planet energy een informatie platform voor duurzame energie.</p>
      <a href="" class="btn btn-primary btn-lg">Lees meer...</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
          <img class="card-img-top" src="img/nature.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Leningen</h4>
            <p class="card-text">Heeft u plannen om te investeren in duurzame energie?
Natuurlijk komt u dan als een van de eerste zaken de kosten tegen.....</p>
          </div>
          <div class="card-footer">
            <a href="/loans" class="btn btn-primary">Meer info</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">

                    <img class="card-img-top" src="img/houses.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Subsidies</h4>
            <p class="card-text">Hier vindt u een overzicht van subsidieregelingen die er worden aangeboden…..</p>
          </div>
          <div class="card-footer">
            <a href="/subsidies" class="btn btn-primary">Meer info</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
        <BR>
        <BR>
          <img class="card-img-top" src="img/farm.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Shop</h4>
            <p class="card-text">Wij bieden op het gebied van duurzame energie een aantal producten aan, deels aangeboden door particulieren, deels door bedrijven.....</p>
          </div>
          <div class="card-footer">
            <a href="/mainwebshop" class="btn btn-primary">Meer info</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">
        <BR>
        <BR>
        <BR>
                    <img class="card-img-top" src="img/ducks.jpg" alt="">
          <div class="card-body">
            <h4 class="card-title">Forum</h4>
            <p class="card-text">Hier kunt u alles vinden en delen op het gebied van innovatie binnen de wereld van duurzame energie.....</p>
          </div>
          <div class="card-footer">
            <a href="/forum" class="btn btn-primary">Meer info</a>
          </div>
        </div>
      </div>

    </div>
    <!-- /.row -->

  </div>

@endsection
