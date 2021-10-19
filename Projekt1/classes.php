<?php
class Forms{
    protected $uName;
    protected $uPass;
    protected $uNameErr;
    protected $uPassErr;
    
    public function getUName()
    {
            return $this->uName;
    }

    public function getUPass()
    {
            return $this->uPass;
    }
    public function getUNameErr()
    {
            return $this->uNameErr;
    }

    public function getUPassErr()
    {
            return $this->uPassErr;
    }
}

class LoginCheck extends Forms {
    function __construct($name, $password) {
        $this->uName =$name;
        $this->uPass =$password;

        if(empty($name)){
            $this->uNameErr="Nem lehet üres";
        }else if(!preg_match("/^[a-zA-Z-' ]*$/",$name)){
            $this->uNameErr="Nem megfelelő a formátum";
        }else{
            $this->uNameErr="";
        }

        $num=8-strlen($password);
        if(empty($password)){
            $this->uPassErr="A jelszó mező nem lehet üres";
        }
        else if(strlen($password)<8){
            $this->uPassErr="A jelszó legalább 8 karakter legyen! $num";
        }


    }


}

class RegCheck extends Forms {
    private $uFullName;
    private $uEmail;

    function getUFullName(){
            return $this->uFullName;
    }
    function getUEmail(){
            return $this->uEmail;
    }

    function __construct($name,$password,$fname,$email){
        $this->uName=$name;
        $this->uPass=md5($password);
        $this->uFullName = $fname;
        $this->uEmail = $email;

        $sql =  "INSERT INTO `users` (`UName`, `Email`, `Pass`, `Name`, `Active`, `Rank`, `Ban`, `RegTime`, `LogTime`)
        VALUES
        ('".$this->getUName()."','".$this->getUEmail()."','".$this->getUPass()."','".$this->getUFullName()."',0,0,0,'".date('Y-m-d-H-i')."','0')";
        /*('PM','a@a.hu','12345','Pócs Márk',0,0,0,'2002-02-22','0')";*/
        $c=new Connection();
        if (mysqli_query($c->getConn(), $sql)) {
            echo "Új rekord feltöltése sikeres volt";
        }else{
            echo "Error: " . $sql . "<br>" . mysqli_error($c->getConn());
        }

        mysqli_close($c->getConn());
        //header('location:index.php');
    }
}

class Connection{
    private $servername;
    private $username;
    private $password;
    private $do;
    privaTE $conn;

    public function getConn(){
        return $this->conn;
    }

    function __construct(){
        $this->servername = "localhost";
        $this->username = "root";
        $this->pw = "";
        $this->db = "gyak1";
        $this->conn = mysqli_connect($this->servername, $this->username, $this->password, $this->db);

        if($this->conn->connect_error){
            die("Connection failed: " . $this->conn->connect_error);
        }
    }
}

?>