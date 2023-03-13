<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent::__construct();
        $contry = $this->recode('country');
        // $stateall=$this->recode('state');
        // $cityall=$this->recode('city');

        if (isset($_POST['id'])) {
            $id = $_POST['id'];
            $state = $this->fatchtable('state', 'country_id', $id);
            echo"<option>---- Select State ----</option>";
            foreach ($state as $row) {
                echo"<option value=".$row['id'].">".$row['state_name']."</option>";
            }
        }

        if (isset($_POST['sid'])) {
            $id = $_POST['sid'];
            $city = $this->fatchtable('city','state_id', $id);
            foreach ($city as $row) {
                echo"<option value=".$row['id'].">".$row['city_name']."</option>";
            }
        }

        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once('index.php');
                    require_once('fatchdatausingajax.php');
                    break;

                default:
                    # code...
                    break;
            }
        }
    }
}
$obj = new controller();
?>