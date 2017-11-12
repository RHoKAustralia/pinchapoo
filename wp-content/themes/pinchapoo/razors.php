<?php
wp_head();
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



