<?php require('_mysql.php');

$user = $_REQUEST['user'];
$timestamp = $_REQUEST['timestamp'];
$event = $_REQUEST['event']; // start|end
$userNum = userToNum($conn,$user);

mysqli_query($conn,
"
INSERT INTO p6App_Sessions (userNum, timestamp, event)
    VALUES ('".$userNum."', '".$timestamp."', '".$event."')
");
