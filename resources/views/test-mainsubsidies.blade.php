@extends('layouts.app')

@section('content')

 <!-- Page Content -->
  <div class="container">

    <!-- Page Heading/Breadcrumbs -->
    <h1 class="mt-4 mb-3">Subsidie
      <small>particulieren</small>
    </h1>

    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Home</a>
      </li>
      <li class="breadcrumb-item active">detail informatie</li>
    </ol>

    <div class="row">

      <!-- Blog Entries Column -->
      <div class="col-md-8">

        <!-- Blog Post -->
        <div class="card mb-4">
          <img class="card-img-top" src="img/geld.jpg" alt="Card image cap">
          <div class="card-body">
            <h2 class="card-title">Subsidies</h2>
            <p class="card-text">Omdat wij natuurlijk niet zelf subsidies verstrekken, is de subidiepijler alleen bedoeld om aandacht te geven aan het feit dat de subsidies bestaan. Natuurlijk proberen we wel de ingang en info te geven voordat u in het aanmeldingstraject komt. En we geven de basisinformatie voordat u teleurgesteld ontdekt niet in aanmerking te kunnen komen.
			De belangrijkste regeling voor energie is in Nederland de ISDE. Het doel van de regeling Investeringssubsidie Duurzame Energie (ISDE) is het stimuleren van de productie van duurzame energie door middel van met name relatief kleine productie-installaties die geen gebruik kunnen maken van het Besluit stimulering duurzame energie (SDE+).
			Geografie: Nationaal
			Subsidieverstrekker: Ministerie van Economische Zaken en Klimaat
			Maximale bijdrage: Onbepaald
			Status: Open voor indiening
			Deadline voor aanvraag: 31-12-2019.</p>
            <a href="#" class="btn btn-primary">Read More &rarr;</a>
          </div>
          <div class="card-footer text-muted">
            Posted on January 1, 2017 by
            <a href="#">Planet Energy</a>
          </div>
        </div>

      

        <!-- Pagination 
        <ul class="pagination justify-content-center mb-4">
          <li class="page-item">
            <a class="page-link" href="#">&larr; Older</a>
          </li>
          <li class="page-item disabled">
            <a class="page-link" href="#">Newer &rarr;</a>
          </li>
        </ul> -->

      </div>

      <!-- Sidebar Widgets Column -->
      <div class="col-md-4">

        <!-- Search Widget -->
        <div class="card mb-4">
          <h5 class="card-header">Search</h5>
          <div class="card-body">
            <div class="input-group">
              <input type="text" class="form-control" placeholder="Search for...">
              <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
            </div>
          </div>
        </div>

        <!-- Categories Widget -->
        <div class="card my-4">
          <h5 class="card-header">Linkjes</h5>
          <div class="card-body">
            <div class="row">
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">linkje</a>
                  </li>
                  <li>
                    <a href="#">linkje</a>
                  </li>
                  <li>
                    <a href="#">linkje</a>
                  </li>
                </ul>
              </div>
              <div class="col-lg-6">
                <ul class="list-unstyled mb-0">
                  <li>
                    <a href="#">linkje</a>
                  </li>
                  <li>
                    <a href="#">linkje</a>
                  </li>
                  <li>
                    <a href="#">linkje</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        <!-- Side Widget -->
        <div class="card my-4">
          <h5 class="card-header">Side Widget</h5>
          <div class="card-body">
            hier kan nog el;ke tekst geplaatst worden die we willen
          </div>
        </div>

      </div>

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->






<!--tton class="btn btn-info"><a class="text-dark font-weight-bold" href="#">Proceed</a></button>-->

@endsection
