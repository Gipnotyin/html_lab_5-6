<?php 
include "vajnoe/header.php";
include "core/db.php";
?>
<div class="bg">
</div>
<div class="search_tab">
    <h2 class="Search_ask">Найди работу прямо сейчас!</h2>
    <form class="in_search">
        <input name="search_string" value="<?php if(isset($_GET["search_string"])){echo htmlspecialchars($_GET["search_string"]);}?>"  type="search" placeholder="Введите текст..." aria-label="Search" class="input_search">
        <button class="button_seacrh" type="submit"></button>
    </form>
</div>

<div class="search_concl">
    <div class="search_concl_content">
        <div class="vel">
            <p class="velik">Наши великолепные вакансии:</p>
        </div>
        <div class="content_ob">
            <div class="content_border">
                <?php
                    if(isset($_GET["search_string"])){?>
                        <table class="table">
                            <thead>
                                <tr>
                                <th scope="col">№</th>
                                <th scope="col">Profession</th>
                                <th scope="col">region</th>
                                <th scope="col">work_experience</th>
                                <th scope="col">type_of_employment</th>
                                <th scope="col">income_level</th>
                                <th scope="col">work_schedule</th>
                                </tr>
                            </thead>
                        <?php foreach ($vakancies as $vakanci){?>
                            <?php if(strpos($vakanci["profession"],$_GET["search_string"])!==false){?>
                                <tbody>
                                    <tr>
                                    <th scope="row"><?php echo $vakanci["id_vakancy"]?></th>
                                    <td><?php echo $vakanci["profession"]?></td>
                                    <td><?php echo $vakanci["region"]?></td>
                                    <td><?php echo $vakanci["work_experience"]?></td>
                                    <td><?php echo $vakanci["type_of_employment"]?></td>
                                    <td><?php echo $vakanci["income_level"]?></td>
                                    <td><?php echo $vakanci["work_schedule"]?></td>
                                    </tr>
                                </tbody>
                            <?php }?>
                        <?php }?>
                    </table> 
                    <?php }else{
                        echo "Пустой поисковый запрос";
                    }
                ?>
            </div>
            
        </div>
    </div>
</div>


<?php 
include "vajnoe/hutor.php";
?>