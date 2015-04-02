@extends('homepage.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <p class="letter-from text-right">
                            Benedict Dudel</br>
                            dudel.benedict(at)gmail.com</br>
                            Süderstraße 2-4</br>
                            23554 Lübeck
                        </p>

                        <p class="letter-to">
                            {{ $company->long_name }}</br>
                            {{ $company->street }}</br>
                            {{ $company->postzip }} {{ $company->city }}
                        </p>

                        <p class="letter-date text-right">
                            Lübeck, {{ $dateToday }}
                        </p>

                        <p class="letter-subject">
                            <b>Kündigung zur Kreditkarte mit der Nummer 124578945521</b>
                        </p>

                        <p class="letter-salutation">
                            Sehr geehrte Damen und Herren,
                        </p>

                        <p class="letter-body">
                            hiermit kündige ich das mit Ihnen bestehende Arbeitsverhältnis vom ..... ordentlich und fristgerecht zum .....  "Ordentlich" und "fristgerecht" verwenden.
                            Bitte bestätigen Sie mir den Erhalt dieser Kündigung und das Aufhebungsdatum des Arbeitsvertrages schriftlich.  Lassen Sie sich Ihre Kündigung immer bestätigen.
                            Ich bitte Sie, mir ein qualifiziertes berufsförderndes Arbeitszeugnis auszustellen. Ein qualifiziertes Arbeitszeugnis steht Ihnen zu. Arbeitszeugnis
                            </br></br>Für die Zusammenarbeit bedanke ich mich recht herzlich.
                        </p>

                        <p class="letter-name">
                            Benedict Dudel
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- download area -->
    <div class="container-fluid download-area">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h3>Telekom Vertrag kündigen - schnell und unkompliziert!</h3>
            <span>Wir bieten Ihnen den Versand ihrer Kündigung kostengünstig per Fax an!</span>
          </div>
          <div class="col-md-4">
            <a href="#" class="btn btn-primary pull-right">Jetzt Kündigung versenden!</a>
            <a href="javascript:void(0)" class="btn btn-info pull-right">als .PDF, .DOC oder .ODT speichern</a>
          </div>
        </div>
      </div>
    </div>

    <!-- download area -->
    <div class="container description">
      <div class="row">
        <div class="col-md-12">
          <h1>Fragen &amp; Antworten</h1>

          <h4>Sollte ich per Fax oder Post meine Kündigung versenden?</h4>
          <p class="answer">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
            sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
            ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
            takimata sanctus est Lorem ipsum dolor sit amet.
          </p>

          <h4>Sind Kündigungen über abomat rechtlich abgesichert?</h4>
          <p class="answer">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
            sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
            ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
            takimata sanctus est Lorem ipsum dolor sit amet.
          </p>

          <h4>Warum sollte ich den Kündigungsservice von abomat nutzen?</h4>
          <p class="answer">
            Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
            sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
            ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore
            magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea
            takimata sanctus est Lorem ipsum dolor sit amet.
          </p>
        </div>
      </div>
    </div>
@stop
