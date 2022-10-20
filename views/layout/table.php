<?php
    require("models/index.php");
    $model = new Model();
    $rows = $model->getAll("Users");
    $assocArray = mysqli_fetch_all($rows, MYSQLI_ASSOC);
    

?>

    

<table class="table">
  <thead>
    <tr>

    <?php
        foreach($assocArray[0] as $key => $value){
            ?>
                <th><?php echo $key; ?></th> 
            <?php   
        }
        ?>

    </tr>
  </thead>
  <tbody>
    <?php 

    foreach($assocArray as $row){ 
        ?>
        <tr>
            <?php 
                foreach($row as $col){
                    ?>
                        <td> <?php echo $col; ?></td>
                    <?php
                }
            ?>
        </tr>
        <?php
    }
        
    ?>
  </tbody>
</table>