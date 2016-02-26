<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en">
<head>
	<title>CREDITINFO</title>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="bootstrap-3.3.2-dist/css/bootstrap.min.css">
 <script src="js/jQuery/jquery.js"></script>
 <script src="bootstrap-3.3.2-dist/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
	<body>
		<div class="pageheader"> 
			<div id="name">
				<span><a href="index.php"><img src="images/logo.png" class="filmlogo"></a></span>
			</div>
			<div id="accountDiv">
				<div id="login">
				<?php 
					if(isset($_SESSION['LOGIN_USER'])){
						?>
						 <div class="conatainer-fluid">
						 	<div class="dropdown">
						        <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown"><?php echo $_SESSION['LOGIN_USER'];?>  ACCOUNT
						        <span class="caret"></span></button>
						        <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
						          <li role="presentation"><a role="menuitem" tabindex="-1" href="todo-new.php">ADD BORROWER</a></li>
						          <li role="presentation"><a role="menuitem" tabindex="-2" href="todo-view.php">VIEW BORROWER'S LIST</a></li>
						          <li role="presentation"><a role="menuitem" tabindex="-3" href="logout.php">LOGOUT</a></li>
						        </ul>
						      </div>
						 </div>
			
					 <?php
					} else {
						?>
						<div class="container-fluid">
							<a href="login.php" class="btn btn-info txt-color" role="button">LOGIN</a>
						</div>
					<?php
					}
				?>
				</div>
			</div>
		</div>
		<br>
		<div class="container">
			<div class="well">
            <div class="row">
            <div class="col-lg-15">
            <div class="col-md-2">
            </div>			
            <div class="col-md-8" >
                <div class="row carousel-holder">
                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel"  data-interval="3000">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="images/slide1.jpg">
                                </div>
								<div class="item">
                                    <img class="slide-image" src="images/slide3.jpg">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="images/slide2.jpg">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
            </div>
            </div>
            </div>
	</div>
	<div class="container">
        <!-- Footer -->
        <footer>
			<div class="well">
            <div class="row">
                <div class="col-lg-12" align="center">
                    <h3>Copyright &copy;&nbsp;<span id="year">2015</span>&nbsp;&nbsp;<span style="text-decoration:none;">CREDITINFO</span></span></h3>
                </div>
            </div>
			</div>
        </footer>

    </div>
		
		<script type="text/javascript">
			function blur() {
				var obj = document.getElementByTagName('li')
				obj.style.backgroundcolor="#D0D0D0";
			}
			function visible () {
				document.getElementById('gridImage').style.visibility="hidden";
			}
		</script>
	</body>
</html>