<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
    crossorigin="anonymous">

  <!-- Local CSS -->
  <link rel="stylesheet" href="css/style.css">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

  <title>Enter Data for your BC</title>
</head>

<body>
  <div class="container">
    <div class="row justify-content-center m-3">
      <div class="font" style="font-size:2.5rem;color: #636b6f;"> Create a Business Card</div>
    </div>
  </div>

  <div class="container col-md-8 mt-2">
    <form method="POST" action="/bcards">
      {{ csrf_field() }}

      <div class="form-group">
        <label for="Name">Employee Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Employee Name">
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="title">Title</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Employee Title">
        </div>
        <div class="form-group col-md-6">
          <label for="description">Description</label>
          <input type="text" class="form-control" id="description" name="description" placeholder="Description">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="email">Email</label>
          <input type="email" class="form-control" name="email" id="email" placeholder="Employee Email">
        </div>
        <div class="form-group col-md-6">
          <label for="property_website">Property Website</label>
          <input type="text" class="form-control " name="property_website" id="property_website" placeholder="Property Website">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="direct">Direct Phone</label>
          <input type="tel" class="form-control" name="direct" id="direct" placeholder="Format: 123.123.1234">
        </div>
        <div class="form-group col-md-6">
          <label for="office">Office Phone</label>
          <input type="tel" class="form-control" name="office" id="office" placeholder="Format: 123.123.1234">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="cell">Cell</label>
          <input type="tel" class="form-control " name="cell" id="cell" placeholder="Format: 123.123.1234">
        </div>
        <div class="form-group col-md-6">
          <label for="fax">Fax</label>
          <input type="tel" class="form-control" name="fax" id="fax" placeholder="Format: 123.123.1234">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="address">Address</label>
          <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
        </div>
        <div class="form-group col-md-6">
          <label for="address2">Address 2</label>
          <input type="text" class="form-control" name="address2" id="address2" placeholder="Suite">
        </div>
      </div>
      <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputCity">City</label>
          <input type="text" class="form-control" name="city" id="inputCity" placeholder="Employee City">
        </div>
        <div class="form-group col-md-3">
          <label for="state">State</label>
          <input type="text" class="form-control" name="state" id="state" placeholder="State">
        </div>
        <div class="form-group col-md-3">
          <label for="zip">Zip</label>
          <input type="text" class="form-control" name="zip" id="zip" placeholder="Zip">
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-block mt-3">Show me my Business Card</button>
    </form>

  </div>


  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>
</body>

</html>
