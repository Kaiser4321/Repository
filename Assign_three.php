</head>
<body>
  Finding The Gcd
  <br>
  <br>
  <form action="GCD.php" method="post">
  Enter 1st Number: <input type="number" name ="num1"/><br><br>
  Enter 2nd Number: <input type="number" name ="num2"/><br><br>
  <input type ="submit" value ="GCD">
  </form>
   
   <?php 
    $x=$_POST["num1"];
    $y=$_POST["num2"];  
    if ($x > $y)
    {
      $temp = $x;
      $x = $y;
      $y = $temp;
    }
    for($i = 1; $i < ($x+1); $i++)
    {
      if ($x%$i == 0 and $y%$i == 0)
        $gcd = $i;
    }
  
    echo "GCD of $x and $y is: $gcd";
   ?>
<br>
<br>            
<form action="Choice.php" method="post">
<input type="submit" value = "back">
</body>
</html>
//ASSIGNMEN_3
