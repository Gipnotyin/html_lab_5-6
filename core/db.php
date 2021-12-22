<?php 

global $pdo;
$pdo = new \PDO(
  dsn: 'mysql:host=localhost:3306;dbname=job search',
  username: "root",
  password: "ruslangv"
);

//-----------------company-------------------
$res_company = $pdo->query('SELECT * FROM company;');
$companies = [];
while($company = $res_company->fetch()){
  $companies[] = $company;
}
//-------------vakancy------------------------

$res_vakancy = $pdo->query('SELECT * FROM vakancy;');
$vakancies = [];
while($vakanci = $res_vakancy->fetch()){
  $vakancies[] = $vakanci;
}

//---------------------employer-------------------------------------------
$res_employer = $pdo->query('SELECT * FROM employer;');
$employers = [];
while($employer = $res_employer->fetch()){
  $employers[] = $employer;
}

//-----------------------------------------------------

function getCompany($id){

  global $pdo;
  $res_company = $pdo->query('SELECT * FROM company WHERE `id_company` = '.$id.';');

  return $res_company->fetch();
}

function editCompany($id,$name,$URL,$director,$short_information){
  global $pdo;

  $sqlString = "UPDATE `company` SET `name`='$name',`URL`='$URL',`director`='$director',`short_information`='$short_information' WHERE id_company='$id'";

  return $pdo->exec($sqlString);
}

function saveCompany($name,$URL,$director,$short_information){
  global $pdo;

  $sqlString = "INSERT INTO company (name,URL,director,short_information) VALUES ('$name','$URL','$director','$short_information')";

  return $pdo->exec($sqlString);
}

function deleteCompany($id){
  global $pdo;

  $sqlString = "DELETE FROM company WHERE id_company = '$id'";

  return $pdo->exec($sqlString);
}
?>