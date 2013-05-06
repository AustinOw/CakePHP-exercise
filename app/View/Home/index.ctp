<!-- Refrence Web: 
http://www.marcofolio.net/webdesign/building_a_blog_with_cakephp_part_1_getting_started.html

http://books.google.com.my/books?id=-sswMuCuUn8C&pg=PT194&lpg=PT194&dq=simple+step+for+cakephp+retrieve+sql+data&source=bl&ots=MAvllb5-_Z&sig=e4q51boVhDYRzhzfayp0_oqhK7A&hl=en&sa=X&ei=NTpvUaKzD9GsrAeTOg&ved=0CEAQ6AEwAzgK

http://www.packtpub.com/article/working-with-simple-associations-using-cakephp

http://tuxradar.com/content/cakephp-tutorial-build-web-apps-faster
-->

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Bootstrap 101 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap-->
    <link href="/bootstrap/css/bootstrap-responsive.css" rel="stylesheet">
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style type="text/css">
      
      body{
        max-width: 1000px;
        margin-left:auto;
        margin-right:auto;
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
      }
      .jumbotron h1 {
        font-size: 100px;
        font-family: Papyrus, fantasy;
        color: lightgrey;
        line-height: 1;
        background: none;
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
        <div class="row-fluid">

          <!--Body content-->
          <div id="Inventory" class="span12" style="background-color: white;">
          	<div class="row">
          		
          		<?php
				//debug($Items);

				foreach ($Items as $Item) {
					$ItemID = $Item['Inventory']['ItemID'];
					$ItemName = $Item['Inventory']['ItemName'];
					$ItemImgLink = $Item['Inventory']['ImageLink'];
					$ItemDescription = $Item['Inventory']['Description'];
					$ItemCategory = $Item['Inventory']['Category'];
					
					?>

					<div class="Item span4">

						<h4 style="height:40px;">
							<a href="Product/index/<?= $ItemID ?>" title="<?= $ItemName ?>">
								<?= $ItemName ?>
							</a>
						</h4>


						<p style="height:200px;" class="Image">
							<img style=" display: block; margin-left: auto; margin-right: auto; max-height:200px;" src="http://<?= $ItemImgLink ?>"></img>
						</p>


						<p style="text-align:justify;" id="Intro_Description_<?= $ItemID ?>">
							<script type="text/javascript">
								var MyJSStringVar = "<?= $ItemDescription ?>";
									MyJSStringVar = MyJSStringVar.substring(0, 100)+" ...";
								var Intro = document.createElement('p');
									Intro.innerHTML = MyJSStringVar;
									document.getElementById("Intro_Description_<?= $ItemID ?>").appendChild(Intro);
							</script>

							<!-- Button to trigger modal -->
            				<a href="#myModal_<?= $ItemID ?>" role="button" class="btn" data-toggle="modal">Read more...</a>
            				<!-- Modal -->
				            <div id="myModal_<?= $ItemID ?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
				              <div class="modal-header">
				                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
				                  <i class="icon-remove"></i>
				                </button>
				                <h3 id="myModalSublabel"> <?= $ItemName ?> </h3>
				                <h5 id="myModalLabel"> <?= $ItemCategory ?> </h5>
				              </div>
				              <div class="modal-body">
				                <div class="row-fluid">
				                  
				                  <div class="row-fluid">
				                    <div class="span6">
				                      <img src="http://<?= $ItemImgLink ?>"></img>
				                      <!-- <p>Dom. de Beaurenard Cuvee</br>Boisrenard Chateauneuf-du-Pape 2010</p> -->
				                    </div>
				                    <div class="span6">
				                    	<?= $ItemDescription ?>
				                    </div>
				                  </div>
				                </div>
				              </div>
				              <div class="modal-footer">
				                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
				                <!--  <button class="btn btn-primary">Save changes</button> -->
				              </div>
				            </div>
						</p>

					</div>
				<?php } ?>

				</div>

          </div>
        </div>
      </div>
      
      
    </div>

    <script src="http://code.jquery.com/jquery.js"></script>
    <script src="/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>