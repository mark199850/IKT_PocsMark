<?php
include('classes.php');
if (isset($_POST['userName1']) && isset($_POST['userPass1'])){
    $log = new LoginCheck($_POST['userName1'],$_POST['userPass1']);
}else{
    $log = new LoginCheck("", "");
}
?>
<div class="col-md-7 col-sm-12" style="background-color:white;"></div>
    <div class="col-md-5 col-sm-12 shadow-lg">
    <form action="index.php" method="POST">
        <div class="form-group mt-2">
            <label>Username</label>
            <input type="text" class="form-control mt-2" name="userName1" value="<?php echo $log->getUName(); ?>" aria-describedby="emailHelp" placeholder="E-mail">
            <small class="form-text text-muted"><?php echo $log->getUNameErr(); ?></small>
        </div>
        <div class="form-group mt-3">
            <label>Password</label>
            <input type="password" class="form-control mt-2" name="userPass1" placeholder="Password">
            <small class="form-text text-muted"><?php echo $log->getUPassErr(); ?></small>
        </div>
        <p id="reglog" class="mt-3 text-green w-25" style="cursor:pointer">Register</p>
        <button type="submit" class="btn btn-primary green">Log in</button>
    </form>
    </div>
    