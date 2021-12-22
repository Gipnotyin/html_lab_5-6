<?php
  include "vajnoe/header.php";
  include "core/db.php";
?>

<div class="header_body">
  <div class="body_content">
    <div class="body_content_borring_div"><h1 class="body_content_borring">Для тех, кто отчаялся в поисках...</h1></div>
  </div>
</div>
<div class="con"></div>
<div class="vkladka">
  <div class="vkladka_1"><p class="vkladka_1_1">Наши спонсоры:</p></div>
</div>
<div class="content_for">
  <div class="content_123">
    <div class="antiq">
     <?php foreach ($companies as $key => $company) {?>
      <div class="card text-center">
          <div class="card-header">
            <?php echo $company["name"] ?>
          </div>
          <div class="card-body">
            <h5 class="card-title">URL: <a target="blank" href="<?php echo $company["URL"]?>"><?php echo $company["URL"]?></a></h5>
            <p class="card-text"><?php echo $company["short_information"]?></p>
            <a href="one.php?id=<?php echo $company["id_company"]?>" class="btn btn-primary">Выбери меня!</a>
          </div>
          <div class="card-footer text-muted">
            Директор компании: <?php echo $company["director"]?>
          </div>
        </div>
        <div class="indent"></div>
      <?php }?>
      <div class="ad">
        <p class="ad_str">Хотите стать нашим уважаемым спонсором?</p>
        <div class="iu">
        <a href="add.php" class="btn btn-primary iu">Стать спонсором</a>

        </div>
      </div>
    </div>
    
  </div>
</div>


<?php
  include "vajnoe\hutor.php";
?>