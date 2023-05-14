<?php
require_once $_SERVER['DOCUMENT_ROOT'].'/Queueing System/resource/php/class/core/init.php';
require_once 'config.php';

class view extends config{

        public function transac(){
            $config = new config;
            $con = $config->con();
            $sql = "SELECT * FROM `action`";
            $data = $con-> prepare($sql);
            $data ->execute();
            $rows =$data-> fetchAll(PDO::FETCH_OBJ);
                foreach ($rows as $row) {
                  echo '<option data-tokens=".'.$row->actions.'." value="'.$row->actions.'">'.$row->actions.'</option>';
                  echo 'success';
                }
        }

}
?>