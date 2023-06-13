<!DOCTYPE html>
<html>
<head>
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
  <style>

    /* i{
      display: inline-block;
    } */
    body {
      font-family: Arial, sans-serif;
      background-color: #f2f2f2;
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }

    .login-container {
      background-color: #fff;
      border-radius: 10px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      padding: 40px;
      width: 400px;
      max-width: 90%;
      position: relative;
      /* border: 2px solid black; */
    }

    .close-btn{
      background-color: transparent;
      border: none;
      position: absolute;
      right: 20px;
      top: 20px;
      font-size: 20px;
      cursor: pointer;
    }

    .close-btn:hover{
      color:black;
      background-color:green;
      transition: all .3s;
    }

    .close-btn:active{
      color: blue;
    }

    h1 {
      text-align: center;
      color: #4caf50;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 20px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      background-color: #4caf50;
      color: #fff;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .form-link {
      text-align: center;
      margin-top: 10px;
    }

    .form-link a {
      color: #4caf50;
      text-decoration: none;
    }

   
  </style>
</head>
<body>
  <div class="login-container">
  <a href="index.php" role="button" type="button" class="close-btn">
  <i class="fa-sharp fa-solid fa-xmark "></i>
  </a>
  
    <h1>Login</h1>
    <form id='f1'>
      <input type="text" id='user' placeholder="Username" required>
      <input type="password" id='pass' placeholder="Password" required>
      <input type="submit" value="Log in">
    </form>
    <div class="form-link">
      <a href="#">Forgot password?</a> | <a href="signup.php">Sign up</a>
    </div>
    
  </div>
 
</body>
<script>
let login=()=>{

document.getElementById("f1").addEventListener("submit",function(p){
p.preventDefault();

let user=document.getElementById("user").value;
let pass=document.getElementById("pass").value;

let req=new XMLHttpRequest();
req.open("post","login_1.php",true);
req.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
req.send("user="+user+"&pass="+pass);

req.onload=function(){
  if(this.responseText==1){

  
Swal.fire(
'Login successfull',
'Redirecting to another site',
'success'
)

setTimeout(function(){
window.location.href="user/user.php";
},2000)
}else if(this.responseText=="Incorrect password"){
Swal.fire({
icon: 'error',
title: 'Incorrect password',
text: 'please input correct password',

})
}else if(this.responseText=="Email not found"){

Swal.fire(
'Email not found',
'Please enter a correct email',
'question'
)

}


}

});
}

login();
</script>
</html>
