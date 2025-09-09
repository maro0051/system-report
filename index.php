<?php
  // Create a name variable with your name
  $name = 'Daniel Maroy'
   
  // Create a section variable with your course section
    $section = 'CST8257 Fall 2025 Section 300'

  // Add your database username
  $username = 'root';

  // Add your database password
  $password = 'root';

  $db = new PDO('mysql:dbname=movie_mayhem;host=localhost', $username, $password);

  // PHP version
  $php = phpversion();

  // MySQL version
  $mysql = $db->getAttribute(PDO::ATTR_SERVER_VERSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>System Report</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <h1 class="display-4 my-5">System Report</h1>
      </div>
    </div>
    <div class="row mb-4">
      <div class="col">
        <div class="card">
          <div class="card-header">
            Name
          </div>
          <div class="card-body">
            <div class="card-title"><!-- Output the name variable --></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            Section
          </div>
          <div class="card-body">
            <div class="card-title"><!-- Output the section variable --></div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col">
        <div class="card">
          <div class="card-header">
            PHP Version
          </div>
          <div class="card-body">
            <div class="card-title"><!-- Output the PHP version variable --></div>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <div class="card-header">
            MySQL Version
          </div>
          <div class="card-body">
            <div class="card-title"><!-- Output the MySQL version variable --></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
