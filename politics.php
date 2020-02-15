<?php
    include_once('includes/connection.php');
    include_once('includes/fetch_politics.php');
include_once('includes/article.php');
$article=new Article;
$articles =$article->fetch_all();
$article_politics=new Article_politics;
$articles_politics =$article_politics->fetch_all();
//$article=new Article_politics;
//$articles =$article->fetch_all();
?>




<!DOCTYPE html>
<html lang="en-US">
<head>
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
    <style type="text/css" id="wp-custom-css">
            
    img {
        width:360px;
        max-height:200px;
        object-fit:cover;
        align-items: center;
        }        
            
    .wrapper {
            
        padding-top: 10px;
        }
            

    .image--cover {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        margin: 0px;
        object-fit:cover;
        object-position: right;
        }
        #article_box{
            width:100%;
        }
            
		</style>
	</head> 
    
<body data-rsssl=1 class="home blog"> 
        
<style>
    </style>

        
<header class="navbar-light bg-white fixed-top mediumnavigation">

    <div class="container">

        <!-- Begin Logo --> 
        <div class="row justify-content-center align-items-center brandrow">
            
            <div class="col-lg-4 col-md-4 col-xs-12 hidden-xs-down customarea">

                            <a class="btn follow" href="https://twitter.com/gse_red?ref_src=twsrc%5Etfw" data-show-count="true"><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script><i class="fa fa-twitter"></i> Follow</a>
                            
            

                            <a  href="#"> <i class="fa fa-google-plus social"></i></a>
                            <a  target="_blank" href="https://www.facebook.com/GSERed/"> <i class="fa fa-facebook social"></i></a>
            
            </div>

            <div class="col-sm-2 col-md-2">
                                    
                                     <a class="menuzord-brand" href="index.php"><img  src="https://www.gsered.com/images/logo.png" alt="" href="/index.php" style="height:40px;width:95px"></a>
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
                
  <!--          <a href="index.php">    <div class="wrapper">-->
  <!--<img src="https://i.kinja-img.com/gawker-media/image/upload/gd8ljenaeahpn0wslmlz.jpg" class="image--cover">-->
  <!--</div></a>-->
                            </div>
            
        </div>
        
        <!-- End Logo --> 

        <div class="navarea">
       
        <nav class="navbar navbar-toggleable-sm">
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span> 
            </button>  
                <div id="bs4navbar" class="collapse navbar-collapse"><ul id="menu-top-menu" class="navbar-nav col-md-12 justify-content-center"><li id="menu-item-247" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-247 nav-item active"><a href="homepage.php" class="nav-link active">Home</a><li id="menu-item-68" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-68 nav-item"><a href="tech.php" class="nav-link">Tech</a><li id="menu-item-69" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-69 nav-item"><a href="culture.php" class="nav-link">Culture</a><li id="menu-item-71" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-71 nav-item"><a href="design.php" class="nav-link">Design</a><li id="menu-item-109" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-109 nav-item"><a href="politics.php" class="nav-link">Politics</a><li id="menu-item-185" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-185 nav-item"><a href="social.php" class="nav-link">Social</a><li id="menu-item-189" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-189 nav-item"><a href="sports.php" class="nav-link">Sports</a><li id="menu-item-184" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-184 nav-item"><a href="editor/add.php" class="nav-link">Create Blog</a><li id="menu-item-192" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-192 nav-item"><a href="/contact.php" class="nav-link">Contact</a></ul>
                    
                    
            
            </div>
            
            </nav>
            
        
        </div>
            
    </div>

</header>
        
       
        <!-- Begin site-content
		================================================== -->         
        <div class="site-content">
