<head>
<title>Welcome!</title>
<?php include 'style.php'; include 'db.php';?> 
<!-- style.php is a php that defines the style of the UI, db.php is the file
that allows connection to the database that has the /QUEUE-->
</head>

<?php
if (isset($_POST['Type']){
    $Type = $_POST['Type'];
}

if ($Type == 'citizen'){
    header("Location: citizenForm.php"); 
    exit;
}
else{
    header("Location: anonymousForm.php"); 
    exit;
}
?>