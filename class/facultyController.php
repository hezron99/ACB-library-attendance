<?php
class facultyControl extends UserModel{
    private $id;
    private $fname;
    private $address;
    private $department;

    public function __construct($id, $fname, $address, $department){
        $this->id = $id;
        $this->fname = $fname;
        $this->address = $address;
        $this->department = $department;
    }
    
    public function facultyController(){
        if($this->emptyFaculty() == false){
            header("Location: ../admin/create_faculty.php?error=Please_fill_up_faculty");
            exit();
        }
        $this->CreateFaculty($this->id,$this->fname,$this->address,$this->department);
    }
    private function emptyFaculty(){
        if(empty($this->id) || empty($this->fname) || empty($this->address) || empty($this->department))
        {
            $result = false;
        }else{
            $result = true;
        }
        return $result;
    }
}