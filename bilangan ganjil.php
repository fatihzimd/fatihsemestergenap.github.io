<?php
    $nomor = array(1,2,3,4,5,6,7,8,9,10);
?>
<?php for( $i=0; $i<10; $i++) { ?>
      <?php if ($i % 2 == 0) {
            echo $i ;
            echo "<br>";
      }
      ?>
<?php } ?>