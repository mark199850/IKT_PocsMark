<?php
if (!isset($_POST['userName1']) && !isset($_POST['userPass1'])){
    $_POST['userName1'] = "";
    $_POST['userPass1'] = "";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <!--<link rel="stylesheet" href="css/bootstrap.min.css">
    <script type="text/javascript" src="js/bootstrap.bundle.min.js"></script>
--> 
    <title>Projekt1</title>
</head>
<body>
<div class="container-fluid m-0">

    <div class="row fixed-top-custom shadow green" style="height:10vh">
        <div class="col p-5 pb-0 pt-1">
            <p class="text-white h1-text m-0">Projekt1</p>  
        </div>
    </div>


    <div class="row p-0" id="formDiv" style="height:80vh">

    </div>

    <div class="row fixed-bottom-custom shadow-lg green" style="height:10vh">
        <div class="col p-5 pb-0 pt-1">
            <p class="text-white h1-text m-0">Footer</p>  
        </div>
    </div>

</div>
<script>
$( document ).ready(function() {
    $("#formDiv").load("login.php", { userName1:"<?php echo $_POST['userName1'];?>", userPass1:"<?php echo $_POST['userPass1'];?>", uName:"<?php echo $_POST['uName'];?>", uPass:"<?php echo $_POST['uPass'];?>", uEmail:"<?php echo $_POST['uEmail'];?>", uFullName:"<?php echo $_POST['uFullName'];?>"});
});
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