<div class="container">
    <div class="section-title">
            <h2>
                <span>Popular &nbsp;</span>
                <a class="d-block pull-right morefromcategory" href="https://www.themepush.com/demo-mediumish/category/how-to/">
                    More &nbsp; <i class="fa fa-angle-right"></i> 
                </a>
                <div class="clearfix"></div> 
            </h2>
        </div>
    
    
    
    
    
    
    <?php $i=0?>
        <?php foreach($articles as $aaaa){ ?>
    
            <?php 

$array_size = 0;
    $size = 0;

    $sql=mysqli_query($conn,"SELECT * FROM articles WHERE article_cat='politics' ");


    foreach($sql  as $row ){
    
    $array_count[] = $row['count'];
        $array_id[] = $row['article_id'];
        $size = $size + 1;
   }
    

//SORTING
for ($i = 0; $i < $size-1; $i++)           
       for ($j = 0; $j < $size-$i-1; $j++)  
           if ($array_count[$j] < $array_count[$j+1]) {
               $temp = $array_id[$j];
               $array_id[$j] = $array_id[$j+1];
               $array_id[$j+1] = $temp;
               
               $temp = $array_count[$j];
               $array_count[$j] = $array_count[$j+1];
               $array_count[$j+1] = $temp;
           }
           

    $art =$article->fetch_data($array_id[0]);

                                         
 ?>
    
    
    
    
    
    
    
        <div class="row listrecent">
                        <div class="col-md-4 col-lg-4 col-sm-4 padr10" id="post-101">
                    <div class="card post highlighted">
            
            <a href="blogshow.php?id=<?php echo $art['article_id']; ?>"><img src=" admin/uploads/<?php echo $art['article_img']; ?>" ></a>            <div class="card-block">
            <h2 class="card-title"><a href="blogshow.php?id=<?php echo $art['article_id']; ?>"><?php echo $art['article_title']; ?></a></h2>
            <span class="card-text d-block"><?php echo substr($art['article_content'],0,400) ?></span>
            <div class="metafooter"> 
                <div class="wrapfooter"> 
<!--
                <span class="meta-footer-thumb"> 
                <a href="https://www.themepush.com/demo-mediumish/author/themesforwebcom/">
                <img alt='' src='https://secure.gravatar.com/avatar/1b1b967719bb61bf4d793fd4ec1fa209?s=40&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/1b1b967719bb61bf4d793fd4ec1fa209?s=80&#038;d=mm&#038;r=g 2x' class='avatar avatar-40 photo author-thumb' height='40' width='40' />
                </span>
                </a>
                <span class="author-meta"> 
                    <span class="post-name"><a href="https://www.themepush.com/demo-mediumish/author/themesforwebcom/">Wow Themes</a></span><br> 
                    <span class="post-date">Nov 7, 2017</span>
                    <span class="dot"></span>
                    <span class="readingtime">1 min read</span> 
                </span> 
-->
                <span class="post-read-more">
                <a href="blogshow.php?id=<?php echo $art['article_id']; ?>" title="Read More">
                </a>
                </span> 
                </div>            </div>
            </div>
     </div>
            </div>
            <div class="col-md-8 col-lg-8 col-sm-8">
                <div class="row skipfirst">
                                <div class="col-md-6 col-lg-6 col-sm-6 grid-item" id="post-101">
                                    
                            
                </div>
                    
                    
                    
                    <?php 
    $art =$article->fetch_data($array_id[1]);

            ?>
                    
                                <div class="col-md-6 col-lg-6 col-sm-6 grid-item" id="post-97">
                
<div class="card post height262"> 
<a href="blogshow.php?id=<?php echo $art['article_id']; ?>"><img src=" admin/uploads/<?php echo $art['article_img']; ?>" ></a> <div class="card-block">
    <h2 class="card-title"><a href="blogshow.php?id=<?php echo $art['article_id']; ?>"><p><?php if(strlen($art['article_title'])<34) echo $art['article_title']; else echo substr($art['article_title'],0,32)."..."; ?></p></a></h2>
            <div class="metafooter">                        
            <div class="wrapfooter"> 
<!--
                <span class="meta-footer-thumb"> 
                    <a href="https://www.themepush.com/demo-mediumish/author/sununderthesky/">
                    <img alt='' src='https://secure.gravatar.com/avatar/90408213f8c17bc123fe0dc82f171579?s=40&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/90408213f8c17bc123fe0dc82f171579?s=80&#038;d=mm&#038;r=g 2x' class='avatar avatar-40 photo author-thumb' height='40' width='40' />                    </a>
                </span>                                
                <span class="author-meta"> 
                    <span class="post-name">
                    <a href="https://www.themepush.com/demo-mediumish/author/sununderthesky/">Sun Sky</a></span><br> 
                    <span class="post-date">Nov 7, 2017</span>
                    <span class="dot"></span>
                    <span class="readingtime">1 min read</span> 
                </span> 
-->
                <span class="post-read-more">
                    <a href="https://www.themepush.com/demo-mediumish/sell-yourself-to-success-in-career-and-life/" title="">
                    </a>
                </span>            </div>                        
        </div>
    </div>
</div>
                </div>
                    
                    
    <?php 
    $art =$article->fetch_data($array_id[2]);
                                         
            ?>
                    
                    
                                <div class="col-md-6 col-lg-6 col-sm-6 grid-item" id="post-94">
                
<div class="card post height262"> 
<a href="blogshow.php?id=<?php echo $art['article_id']; ?>"><img src=" admin/uploads/<?php echo $art['article_img']; ?>" ></a> <div class="card-block">
   <h2 class="card-title"><a href="blogshow.php?id=<?php echo $art['article_id']; ?>"><p><?php if(strlen($art['article_title'])<34) echo $art['article_title']; else echo substr($art['article_title'],0,32)."..."; ?></p></a></h2>
            <div class="metafooter">                        
            <div class="wrapfooter"> 
<!--
                <span class="meta-footer-thumb"> 
                    <a href="https://www.themepush.com/demo-mediumish/author/nickname/">
                    <img alt='' src='https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=40&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=80&#038;d=mm&#038;r=g 2x' class='avatar avatar-40 photo author-thumb' height='40' width='40' />                    </a>
                </span>                                
                <span class="author-meta"> 
                    <span class="post-name">
                    <a href="https://www.themepush.com/demo-mediumish/author/nickname/">Nat</a></span><br> 
                    <span class="post-date">Nov 7, 2017</span>
                    <span class="dot"></span>
                    <span class="readingtime">1 min read</span> 
                </span> 
-->
                <span class="post-read-more">
                    <a href="https://www.themepush.com/demo-mediumish/how-to-choose-the-perfect-fragrance/" title="">
                    </a>
                </span>            </div>                        
        </div>
    </div>
</div>
                </div>
                          
                    
  <?php 

    $art =$article->fetch_data($array_id[3]);
                                         
            ?>          
                    
                    
                    
                    
                    
                    
                    <div class="col-md-6 col-lg-6 col-sm-6 grid-item" id="post-86">
                
<div class="card post height262"> 
<a href="blogshow.php?id=<?php echo $art['article_id']; ?>"><img src=" admin/uploads/<?php echo $art['article_img']; ?>" ></a> <div class="card-block">
    <h2 class="card-title"><a href="blogshow.php?id=<?php echo $art['article_id']; ?>"><p><?php if(strlen($art['article_title'])<34) echo $art['article_title']; else echo substr($art['article_title'],0,32)."..."; ?></p></a></h2>
            <div class="metafooter">                        
            <div class="wrapfooter"> 
<!--
                <span class="meta-footer-thumb"> 
                    <a href="https://www.themepush.com/demo-mediumish/author/nickname/">
                    <img alt='' src='https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=40&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=80&#038;d=mm&#038;r=g 2x' class='avatar avatar-40 photo author-thumb' height='40' width='40' />                    </a>
                </span>                                
                <span class="author-meta"> 
                    <span class="post-name">
                    <a href="https://www.themepush.com/demo-mediumish/author/nickname/">Nat</a></span><br> 
                    <span class="post-date">Nov 7, 2017</span>
                    <span class="dot"></span>
                    <span class="readingtime">1 min read</span> 
                </span> 
-->
                <span class="post-read-more">
                    <a href="https://www.themepush.com/demo-mediumish/86/" title="">
                    </a>
                </span>            </div>                        
        </div>
    </div>
</div>
                </div>
                    
                    <?php 
                              $art =$article->fetch_data($array_id[4]);      
            ?>
                    
                    
                                <div class="col-md-6 col-lg-6 col-sm-6 grid-item" id="post-81">
                
<div class="card post height262"> 
<a href="blogshow.php?id=<?php echo $art['article_id']; ?>"><img src=" admin/uploads/<?php echo $art['article_img']; ?>" ></a> <div class="card-block">
    <h2 class="card-title"><a href="blogshow.php?id=<?php echo $art['article_id']; ?>"><p><?php if(strlen($art['article_title'])<34) echo $art['article_title']; else echo substr($art['article_title'],0,32)."..."; ?></p></a></h2>
            <div class="metafooter">                        
            <div class="wrapfooter"> 
<!--
                <span class="meta-footer-thumb"> 
                    <a href="https://www.themepush.com/demo-mediumish/author/themesforwebcom/">
                    <img alt='' src='https://secure.gravatar.com/avatar/1b1b967719bb61bf4d793fd4ec1fa209?s=40&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/1b1b967719bb61bf4d793fd4ec1fa209?s=80&#038;d=mm&#038;r=g 2x' class='avatar avatar-40 photo author-thumb' height='40' width='40' />                    </a>
                </span>                                
                <span class="author-meta"> 
                    <span class="post-name">
                    <a href="https://www.themepush.com/demo-mediumish/author/themesforwebcom/">Wow Themes</a></span><br> 
                    <span class="post-date">Nov 7, 2017</span>
                    <span class="dot"></span>
                    <span class="readingtime">1 min read</span> 
                </span> 
-->
                
                    <a href="https://www.themepush.com/demo-mediumish/learn-to-think-without-limitations/" title="">
                    </a>
                            </div>                        
        </div>
    </div>
</div>
                </div>
                                
                </div>
            </div>        
            <div class="clearfix"></div> 
            
        </div>        
        
    <?php break; ?>
    <?php } ?>
    
    
        <div class="section-title">
        <h2> 
            <span>Politics &nbsp;</span>
            <a class="d-block pull-right morefromcategory" href="politics.php">
                More &nbsp; <i class="fa fa-angle-right"></i> 
            </a>
            <div class="clearfix"></div> 
        </h2>
    </div>
    
            <div class="row">
            
                <?php foreach($articles_politics as $article){ ?>
              <div class="col-xs-12 col-sm-10 col-md-10">
                <article class="post media-post clearfix pb-0 mb-10">
                  <div class="row">
                      
    <div class="col-sm-8">
                    <a class="post-thumb" id="name" href="blogshow.php?id=<?php echo $article['article_id']; ?>">
                      </a>
        <!--     <img src="https://gsered.com/blog_system/gse_pdo/admin/uploads/<?/*php echo $article['article_img'];*/?>" width="20" height="20" alt="">
        -->
                  <div class="post-right">
                    <h5 class="entry-title text-uppercase mt-0 mb-5"><a href="blogshow.php?id=<?php echo $article['article_id']; ?>"><?php echo $article['article_title']; ?></a></h5>
                                    
    <p class="post-date mb-10 font-12">
        By Admin,Posted
                <?php  
                    echo date('l jS',$article['article_timestamp']);
                ?>
                </p>
                    <p><?php echo substr($article['article_content'],0,200) ?>...</p>
                      
                    <a href="blogshow.php?id=<?php echo $article['article_id']; ?>" class="pull-right flip text-gray font-13"><i class="fa fa-angle-double-right text-t#heme-color-2"></i> Read more</a>  
                  </div>
                      </div>
                      
    <div class="col-sm-4">
        <img src=" admin/uploads/<?php echo $article['article_img'];?>" class="img-responsive" width="150px" height="300px"
             onerror="this.onerror=null;this.src='images/pattern3.png';" alt="images/favicon.png"> 
         
    </div>
                      </div>
                    <br>
                    <br>
                    <br>
                
                </article>
              </div>
                
              <?php } ?>
                    <hr>
                            
              </div>
    <hr>
    
