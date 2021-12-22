<?php
  include "vajnoe/header.php";
  include "core/db.php";
?>

<div class="header_body_2">
  <div class="body_content">
  </div>
</div>
<div class="vkladka">
  <div class="vkladka_1"><p class="vkladka_1_1">Список работодателей:</p></div>
</div>
<div class="content_for">
  <div class="content_123">
    <div class="antiq">
     <?php foreach ($employers as $key => $employer) {?>
      <div class="card text-center">
          <div class="card-header">
            <?php echo $employer["last_name"] ?> <?php echo $employer["first_name"] ?> <?php echo $employer["patronymic"] ?>
          </div>
          <div class="card-body">
            <h5 class="card-title">Должность: <a target="blank" href="#"><?php echo $employer["post"]?></a></h5>
            <p class="card-text"><?php echo $employer["email"]?></p>
          </div>
          <div class="card-footer text-muted">
            Номер телефона: <?php echo $employer["telephone"]?>
          </div>
        </div>
        <div class="indent"></div>
      <?php }?>
      
      </div>
    </div>
    
  </div>
</div>


<?php
  include "vajnoe\hutor.php";
  //
?>