<html>
<head>
    <?php
   echo "updating....";
    echo $razorCount = get_option('number_of_razors');
    echo $newCount = (int) $_GET['count'];

    $new_value = $razorCount + $newCount;

    update_option( 'number_of_razors' , $new_value );

    ?>
</head>
<script>
    window.location = "http://www.pinchapoo.org.au";
</script>
<body>
</body>
</html>
