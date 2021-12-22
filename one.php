<?php
include "vajnoe/header.php";
include "core/db.php";
if(isset($_GET["id"])){
    $company = getCompany($_GET["id"]);
    if(isset($_GET["delete"])){
        $deleteRes = deleteCompany($company["id_company"]);
        header("Location: http://localhost/html_lab_5-6/index.php");
    }
?>
<div class="fon_one_str"></div>
<div class="card text-center">
          <div class="card-header">
            <?php echo $company["name"] ?>
          </div>
          <div class="card-body">
            <h5 class="card-title">URL: <a target="blank" href="<?php echo $company["URL"]?>"><?php echo $company["URL"]?></a></h5>
            <p class="card-text"><?php echo $company["short_information"]?></p>
            <a href="edit.php?id=<?php echo $company["id_company"]?>" class="btn btn-outline-success">Редактирование</a>
            <a href="index.php" class="btn btn-outline-primary">Вернуться ко всем</a>
            <a href="?id=<?php echo $company["id_company"]?>&delete=1" class="btn btn-outline-danger">Delete!</a>
          </div>
          <div class="card-footer text-muted">
            Директор компании: <?php echo $company["director"]?>
          </div>
        </div>
        <div class="indent"></div>
<?php
}
  include "vajnoe\hutor.php";
?>