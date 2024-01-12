<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <style>
    a{
        text-decoration: none;
    }
  </style>
  <body>
        <div class="row pt-5">
            <div class="col-xl-12 col-sm-10 bg-primary rounded">
                <form action="search_output.php" method="GET">
                    <div class="center text-center my-3">
                        <h5>Search Here</h5></div>
                    <select class="form-select form-select-md mb-3" aria-label=".form-select-lg example">
                    <option selected>Select Type of Apartment</option>
                    <option value="1">Laxury</option>
                    <option value="2">Classic</option>
                    <option value="3">Other</option>
                    </select>
                    <select class="form-select form-select mb-3" aria-label=".form-select-lg example">
                    <option selected>Price Range</option>
                    <option value="1">5000-10000</option>
                    <option value="2">10000-20000</option>
                    <option value="3">20000-50000</option>
                    <option value="3">more than 50000</option>
                    </select>
                    <select class="form-select form-select mb-3" aria-label=".form-select-lg example">
                    <option selected>Floor</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    </select>
                    <div class="form-group form-group-lg mb-3">
                        <input type="submit" class="form-control btn btn-secondary" id="exampleInputPassword1" value="search">
                    </div>
                </form>
            </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>