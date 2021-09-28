<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
--> 
    <title>Projekt1</title>
</head>
<body>
<div class="container-fluid m-0" style="height:100vh">

<div class="row fixed-top">
<div class="col">
<div class="jumbotron jumbotron-fluid p-2" style="background-color:lightgrey;">
    <div class="container">
        <h1 class="display-4 m-0">Projekt1</h1>
    </div>
</div>
</div>
</div>

<div class="row h-100" id="formDiv">
    <div class="col-md-7 col-sm-12" style="background-color:white;">p</div>
    <div class="col-md-5 col-sm-12" style="background-color:lightblue;">
    <form style="margin-top:25vh">
        <div class="form-group">
            <label for="exampleInputEmail1">E-mail address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="E-mail">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>
        <p id="reglog">Register</p>
        <button type="submit" class="btn btn-primary">Regisztráció</button>
    </form>
    </div>
</div>

<div class="row fixed-bottom">
<div class="col">
<div class="jumbotron jumbotron-fluid h-100" style="background-color:lightgrey;">
    <div class="container">
        <h1 class="display-4 m-0">Footer</h1>
    </div>
</div>
</div>
</div>

</div>
<script>
$(document).on('click', '#reglog', function(){
    if($("#reglog").html() == "Register") {
    $("#formDiv").load("reg.php");
    }else{
        $("#formDiv").load("login.php");
    }
});
</script>
</body>
</html>