
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 3px solid #f1f1f1;}

input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

button {
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
}

img.avatar {
  width: 40%;
  border-radius: 50%;
}

.container {
  padding: 16px;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
</style>
</head>
<body>


<h2>Login Form</h2>

<form action="process.php" method="POST">
  <div class="imgcontainer">
    <img src="pics/img_avatar2.png" alt="Avatar" class="avatar" style="width:100px;height:120px;">
  </div>

  <div class="container">
    <label id="uname"><b>Username</b></label>
    <input id="user" type="text" placeholder="Enter Username" name="user" required>

    <label id="psw"><b>Password</b></label>
    <input id="pass" type="password" placeholder="Enter Password" name="pass" required>
        
                                                                  <button id="demo" type="submit">Login</button>

                                                                  
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Create Account <a href="newUser.html">ClickHere</a></span>
  </div>
</form>

</body>
</html>