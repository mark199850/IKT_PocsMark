<?php
class Forms{
    protected $uName;
    protected $uPass;
    protected $uNameErr;
    protected $uPassErr;

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

class RegCheck extends Forms {

}
?>