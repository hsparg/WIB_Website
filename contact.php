
<!--DOCTYPE html -->
<html><head>
    <meta charset="utf-8">
    <title>Gallery</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="bskit, bootstrap starter kit, bootstrap builder">
	<meta name="description" content="Business Startup &amp; Prototyping HTML Framework">
	
	<link rel="shortcut icon" href="http://wib.ba.ttu.edu/favicon.png">
	
	<!-- Core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome.min.css" rel="stylesheet">

    <!-- Style Library -->
	<link href="style-library-1.css" rel="stylesheet">
	
	
	<!-- Block Styles (Feel free to remove any that you aren't using in your final export) -->

		<link href="contact-1.css" rel="stylesheet">
	    <link href="http://wib.ba.ttu.edu/css/basic.css" rel="stylesheet">
    
    
    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="html5shiv.js"></script>
      <script src="respond.min.js"></script>
    <![endif]-->
    
</head>
<body>
    
    <!--Start NAV--> 
     
<?php include_once('http://wib.ba.ttu.edu/includes/sitemenu.php'); ?>

    <!--// END NAV -->
    
    

	<!-- Start Contact 1 -->
    <section class="content-block contact-1">
		<div class="container text-center">
			
			<div class="col-sm-10 col-sm-offset-1">
				
				<div class="underlined-title">
					<div class="editContent" data-selector=".editContent">
		        		<h1>Get in Touch</h1>
					</div>
		        	<hr>
		        	<div class="editContent" data-selector=".editContent">
		        		<h2>Women in Business @ Texas Tech</h2>
					</div>
	        	</div>
				
				<div class="editContent" data-selector=".editContent">
				</div>
				<div class="editContent" data-selector=".editContent">
					<ul class="contact-info">
						<li><span class="fa fa-map-marker" data-selector="span.fa" style="outline: none; cursor: inherit;"></span>2500 Broadway Lubbock,Texas 79409</li>
						<li><span class="fa fa-phone" data-selector="span.fa" style="outline: none; cursor: inherit;"></span>806.742.2011</li>
						<li><span class="fa fa-envelope" data-selector="span.fa" style="outline: none; cursor: inherit;"></span><a href="mailto:rawls.wib@ttu.edu">rawls.wib@ttu.edu</a> </li>
					</ul>
				</div>
				<!--
				<div id="contact" class="form-container">
                    
                    <div id="message"></div>

					<form method="post" action="js/contact-form.php" name="contactform" id="contactform">
						<div class="row">
							<div class="col-sm-4">
								<div class="form-group">
                                    <input name="name" id="name" type="text" value="" placeholder="Name" class="form-control">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
                                    <input name="email" id="email" type="text" value="" placeholder="Email" class="form-control">
								</div>
							</div>
							<div class="col-sm-4">
								<div class="form-group">
                                    <input name="phone" id="phone" type="text" value="" placeholder="Phone" class="form-control">
								</div>
							</div>
						</div><!-- /.row -->
						<!--<div class="form-group">
                            <textarea name="comments" id="comments" class="form-control" rows="3" placeholder="Message"></textarea>
							<div class="editContent" data-selector=".editContent">
								<p class="small text-muted"><span class="guardsman">* All fields are required.</span> Once we receive your message we will respond as soon as possible.</p>
							</div>
						</div>
						<div class="form-group">
                            <button class="btn btn-primary" type="submit" id="cf-submit" name="submit" data-selector="a.btn, button.btn" style="outline: none; cursor: inherit;">Send</button>
						</div>
					</form>-->
				</div><!-- /.form-container -->
			
			</div><!-- /.col-sm-10 -->
				
		</div><!-- /.container -->
	</section><!-- /.content-block -->
	<!--// END Contact 1 -->
	

   
    <?php include_once('/includes/footer.php'); ?>
    


    <!-- Scripts at the end... you know the score! -->
	<!-- Core Scripts (Do not remove) -->
	<script type="text/javascript" src="jquery-1.11.1.min.js"></script>			
	<script type="text/javascript" src="bootstrap.min.js"></script>
	<script type="text/javascript" src="bootstrap-hover-dropdown.min.js"></script>
	
	<!-- Vendor Scripts (Feel free to remove any that you aren't using in your final export) -->
	<script type="text/javascript" src="sendmail.js"></script><!-- Contact Form -->
	<script type="text/javascript" src="contact-form.php"></script><!-- Contact Form -->
	
	<!-- Theme Scripts (Do not remove) -->
	<script type="text/javascript" src="bskit-scripts.js"></script>
	


</body></html>