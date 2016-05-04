<!DOCTYPE html>
<html >
  <head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<script src="jquery.js"></script>
 
<script>
function myFunction()
{

var x=document.getElementById("e").value;
var x1=document.getElementById("p").value;


var atpos=x.indexOf("@");
var dotpos=x.lastIndexOf(".");
//var z=p.length;
	
if (x==null || x=="" ||x1==null || x1=="" )

	{

	alert("data must be filled out");

	return false;

	}
else if (atpos<1 || dotpos<atpos+2 || dotpos+2>=x.length)

	{

	alert("Not a valid e-mail address");

	return false;

	}
else if(x1.length<6 ||x1 !="1 2 3 4 5 7" )
	{

	alert("Password  not valid );

	return false;
	}
}
</script>

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
    <form class="login-form" action="admin.php" method="post" >
      <h3 class="title">Log in</h3>
      

     Enter Email: <input type="text" name="name" id="e"></input>
	Password: <input type="password" name="name" id="p"></input>
      <div class="form-group">
    <input type="submit" value="log" name="submit"></input>
       
      </div>
    </form>

     
</div>
 

    
    
    
  </body>
</html>
