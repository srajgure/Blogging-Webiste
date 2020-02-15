<?php
    session_start();
    include_once('../includes/connection.php');
    
if(isset($_SESSION['logged_in'])){
    if(isset($_POST['#title'],$_POST['#content'])){
        $title=$_POST['#title'];
        $content=nl2br($_POST['#content']);
    
        
        if(empty($title) or empty($content)) {
            $error='All fields are required!';
        }
        else{
            $query = $pdo->prepare('INSERT INTO articles (article_title,article_content,article_timestamp) VALUES(?,?,?)');
            
            $query->bindValue(1,$title);
            $query->bindValue(2,$content);
            $query->bindValue(3,time());
            
            $query->execute();
            header('Location: ../admin/index.php');
        }
    }
    
    
    ?>


     <html>
        <head>
            
            
		<title>CMS</title>
		
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/signup.css">
        <link rel="stylesheet" href="bower_components/medium-editor/dist/css/medium-editor.min.css">
    <link rel="stylesheet" href="bower_components/medium-editor/dist/css/themes/default.css">
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <link rel="stylesheet" href="bower_components/medium-editor-insert-plugin/dist/css/medium-editor-insert-plugin.min.css">
    <script src="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/js/medium-editor.min.js"></script>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/medium-editor@latest/dist/css/medium-editor.min.css" type="text/css" media="screen" charset="utf-8">
        
        <style>
            .navbar{
                margin-bottom: 0;
                border-radius: 0;
                background-color: #ff9d00;
                color: white;
                padding: 1% 0;
                font-size: 5es;
                border: 0;
            }
            .navbar-brand{
                float: left;
                min-height: 55px;
                padding: 0 15px 5px;
            }
            .navbar-inverse .navbar-nav .active a,.navbar-inverse .navbar-nav .active a:focus{
                color:darkgrey;
                background-color:#000000;        
            }
            .navbar-inverse .navbar-nav li a
            {
                color: white;
                font-size: 20px;
                
            }
            .navbar-inverse .navbar-nav li a:hover{
                color: gainsboro;
            }
            H1{
                align-content: center;
                color: white;
                padding-bottom: 50px;
            }
             footer{
                width: 100%;
                background-color: #ff9d00;
                color: white;
                padding: 3%;
            }
            .fa{
                font-size: 35px;
                padding: 20px;
                color: white;
            }
            .fa:hover{
                color: gainsboro;
                text-decoration: none;
            }
            .carousel-caption{
                top: 35%;
                transform: translateX(-50%);
                color: red;
                
            }
            .nav navbar-nav navbar-right{
                font-size: 50px;
            }
            @media(max-width:600px)
            {
                .carousel-caption{
                    display: none;
                    
                }
            }
           .container{
                padding-left: 15px;
                padding-top: 30px;
                padding-bottom: 30px;
                -webkit-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.05);
                  -moz-box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.05);
                  box-shadow: 0px 14px 32px 0px rgba(0, 0, 0, 0.05);
                border-radius: 15px 15px 15px 15px;
               width: 60%;
               font-size: 30px;
            }
            footer{
                right: 0;
                padding: 1rem;
                text-align: center;
                position:absolute;
                left: 0;
                bottom: 0;
                width: 100%;
            }

        </style>
    
            
	   </head>
	<body>
        <nav class="navbar navbar-inverse">
            <div class="container-fluid">
                <div class="navbar-header"> 
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="a"><H1 >Blogger</H1></a>
                    
                </div>
            
                <div class="collapse navbar-collapse container-center " id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index.php">HOME</a></li>

                    <li><a href="../all_articles.php">ARTICLES</a></li>
                        <li><a href="admin/add.php">PUBLISH</a></li>
                        <li><a href="logout.php">LOGOUT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <br>
        <br>
        <div class="container">
            <?php if(isset($error)) {?>

                <small style="color:red;"><?php echo $error ?></small>
                <br>
                <br>
            <?php } ?>

        <form action="post.php" method="post" autocomplete="off">
        
        <div class="container">
                        
		    <div class="editable" data-placeholder="Title"  id="title"></div>
            <script>var editor = new MediumEditor('.editable');</script>
		</div>
        
        
        <br>
        <br>
        
        
        <div class="container">
		    <div class="editable" data-placeholder="Tell your story..." id="content"></div>
            <script>var editor = new MediumEditor('.editable');</script>
		</div>
        
        
        <br>
        <br>
        <div class="grid-container">
                                <div class="button-section w3-opacity ">
                                    <input type="submit" onclick="getValue()" value="Publish"  />
                                    
                                 </div>
            <script>
    
