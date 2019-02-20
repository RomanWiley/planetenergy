@extends('layouts.app')
@section('content')

    <div class="container">

      <h1 class="mt-4 mb-3">Contact us</h1>

      <div class="row">

        <div class="col-lg-4 mb-4">
          <h3>Contact Details</h3>
          <p>
          Brouwerijstraat 1
            <br>7523XC Enschede, Netherlands
            <br>
          </p>
          <p>
            <abbr title="Phone">GSM</abbr>: +31 (0) 6 48529242
          </p>
          <p>
            <abbr title="Email">Email</abbr>:
            <a href="mailto:contactus.planetenergy@gmail.com">Mail us!
            </a>
          </p>
          <p>
            <abbr title="Hours">Bereikbaar</abbr>: Maandag - Vrijdag: 9:00  to 17:00 uur
          </p>
        </div>
      </div>

      <!-- Contact Form -->
      <!-- In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
      <div class="row">
        <div class="col-lg-8 mb-4">
          <h3>Stuur uw bericht aan ons</h3>
            {!! Form::open(['route' => 'contact.store']) !!}

            <div class="form-group">
                {!! Form::label('name', 'Your Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'E-mail Address') !!}
                {!! Form::text('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::textarea('msg', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Submit', ['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}
        </div>

        @include('error')

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection
