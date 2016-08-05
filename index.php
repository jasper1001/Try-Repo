



<link rel ="stylesheet" href="style.css"/>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<!DOCTYPE html>
<html>
  <head>
  </head>
  <body>
  <marquee>WEW!</marquee>
    <p>
     <?php
	 
	 $firstName ="Jasper";
	 $Age = 22;
     echo "<table>";
	  echo "<tr>";
     echo "<td class='tabledata'>FirstName</td>";
     echo "<td class='tabledata' >Age</td>";
     echo "</tr>";
     echo "<tr>";
     echo "<td>".$firstName."</td>";
     echo "<td>".$Age."</td>";
     echo "</tr>";
     echo "</table>";
		?>
    </p>
  </body>
</html>
