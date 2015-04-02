@extends('homepage.layout')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
              <h1>Wählen Sie ein Unternehmen aus!</h1>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam
                nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat,
                sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
                Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam
                et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                ipsum dolor sit amet.
              </p>

              <h3>1. Kategorie auswählen</h3>
              <div class="form-group">
                <label for="select" class="control-label sr-only">Kategorie</label>
                <select class="form-control" id="select">
                  <option>Finanzen</option>
                  <option>Bla</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <h3>2. Unterkategorie auswählen</h3>
              <div class="form-group">
                <label for="select" class="control-label sr-only">Unterkategorie</label>
                <select class="form-control" id="select">
                  <option>Kreditkarte</option>
                  <option>Bla</option>
                  <option>3</option>
                  <option>4</option>
                  <option>5</option>
                </select>
              </div>

              <h3>3. Unternehmen auswählen</h3>
              <table class="table table-striped table-hover ">
                <thead>
                    <tr>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Telekom</td>
                    </tr>
                    <tr>
                        <td>Telekom</td>
                    </tr>
                    <tr>
                        <td>Telekom</td>
                    </tr>
                    <tr>
                        <td>Telekom</td>
                    </tr>
                    <tr>
                        <td>Telekom</td>
                    </tr>
                    <tr>
                        <td>Telekom</td>
                    </tr>
                    <tr>
                        <td>Telekom</td>
                    </tr>
                    <tr>
                        <td>Telekom</td>
                    </tr>
                    <tr>
                        <td>Telekom</td>
                    </tr>
                </tbody>
              </table>

              <a href="{{ action('Homepage\NoticeController@terminate') }}" class="btn btn-primary pull-right">Kündigung erstellen</a>
            </div>
        </div>
    </div>
@stop
