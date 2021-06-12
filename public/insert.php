<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Page page</title>
</head>
<link rel="stylesheet" href="style.css">
<body>

<div class="container">
<form action="index.php">
<div class="form-style-6">
<p>
<h1>Sinu number või email on sisse kantud meie andmekogusse.</h1>
<h3>Teile tuleb info telefonile või emailile, kohe kui vaba aeg on saadav.</h3>
<p>
<input type="submit" value="Tagasi veebilehele!">

  <br>
</form> 

</div>
</body>
</html>




        <?php
  
        
        $number = $_REQUEST['number'];
        $email = $_REQUEST['email'];
          
        // Performing insert query execution
        // here our table name is college
        $sql = "INSERT INTO info  VALUES ('$number','$email')";
          
        if(mysqli_query($conn, $sql)){
            echo "<h3>Sinu number voi email on sisse kantud meie andmekogusse." 
                . " Teile hakkab tulema infot " 
                . " Kas telefonist voi emailile-</h3>"; 
  
            echo nl2br("\n$number\n $email\n");
        } else{
            echo "Midagi laks valesti $sql. " 
                . mysqli_error($conn);
        }
          
        // Close connection
        mysqli_close($conn);
        ?>
    
</body>
  
</html>