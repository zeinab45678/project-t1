
<!DOCTYPE html>
<html >
  <head>

  <style type="text/css">


body {
  background: rgba(6, 41, 61, 1);
}

.container {
  width: 100%;
  height: 100%;
}
.container1 {
  width: 50%;
  height: 100%;
}

.form-container {
  display: block;
  margin: 0 auto;
  margin-top: 60px;
  width: 400px;
  perspective: 1000;
}

.login-form {
  background: rgba(0, 90, 120, 0.7);
  border: 4px solid rgba(0, 90, 120, 0.9);
  border-radius: 8px;
}

.title {
  background: rgba(0, 90, 120, 0.9);
  color: #fff;
  font-family: 'Nunito', sans-serif;
  font-weight: normal;
  font-size: 2em;
  padding: 10px 10px 10px 20px;
  margin-top: 0;
  margin-bottom: 15px;
}

.form-input {
  padding: 5px;
  min-width: 50%;
  height: 20px;
  border-radius: 4px;
  border: none;
  font-family: 'Nunito', sans-serif;
  font-weight: normal;
}

textarea:focus, input:focus, button:focus {
    outline: 0;
}

.tooltip {
  width: 35%;
  background: rgba(6, 41, 61, 1);
  font-size: 0.8em;
  color: #fff;
  font-family: 'Nunito', sans-serif;
  font-weight: normal;
  margin-left: 10px;
  padding: 7px;
  border-radius: 5px;
}

.form-group {
  padding: 30px 10px 10px 40px;
}

.login-button {
  width: 100px;
  height: 30px;
  margin-bottom: 10px;
  
  border: none;
  border-radius: 6px;
  background-size: 500% 100%;
  background: rgba(6, 41, 61, 1);
  box-shadow: inset 0 0 0 0 rgba(20, 196, 148, 1);
  -webkit-transition: all ease 0.3s;
  -moz-transition: all ease 0.3s;
  transition: all ease 0.3s;
  
  color: #fff;
  font-family: 'Nunito', sans-serif;
  font-weight: 500;
  font-size: 0.8em;
}

.login-button:hover {
  box-shadow: inset 0 40px 0 0 rgba(20, 196, 148, 1);
}


.

.login-form,
.loading {
  position: center;
  width: 950px;
  height:450px;
  -webkit-backface-visibility: hidden;
          backface-visibility: hidden;
  -webkit-transition: -webkit-transform 2s;
          transition: transform 2s;
}


  </style>
    <meta charset="UTF-8">
    
    <script src="http://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>


    
    
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Nunito:400,300,700'>

        <link rel="stylesheet" href="css/style.css">

    
    
    
  </head>

  <body>

    <div class="container">
  <div class="form-container flip">
    <form class="login-form" action="save.php" method="post">
      <h3 class="title">Products</h3>
      <div class="form-group" id="username">
        <input class="form-input" tooltip-class="username-tooltip" placeholder="Name" id="N1" name="name"></input>
       
      </div>
 <div class="form-group">
      <label for="pwd">Upload img:</label>
      <input type="file" name="filename" id="myFile" placeholder="Upload img" >
    </div>
      <div class="form-group" id="img1">
        <input type="text" class="form-input" tooltip-class="text-tooltip" placeholder="price" name="price"></input>
        
      </div>
      <div class="form-group">
    <input type="submit" value="save" name="submit"></input>
       <a href=" delete.php ">Delete</a> 
      </div>
    </form>

     
</div>

<br><div class="container1">
<div class="row">
    
     <form class="login-form" action="save1.php" method="post">
<h3 class="title">Product1.</h3>
<div class="col-sm-4">
 <div class="form-group">
      <label for="pwd">Upload img:</label>
      <input type="file" name="filename" id="myFile" placeholder="Upload img">
    </div>
<div class="form-group">
         <input type="submit" value="save" name="submit"></input>
          <a href=" delete1.php ">Delete</a> 
      </div>
    </form>
    </div>
    <br>
 
 <form class="login-form"  action="save2.php" method="post">
<h3 class="title">Product2.</h3>
<div class="col-sm-4">
 <div class="form-group">
      <label for="pwd">Upload img:</label>
      <input type="file" name="filename" id="myFile" placeholder="Upload img">
    </div>
<div class="form-group">
       <input type="submit" value="save" name="submit"></input>
         <a href=" delete2.php ">Delete</a> 
      </div></div></div>
    </form><br>
 <form class="login-form" action="save3.php" method="post">
<h3 class="title">Product3.</h3>
<div class="col-sm-4">
 <div class="form-group">
      <label for="pwd">Upload img:</label>
      <input type="file" name="filename" id="myFile" placeholder="Upload img">
    </div>
<div class="form-group">
         <input type="submit" value="save" name="submit"></input>
         <a href=" delete3.php ">Delete</a> 
      </div></div>
    </form><br>

 <form class="login-form" action="save4.php" method="post">
<h3 class="title">Product4.</h3>
<div class="col-sm-4">
 <div class="form-group">
      <label for="pwd">Upload img:</label>
      <input type="file" name="filename" id="myFile" placeholder="Upload img">
    </div>
<div class="form-group">
        <input type="submit" value="save" name="submit"></input>
         <a href=" delete4.php ">Delete</a> 
      </div></div>
    </form>
<br>
 <form class="login-form" action="save5.php" method="post">
<h3 class="title">Product5.</h3>
<div class="col-sm-4">
 <div class="form-group">
      <label for="pwd">Upload img:</label>
      <input type="file" name="filename" id="myFile" placeholder="Upload img">
    </div>
<div class="form-group">
         <input type="submit" value="save" name="submit"></input>
         <a href=" delete5.php ">Delete</a> 
      </div>
    </form>
</div>

<br>
 <form class="login-form" action="blog-post.php" method="post">
<h3 class="title">Post</h3>
<div class="col-sm-4">
 <div class="form-group">
      <label for="pwd">Upload img:</label>
      <input type="file" name="image" id="myFile" placeholder="Upload img">
<br>
  	Title:<input type="text" name="title"></input>
<br>	
	post:<textarea cols="30" rows="10" name="post"></textarea>
<br>
	
    </div>
<div class="form-group">
        <input type="submit" name="submit"  value="Post"></input>
       
      </div>
    </form>
</div>
 
  
    
  </body>
</html>
