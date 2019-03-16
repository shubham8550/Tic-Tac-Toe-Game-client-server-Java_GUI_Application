<?php
include 'conn.php';


$sql = "SELECT * FROM score ORDER BY ID ASC";
$result = mysqli_query($conn, $sql);

?>


<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>

<h2>TicTacToe Scoreboard </h2>

<table>
  <tr>
    <th>Player X</th>
    <th>Player O</th>
    <th>Winner</th>
  </tr>
<?php
if (mysqli_num_rows($result) > 0) {
      while($row = mysqli_fetch_assoc($result)) {
       
    
?>
  <tr>
    <td><?php echo $row["P1"]; ?></td>
    <td><?php echo $row["P2"]; ?></td>
    <td><?php echo $row["Winner"]; ?></td>
  </tr>
  <?php
      }
    } else {
        echo "0 results";
    }
  ?>
</table>

</body>
</html>
