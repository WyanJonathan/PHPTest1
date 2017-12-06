<head>
<title>Add Result</title>
<?php include 'style.php'; include 'db.php'; // include our database connection?>
</head>

<?php 

if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['orgname']) && isset($_POST['service'])) {
    $q = "INSERT INTO QUEUE (firstname, lastname, orgname, service) VALUES (?,?,?,?)";
    $stmt = $conn->prepare($q);
    $stmt->bind_param('ssss', $_POST['firstname'], $_POST['lastname'], $_POST['orgname'], $_POST['service');
    $stmt->execute();

    if (!$stmt){
        echo "failed to insert queue";
    }else{
        echo "Successfully Queued!";
    }
}
else{
    echo "Form Error (input)";
}
?>


<p>
<button type="button" onclick="window.location = 'StartHere.php'">Add another Queue!</button>
</p>