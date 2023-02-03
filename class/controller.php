<?php 
class User extends AdminModel{
   
    private $fname;
    private $address;
    private $position;
    private $username;
    private $pass;
    private $rpass;
  

    public function __construct($fname, $address, $position, $username, $pass, $rpass){
        $this->fname = $fname; 
        $this->address = $address;
        $this->position = $position;
        $this->username = $username;
        $this->pass = $pass;
        $this->rpass = $rpass;
       
    }

    public function datacontroller(){

        if($this->pwdMatch() == false){
            header("location: signupAdmin.php?error=PasswordDontMatch");
            exit();
        
        }

        if($this->empty_input() == false){
            header("location: signupAdmin.php?error=PleaseInputALL");
            exit();
        }
        $this->insert_admin($this->fname, $this->address, $this->position,$this->username,$this->pass);


    }
  
    private function pwdMatch(){
        
        if($this->pass != $this->rpass){
            $result = false;
        }else{
            $result = true;
        }
        return $result;

    }
    private function empty_input(){
        
        if(empty($this->fname) || empty($this->address) || empty($this->position) || empty($this->username) || empty($this->pass) || empty($this->rpass)){
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
  
}