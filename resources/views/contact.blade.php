@extends('layouts.app')
@section('content')

    <div class="container">

      <h1 class="mt-4 mb-3">Contact</h1>

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
          <form name="contactus" id="contactForm">
            <div class="control-group form-group">
              <div class="controls">
                <label>Volledige naam:</label>
                <input type="text" class="form-control" name="name" required data-validation-required-message="Voer uw volledige naam in.">
                <p class="help-block"></p>
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Telefoon nummer:</label>
                <input type="tel" class="form-control" name="phonenumber" required data-validation-required-message="Voer uw telefoon nummer in.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Email Adres:</label>
                <input type="email" class="form-control" name="email" required data-validation-required-message="Geldig e-mail adres.">
              </div>
            </div>
            <div class="control-group form-group">
              <div class="controls">
                <label>Bericht:</label>
                <textarea rows="10" cols="100" class="form-control" name="message" required data-validation-required-message="Plaats uw bericht" maxlength="999" style="resize:none"></textarea>
              </div>
            </div>
            <button type="submit" class="btn btn-primary" id="sendMessageButton">Verstuur bericht</button>
          </form>
        </div>

      </div>
      <!-- /.row -->

    </div>
    <!-- /.container -->

@endsection
