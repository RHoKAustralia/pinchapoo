<!--
Theme Name: Pinchapoo
Theme URI: http://www.pinchapoo.org.au/
Description: A brief description.
Version: 1.0
Author: RHoK
Author URI: http://www.rhokaustralia.org/
-->
<?php
echo "updating....";
echo $newCount = $_GET['count'];
echo $razorCount = get_option('number_of_razors');

$new_value = $razorCount + $newCount;

update_option( 'number_of_razors' , $new_value );

?><script>

    setTimeout(sendForm, 1000);

    function sendForm()
    {
        location = "http://www.pinchapoo.org.au/;
    }

</script>
</body>
</html>



