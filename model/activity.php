<?php

class Activity
{
    public $id;
    public $description;
    public $date;
    public $time;
    private $db;

    public function __construct(){
        $this->db=Database::connection();
    }

    public function save() {
        $insert_activity="INSERT INTO activity 
        VALUES (null,'$this->description',".$_SESSION['user'].")"; 
        $execute_activity = $this->db->query($insert_activity);

        $result=false;
        if ($execute_activity) {
            $result = true;
        }
        return $result;
    }

    public function listActivity($id) {
        $list_activities="SELECT a.id,a.description , 
        (select sum(t.time) from detail_times t where t.activity_id= a.id ) 
        as time FROM activity a where a.id = ".$id."";
        $execute = $this->db->query($list_activities);
        $result=false;
        if($execute){
            $data = $execute->fetch_object();
            $result = $data;  
        }
        return $result;
    }

    public function saveTime($id) {
      
        $insert_time="INSERT INTO detail_times 
        VALUES (null,'$this->date','$this->time','$id')";
        $execute_time = $this->db->query($insert_time);

        $result=false;
        if ($execute_time) {
            $result = true;
        }
        return $result;
    }

    public function updateTime($id) {
      
        $update_time="UPDATE detail_times SET time = time + $this->time
        where activity_id = $id";

        $execute_time = $this->db->query($update_time);
  
        $result=false;
        if ($execute_time) {
            $result = true;
        }
        return $result;
    }


    public function list() {
        $list_activities="SELECT a.id, a.description, d.date, d.time, a.user_id 
              FROM activity a
              LEFT JOIN detail_times d ON(a.id = d.activity_id)
              WHERE a.user_id = ".$_SESSION['user']."";
        $execute = $this->db->query($list_activities);
        return $execute;
    }
}
