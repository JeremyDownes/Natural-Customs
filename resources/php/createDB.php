<?php

  $dbname = "NaturalCustoms";
  $servername = "localhost";
  $username = "NaturalCustoms";
  $password = "1life2live";
  $link = new mysqli($servername, $username, $password);
  if (!$link) {
    die('Could not connect: ' . mysql_error());
  }

  $link->query("CREATE DATABASE IF NOT EXISTS NaturalCustoms");
  $link->close();
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Create table



     $conn-> query("CREATE TABLE IF NOT EXISTS Diagnostics (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
      section VARCHAR(30) NOT NULL,
      heading VARCHAR(50) NOT NULL,
      imageURL VARCHAR(50) NOT NULL,
      textContent VARCHAR(255) NOT NULL
    )");
     $conn-> query("CREATE TABLE IF NOT EXISTS RepairServices LIKE mobileMechanics");
     $conn-> query("CREATE TABLE IF NOT EXISTS  PerformanceUpgrades LIKE mobileMechanics");
     $conn-> query("CREATE TABLE IF NOT EXISTS  CustomFabrication LIKE mobileMechanics");

     $conn-> query("CREATE TABLE IF NOT EXISTS  Kitchen LIKE mobileMechanics");
     $conn-> query("CREATE TABLE IF NOT EXISTS  Bath LIKE mobileMechanics");
     $conn-> query("CREATE TABLE IF NOT EXISTS  Interior LIKE mobileMechanics");
     $conn-> query("CREATE TABLE IF NOT EXISTS  Exterior LIKE mobileMechanics");

     $conn-> query("CREATE TABLE IF NOT EXISTS  Performance LIKE mobileMechanics");
     $conn-> query("CREATE TABLE IF NOT EXISTS  PartsStore LIKE mobileMechanics");
     $conn-> query("CREATE TABLE IF NOT EXISTS  CompletionCalculator LIKE mobileMechanics");

     $conn-> query("CREATE TABLE IF NOT EXISTS  ClassicUber LIKE mobileMechanics");
     $conn-> query("CREATE TABLE IF NOT EXISTS  RepairConcierge mobileMechanics");
     $conn-> query("CREATE TABLE IF NOT EXISTS  LimoService LIKE mobileMechanics");

     $conn-> query("CREATE TABLE IF NOT EXISTS navigation (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
      heading VARCHAR(50) NOT NULL,
      imageURL VARCHAR(50) NOT NULL
    )");

  $conn->close();

  ?>