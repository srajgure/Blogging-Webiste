<?php
$conn = mysqli_connect("localhost","root","root","gse");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
    session_start();

    
    if(isset($_POST['title'],$_POST['content'],$_POST['category'])){
//        echo "Dayanand Mandal";
        $title=addslashes($_POST['title']);
        $content=addslashes(nl2br($_POST['content']));
        $category=$_POST['category'];
        $fileToUpload=$_FILES["fileToUpload"]["name"];
        
        
        //to upload file in admin/uplods
        
        $target_dir = "C:/xampp/htdocs/blog/admin/uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
//                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }

            // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
            }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
         echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//            echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
            if(empty($title) or empty($content)) {
                $error='All fields are required!';
            }
            else{
                $sql="INSERT INTO articles (article_title,article_cat,article_content,article_timestamp,article_img) VALUES('$title','$category','$content','".time()."','$fileToUpload')";
                if(mysqli_query($conn,$sql))
                    ;
//                    echo "Entered in databases";
                else
                    echo "db not inserted".mysqli_error($conn);
            }
            
            } else {
            echo "Sorry, there was an error uploading your file.";
            }
        }  
    }
    ?>
































<!DOCTYPE html>
<html lang="en">
    
<!--
    <script src="http://js.nicedit.com/nicEdit-latest.js" type="text/javascript"></script>
<script type="text/javascript">bkLib.onDomLoaded(nicEditors.allTextAreas);</script>
-->
    
    <script src="https://cdn.ckeditor.com/4.11.1/standard/ckeditor.js"></script>
    
<head>
	<title>GSERED</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
