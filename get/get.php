 <?php
 if ( isset($_GET['name']))
echo $_GET['name'];
else
echo "intet navn";

echo "<br>";

if ( isset($_GET['lastname']))
echo $_GET['lastname'];
else
echo "intet efternavn";
?>