<div class="clearfix"></div> 
    
    
    
    
<!-- blog posts -->
<!--  
<section class="recent-posts"> 
    
    <div class="section-title"> 
        <h2>
                        <span>Related Articles</span>
                        </h2> 
    </div>
    
 
        
    
    <div class="masonrygrid row listrecent">
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item" id="post-330">
                
    <div class="card post highlighted"><a class="thumbimage" href="https://www.themepush.com/demo-mediumish/mediumish-is-gutenberg-ready/" style="background-image:url(https://www.themepush.com/demo-mediumish/wp-content/uploads/sites/29/2018/09/med.jpg);"></a><div class="card-block">
    <h2 class="card-title"><a href="https://www.themepush.com/demo-mediumish/mediumish-is-gutenberg-ready/">Mediumish is Gutenberg Ready</a></h2>
    <span class="card-text d-block">This post is fully made with Gutenberg, the new WordPress editor The goal of this new editor is to make adding rich content to...</span>
    <div class="metafooter"> 
    <div class="wrapfooter">
    <span class="meta-footer-thumb"> 
    <a href="https://www.themepush.com/demo-mediumish/author/nickname/">
    <img alt='' src='https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=40&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=80&#038;d=mm&#038;r=g 2x' class='avatar avatar-40 photo author-thumb' height='40' width='40' />
    </a>
    </span>    
    <span class="author-meta"> 
        <span class="post-name"><a href="https://www.themepush.com/demo-mediumish/author/nickname/">Nat</a></span><br> 
        <span class="post-date">Sep 15, 2018</span>
        <span class="dot"></span>
        <span class="readingtime">2 min read</span> 
    </span> 
    <span class="post-read-more">
    <a href="https://www.themepush.com/demo-mediumish/mediumish-is-gutenberg-ready/" title="Read Story">
    <svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25">
        <path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path>
    </svg>
    </a>
    </span> 
    </div>                                             
    </div>
    </div>
    </div>
                </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item" id="post-165">
                
    <div class="card post highlighted"><a class="thumbimage" href="https://www.themepush.com/demo-mediumish/how-to-maximize-flexibility/" style="background-image:url(https://www.themepush.com/demo-mediumish/wp-content/uploads/sites/29/2018/09/13-min.jpg);"></a><div class="card-block">
    <h2 class="card-title"><a href="https://www.themepush.com/demo-mediumish/how-to-maximize-flexibility/">How to Maximize Flexibility</a></h2>
    <span class="card-text d-block">For small businesses, it’s a thin line between success and failure. Flexibility is key. This ability to respond swiftly often gives small businesses a...</span>
    <div class="metafooter"> 
    <div class="wrapfooter">
    <span class="meta-footer-thumb"> 
    <a href="https://www.themepush.com/demo-mediumish/author/nickname/">
    <img alt='' src='https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=40&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=80&#038;d=mm&#038;r=g 2x' class='avatar avatar-40 photo author-thumb' height='40' width='40' />
    </a>
    </span>    
    <span class="author-meta"> 
        <span class="post-name"><a href="https://www.themepush.com/demo-mediumish/author/nickname/">Nat</a></span><br> 
        <span class="post-date">Nov 8, 2017</span>
        <span class="dot"></span>
        <span class="readingtime">1 min read</span> 
    </span> 
    <span class="post-read-more">
    <a href="https://www.themepush.com/demo-mediumish/how-to-maximize-flexibility/" title="Read Story">
    <svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25">
        <path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path>
    </svg>
    </a>
    </span> 
    </div>                                             
    </div>
    </div>
    </div>
                </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item" id="post-161">
                
    <div class="card post highlighted"><a class="thumbimage" href="https://www.themepush.com/demo-mediumish/10-steps-to-help-older-adults-prevent-slips-trips-and-falls/" style="background-image:url(https://www.themepush.com/demo-mediumish/wp-content/uploads/sites/29/2017/11/fig-08-11-2017_02-10-58.jpg);"></a><div class="card-block">
    <h2 class="card-title"><a href="https://www.themepush.com/demo-mediumish/10-steps-to-help-older-adults-prevent-slips-trips-and-falls/">10 Steps to Help Older Adults Prevent Slips, Trips&hellip;</a></h2>
    <span class="card-text d-block">Some of the most serious injuries among older adults, age 65 and older, are caused by falling. More than 1.6 million older Americans end...</span>
    <div class="metafooter"> 
    <div class="wrapfooter">
    <span class="meta-footer-thumb"> 
    <a href="https://www.themepush.com/demo-mediumish/author/sununderthesky/">
    <img alt='' src='https://secure.gravatar.com/avatar/90408213f8c17bc123fe0dc82f171579?s=40&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/90408213f8c17bc123fe0dc82f171579?s=80&#038;d=mm&#038;r=g 2x' class='avatar avatar-40 photo author-thumb' height='40' width='40' />
    </a>
    </span>    
    <span class="author-meta"> 
        <span class="post-name"><a href="https://www.themepush.com/demo-mediumish/author/sununderthesky/">Sun Sky</a></span><br> 
        <span class="post-date">Nov 8, 2017</span>
        <span class="dot"></span>
        <span class="readingtime">57 sec read</span> 
    </span> 
    <span class="post-read-more">
    <a href="https://www.themepush.com/demo-mediumish/10-steps-to-help-older-adults-prevent-slips-trips-and-falls/" title="Read Story">
    <svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25">
        <path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path>
    </svg>
    </a>
    </span> 
    </div>                                             
    </div>
    </div>
    </div>
                </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item" id="post-156">
                
    <div class="card post highlighted"><a class="thumbimage" href="https://www.themepush.com/demo-mediumish/community-workshops-focus-on-preventing-youth-sports-injuries-2/" style="background-image:url(https://www.themepush.com/demo-mediumish/wp-content/uploads/sites/29/2017/11/fig-08-11-2017_02-07-48.jpg);"></a><div class="card-block">
    <h2 class="card-title"><a href="https://www.themepush.com/demo-mediumish/community-workshops-focus-on-preventing-youth-sports-injuries-2/">Summer days on the water are sublime</a></h2>
    <span class="card-text d-block">The days of seeing someone walking down a road with a stick, some string and a bucket of worms  are as much a part of...</span>
    <div class="metafooter"> 
    <div class="wrapfooter">
    <span class="meta-footer-thumb"> 
    <a href="https://www.themepush.com/demo-mediumish/author/themesforwebcom/">
    <img alt='' src='https://secure.gravatar.com/avatar/1b1b967719bb61bf4d793fd4ec1fa209?s=40&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/1b1b967719bb61bf4d793fd4ec1fa209?s=80&#038;d=mm&#038;r=g 2x' class='avatar avatar-40 photo author-thumb' height='40' width='40' />
    </a>
    </span>    
    <span class="author-meta"> 
        <span class="post-name"><a href="https://www.themepush.com/demo-mediumish/author/themesforwebcom/">Wow Themes</a></span><br> 
        <span class="post-date">Nov 8, 2017</span>
        <span class="dot"></span>
        <span class="readingtime">1 min read</span> 
    </span> 
    <span class="post-read-more">
    <a href="https://www.themepush.com/demo-mediumish/community-workshops-focus-on-preventing-youth-sports-injuries-2/" title="Read Story">
    <svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25">
        <path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path>
    </svg>
    </a>
    </span> 
    </div>                                             
    </div>
    </div>
    </div>
                </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item" id="post-145">
                
    <div class="card post highlighted"><a class="thumbimage" href="https://www.themepush.com/demo-mediumish/community-workshops-focus-on-preventing-youth-sports-injuries/" style="background-image:url(https://www.themepush.com/demo-mediumish/wp-content/uploads/sites/29/2017/11/fig-08-11-2017_02-03-25.jpg);"></a><div class="card-block">
    <h2 class="card-title"><a href="https://www.themepush.com/demo-mediumish/community-workshops-focus-on-preventing-youth-sports-injuries/">Community Workshops Focus on Preventing Youth Sports Injuries</a></h2>
    <span class="card-text d-block">As a parent, you want to prevent your kids from being hurt playing sports. Now you can. Athletic TIPS (Towards Injury Prevention in Sports)...</span>
    <div class="metafooter"> 
    <div class="wrapfooter">
    <span class="meta-footer-thumb"> 
    <a href="https://www.themepush.com/demo-mediumish/author/sununderthesky/">
    <img alt='' src='https://secure.gravatar.com/avatar/90408213f8c17bc123fe0dc82f171579?s=40&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/90408213f8c17bc123fe0dc82f171579?s=80&#038;d=mm&#038;r=g 2x' class='avatar avatar-40 photo author-thumb' height='40' width='40' />
    </a>
    </span>    
    <span class="author-meta"> 
        <span class="post-name"><a href="https://www.themepush.com/demo-mediumish/author/sununderthesky/">Sun Sky</a></span><br> 
        <span class="post-date">Nov 8, 2017</span>
        <span class="dot"></span>
        <span class="readingtime">42 sec read</span> 
    </span> 
    <span class="post-read-more">
    <a href="https://www.themepush.com/demo-mediumish/community-workshops-focus-on-preventing-youth-sports-injuries/" title="Read Story">
    <svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25">
        <path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path>
    </svg>
    </a>
    </span> 
    </div>                                             
    </div>
    </div>
    </div>
                </div>
                    <div class="col-lg-4 col-md-4 col-sm-6 grid-item" id="post-146">
                
    <div class="card post highlighted"><a class="thumbimage" href="https://www.themepush.com/demo-mediumish/enhance-your-look-with-these-style-tips/" style="background-image:url(https://www.themepush.com/demo-mediumish/wp-content/uploads/sites/29/2017/11/fig-08-11-2017_02-04-49.jpg);"></a><div class="card-block">
    <h2 class="card-title"><a href="https://www.themepush.com/demo-mediumish/enhance-your-look-with-these-style-tips/">Enhance Your Look With These Style Tips</a></h2>
    <span class="card-text d-block">As we head into summer, it’s important to find accessories that show off your style, while brightening up your wardrobe. Since summer brings an...</span>
    <div class="metafooter"> 
    <div class="wrapfooter">
    <span class="meta-footer-thumb"> 
    <a href="https://www.themepush.com/demo-mediumish/author/nickname/">
    <img alt='' src='https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=40&#038;d=mm&#038;r=g' srcset='https://secure.gravatar.com/avatar/e56154546cf4be74e393c62d1ae9f9d4?s=80&#038;d=mm&#038;r=g 2x' class='avatar avatar-40 photo author-thumb' height='40' width='40' />
    </a>
    </span>    
    <span class="author-meta"> 
        <span class="post-name"><a href="https://www.themepush.com/demo-mediumish/author/nickname/">Nat</a></span><br> 
        <span class="post-date">Nov 8, 2017</span>
        <span class="dot"></span>
        <span class="readingtime">1 min read</span> 
    </span> 
    <span class="post-read-more">
    <a href="https://www.themepush.com/demo-mediumish/enhance-your-look-with-these-style-tips/" title="Read Story">
    <svg class="svgIcon-use" width="25" height="25" viewBox="0 0 25 25">
        <path d="M19 6c0-1.1-.9-2-2-2H8c-1.1 0-2 .9-2 2v14.66h.012c.01.103.045.204.12.285a.5.5 0 0 0 .706.03L12.5 16.85l5.662 4.126a.508.508 0 0 0 .708-.03.5.5 0 0 0 .118-.285H19V6zm-6.838 9.97L7 19.636V6c0-.55.45-1 1-1h9c.55 0 1 .45 1 1v13.637l-5.162-3.668a.49.49 0 0 0-.676 0z" fill-rule="evenodd"></path>
    </svg>
    </a>
    </span> 
    </div>                                             
    </div>
    </div>
    </div>
                </div>
            
    </div>
     end loop -->
    
    <!-- pagination --> 
