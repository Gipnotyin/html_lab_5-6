<?php
  include "vajnoe/header.php";
  include "core/db.php";
  if(isset($_GET["id"])){
    $company = getCompany($_GET["id"]);

  $errors = [];
  if($_POST){
      $postFiltered = [];
      foreach ($_POST as $postKey => $postItem){
          $postFiltered[$postKey] = htmlspecialchars($postItem);
      }
  
      if(!$_POST['name_company']){
          $errors[] = 'name_company';
      }
      if(!$_POST['URL']){
        $errors[] = 'URL';
    }
    if(!$_POST['director']){
        $errors[] = 'director';
    }
  
      if(!$_POST['short_in']){
          $errors[] = 'short_in';
      }
  
      if(count($errors)==0){
          $result = editCompany($company["id_company"],$postFiltered['name_company'],$postFiltered['URL'],$postFiltered['director'],$postFiltered['short_in']);
          header("Location: http://localhost/html_lab_5-6/one.php?id=".$company['id_company']);
      }
    }

?>
<div class="fon_add"></div>
<div class="content_for">
    <div class="content_123">
        <div class="antiq">
            <div class="form_gl">
                <p class="form_gl_p">Отредактируйте свою карточку по полной!</p>
            </div>
            <div class="form_vir">
                <form action="" method="post">
                    <div class="input-group">
                            <span class="input-group-text">Название комании</span>
                            <input value="<?php echo $company["name"]?>" class="form-control <?php if(in_array('name_company',$errors)){?>is-invalid<?php }?>" type="text" name="name_company">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">URL</span>
                        <textarea name="URL" class="form-control <?php if(in_array('URL',$errors)){?>is-invalid<?php }?>" aria-label="With textarea"><?php echo $company["URL"] ?></textarea>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Директор</span>
                        <textarea name="director" class="form-control <?php if(in_array('director',$errors)){?>is-invalid<?php }?>" aria-label="With textarea"><?php echo $company["director"] ?></textarea>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text">Короткое описание</span>
                        <textarea cols="30" rows="10" name="short_in" class="form-control <?php if(in_array('short_in',$errors)){?>is-invalid<?php }?>" aria-label="With textarea"><?php echo $company["short_information"] ?></textarea>
                    </div>
                    <button class="btn btn-primary">Отправить!</button>
                    <?php if(isset($result)){?>
                        <div class="alert alert-success" role="alert">
                            Вы успешно отредактировали свою страницу!
                        </div>
                    <?php }?>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
  }
  include "vajnoe\hutor.php";
?>