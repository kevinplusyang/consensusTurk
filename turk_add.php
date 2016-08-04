<?php
session_start();
?>

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



if(!isset($_SESSION['decision_id'])){

    $decision_count = 0;
    $sql_count = "select count(*) from decision ";
    $result_count = mysql_query($sql_count);
    $row_count = mysql_fetch_array( $result_count );
    $decision_count = $row_count[0];

    if($decision_count){

    }else{
        $decision_count = 0;
    }

    $decision_id = $decision_count + 1;

    mysql_query("insert into decision values ('', 'turk', 'turkdes', '".$decision_id."', '4','3','1','0')");

    $user_id = $decision_id;

    mysql_query("insert into participate values('','".$decision_id."','1','".$decision_id."') ");

    mysql_query("insert into argument values('','".$decision_id."','No Data') ");



    mysql_query("insert into score values('','".$decision_id."','1','1','1','-1')");
    mysql_query("insert into score values('','".$decision_id."','1','2','1','-1')");
    mysql_query("insert into score values('','".$decision_id."','1','3','1','-1')");
    mysql_query("insert into score values('','".$decision_id."','1','4','1','-1')");
    mysql_query("insert into score values('','".$decision_id."','1','1','2','-1')");
    mysql_query("insert into score values('','".$decision_id."','1','2','2','-1')");
    mysql_query("insert into score values('','".$decision_id."','1','3','2','-1')");
    mysql_query("insert into score values('','".$decision_id."','1','4','2','-1')");
    mysql_query("insert into score values('','".$decision_id."','1','1','3','-1')");
    mysql_query("insert into score values('','".$decision_id."','1','2','3','-1')");
    mysql_query("insert into score values('','".$decision_id."','1','3','3','-1')");
    mysql_query("insert into score values('','".$decision_id."','1','4','3','-1')");


    mysql_query("insert into score values('','".$decision_id."','1','0','1','-1')");
    mysql_query("insert into score values('','".$decision_id."','1','0','2','-1')");
    mysql_query("insert into score values('','".$decision_id."','1','0','3','-1')");


    $_SESSION['decision_id'] = $decision_id;
?>

    <meta http-equiv=refresh content="0.1; url=decision.php?user=1">

    <?php
}else{
    ?>Don't do it twice.<?php
}

?>


<!-- jQuery -->

</body>

</html>


