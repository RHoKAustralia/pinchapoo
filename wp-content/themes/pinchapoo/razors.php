<?php

$razorCount = get_option('number_of_razors');
$newCount = (int) $_GET['count'];

$new_value = $razorCount + $newCount;

update_option( 'number_of_razors' , $new_value );

header("Location: http://www.pinchapoo.org.au");
exit();

?>