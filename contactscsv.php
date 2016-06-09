<?php

// Database Connection
if(! (mysql_connect("mysql-aceeast324581.aceeast.comcastbiz.net", "aceeast324581", "AceIsC00l") &&
	  mysql_select_db("aceeast324581") ) ) {
		  print("There was an error: mysql_error()");
		  die();
	  }
	  
else{
}

// Fetch Record from Database

$output = "";
$table = "contacts"; // Enter Your Table Name 
$sql = mysql_query("select * from $table");
$columns_total = mysql_num_fields($sql);

// Get The Field Name

for ($i = 0; $i < $columns_total; $i++) {
$heading = mysql_field_name($sql, $i);
$output .= '"'.$heading.'",';
}
$output .="\n";

// Get Records from the table

while ($row = mysql_fetch_array($sql)) {
for ($i = 0; $i < $columns_total; $i++) {
$output .='"'.$row["$i"].'",';
}
$output .="\n";
}

// Download the file

$filename = "myFile.csv";
header('Content-type: application/csv');
header('Content-Disposition: attachment; filename='.$filename);

echo $output;
exit;

?>