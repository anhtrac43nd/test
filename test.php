<!DOCTYPE html>
<html>
<head>
	<title>test</title>
</head>
<body>

<?php
    $a= array ("name" => "Kenny", 
               "job"  => "Teacher",
               "age"  => "45", 
               "email" => "kenny@qhonline.info");
    echo $a['age'];
?>
<br/>
<?php 
	$name = array ("Trac","Chan","Hieu");
	foreach ($name as $temp) {
		echo "$temp<br/>";
	}
?>
----------------------
<?php 
	$person = array("name" => "Trac",
					"age"  => "21",
					"email"=> "1234@gmail.com",
					"job"  => "student"	
										 );
		foreach ($person as $key => $value) {
			echo "Key : $key and Giatri : $value<br/> ";
		}
?>

<table width="100%" border="0">
  <tr valign="top">
    <td bgcolor="#aaa" width="20%">
      <b>Main Menu</b><br />
      HTML<br />
      PHP<br />
      PERL...
    </td>
    <td bgcolor="#b5dcb3" height="200" width="60%">
        Loat bai huong dan cong nghe va lap trinh
    </td>
    <td bgcolor="#aaa" width="20%">
      <b>Right Menu</b><br />
      HTML<br />
      PHP<br />
      PERL...
    </td>
   </tr>
<table>
</body>
</html>