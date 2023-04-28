 <?php
 echo "du har sendt noget til data";
 echo "<br>";


 if(!empty($_POST["to"]))
echo $_POST['to'];
else
echo "du skrev ikke noget din nar";



echo "<br>";
echo $_POST['subject'];
echo "<br>";
echo $_POST['message'];


mail($_POST['to'], $_POST['subject'], $_POST['message']);
?>