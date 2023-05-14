
<?php
 class delete extends config{
   public $id;

   public function __construct($id){
     $this->id= $id;
   }
   public function deleteTask(){
     $con = $this->con();
     $sql = "DELETE FROM `display`; INSERT INTO `display` SELECT * FROM `user` WHERE `id`='$this->id'; DELETE FROM `user` WHERE `id`='$this->id'";

     $data = $con->prepare($sql);
     if($data->execute()){
       return true;
     }else {
       return false;
     }
   }
 }
  ?>