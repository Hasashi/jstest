<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
   <meta http-equiv="content-type" content="text/html; charset=ISO-8859-1">
   <title>Ereignisse im Formular</title>
</head>
<body><p>
<?php
   echo "Anrede: " . $_POST["anrede"] . "<br>";
   echo "Nachname: " . $_POST["nachname"] . "<br>";
   echo "Vorname: " . $_POST["vorname"] . "<br>";
   if(isset($_POST["reise"]))
      echo "Reise: " . $_POST["reise"] . "<br>";
   echo "Land: " . $_POST["land"] . "<br>";
   echo "Bemerkung: " . $_POST["bemerkung"];
?></p>
</body>
</html>
