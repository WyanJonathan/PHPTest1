<head>
<title>Get QUEUE</title>
<?php include 'style.php';?>
</head>
<hr />
<body>

 <table border="2">
  <tr>
    <td>First Name</td>
    <td>Last Name</td>
    <td>Organization</td>
    <td>Service</td>
  </tr>
  <?php
  include 'db.php'; // Initialize Connection File
  $stmt = $conn->prepare("SELECT * FROM QUEUE");
  $stmt->execute();
  $stmt->bind_result($firstname, $lastname, $orgname, $service);
  while ($stmt->fetch()) {
    $firstname = htmlentities($firstname);
    $lastname = htmlentities($lastname);
    $orgname = htmlentities($orgname);
    $service = htmlentities($service);
    echo "<tr>";
    echo "  <td>$firstname</td>";
    echo "  <td>$lastname</td>";
    echo "  <td>$orgname</td>";
    echo "  <td>$service</td>";
    echo "</tr>";
  }
  ?>
  </table>