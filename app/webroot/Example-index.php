<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
      
      body{
        max-width: 1000px;
        margin-left:auto;
        margin-right:auto;
        background-color: white;
      }

      /* Main marketing message*/
      .jumbotron {
        margin: 40px 0px;
        text-align: center;
        background-repeat:no-repeat;
        background-image:url('http://www.australia.com/contentimages/about-landscapes-wine-regions.jpg');
        background-position: top;  
        background-size: 1000px;
        border: 0px solid;
        border-radius: 15px;
        background-color: white;
      }
      .jumbotron h1 {
        font-size: 100px;
        font-family: Papyrus, fantasy;
        color: lightgrey;
        line-height: 1;
      }
      .jumbotron .lead {
        font-size: 25px;
        line-height: 1.25;
        color: white;
      }
      .jumbotron .btn {
        font-size: 21px;
        padding: 14px 24px;
      }
    </style>
  </head>
  <body>
    <!-- First Container -->
    <div class="container-fluid">
      <div class="row-fluid">
        
        <!--Top Row Cotainer-->
        <div class="row-fluid">
          <div class="span12">

            <div class="navbar navbar-fixed-top">
              <div class="navbar-inner">
                <a class="brand" style="font-family: Papyrus, fantasy;" href="#">The Fine Wine</a>
                <ul class="nav">
                  <li class="divider-vertical"></li>
                  <li class="active">
                    <a href="#">Home</a>
                  </li>
                  <li class="divider-vertical"></li>
                  <li><a href="#">About Us</a></li>
                  <li class="divider-vertical"></li>
                  <li><a href="#">Contact Us</a></li>
                  <li class="divider-vertical"></li>
                  <li>
                    <a href="#">
                      <i class="icon-shopping-cart"></i> Cart
                    </a>
                  </li>
                   
                </ul>
              </div>
            </div>

          </div>
        </div>

        <!--Advertise / Middle Row content-->
        <div class="row-fluid jumbotron">
          <div class="span12">
            <h1></br>The Fine Wine</h1>
            <p class="lead">
            </br></br>
              While we only carry fine wine, this list represents the best wine we have to offer - highly rated wines, rare wines and limited production wines for serious oenophiles and collectors. Our premium wines will augment your personal wine cellar or serve as the perfect gift for a wine lover.
            </p>
          </div>
        </div>

        <!--Body / Middle Row content-->
        <?php
          /*
          //Connect To Database
          function dbConnect() {
            global $dbh;

            $dbInfo['database_target'] = "localhost";
            $dbInfo['database_name'] = "CakePHP_DB";
            $dbInfo['username'] = "root";
            $dbInfo['password'] = "a1b2c3d4";

            try {
              $dbConnString = "mysql:host=" . $dbInfo['database_target'] . "; dbname=" . $dbInfo['database_name'];
              $dbh = new PDO($dbConnString, $dbInfo['username'], $dbInfo['password']);
              echo "Connected to database</br>";
            }
            catch(PDOException $e) {
              echo $e->getMessage();
            }
          };

          //Call Db Connect
          dbConnect();
          */
          
          try {
            $this->render('Product');
            

           
          }catch(PDOException $e) {
            echo "SQL Result: </br>".$e->getMessage()."</br>";
          }
          

        ?>
        <div class="row-fluid">
          <!--Body content-->
          <div class="span12" style="background-color: white;">

            <!-- Button to trigger modal -->
            <a href="#myModal" role="button" class="btn" data-toggle="modal">Launch demo modal</a>

            <!-- Modal -->
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  <i class="icon-remove"></i>
                </button>
                <h3 id="myModalSublabel">Dom. de Beaurenard Cuvee Boisrenard Chateauneuf-du-Pape 2010</h3>
                <h5 id="myModalLabel">Fine Wine</h5>
              </div>
              <div class="modal-body">
                <div class="row-fluid">
                  
                  <div class="row-fluid">
                    <div class="span6">
                      <img src="http://cache2.wine.com/labels/121206l.jpg"></img>
                      <p>Dom. de Beaurenard Cuvee</br>Boisrenard Chateauneuf-du-Pape 2010</p>
                    </div>
                    <div class="span6">Parcels of old vines 60-100 years in age, planted in soils of great character and complexity, provide the grapes for this wine.</div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                <button class="btn btn-primary">Save changes</button>
              </div>
            </div>

          </div>
        </div>
      </div>
      




      
    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>