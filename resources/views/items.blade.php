<!DOCTYPE html>
<html>
    <head>
        <title>Coalition Technologies</title>

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
                    <a class="navbar-brand" href="#">Coalition Technologies</a>
                  </div>
                </div><!--/.container-fluid -->
            </nav>
        </div>
        <div class="container">
            <div id="item-form" class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="contact-name">Product</label>
                        <input required type="text" class="form-control" name="product" id="product" placeholder="Product Name" value="">
                    </div>
                    <div class="form-group">
                        <label for="contact-nickname">Quantity</label>
                        <input required type="text" class="form-control" name="quantity" id="quantity" placeholder="4" value="">
                    </div>
                    <div class="form-group">
                        <label for="contact-date-met">Price</label>
                        <input type="text" class="form-control" name="price" id="price" placeholder="10.50" value="">
                    </div>
                    <div>
                         <button id="item-submit" type="submit" class="btn btn-success btn-sm">Submit</button>
                    </div>
                </div>
                <div class="col-md-6">
                   
                </div>
            </div>
            <br/>
            <div class="row">
                <table id="item-table" class="table table-striped">
                    <tr>
                        <th>Product Name</th>
                        <th>Quantity</th>
                        <th>Price</th>
                        <th>Date</th>
                        <th>Total Value</th>
                    </tr>
                </table>
            </div>
        </div>
    <script>
        var base_url="{{ url('/') }}/";
    </script>
    <script src="{{ url('/') }}/bower_components/jquery-2.2.4.min/index.js"></script>
    <script src="{{ url('/') }}/styles/bootstrap/js/bootstrap.min.js"></script>
    <script src="{{ url('/') }}/cd-trial.js"></script>
    </body>
</html>
