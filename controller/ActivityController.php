<?php
require_once "model/activity.php";

class activityController
{
    public function index() {
        $activity = new Activity();
        $activities = $activity->list();
        require_once 'view/activity/management.php';
    }

    public function register() {
        require_once 'view/activity/register.php';
    }

    public function tiempo() {
        $id=$_GET['id'];
        $activity = new Activity();
        $activities = $activity->listActivity($id);
        require_once 'view/activity/update_activity.php';
    }

    public function save() {       
        $post = (isset($_POST['description']) && !empty($_POST['description']));

        if($post) {
            $activity = new Activity();
            $activity->description = trim($_POST['description']);
        
            $result = $activity->save();
            if ($result) {
                $response = "Registro almacenado correctamente";
            } else {
                $response = "Ocurrió un error al guardar el registro";
            }
            header("Location:" .base_url.'Activity/index');
        } else {
            header("Location:" .base_url.'Activity/register');
            echo "Registro vacío";
        }
    }

     public function saveTime() {  
        $id = $_GET['id'];     
        $post = (isset($_POST['description']) && !empty($_POST['description']) &&
        isset($_POST['date']) && !empty($_POST['date']) &&
        isset($_POST['time']) && !empty($_POST['time']));

        if ($post) {
            $activity = new Activity();
            $activity->description = trim($_POST['description']);
            $activity->date = trim($_POST['date']);
            $activity->time = intval($_POST['time']);

            $data_activities = $activity->listActivity($id);
            $time = 0;
            if (isset($data_activities->time)) {
                $time = $data_activities->time;
            }
            
            if ((intval($_POST['time'])+ intval($time))>8){
                echo "<script type=\"text/javascript\">window.alert('El tiempo de la actividad supera las 8 horas');window.location.href = 'index';</script>"; 
                exit;
            } else {
                $result = $activity->saveTime($id);
                if ($result) {
                    $response = "Registro almacenado correctamente";
                } else {
                    $response = "Ocurrió un error al guardar el registro";
                }
            }
            echo "<script type=\"text/javascript\">window.alert('".$response ."');window.location.href = 'index';</script>"; 
            exit;
        } else {
            echo "<script type=\"text/javascript\">window.alert('El tiempo de la actividad supera las 8 horas');window.location.href = 'index';</script>"; 
            exit;
            header("Location:" .base_url.'Activity/register');
        }
    }
}
