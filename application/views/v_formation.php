<html>

    <body>
        <h1>Les formations</h1>
            <?php 
               foreach($lesFormations as $form){  
            ?>
            <a href="<?php echo base_url();?>index.php/ctrlSncf/AfficherLesAgents/<?php echo $form->code; ?>"><?php echo $form->intitule; ?></a>
            <?php 
             }
            ?>

    </body>
</html> 