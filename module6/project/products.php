<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/colorpalette.css">
    <title>Northridge Bakery - Home</title>
  </head>
  <body>
    <!-- Begin page header and nav bar -->
    <div class="page-header" style="padding-bottom: 0px; margin-top: 0px">
      <img class="img-responsive" src="images/bakerylogo.jpg" alt="Northridge Bakery Logo" style="display: block; margin-right: auto; margin-left: auto;">
      <!-- <h1 style="text-align: center">Northridge Bakery</h1> -->
    </div>
    <div class="container">
      <nav class="navbar navbar-default">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bakery-navbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.html">Northridge Bakery</a>
          </div>
          <div class="collapse navbar-collapse" id="bakery-navbar">
            <ul class="nav navbar-nav">
              <li ><a href="index.html">Home</a></li>
              <li class="active"><a href="products.php">Products</a></li>
              <li><a href="contact.html">Contact Us</a></li>
              <li><a href="about.html">About Us</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span> My Cart <span class="badge">0</span></a></li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End page header and nav bar -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h2 style="text-align: center">Fresh Baked Goods!</h2>
        </div>
      </div>
    </div>
        <div class="container">
          <?php
            // Retrieve database login and display Products
            $databaseUser = simplexml_load_file("config.xml") or die("Error: Unable to open XML.");

            $databaseConnection = new mysqli($databaseUser->servername, $databaseUser->username, $databaseUser->password, $databaseUser->databasename);
            if ($databaseConnection->connect_error) {
              die("Database connection failed:" . $databaseConnection->connect_error);
            }


            $sql = "SELECT ProductID, ProductName, Price, Description, Thumbnail FROM Products";
            $results = $databaseConnection->query($sql);

            if (($results->num_rows > 0) && ($results)) {
              // output all products from the products table in mobile friendly format.
              while($row = $results->fetch_assoc()) {
                //echo "<div class='clearfix'></div>";
                echo "<div class='row'>";
                echo "<div class='col-sm-2'>";
                echo "<p style='text-align: center'>" . $row["ProductName"] . "</p>";
                echo "<img class='img-responsive img-thumbnail' src='" . $row["Thumbnail"] . "' alt='Product Thumbnail'></img>";
                echo "</div>";
                echo "<div class='col-sm-6'>";
                echo "</br>";
                echo "<p>Description:</p>";
                echo "<p>" . $row["Description"] . "</p>";
                echo "</div>";
                echo "<div class='col-sm-4'>";
                echo "</br>";
                echo "<p><b>Price:</b> $" . $row["Price"];
                echo "<form class='' action=''>";
                echo "<div class='form-group'>";
                echo "<label for='quantity" . $row["ProductID"] . " '>Quantity: </label>";
                echo "<input type='text' class='form-control' id='quantity" . $row["ProductID"] . " ' " . "</input>";
                echo "</div>";
                echo "</br>";
                echo "<button type='submit' class='btn btn-primary'>Add to Cart</button>";
                echo "</form>";
                echo "</div>";
                echo "</div>";
              }
            } else {
              echo "The products table is empty.";
            }
            $databaseConnection->close();
          ?>
        </div>
      <!-- Begin page header footer -->
    <div class="container text-center well">
      <div class="page-footer">
        <p><a href="#"><b>Home</b></a> - <a href="products.html">Products</a> - <a href="contact.html">Contact Us</a> - <a href="about.html">About Us</a></p>
        <p>&copy; Paul Nater. For CIS3801C Project at Rasmussen College.</p>
      </div>
    </div>
<!-- End page footer -->
  </body>
</html>
