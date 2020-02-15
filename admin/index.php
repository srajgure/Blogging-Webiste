<?php
    session_start();

include_once('../includes/connection.php');
    if(isset($_SESSION['logged_in'])){
        
                    $_SESSION['logged_in']=true;
                    echo "succesfull login";
                    header('Location: add.php');
 
        
        
    }else{
        if(isset($_POST['username'],$_POST['password'])){
            $username=$_POST['username'];
            $password=md5($_POST['password']);
            if(empty($username) or empty($password)){
                $error="All fields are required";
                
            }
            else{
                $query=$pdo->prepare("SELECT * FROM gse_users WHERE user_name =? AND user_password=?");
                $query->bindValue(1,$username);
                $query->bindValue(2,$password);
                $query->execute();
                $num=$query->rowCount();
                if($num==1){
                    $_SESSION['logged_in']=true;
                    header('Location: add.php');
                    exit();
                } else {
                    $error='Incorrect details!!';
                }
                
            } 
            
            
            
        }
        
    }
?>
<html>
    <head>
		<title>CMS</title>
		<link rel="stylesheet" href="../css/style.css" /> 
	</head>
	<body>
		<!-- <div class="container">
            <a href="index.php" id="logo">CMS</a>
            <br>
            <br>
            <?php if(isset($error)) {?>

            <small style="color:red;"><?php echo $error ?></small>
            <br>
            <br>
            <?php } ?>
            <form action="index.php" method="post" autocomplete="off"k>
            <input type="text" name="username" placeholder="Username"/>
            <input type="password" name="password" placeholder="Password"/>
            <input type="submit" value="Login"/>
            </form>
		</div> -->
        
        <div class="header">
		<h2>Login</h2>
	</div>
	
	<form method="post" action="index.php" autocomplete="off">

		<?php        ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" >
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="login_user">Login</button>
		</div>
        </form>
        
	</body>
</html>
 
    <?php
        
?>
