<?php 
class AdminControl extends AdminModel{
    private $name;
    private $pass;

    public function __construct($name, $pass){
        $this->name = $name;
        $this->pass = $pass;
    } 
    // validate empty user input
    public function EmptyUser(){
        
        if($this->empty_Users() == false){
           header("Location:../admin/login_admin.php?error=INVALID_YOUMUSTFILLUPALL");
           exit();
        }
       
       $this->get_users($this->name, $this->pass);
        
        }
    // creating empty user input
    private function empty_Users(){
       
        if(empty($this->name) || empty($this->pass)){
            $result = false;
        }else{
            $result = true;

        }
        return $result;
        
    }
    
}