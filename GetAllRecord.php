<html>

<body>

<?php

include("Config.php");

$result = mysql_query("SELECT * FROM tb_student",$db);
   
echo "<TABLE border=1>";
echo"<TR><TD><B>SR No.</B><TD><B>Name</B><TD><B>Address</B><TD><B>Mobile No.</B><TD><B>Qualification</B></TR>";
while ($myrow = mysql_fetch_array($result)){
    
echo "<TR>";
    echo "<TD>";
        echo $myrow["std_id"];
    echo "<TD>";
        echo $myrow["std_name"];
    echo "<TD>";
        echo $myrow["std_address"];
    echo "<TD>";
        echo $myrow["std_mobileno"];
    echo "<TD>";
        echo $myrow["std_qualification"];
    echo "</TD>
</TR>";
}
echo "</TABLE>";
?>

</body>
</html>