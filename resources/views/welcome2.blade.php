@extends('layouts.app')
@section('content')

  <!-- Page Content -->
  <div class="container">
    <!-- Jumbotron Header -->
    <header class="jumbotron my-4 pe-jumbotron">
      <h1 class="display-3">Duurzame energie voor iedereen!</h1>
        <div style="font-size: 20px;max-width: 400px;color: white;
        text-shadow: 1px 1px 2px black, 0 0 25px blue, 0 0 5px darkblue;">
        Planet Energy is een platform dat o.a. de mogelijkheid geeft aan mensen met een laag inkomen om te investeren in duurzame energie.
        Dit wordt gedaan dmv leningen en subsidies. Verder is Planet energy een informatie platform voor duurzame energie.
        </div>
      <a href="" class="btn btn-primary btn-lg">Lees meer...</a>
    </header>

    <!-- Page Features -->
    <div class="row text-center">

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">

		  <a href="/loans"><img class="card-img-top" src="img/nature.jpg" alt="Card image" title="klik om link te volgen"></a>
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

                    <a href="/subsidies">
                        <img class="card-img-top" src="img/houses.jpg" alt="Card image" title="klik om link te volgen"></a>
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

           <a href="/mainwebshop"><img class="card-img-top" src="img/farm.jpg" alt="Card image" title="klik om link te volgen"></a>

          <div class="card-body">
            <h4 class="card-title">Webshop</h4>
            <p class="card-text">Wij bieden op het gebied van duurzame energie een aantal producten aan, deels aangeboden door particulieren, deels door bedrijven.....</p>
          </div>
          <div class="card-footer">
            <a href="/mainwebshop" class="btn btn-primary">Meer info</a>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 mb-4">
        <div class="card h-100">

         			  <a href="/forum"><img class="card-img-top" src="img/ducks.jpg" alt="Card image" title="klik om link te volgen"></a>
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
