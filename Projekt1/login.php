<?php
include('classes.php');
if (isset($_POST['userName1']) && isset($_POST['userPass1'])){
    $log = new LoginCheck($_POST['userName1'],$_POST['userPass1']);
}else{
    $log = new LoginCheck("", "");
}
?>
<div class="col-md-7 col-sm-12" style="background-color:white;"></div>
    <div class="col-md-5 col-sm-12" style="background-color:lightblue;">
    <form style="margin-top:50%" action="index.php" method="POST">
        <div class="form-group">
            <label>Felhasználónév</label>
            <input type="text" class="form-control" name="userName1" value="<?php echo $log->getUName(); ?>" aria-describedby="emailHelp" placeholder="E-mail">
            <small class="form-text text-muted"><?php echo $log->getUNameErr(); ?></small>
        </div>
        <div class="form-group">
            <label>Jelszó</label>
            <input type="password" class="form-control" name="userPass1" placeholder="Password">
            <small class="form-text text-muted"><?php echo $log->getUPassErr(); ?></small>
        </div>
        <p id="reglog">Register</p>
        <button type="submit" class="btn btn-primary">Log in</button>
    </form>
    </div>
    