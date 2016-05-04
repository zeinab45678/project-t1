<!DOCTYPE html>
<?php 
if($_POST['submit']){
	@ $db = mysqli_connect('localhost','root', '123456', 'shopping');
if (mysqli_connect_errno()) 
{
echo "Error: Could not connect to
database. Please try again later.";
exit;
}
$comment=$_POST['comment'];

$query="INSERT INTO `comment`( `comment`) VALUES ('".$comment."');";
 $result1=mysqli_query($db, $query);


}
?>

<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta
 name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body background="img/90.jpg">

<?php

@ $db = mysqli_connect('localhost','root', '123456', 'shopping');
if (mysqli_connect_errno()) 
{
echo "Error: Could not connect to
database. Please try again later.";
exit;
}
if(!empty($_POST['post'] && $_POST['title'] && $_POST['image']))
{
$query1="UPDATE `post` SET `post`='".$_POST['post']."',`title`='".$_POST['title']."',`img`='".$_POST['image']."' WHERE `p_id`=1;";

$result = mysqli_query($db, $query1);
if($result )
{
$query="DELETE FROM `comment`;";
$result4 = mysqli_query($db, $query);
$query2="SELECT  `post` FROM `post` WHERE `p_id`=1;";
$result1 = mysqli_query($db, $query2);
$row = mysqli_fetch_assoc($result1);
$query3="SELECT  `img` FROM `post` WHERE `p_id`=1;";
$result2 = mysqli_query($db, $query3);
$row1 = mysqli_fetch_assoc($result2);
$query4="SELECT  `title` FROM `post` WHERE `p_id`=1;";
$result3 = mysqli_query($db, $query4);
$row2 = mysqli_fetch_assoc($result3);

}
}
else
{
$query2="SELECT  `post` FROM `post` WHERE `p_id`=1;";
$result1 = mysqli_query($db, $query2);
$row = mysqli_fetch_assoc($result1);
$query3="SELECT  `img` FROM `post` WHERE `p_id`=1;";
$result2 = mysqli_query($db, $query3);
$row1 = mysqli_fetch_assoc($result2);
$query4="SELECT  `title` FROM `post` WHERE `p_id`=1;";
$result3 = mysqli_query($db, $query4);
$row2 = mysqli_fetch_assoc($result3);
}


?>

    <!-- Navigation -->
     <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Tourist Marketing</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="about.php">About</a>
                    </li>
                    <li>
                        <a href="services.php">Services</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="portfolio-1-col.php">1 Column Portfolio</a>
                            </li>
                           
                           </li>
                        </ul>
                    </li>
                    <li class="dropdown active">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                           
                            <li class="active">
                                <a href="blog-post.php">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                   </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Content -->
    <div class="container">

        <!-- Page Heading/Breadcrumbs -->
        <div class="row">
            <div class="col-lg-12" style="color:#FFFFFF">
                <h1 class="page-header">Blog Post
                    <small>by <a href="#">Tourist Marketing</a>
                    </small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="index.php">Home</a>
                    </li>
                    <li class="active">Blog Post</li>
                </ol>
            </div>
        </div>
        <!-- /.row -->

        <!-- Content Row -->
        <div class="row">

            <!-- Blog Post Content Column -->
            <div class="col-lg-8">

                <!-- Blog Post -->
                <!-- Blog Post -->

            


                <!-- Date/Time -->
                <p><h2></i><?php echo $row2['title'] ?></h2></p>

                <hr>

                <!-- Preview Image -->
                <img class="img-responsive" src="<?php echo 'img/'. $row1['img'] ?>" alt="">

                <hr>

                <!-- Post Content -->
                <p class="lead"><h3><?php echo $row['post'] ?></h3></p>

                <hr>

                <!-- Blog Comments -->

                <!-- Comments Form -->
 		
		<?php
		if(!empty($_POST['comment']))
	{
	@ $db = mysqli_connect('localhost','root', '123456', 'shopping');
	if (mysqli_connect_errno()) 
	{
	echo "Error: Could not connect to
	database. Please try again later.";
		exit;
	}


		$query="SELECT * FROM `comment`;";
		$result = mysqli_query($db, $query);
		$num_results =mysqli_num_rows($result);
 		for ($i=0; $i <$num_results; $i++) 
			{
		$row = mysqli_fetch_assoc($result);

			echo "<div class='well'>
                       <div class='form-group'>
                            <textarea class='form-control' rows='3'>'".$row['comment']."'</textarea>
                        </div></div>";
			}
			}	
			?>
                
                <div class="well">
                    <h4>Leave a Comment:</h4>
                    <form role="form" method="post"  action="blog-post.php">
                        <div class="form-group">
                            <textarea class="form-control" rows="3" name="comment" value=""></textarea>
                        </div>
                       <i style="color:grey"> <input type="submit" name="submit" value="comment"></input></i>
                    </form>
                </div>

               

                <!-- Posted Comments -->

                <!-- Comment -->
               
        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Your Website 2016</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
