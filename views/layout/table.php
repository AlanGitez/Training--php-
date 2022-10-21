
 <?php
        require_once("views/layout/panel.php");
    ?>
<div class="container border shadow">
   
    <div class="my-table">
    <table class="table" >
    <thead>
        <tr>

        <?php
                foreach($users[0] as $key => $value){
                    ?>
                        <th><?php echo $key; ?></th> 
                    <?php   
                }
            ?>
            <th>EDIT</th>
            <th>DELETE</th>
        </tr>
    </thead>
    <tbody>
        <?php 
            

            foreach($users as $user){ 
                ?>
                <tr>
                    <?php 
                        foreach($user as $col){
                            ?>
                                <td> <?php echo $col; ?></td>
                            <?php
                        }
                    ?>
                  <td>
                        <a 
                        href='index.php?action=delete' 
                        class='btn'><img href='/assets/images/trash.png' alt=''></a></td>
                        <td>
                        <a 
                        href='index.php?action=update' 
                        class='btn'><img href='/assets/images/edit.png' alt=''></a></td>
                </tr>
                <?php
            }            
        ?>
    </tbody>
    </table>
    </div>
</div>
<?php 

require_once("views/layout/footer.php");
?>