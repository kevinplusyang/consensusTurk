<?php
$link = mysql_connect('localhost', 'root', '123456')


or die('Could not connect: ' . mysql_error());
mysql_select_db('consensus_sam') or die('Could not select database');
mysql_query("SET NAMES 'utf8'");