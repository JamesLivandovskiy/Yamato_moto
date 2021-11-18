<?php
class Mark
{

  function getMarkItemByName($nameMark)
  {
      $db = Db::connectionBd();
      $markList = array();
      $result = $db->query("SELECT mark.Name_of_mark,mark.Foto_of_logo,information_about_mark.information FROM `information_about_mark`,`mark` WHERE mark.`Name_of_mark`= '$nameMark' AND information_about_mark.Name_of_mark = '$nameMark'");
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $i = 0;
          while ($row = $result->fetch()) {
            $markList[$i]['Name_of_mark'] = $row['Name_of_mark'];
            $markList[$i]['Foto_of_logo'] = $row['Foto_of_logo'];
            $markList[$i]['information'] = $row['information'];
            $i++;
          }
    return $markList;
  }
  function getMarkItemsWithPhotByName($nameMark)
  {
      $db = Db::connectionBd();
      $markList = array();
      $result = $db->query("SELECT model.Id,model.Name,model.Main_photo FROM model  WHERE model.Name_of_mark = '$nameMark'");
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $i = 0;
          while ($row = $result->fetch()) {
            $markList[$i]['Id'] = $row['Id'];
            $markList[$i]['Name'] = $row['Name'];
            $markList[$i]['Main_photo'] = $row['Main_photo'];
            $i++;
          }
     return $markList;

  }
}
