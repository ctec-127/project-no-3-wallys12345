<?php // Filename: create-record.php
$pageTitle = "Advanced Search";

require_once __DIR__ . "/../db/mysqli_connect.inc.php";
require_once __DIR__ . "/../app/config.inc.php";
require_once __DIR__ . "/../functions/functions.inc.php";


?>

<?php

//echo $_POST["firstName"];

$varName = $_POST["firstName"];

$sql = "SELECT * FROM $db_table WHERE " . '"' . $_POST["firstName"] . '"' . " IN ( first_name) ORDER BY last_name ASC";

$result = $db->query($sql);

while ($row = $result->fetch_assoc()) {
    
    if ($row['first_name'] == $varName) {

        echo "<tr>";
        echo "<td>{$row["first_name"]} </td><td>{$row[ "last_name" ]}  </td><td>{$row[ "email" ]}</td>";
        echo "</tr>";
        echo "<br>";


       // echo $row['last_name'];
    }

}



$varLast = $_POST["last"];

$sql = "SELECT * FROM $db_table WHERE " . '"' . $_POST["last"] . '"' . " IN ( last_name) ORDER BY last_name ASC";

$result = $db->query($sql);

while ($row = $result->fetch_assoc()) {
    
    if ($row['last_name'] == $varLast) {

        echo "<tr>";
        echo "<td>{$row["first_name"]} </td><td>{$row[ "last_name" ]}  </td><td>{$row[ "email" ]}</td>";
        echo "</tr>";
        echo "<br>";


       // echo $row['last_name'];
    }

}

$varId = $_POST["id"];

$sql = "SELECT * FROM $db_table WHERE " . '"' . $_POST["id"] . '"' . " IN (student_id) ORDER BY last_name ASC";

$result = $db->query($sql);

while ($row = $result->fetch_assoc()) {
    
    if ($row['student_id'] == $varId) {

        echo "<tr>";
        echo "<td>{$row["first_name"]} </td><td>{$row[ "last_name" ]}  </td><td>{$row[ "email" ]}</td>";
        echo "</tr>";
        echo "<br>";


       // echo $row['last_name'];
    }

}

$varEmail = $_POST["email"];

$sql = "SELECT * FROM $db_table WHERE " . '"' . $_POST["email"] . '"' . " IN (email) ORDER BY last_name ASC";

$result = $db->query($sql);

while ($row = $result->fetch_assoc()) {
    
    if ($row['email'] == $varEmail) {

        echo "<tr>";
        echo "<td>{$row["first_name"]} </td><td>{$row[ "last_name" ]}  </td><td>{$row[ "email" ]}</td>";
        echo "</tr>";
        echo "<br>";


       // echo $row['last_name'];
    }

}

$varPhone = $_POST["phone"];

$sql = "SELECT * FROM $db_table WHERE " . '"' . $_POST["phone"] . '"' . " IN (phone) ORDER BY last_name ASC";

$result = $db->query($sql);

while ($row = $result->fetch_assoc()) {
    
    if ($row['phone'] == $varPhone) {

        echo "<tr>";
        echo "<td>{$row["first_name"]} </td><td>{$row[ "last_name" ]}  </td><td>{$row[ "email" ]}</td>";
        echo "</tr>";
        echo "<br>";


       // echo $row['last_name'];
    }

}


$varGpa = $_POST["gpa"];

$sql = "SELECT * FROM $db_table WHERE " . '"' . $_POST["gpa"] . '"' . " IN (gpa) ORDER BY last_name ASC";

$result = $db->query($sql);

while ($row = $result->fetch_assoc()) {
    
    if ($row['gpa'] == $varGpa) {

        echo "<tr>";
        echo "<td>{$row["first_name"]} </td><td>{$row[ "last_name" ]}  </td><td>{$row[ "email" ]}</td>";
        echo "</tr>";
        echo "<br>";


       // echo $row['last_name'];
    }

}


?>