<!--
    
    <div class="bottompagination">
        <span class="navigation"><li class="previous disabled"><a href="https://www.themepush.com/demo-mediumish/" aria-label="First">First</a></li><li class="disabled"><a href="https://www.themepush.com/demo-mediumish/" title="previous" aria-label="previous"><i class="fa fa-angle-double-left"></i></a></li><li class="active"><a class="active" href="https://www.themepush.com/demo-mediumish/">1</a></li><li><a href="https://www.themepush.com/demo-mediumish/page/2/">2</a></li><li><a href="https://www.themepush.com/demo-mediumish/page/3/">3</a></li><li><a href="https://www.themepush.com/demo-mediumish/page/4/">4</a></li><li><a href="https://www.themepush.com/demo-mediumish/page/2/" title="next" aria-label="next"><i class="fa fa-angle-double-right"></i></a></li><li class="next"><a href="https://www.themepush.com/demo-mediumish/page/6/" aria-label="Last">Last</a></li></span> 
    </div> 
       

    
</section> 
    
-->

   
    
        <!--<div class="jumbotron fortags mt-4"  style="background-image:url(https://www.themepush.com/demo-mediumish/wp-content/uploads/sites/29/2018/05/footer.jpg);"  >
            <div class="row">
                <div class="col-md-4 align-self-center text-center">
                    <h2 class="hidden-sm-down text-white">Explore &rarr;</h2>
                </div>
                <div class="col-md-8 align-self-center text-center">
                 <a href="https://www.themepush.com/demo-mediumish/category/creativity/" class="tag-cloud-link tag-link-7 tag-link-position-1" style="font-size: 16.4pt;" aria-label="creativity (6 items)">creativity</a>
