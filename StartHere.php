<head>
<title>Welcome!</title>
<?php include 'style.php'; include 'db.php';?> 
<!-- style.php is a php that defines the style of the UI, db.php is the file
that allows connection to the database that has the /QUEUE-->
</head>

<hr />
<form action="checkIfCitizen.php?go" method="post">
    <label> First, Citizen or Anonymous </label><br>
    <select name="Type">
        <option value="citizen">Citizen</option>
        <option value="anonymus">Anonymous</option>
    </select> <br>

    <div>
    <input type="submit">
    </div>
</form>

<hr />


