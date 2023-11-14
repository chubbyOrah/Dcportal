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

<form action="meetings_process.php"  method="Post">
	<fieldset>
    <legend>Meeting Information</legend>
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
    <label for="MeetingDate" class="form-label">Meeting Date</label>
    <input type="date" name="MeetingDate" class="form-control" id="MeetingDate">
  </div>

  <div class="mb-3">
    <label for="Agenda" class="form-label">Meeting Agenda</label>
    <input type="text" name="Agenda" class="form-control" id="Agenda">
  </div>

  <div class="mb-3">
    <label for="Duration" class="form-label">Duration</label>
    <input type="text" name="Duration" class="form-control" id="Duration">
  </div>
  <div class="mb-3">
    <label for="Reported_by" class="form-label">Reported By</label>
    <input type="text" name="Reported_by" class="form-control" id="Reported_by">
  </div>

  <div class="mb-3">
    <label for="PhoneNumber" class="form-label">Phone Number</label>
    <input type="text" name="PhoneNumber" class="form-control" id="PhoneNumber">
  </div>

  
   <input type="file" name="Minutes" id="Minutes">
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</fieldset>
</form>
</div>
</body>
</html>


