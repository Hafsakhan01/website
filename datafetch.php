<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "website";

// Create connection
$conn =  mysqli_connect($servername, $username, $password, $dbname);


// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, username, email, password FROM register";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
  
  ?>
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="continer-fluid">
        <h1 class="text-center">User Data</h1>
        <table class="table table-dark table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Username</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Password</th>
                    <th scope="col">Delete</th>
                    <th scope="col">View</th>
                    <th scope="col">Update</th>

</tr>
</thead>
<tbody></tbody>
<?php
 while($row = $result->fetch_assoc()) {
    // echo "id: " . $row["user_id"]. " - Name: " . $row["username"]. " Email " . $row["email"]. $row["password"]. "<br>";
    ?>
    <tr>
        <th scope="row">
            <?php
            echo $row["id"];
            ?>
            </th>
            <td> 
                <?php
                echo $row["username"];
                ?>
                </td>
                <td> 
                <?php
                echo $row["email"];
                ?>
                </td> 
                <td> 
                <?php
                echo $row["password"];
                ?>
                </td>
                <td>
                  <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a></td>
                  <td>
                  <a href="view.php?id=<?php echo $row['id']; ?>">View</a></td>
                  <td>
                  <a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
 </tr>
                

<?php
}
} else {
  echo "0 results";
}
$conn->close();
?>
</tbody>
</table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>
 
  
