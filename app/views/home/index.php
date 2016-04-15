<!DOCTYPE html>
<html>
  <head>
    <title>Simple PHP MVC Skelethon - Understanding the MVC architecture</title>
    <meta name="description" content="This is the landing page of the PHP MVC Skelethon">
    <meta name="keywords" content="PHP, MVC, Skelethon, learning">
    <meta name="author" content="Bogdan Hossu">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, user-scalable=no">
    <link href="../../../public/css/bootstrap.css" rel="stylesheet">
    <link href="../../../public/css/skelethon.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
    <!-- We need the typing work -->
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    
  </head>
  <body>
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     <form method="POST" action="#">
      <div class="modal-header">
        
        
        <h4 class="modal-title" id="myModalLabel">Hello there, I would like to know you</h4>
      </div>
      <div class="modal-body">
        <p>Thank you for stopping by my portfolio. I would like to know all the amazing people coming to my website, so please write your name below. In case you don't want to tell me, that is totally fine as well:)</p>
        <div class="form-group">
          <label for="usr">Whats your name?</label>
          <input type="text" class="form-control" id="usr" name="the_name">
        </div>
      </div>
      <div class="modal-footer">
       
            <input type="submit" class="btn btn-default"  name="noName" value="I don't want">
            <input type="submit" class="btn btn-primary" name="yesName" value="Continue">
       
      </div>
      </form>
    </div>
  </div>
</div>
  	<div class="jumbotron">
  		<h1>Hello</h1>
  		<p>This is a really simple PHP MVC skelethon which I've made for learning better how the MVC works.</p>
  		<br/>
  		<p>You can easily pass now parameters based on your controller and models:</p>
  		<br/>
  		<a href="home/index/Robert" class="btn-primary">PASS PARAMETER ROBERT</a> or <a href="home/create/Robert/robert@email.com" class="btn-primary">ADD USER ROBERT</a>
  		<br/>
  		<br/>
  		<p>
  		<?php 
  			if(isset($data['name'])) {
  				echo "<h2>Hello " . $data['name'] . "</h2>"; 
  			}
  		?>
  		</p>
  	</div>
  </body>
</html>