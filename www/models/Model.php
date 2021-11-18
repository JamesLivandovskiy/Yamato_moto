<?php
class Model
{
  function getNameOfModelById($id)
  {
      $db = Db::connectionBd();
      $modelList = array();
      $result = $db->query("SELECT model.Name FROM model WHERE model.Id = '$id'");
      $result->setFetchMode(PDO::FETCH_ASSOC);
      $i = 0;
          while ($row = $result->fetch()) {
            $modelList[$i]['Name'] = $row['Name'];
            $i++;
          }
      return $modelList;

  }
  function getModelInformationById($Id)//вывод информации о модел
  {
    $db = Db::connectionBd();
    $modelList = array();
    $result = $db->query("SELECT specifications.Engine_capacity,specifications.Horsepower,specifications.Type_of_transmission,specifications.Year,specifications.Information,model.Main_photo FROM specifications,model WHERE specifications.Id = '$Id' AND model.Id = '$Id'");
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $i = 0;
        while ($row = $result->fetch()) {
          $modelList[$i]['Engine_capacity'] = $row['Engine_capacity'];
          $modelList[$i]['Horsepower'] = $row['Horsepower'];
          $modelList[$i]['Type_of_transmission'] = $row['Type_of_transmission'];
          $modelList[$i]['Year'] = $row['Year'];
          $modelList[$i]['Information'] = $row['Information'];
          $modelList[$i]['Main_photo'] = $row['Main_photo'];
          $i++;
        }
    return $modelList;
  }
  function getModelListOfPhotoById($Id)
  {
    $db = Db::connectionBd();
    $modelList = array();
    $result = $db->query("SELECT minor_photo.Way FROM minor_photo WHERE minor_photo.Id = '$Id'");
    $result->setFetchMode(PDO::FETCH_ASSOC);
    $i = 0;
        while ($row = $result->fetch()) {
          $modelList[$i]['Way'] = $row['Way'];
          $i++;
        }
    return $modelList;
  }
}