<!--	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>-->
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/noui/nouislider.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="pingback" href="https://www.themepush.com/demo-mediumish/xmlrpc.php">
<link href="https://www.gsered.com/charity/favicons/gse.png" rel="shortcut icon" type="image/png">
<link href="https://www.gsered.com/charity/favicons/gse.png" rel="apple-touch-icon">
<link href="https://www.gsered.com/charity/favicons/gse.png" rel="apple-touch-icon" sizes="72x72">
<link href="https://www.gsered.com/charity/favicons/gse.png" rel="apple-touch-icon" sizes="114x114">
<link href="https://www.gsered.com/charity/favicons/gse.png" rel="apple-touch-icon" sizes="144x144">

    
<style id="kirki-css-vars">:root{}</style><title>GSERED </title>
<meta name="description" content="Just another Wordpress Themes site" />
<link rel='dns-prefetch' href='//cdnjs.cloudflare.com' />
<link rel='dns-prefetch' href='//maxcdn.bootstrapcdn.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Mediumish &raquo; Feed" href="https://www.themepush.com/demo-mediumish/feed/" />
<link rel="alternate" type="application/rss+xml" title="Mediumish &raquo; Comments Feed" href="https://www.themepush.com/demo-mediumish/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"https:\/\/www.themepush.com\/demo-mediumish\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='edd-styles-css'  href='https://www.themepush.com/demo-mediumish/wp-content/plugins/easy-digital-downloads/templates/edd.min.css?ver=2.9.3' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-theme-css'  href='https://www.themepush.com/demo-mediumish/wp-content/plugins/gutenberg/build/block-library/theme.css?ver=1537051861' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='https://www.themepush.com/demo-mediumish/wp-content/plugins/gutenberg/build/block-library/style.css?ver=1537051861' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='https://www.themepush.com/demo-mediumish/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='featured-image-generator-css'  href='https://www.themepush.com/demo-mediumish/wp-content/plugins/featured-image-generator/public/css/featured-image-generator-public.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='wowpopup-maincss-css'  href='https://www.themepush.com/demo-mediumish/wp-content/plugins/wowpopup/public/css/wowpopup.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='wp-frontend-submit-css'  href='https://www.themepush.com/demo-mediumish/wp-content/plugins/wp-frontend-submit/public/css/wp-frontend-submit-public.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='https://www.themepush.com/demo-mediumish/wp-includes/css/dashicons.min.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='bootstrap4-css'  href='https://www.themepush.com/demo-mediumish/wp-content/themes/mediumishh/assets/css/bootstrap.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesome-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='mediumish-style-css'  href='https://www.themepush.com/demo-mediumish/wp-content/themes/mediumishh/style.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='a3a3_lazy_load-css'  href='//www.themepush.com/demo-mediumish/wp-content/uploads/sites/29/sass/a3_lazy_load.min.css?ver=1510179097' type='text/css' media='all' />
<link rel='stylesheet' id='claps-applause-css'  href='https://www.themepush.com/demo-mediumish/wp-content/plugins/wp-claps-applause/css/claps-applause.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='kirki-styles-mediumish_theme-css'  href='https://www.themepush.com/demo-mediumish/wp-content/plugins/kirki/assets/css/kirki-styles.css?ver=3.0.34.1' type='text/css' media='all' />
<style id='kirki-styles-mediumish_theme-inline-css' type='text/css'>
.btn-simple{background-color:#1C9963;border-color:#1C9963;}.prevnextlinks a, .article-post a, .post .btn.follow, .post .post-top-meta .author-description a, article.page a, .alertbar a{color:#1C9963;}.post .btn.follow, .alertbar input[type="submit"]{border-color:#1C9963;}blockquote{border-color:#1C9963;}.entry-content input[type=submit], .alertbar input[type="submit"]{background-color:#1C9963;border-color:#1C9963;}p.sharecolour{color:#999999;}.shareitnow ul li a svg, .shareitnow a{fill:#b3b3b3;}.shareitnow li a{color:#b3b3b3;border-color:#d2d2d2;}#comments a{color:#1C9963;}.comment-form input.submit{background-color:#1C9963;border-color:#1C9963;}footer.footer a{color:#1C9963;}.carousel-excerpt .fontlight,body{font-family:"PT Sans", Helvetica, Arial, sans-serif;font-size:15px;font-weight:400;line-height:1.5;color:#666666;}.h1,.h2,.h3,.h4,.h5,.h6,h1,h2,h3,h4,h5,h6{font-family:"PT Sans", Helvetica, Arial, sans-serif;font-weight:700;color:#111111;}.carousel-excerpt .title{font-family:"Shadows Into Light", "Comic Sans MS", cursive, sans-serif;font-size:30px;font-weight:400;letter-spacing:0.5px;text-transform:none;color:#ffffff;}.carousel-excerpt .fontlight{font-size:18px;font-weight:400;color:#ffffff;}.mediumnavigation .navbar-brand{font-family:Merriweather, Georgia, serif;font-size:26px;font-weight:700;}.navbar-toggleable-md .navbar-collapse{font-family:Lato, Helvetica, Arial, sans-serif;font-weight:400;}.article-post{font-family:Merriweather, Georgia, serif;font-weight:400;line-height:1.8;color:#222222;}.mediumnavigation, .dropdown-menu, .dropdown-item{background-color:rgba(255,255,255,0.97);}.mediumnavigation, .mediumnavigation a, .navbar-light .navbar-nav .nav-link{color:#999999;}.navbar-light .navbar-brand{color:#111111;}.navbar-light .navbar-brand:hover{color:#02b875;}.customarea .btn.follow{border-color:#02b875;color:#02b875;}.search-form .search-submit{background-color:#02b875;}.search-form .search-field{border-color:#f9f9f9;}.search-form .search-submit .fa{color:#ffffff;}.search-form .search-field, .search-form .search-field::placeholder{color:#b2b2b2;}@media (max-width: 767px){.navbar-collapse{background-color:rgba(255,255,255,0.97);}}
</style>
<!--<script>if (document.location.protocol != "https:") {document.location = document.URL.replace(/^http:/i, "https:");}</script>--><script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-content/plugins/featured-image-generator/public/js/featured-image-generator-public.js?ver=1.0.0'></script>
<link rel='https://api.w.org/' href='https://www.themepush.com/demo-mediumish/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="https://www.themepush.com/demo-mediumish/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="https://www.themepush.com/demo-mediumish/wp-includes/wlwmanifest.xml" /> 
<meta name="generator" content="WordPress 4.9.8" />
<meta name="generator" content="Easy Digital Downloads v2.9.3" />

<script type="text/javascript">
	function addHandler(object, event, handler) {
		if (typeof object.addEventListener != 'undefined') 
			object.addEventListener(event, handler, false);
		else
			if (typeof object.attachEvent != 'undefined')
				object.attachEvent('on' + event, handler);
			else 
				throw 'Incompatible browser';
	}
</script>

    
    

    
    <style>
.upload-btn-wrapper {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

.btn {
/*  border: 0px solid gray;*/
  color: #585858;
  background-color: #F5F5F5;
  padding: 4px 0px;
    padding-top: 8px;
  border-radius: 6px;
  font-size: 15px;
  font-weight: bold;
}

.upload-btn-wrapper input[type=file] {
  font-size: 100px;
  position: absolute;
  left: 0;
  top: 0;
  opacity: 0;
}
         </style>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    </head>
<body>

        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
  <br>
        <header class="navbar-light bg-white fixed-top mediumnavigation">

    <div class="container">

        <!-- Begin Logo --> 
        <div class="row justify-content-center align-items-center brandrow">
            
            <div class="col-lg-4 col-md-4 col-xs-12 hidden-xs-down customarea">

                            <a class="btn follow" href="https://twitter.com/gse_red?ref_src=twsrc%5Etfw" data-show-count="true"><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><i class="fa fa-twitter"></i> Follow</a>
                            

                            <a  href="#"> <i class="fa fa-google-plus social"></i></a>
                            <a  href="#"> <i class="fa fa-facebook social"></i></a>
            
            </div>

            <div class="col-sm-2 col-md-2">
                                    
                                     <a class="menuzord-brand" href="add.php"><img  src="https://www.gsered.com/images/logo.png" alt="" href="/add.php" style="height:40px; width:95px"></a>
            </div>

            <div class="col-lg-4 col-md-4 mr-auto col-xs-12 text-right searcharea">
                                        
                        <form role="search" method="post" class="search-form" action="search.php"> <!--action="https://www.themepush.com/demo-mediumish/"-->
    <input type="search" class="search-field"
        placeholder="Search..."
        value="" name="search"
        title="Search for:" required/>
    <button type="submit" name="SUBMIT" class="search-submit">
           <i class="fa fa-search"></i>   
      </button>
                </form>

                            </div>
            
        </div>
        
        <!-- End Logo --> 

        <div class="navarea">
       
        <nav class="navbar navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button>  
                <div id="bs4navbar" class="collapse navbar-collapse"><ul id="menu-top-menu" class="navbar-nav col-md-12 justify-content-center"><li id="menu-item-247" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-247 nav-item active"><a href="../homepage.php" class="nav-link active" style="font-family:arial; font-size: 12px;">Home</a><li id="menu-item-68" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-68 nav-item"><a href="../tech.php" class="nav-link" style="font-family:arial; font-size: 12px;">Tech</a><li id="menu-item-69" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-69 nav-item"><a href="../culture.php" class="nav-link" style="font-family:arial; font-size: 12px;">Culture</a><li id="menu-item-71" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-71 nav-item"><a href="../design.php" class="nav-link" style="font-family:arial; font-size: 12px;">Design</a><li id="menu-item-109" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-109 nav-item"><a href="../politics.php" class="nav-link" style="font-family:arial; font-size: 12px;">Politics</a><li id="menu-item-185" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-185 nav-item"><a href="../social.php" class="nav-link" style="font-family:arial; font-size: 12px;">Social</a><li id="menu-item-189" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189 nav-item"><a href="../sports.php" class="nav-link" style="font-family:arial; font-size: 12px;">Sports</a><li id="menu-item-184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184 nav-item"><li id="menu-item-192" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-192 nav-item"><a href="/contact.php" class="nav-link" style="font-family:arial; font-size: 12px;">Contact</a></ul>
            </div>
            </nav>
        </div>    
    </div>
</header>
        
        
        
        
        
        
        
  
    
    
    
    
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        

	<div class="container-contact100">
		<div class="wrap-contact100">
            
            <form action="add.php" method="post" autocomplete="off" enctype="multipart/form-data" >
        
<!--			<form class="contact100-form validate-form">-->
				<span class="contact100-form-title">
					Create Your Blog
				</span>

				<div class="wrap-input100 validate-input bg1" data-validate="Please Type Title">
<!--					<span class="label-input100">Enter title *</span>-->
					<input class="input100" type="text" name="title" id="title" placeholder="Enter Title">
				</div>

<!--
				<div class="wrap-input100 validate-input bg1 rs1-wrap-input100" data-validate = "Enter Your Email (e@a.x)">
					<span class="label-input100">Email *</span>
					<input class="input100" type="text" name="email" placeholder="Enter Your Email ">
				</div>

				<div class="wrap-input100 bg1 rs1-wrap-input100">
					<span class="label-input100">Phone</span>
					<input class="input100" type="text" name="phone" placeholder="Enter Number Phone">
				</div>
-->

				<div class="wrap-input100 input100-select bg1">
<!--					<span class="label-input100">Needed Services *</span>-->
					<div>
						<select class="js-select2" id="category" name="category">
							<option>Please chooses</option>
							<option>Culture</option>
							<option>Tech</option>
							<option>Politics</option>
							<option>Design</option>
							<option>Sports</option>
							<option>Culture</option>
						</select>
						<div class="dropDownSelect2"></div>
					</div>
				</div>

<!--
				<div class="w-full dis-none js-show-service">
					<div class="wrap-contact100-form-radio">
						<span class="label-input100">What type of products do you sell?</span>

						<div class="contact100-form-radio m-t-15">
							<input class="input-radio100" id="radio1" type="radio" name="type-product" value="physical" checked="checked">
							<label class="label-radio100" for="radio1">
								Phycical Products
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio2" type="radio" name="type-product" value="digital">
							<label class="label-radio100" for="radio2">
								Digital Products
							</label>
						</div>

						<div class="contact100-form-radio">
							<input class="input-radio100" id="radio3" type="radio" name="type-product" value="service">
							<label class="label-radio100" for="radio3">
								Services Consulting
							</label>
						</div>
					</div>

					<div class="wrap-contact100-form-range">
						<span class="label-input100">Budget *</span>

						<div class="contact100-form-range-value">
							$<span id="value-lower">610</span> - $<span id="value-upper">980</span>
							<input type="text" name="from-value">
							<input type="text" name="to-value">
						</div>

						<div class="contact100-form-range-bar">
							<div id="filter-bar"></div>
						</div>
					</div>
				</div>
-->
                
                
                
<!--                <div class="inner-wrap">-->
<!--                            <div class="upload-btn-wrapper">-->
<!--                                <button class="btn">UPLOAD IMAGE</button>-->
<!--                                <img src=" ../admin/uploads/upload.png?>" style="height:20px; width:28px">-->
<!--                                <input type="file" name="fileToUpload" id="fileToUpload"/>-->
<!--                            </div>-->
<!--                        </div> -->
                
                
                
                
<!--                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Title">-->
<!--					<span class="label-input100">Enter title *</span>-->
<!--					<input class="input100" type="text" name="title" id="title" placeholder="Enter Title">-->
<!--				        <input type="file" name="fileToUpload" id="fileToUpload"/>-->
<!--                </div>-->
                
                
                
                <div class="wrap-input100 validate-input bg1" data-validate="Please Type Title">
                <div class="inner-wrap">
                            <div class="upload-btn-wrapper">
                                <button class="btn">UPLOAD IMAGE</button>
<!--                                <img src=" ../admin/uploads/upload.png?>" style="height:20px; width:28px">-->
                                <input type="file" name="fileToUpload" id="fileToUpload"/>
                            </div>
                        </div>  
                </div>
                
                
                
                
                
				<div class="wrap-input100 validate-input bg0 rs1-alert-validate" data-validate = "Please Type Your Content Here">
<!--					<span class="label-input100">Message</span>-->
					<textarea class="input100" id="content" name="content" placeholder="Your message content here..."></textarea>
                    <script>
			CKEDITOR.replace( 'content' );
		</script>
				</div>

<!--				<div class="container-contact100-form-btn">-->
<!--					<button class="contact100-form-btn" type="submit" name="submit">-->
<!--                    <input class="contact100-form-btn" type="submit" name="submit" />-->
<!--						<span>-->
<!--							Submit-->
<!--							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>-->
<!--						</span>-->
<!--					</button>-->
<!--				</div>-->
                
                <div class="container-contact100-form-btn">
					<button class="contact100-form-btn" type="submit" name="submit">
						<span>
							Submit
							<i class="fa fa-long-arrow-right m-l-7" aria-hidden="true"></i>
						</span>
					</button>
				</div>
                
                
			</form>
		</div>
	</div>



<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<script>
		$(".js-select2").each(function(){
			$(this).select2({
				minimumResultsForSearch: 20,
				dropdownParent: $(this).next('.dropDownSelect2')
			});


			$(".js-select2").each(function(){
				$(this).on('select2:close', function (e){
					if($(this).val() == "Please chooses") {
						$('.js-show-service').slideUp();
					}
					else {
						$('.js-show-service').slideUp();
						$('.js-show-service').slideDown();
					}
				});
			});
		})
	</script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="vendor/noui/nouislider.min.js"></script>
	<script>
	    var filterBar = document.getElementById('filter-bar');

	    noUiSlider.create(filterBar, {
	        start: [ 1500, 3900 ],
	        connect: true,
	        range: {
	            'min': 1500,
	            'max': 7500
	        }
	    });

	    var skipValues = [
	    document.getElementById('value-lower'),
	    document.getElementById('value-upper')
	    ];

	    filterBar.noUiSlider.on('update', function( values, handle ) {
	        skipValues[handle].innerHTML = Math.round(values[handle]);
	        $('.contact100-form-range-value input[name="from-value"]').val($('#value-lower').html());
	        $('.contact100-form-range-value input[name="to-value"]').val($('#value-upper').html());
	    });
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

</body>
</html>
