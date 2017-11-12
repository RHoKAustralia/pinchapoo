<?php

echo $razorCount = get_option('number_of_razors');
echo $newCount = (int) $_GET['count'];

$new_value = $razorCount + $newCount;

update_option( 'number_of_razors' , $new_value );

echo '<script type="text/javascript">
           window.location = "http://www.pinchapoo.org.au";
      </script>';

?>