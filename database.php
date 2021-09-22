
<?php

$con = mysqli_connect ("localhost","tgwegsgdag","T1RxXSMxN","tgwegsgdag");
if (mysqli_connect_errno()){
    echo'Ошибка('.mysqli_connect_errno().'):'.mysqli_connect_error();
    printf("Версия сервера: %s\n", mysqli_get_server_info($con));
    exit();
}

$timestamp = date('Y-m-d H:i:s A');
mysqli_query($con, "INSERT INTO `pismo`(`id`, `first_name`, `email`, `tel`, `data`) VALUES (NULL,'$name','$email', '$tel', '$timestamp')");
?>