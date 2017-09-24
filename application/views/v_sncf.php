

<html>
    <head></head>
    
    
    <body>
        <h1> <?php echo $activite ?></h1>
       
            <?php   foreach($lesActivites as $act){  
                
            
?>
            <a href="index.php/ctrlSncf/AfficherLesFormations/<?php echo $act->numero; ?>"><?php echo $act->libelle; ?><br></a>
            
            
           <?php 
             }
           
            ?>
        
            
        
        
    </body>
    
    
    
    
    
    
</html>
