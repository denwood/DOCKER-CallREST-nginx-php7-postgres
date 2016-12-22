coucocu
<?php
    $db_connection = pg_connect("host=10.113.51.14 dbname=postgres user=postgres password=postgres")
	or die ('Could not connect: ' . pg_last_error());
?>

<?php
    $result = pg_query($db_connection, "SELECT * FROM test");
?>	

<?php
echo "coucou by php \n\n"; 

$myarray = array();
while ($line = pg_fetch_row($result)){
	$myarray[] = $line;
}
/*
echo '<hr>'; 
while ($line = pg_fetch_row($result)){
	echo $line[0], ': ', $line[1],'<br>'; 
}*/


echo json_encode($myarray); 
pg_free_result($result); 

pg_close($db_connection); 
?>
