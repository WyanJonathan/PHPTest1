<head>
<title>Citizen</title>
<?php include 'style.php'; include 'db.php';?> 
<!-- style.php is a php that defines the style of the UI, db.php is the file
that allows connection to the database that has the /QUEUE-->
</head>

<hr />
<form action="insertCitizen.php?go" method="post">
    <div>
    <label> First name: </label><br>
    <input type="text" name="firstname" required>
    </div>

    <div>
    <label> Last name: </label><br>
    <input type="text" name="lastname" required>
    </div>

    <div>
    <label> Organization: </label><br>
    <input type="text" name="orgname" >
    </div>

    <label> Service: </label><br>
    <select name="service">
        <option value="tax">Council Tax</option>
        <option value="benefits">Benefits</option>
        <option value="rent">Rent</option>
    </select> <br>
</form>

<hr />