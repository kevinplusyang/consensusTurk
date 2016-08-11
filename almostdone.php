<?php
session_start();

require_once "dbaccess.php";


if(isset($_SESSION['decision_id'])){
    if($_GET['user_id']==1){



        $sql_count = "select count(*) from roster where decision_id = '".$_SESSION['decision_id']."' and user_id = '".$_GET['user_id']."' ";
        $result_count = mysql_query($sql_count);
        $row_count = mysql_fetch_array( $result_count );
        $decision_count = $row_count[0];

        if($decision_count == 0){
            $num=rand(1000000,9999999);
            mysql_query("insert into roster values('','".$_SESSION['decision_id']."','".$_GET['user_id']."','".$num."')");
            echo "Pass Code:";
            echo $num;
        }else{
            echo "Please do not reuse the system.";
        }






    }else{
        echo "Wrong Link";
    }
}else{
    echo "Finish the task first!";
}







