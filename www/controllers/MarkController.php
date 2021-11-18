<?php
include_once(ROOT."/models/Mark.php");
class MarkController
{
public  function actionView($nameMark)
  {
    require_once(ROOT.'/views/mark.php');
    return true ;
  }
}

 ?>
