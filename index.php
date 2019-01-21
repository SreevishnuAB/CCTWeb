<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Co-curricular Credits Tracker - Login</title>
  <link href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:400,700" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/styles.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="js/handleLogin.js"></script>
</head>
<body>
  <h1>Co-curricular Credits Tracker</h1>
  <div id="loginbox">
    <form id="form1" method="POST" action="php/login.php">
      <input class="formelements" type="text" id="username" placeholder="Username"><br>
      <input class="formelements" type="password" id="password" placeholder="Password"><br>
    </form>
  </div>
  <input class="formelements" type="submit" id="submit" value="LOGIN" form="form1">
</body>
</html>