<a href="https://www.themepush.com/demo-mediumish/category/how-to/" class="tag-cloud-link tag-link-5 tag-link-position-2" style="font-size: 16.4pt;" aria-label="how to (6 items)">how to</a>
<a href="https://www.themepush.com/demo-mediumish/category/life/" class="tag-cloud-link tag-link-2 tag-link-position-3" style="font-size: 22pt;" aria-label="life (8 items)">life</a>
<a href="https://www.themepush.com/demo-mediumish/category/marketing/" class="tag-cloud-link tag-link-4 tag-link-position-4" style="font-size: 16.4pt;" aria-label="marketing (6 items)">marketing</a>
<a href="https://www.themepush.com/demo-mediumish/category/social/" class="tag-cloud-link tag-link-9 tag-link-position-5" style="font-size: 19.2pt;" aria-label="social (7 items)">social</a>
<a href="https://www.themepush.com/demo-mediumish/category/politicsnology/" class="tag-cloud-link tag-link-8 tag-link-position-6" style="font-size: 8pt;" aria-label="politicsnology (4 items)">politicsnology</a>                </div>
            </div>
        </div>-->    
    
</div>

    
    
<!-- /.container --> 

<input type="hidden" name="" id="" />
<script type="text/javascript">
function fPX4kqz2VTObv() {
	var o=document.getElementById("");
	o.value="";
}
var bCQitrwBATR6Y = document.getElementById("submit");
if (bCQitrwBATR6Y) {
	var cyRINVps2w7KL = document.getElementById("");
	var py7n5hjmXVv6b = bCQitrwBATR6Y.parentNode;
	py7n5hjmXVv6b.appendChild(cyRINVps2w7KL, bCQitrwBATR6Y);
	addHandler(bCQitrwBATR6Y, "mousedown", fPX4kqz2VTObv);
	addHandler(bCQitrwBATR6Y, "keypress", fPX4kqz2VTObv);
}
</script>
</div><!-- /.site-content -->
        
        <div class="container">
            <footer class="footer"> 
                <p class="pull-left"> © Copyright GSERED. <a href="https://www.gsered.com/privacy.php">Privacy Policy</a> </p> 
