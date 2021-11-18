<?php
include_once(ROOT."/models/Model.php");
class ModelController
{
public  function actionView($nameMark,$Id)
  {
    require_once(ROOT.'/views/model.php');
    return true ;
  }
}

 ?>
