<?php
session_start();
require_once "dbaccess.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Consensus</title>
</head>
<body>

<?php



mysql_query("insert into survey values ('','".$_GET['decision_id']."','".$_GET['user_id']."','1','".mysql_real_escape_string($_POST['q1'])."')");
mysql_query("insert into survey values ('','".$_GET['decision_id']."','".$_GET['user_id']."','2','".mysql_real_escape_string($_POST['q2'])."')");
mysql_query("insert into survey values ('','".$_GET['decision_id']."','".$_GET['user_id']."','3','".mysql_real_escape_string($_POST['q3'])."')");
mysql_query("insert into survey values ('','".$_GET['decision_id']."','".$_GET['user_id']."','4','".mysql_real_escape_string($_POST['q4'])."')");
mysql_query("insert into survey values ('','".$_GET['decision_id']."','".$_GET['user_id']."','5','".mysql_real_escape_string($_POST['q5'])."')");
mysql_query("insert into survey values ('','".$_GET['decision_id']."','".$_GET['user_id']."','6','".mysql_real_escape_string($_POST['q6'])."')");
mysql_query("insert into survey values ('','".$_GET['decision_id']."','".$_GET['user_id']."','7','".mysql_real_escape_string($_POST['q7'])."')");


?>

</body>


<meta http-equiv=refresh content="0.00005; url=holdpage_2.php?decision_id=<?php echo $_GET['decision_id']?>&user_id=<?php echo $_GET['user_id']?>">

</html>