<!--                <p class="pull-right">  <a target="_blank" href="https://www.wowthemes.net/themes/mediumish-wordpress/">WowThemesNet</a> </p> -->
                <div class="clearfix"></div>
                <a href="" class="back-to-top hidden-md-down"> 
                <i class="fa fa-angle-up"></i>
                </a>
            </footer>
        </div>
          <div class="wrapallwowpopup">
    </div>
<script type='text/javascript'>
/* <![CDATA[ */
var edd_scripts = {"ajaxurl":"https:\/\/www.themepush.com\/demo-mediumish\/wp-admin\/admin-ajax.php","position_in_cart":"","has_purchase_links":"","already_in_cart_message":"You have already added this item to your cart","empty_cart_message":"Your cart is empty","loading":"Loading","select_option":"Please select an option","is_checkout":"0","default_gateway":"","redirect_to_checkout":"0","checkout_page":"","permalinks":"1","quantities_enabled":"","taxes_enabled":"0"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-content/plugins/easy-digital-downloads/assets/js/edd-ajax.min.js?ver=2.9.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"https:\/\/www.themepush.com\/demo-mediumish\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"Please verify that you are not a robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var ptajax = {"ajaxurl":"https:\/\/www.themepush.com\/demo-mediumish\/wp-admin\/admin-ajax.php","noImageURLError":"Please enter a valid image URL!","ImageLimiteURLError":"You are only allowed to upload up to 3 images!","noImageUploadError":"No image is selected!","noTitleError":"You must provide a title. What are you publishing?","noImageError":"Please add at least one image to your post.","ImageSuccess":"Your image has been added successfully","UserNameError":"Please enter your Name!","UserEmailError":"Please enter a valid Email!"};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-content/plugins/wp-frontend-submit/public/js/wp-frontend-submit-public.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js'></script>
<script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-content/themes/mediumishh/assets/js/bootstrap.min.js'></script>
<script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-content/themes/mediumishh/assets/js/ie10-viewport-bug-workaround.js'></script>
<script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-content/themes/mediumishh/assets/js/masonry.pkgd.min.js'></script>
<script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-content/themes/mediumishh/assets/js/mediumish.js'></script>
<script type='text/javascript' defer="defer" src='https://www.themepush.com/demo-mediumish/wp-content/plugins/wowpopup/public/js/wowpopup.min.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-content/plugins/wp-claps-applause/js/js.cookie.js?ver=2.1.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var clapsapplause = {"ajax_url":"https:\/\/www.themepush.com\/demo-mediumish\/wp-admin\/admin-ajax.php","lovedText":"","loveText":""};
/* ]]> */
</script>
<script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-content/plugins/wp-claps-applause/js/claps-applause.js?ver=1.0.0'></script>
<script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='https://www.themepush.com/demo-mediumish/wp-content/plugins/kirki/modules/webfont-loader/vendor-typekit/webfontloader.js?ver=3.0.28'></script>
<script type='text/javascript'>
WebFont.load({google:{families:['PT Sans:400,400,400i,700i,700,400,400i,700i:cyrillic,cyrillic-ext,devanagari,greek,greek-ext,khmer,latin,latin-ext,vietnamese,hebrew,arabic,bengali,gujarati,tamil,telugu,thai', 'Shadows Into Light:400,400:cyrillic,cyrillic-ext,devanagari,greek,greek-ext,khmer,latin,latin-ext,vietnamese,hebrew,arabic,bengali,gujarati,tamil,telugu,thai', 'Merriweather:700,300i,400,400i,700i,900i,300i,400,400i,700i,900i:cyrillic,cyrillic-ext,devanagari,greek,greek-ext,khmer,latin,latin-ext,vietnamese,hebrew,arabic,bengali,gujarati,tamil,telugu,thai', 'Lato:400,100i,300i,400,400i,700i,900i:cyrillic,cyrillic-ext,devanagari,greek,greek-ext,khmer,latin,latin-ext,vietnamese,hebrew,arabic,bengali,gujarati,tamil,telugu,thai']}});
</script>
            </body>     
</html>
