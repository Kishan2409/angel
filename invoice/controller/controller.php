<?php
require_once("model/model.php");
class controller extends model
{
    public function __construct()
    {
        parent::__construct();
        //fatch product
        $product=$this->table('product');
        
        //fatch product price
        if(isset($_POST['id']))
        {   
            $id=$_POST['id'];
            $price=$this->fpid('product','id',$id);
            foreach ($price as $key) {
                echo $key['price'];
            }
        }
        // load form
        if (isset($_SERVER["PATH_INFO"])) {
            switch ($_SERVER["PATH_INFO"]) {
                case '/':
                    require_once('index.php');
                    require_once('invoice.php');
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