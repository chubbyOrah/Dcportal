<?php
include ("db_connection.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>meetings</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
	 <!-- Include the dashboard -->
    <?php include("dashboard.php"); ?>

    <div class="content">

<form action="staff_process.php"  method="Post">
	<fieldset>
    <legend>Register Staff</legend>
  <div class="mb-3">
    <select name="DepartmentID" class="form-select" aria-label="Default select example">
   <option selected>Department</option>
   <!-- <option value=""> -->
  <option value="1">Agriculture</option>
  <option value="2">Health</option>
  <option value="3">Accounts</option>
  <option value="4">Education</option>
  <option value="5">Human_Resource</option>
  <option value="6">forest</option></option>
 

</select>
  </div>
  <div class="mb-3">
    <label for="FirstName" class="form-label">First Name</label>
    <input type="text" name="FirstName" class="form-control" id="FirstName">
  </div>

  <div class="mb-3">
    <label for="LastName" class="form-label">Last Name</label>
    <input type="text" name="LastName" class="form-control" id="LastName">
  </div>
  <div>
<select name="Gender" class="form-select" aria-label="Default select example">
   <option selected>Gender</option>
   <!-- <option value=""> -->
  <option value="Female">Female</option>
  <option value="Male">Male</option>
</select>
</div>
  <div class="mb-3">
    <label for="DoB" class="form-label">Date of Birth</label>
    <input type="date" name="DoB" class="form-control" id="DoB">
  </div>
<div class="mb-3">
    <label for="PhoneNumber" class="form-label">Phone Number</label>
    <input type="text" name="PhoneNumber" class="form-control" id="PhoneNumber">
  </div>

  <div class="mb-3">
    <label for="email" class="form-label">Email</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>

  <div class="mb-3">
    <label for="Address" class="form-label">Address</label>
    <input type="text" name="Address" class="form-control" id="Address">
  </div>
   <div class="mb-3">
    <label for="Position" class="form-label">Position</label>
    <input type="text" name="Position" class="form-control" id="Position">
  </div>
  <div class="mb-3">
    <label for="Status" class="form-label">Status</label>
    <input type="text" name="Status" class="form-control" id="Status">
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</fieldset>
</form>
</div>
</body>
</html>


