<!DOCTYPE html>
<html>
    <head>
        <title>Lottery Predictor</title>

        <link href="{{ url('/') }}/styles/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-default">
                <div class="container-fluid">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Lottery Predictor</a>
                  </div>
                </div><!--/.container-fluid -->
            </nav>
        </div>
        <div class="container">
            <div id="item-form" class="row">
                <div class="col-md-12">
                    <div class="form-inline">
                        <input required name="digit1" class="form-control" type="number">
                        <input required name="digit2" class="form-control" type="number">
                        <input required name="digit3" class="form-control" type="number">
                        <button id="randomize" type="button" class="btn btn-primary btn-sm">Randomize</button>
                    </div>
                        
                   <br/>
                    <div >
                        <button id="number-submit" type="submit" class="btn btn-success btn-sm">Submit</button>
                        &nbsp&nbsp<div id="results" style="display: inline;"></div>
                    </div>
                </div>
                <div class="col-md-6">
                   
                </div>
            </div>
           
        </div>
    <script>
        var base_url="{{ url('/') }}/";
    </script>
    <script src="{{ url('/') }}/bower_components/jquery-2.2.4.min/index.js"></script>
    <script src="{{ url('/') }}/styles/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/lottery-predictor.js"></script>
    </body>
</html>
