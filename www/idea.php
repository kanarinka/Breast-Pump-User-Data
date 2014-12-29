<?php 
	$idea = (isset($_REQUEST["idea"])?$_REQUEST["idea"]:"");

	$saved = false;
	if ($idea != ""){
	
 		$filename = "idea_" . ((string)time()) . "_" . ((string)rand(1000, 9999)) . ".txt";
 		
 		file_put_contents( $filename , $idea);
 		$saved = true;
 		mail('dignazio@media.mit.edu', 'New Breast Pump Idea ' . $filename, $idea);
 	}
 ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"> 
        <title>Make the Breast Pump Not Suck: A Research Project at the MIT Media Lab</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <link href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet">
        
        <!--[if lt IE 9]>
          <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
<link href="http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.min.css" type="text/css" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon2.ico" type="image/x-icon">
<link rel="icon" href="img/favicon2.ico" type="image/x-icon">
<style>
/* BOOTSTRAP 3.x GLOBAL STYLES
-------------------------------------------------- */
body {
  padding-bottom: 40px;
  color: #5a5a5a;
}



/* CUSTOMIZE THE NAVBAR
-------------------------------------------------- */

/* Special class on .container surrounding .navbar, used for positioning it into place. */
.navbar-wrapper {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  z-index: 10;
}



/* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 1;
  text-align: left;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 400px;
  background-color:#555;
}
.carousel img {
  position: absolute;
  top: 0;
  left: 0;
  min-height: 400px;
}

.text-center{
  text-align: left;
}

/* MARKETING CONTENT
-------------------------------------------------- */

/* Pad the edges of the mobile views a bit */
.marketing {
  padding-left: 15px;
  padding-right: 15px;
}

/* Center align the text within the three columns below the carousel */
.marketing .col-lg-4 {
  text-align: center;
  margin-bottom: 20px;
}
.marketing h2 {
  font-weight: normal;
}
.marketing .col-lg-4 p {
  margin-left: 10px;
  margin-right: 10px;
}


/* Featurettes
------------------------- */

.featurette-divider {
  margin: 80px 0; /* Space out the Bootstrap <hr> more */
}
.featurette {
  padding-top: 20px; /* Vertically center images part 1: add padding above and below text. */
  overflow: hidden; /* Vertically center images part 2: clear their floats. */
}
.featurette-image {
  margin-top: -120px; /* Vertically center images part 3: negative margin up the image the same amount of the padding to center it. */
}

/* Give some space on the sides of the floated elements so text doesn't run right into it. */
.featurette-image.pull-left {
  margin-right: 40px;
}
.featurette-image.pull-right {
  margin-left: 40px;
}

/* Thin out the marketing headings */
.featurette-heading {
  font-size: 50px;
  font-weight: 300;
  line-height: 1;
  letter-spacing: -1px;
}



/* RESPONSIVE CSS
-------------------------------------------------- */

@media (min-width: 768px) {

  /* Remve the edge padding needed for mobile */
  .marketing {
    padding-left: 0;
    padding-right: 0;
  }

  /* Navbar positioning foo */
  .navbar-wrapper {
    margin-top: 20px;
    margin-bottom: -90px; /* Negative margin to pull up carousel. 90px is roughly margins and height of navbar. */
  }
  /* The navbar becomes detached from the top, so we round the corners */
  .navbar-wrapper .navbar {
    border-radius: 4px;
  }

  /* Bump up size of carousel content */
  .carousel-caption p {
    margin-bottom: 20px;
    font-size: 21px;
    line-height: 1.4;
  }

}

</style>
</head>
    
    <!-- HTML code from Bootply.com editor -->
    
<body  >

<div class="jumbotron" style="background-color:red">
  <a href="index.html"><img src="img/maternalhealthlogo.png" style="float: right;"></a> <h1 style="color:white">Send us your ideas!</h1>
   <p style="color:white">For the "Make the Breast Pump Not Suck" Hackathon</p>
</div>

<!-- Carousel
================================================== -->

<div class="container marketing" style="padding-top:20px">
  <div class="featurette">
  	<?php if($saved == true){?> 
  		<p class="lead" style="color:red; padding-left:30px">Your idea was saved. Thanks!</p>
  		<p class="lead" style="padding-left:30px"><a href="idea.php">Submit another</a></p>
  	<?php } else { ?>
  	<p class="lead" style="padding-left:30px"><img src="img/tal.jpg" style="width:125px"> <img src="img/catherine.jpg" style="width:125px"> <img src="img/alexis.jpg" style="width:125px"> <img src="img/taylor.jpg" style="width:125px"> <img src="img/alexandra.jpg" style="width:125px"> <img src="img/dave.png" style="width:125px"> <img src="img/chewei.jpg" style="width:125px"> </p>
    <p class="lead" style="padding-left:30px">Write to us and tell us what should be improved about the breast pump. Your ideas will be printed on large cards and used as inspiration at the "Make the Breast Pump Not Suck Hackathon". We also may use them to create data visualizations and posters.</p>
    <form class="form-horizontal" method="POST" action="idea.php">

		<fieldset>


		<!-- Textarea -->
		<div class="form-group">
		  <label class="lead col-md-2 control-label" for="idea">Your Idea/s</label>
		  <div class="col-md-10">                     
		    <textarea class="form-control" id="idea" name="idea" rows="10" cols="200" style="width:700px"></textarea>
		  </div>
		</div>

		<!-- Button -->
		<div class="form-group">
		  <label class="col-md-2 control-label" for="singlebutton"></label>
		  <div class="col-md-10">
		    <button id="singlebutton" name="singlebutton" type="submit" class="btn btn-primary btn-lg">Submit</button>
		  </div>
		</div>

		</fieldset>
		</form>

		<?php } ?>
  </div>
    <div class="featurette">
    <h2 class="featurette-heading">For example - Here's a Recent Idea:</h2>
    <p class="lead">I loved the story on medium.com about the breast pump hackathon! I am an engineer and a nursing (and pumping) mom, so this is near and dear to my heart.

I have found myself wondering if it would be possible to make the flanges more closely resemble the size and shape of my baby's mouth. My baby's mouth is a lot smaller than the flange on the pump. Nursing is comfortable, but even the smallest of the "personalized fit" flanges that I can find are too big and leave me feeling sore afterwards.

I've also wondered if it would be possible to add something to the flange that would mimic the flicking action of a nursing baby's tongue.

And then there's another idea: what about making a breast pump that is small and portable and quiet enough to be worn and operated under clothing? (Small suction-cup style flanges that would fit inside a nursing bra and tubing that runs down to bottles in a fanny pack?) Not only could I pump at my cubicle desk or during a meeting, but I could also pump on a schedule closer to my child's feeding schedule (instead of retreating to a lactation room in between meetings) and be more in synch with him at the end of the day when I pick him up from daycare.  And I bet a pump like that would be invaluable to teachers who don't have the luxury of moving classes around so they can go pump!
  
This is just such a wonderful (and long overdue!) project! I would love to be involved somehow!

For working/nursing/pumping moms everywhere, thank you.
 </p>
  </div>

  







</div><!-- /.container -->
<script type='text/javascript' src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>


        <script type='text/javascript' src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>

        
    </body>
</html>
