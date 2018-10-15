<!DOCTYPE html>


<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Evaluation</title>

</head>

<body>


<?php
require_once "dbaccess.php";
$data = json_decode(stripslashes(mysql_real_escape_string($_POST['trans_data'])));

mysql_query("update argument set argument = '".$data."' where decision_id = '".$_GET['decision_id']."' ");


?>

</body>

</html>
