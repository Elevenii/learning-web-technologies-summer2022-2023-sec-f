  <?php
         for($a=0;$a<=2;$a++){	
	                for($b=0;$b<=$a;$b++){
		          print = "*";
	                    }
                    }
                ?>
                
            <?php
            for($a=3; $a>=1; $a--)
            {
                for($b=1; $b<=$a; $b++)
                {
                    print " $b ";
                }
               
            }  
            ?> 
  
            <?php
                $alpha = range('A', 'F');
                $i = 0;
                for($a=0; $a<=2; $a++)
                {
                    for($b=0; $b<=$a; $b++)

                    print $alpha[$i++]." ";
                }
            ?>
            