function getValue() {
    var a=document.getElementById("title").value;
    var b=document.getElementById("content").value;

}
        
                $(function(){
                    $.ajax({
                        type:"POST",
                        url:'post.php',
                        data:({title:document.getElementById("title").value;},{content:document.getElementById("content").value;}),
                        success: function(data){
                            alert(data);
                        }
                    });
                    
                });
                

                
            </script>
        </div>
        </form>
        </div>

        <br><br>

        <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script src="bower_components/blueimp-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="bower_components/blueimp-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="bower_components/blueimp-file-upload/js/jquery.fileupload.js"></script>
    <script src="bower_components/medium-editor/dist/js/medium-editor.js"></script>
    <script src="bower_components/handlebars/handlebars.runtime.min.js"></script>
    <script src="bower_components/jquery-sortable/source/js/jquery-sortable-min.js"></script>

    <script src="bower_components/jquery-cycle2/build/jquery.cycle2.min.js"></script>
    <script src="bower_components/jquery-cycle2/build/plugin/jquery.cycle2.center.min.js"></script>

    <script src="bower_components/medium-editor-insert-plugin/dist/js/medium-editor-insert-plugin.min.js"></script>
        <script>
            /*
        
        var DisableContextMenuExtension = MediumEditor.Extension.extend({
            name: 'disable-context-menu'
            init:function(){
            this.getEditorElement().forEach(function(element){
            this.base.on(element,'contextmenu',this.handleContextmenu.bind(this));},this);
            this.subscribe('editableKeydown',this.handleKeydown.bind(this));
        },
            handleContextmenu:function (event){
                if(!event.currentTarget.getAttribute('data-allow-context-menu')){
                    event.preventDefault();    
                }
                
            },
            handleKeydown:function(event,editable){
                if(MediumEditor.util.iskey(event,MediumEditor.util.keyCode.ESCAPE)){
                    if(editable.hasAttribute('data-allow-context-menu')){
                        editable.removeAttribute('data-allow-context-menu');
                    }else{
                        editable.setAttribute('data-allow-context-menu',true);
                    }
                }
            }
            
            });
                */
        var editor = new MediumEditor('.editable',{
            extensions: {
                //'disable-context-menu':new DisableContextMenuExtension()
            }
        });
        $(function () {
            $('.editable').mediumInsert({
                editor: editor,
                Placeholder:'Title',
                addons: {
                    images: {
                        uploadScript: null,
                        deleteScript: null,
                        captionPlaceholder: 'Type caption for image',
                        styles: {
                            slideshow: {
                                label: '<span class="fa fa-play"></span>',
                                added: function ($el) {
                                    $el
                                        .data('cycle-center-vert', true)
                                        .cycle({
                                            slides: 'figure'
                                        });
                                },
                                removed: function ($el) {
                                    $el.cycle('destroy');
                                }
                            }
                        },
                        actions: null
                    }
                }
            });
        });

        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-44692164-1', 'auto');
        ga('send', 'pageview');
    </script>
        
        <script>
// Add active class to the current button (highlight it)
var header = document.getElementById("myDIV");
var btns = header.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
</script>

        
	</body>
</html>
    <?php
    
    
}
?>
