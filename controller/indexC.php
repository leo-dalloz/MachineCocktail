<?php 
require '../model/indexM.php';


ob_start();
require '../view/indexV.php';
ob_end_flush();
 ?>