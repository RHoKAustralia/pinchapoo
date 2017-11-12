<html>
<head></head>
<body>
<form id='goForm' method="post" action="http://www.pinchapoo.org.au/"></form>
<?php
//echo "updating....";
$razorCount = (int) get_option('number_of_razors');
$newCount = (int) $_GET['count'];

$new_value = $razorCount + $newCount;

update_option( 'number_of_razors' , $new_value );

?><script>

    setTimeout(sendForm, 1000);

    function sendForm()
    {
        document.getElementById("goForm").submit();
    }

</script>
</body>
</html>



