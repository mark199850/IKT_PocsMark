<?php
include('classes.php');
if (isset($_POST['uName']) && isset($_POST['uPass']) && issrt($_POST['uFullName']) && isset($_POST['uEmail'])){
    $reg = new RegCheck($_POST['uName'],$_POST['uPass'],$_POST['uFullName'],$_POST['uEmail']);
}else{
    $reg = new RegCheck("","","","");
}

?>
<div class="col-md-7 col-sm-12" style="background-color:white;"></div>
    <div class="col-md-5 col-sm-12 shadow-lg">
    <form action="index.php?id=reglap" method="POST"> <!--action="< ?php echo $_SERVER['PHP_SELF'];? >?id=reglap"-->
    <div class="form-group mt-3">
            <label for="exampleInputEmail1">Username</label>
            <input type="text" class="form-control mt-2 mb-3" id="username" name="uName" placeholder="Username" required>
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputEmail1">E-mail address</label>
            <input type="email" class="form-control mt-2" id="email" name="uEmail" aria-describedby="emailHelp" placeholder="E-mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control mt-2" id="password" name="uPass" placeholder="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputPassword1">Password again</label>
            <input type="password" class="form-control mt-2" id="confirm_password" placeholder="Password again" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" required>
        </div>
        <div class="form-group mt-3">
            <label for="exampleInputEmail1">Full Name</label>
            <input type="text" class="form-control mt-2" id="fullname" name="uFullName" placeholder="Full Name" required>
        </div>
        <p id="reglog" class="mt-3 text-green w-25" style="cursor:pointer">Login</p>
        <button type="submit" class="btn btn-primary green">Register</button>
    </form>
    <div id="msg" class="mt-2"></div><!--Jeszó vizsgálat eredményének a megjelenítése-->
    </div>
    <script>
    //A két jeszó mező összehasonlítása
    //Az első jelszó mező id="Password"
    //A A második jelszó mező id="ConfirmPassword"
    $(document).ready(function(){
        $("#password").keyup(function(){
             if ($("#password").val() != $("#confirm_password").val()) {
                 $("#msg").html("Password do not match").css("color","red");
             }else{
                 $("#msg").html("Password matched").css("color","green");
            }
        });
        $("#confirm_password").keyup(function(){
             if ($("#password").val() != $("#confirm_password").val()) {
                 $("#msg").html("Password do not match").css("color","red");
             }else{
                 $("#msg").html("Password matched").css("color","green");
            }
        });
    });
  </script>
