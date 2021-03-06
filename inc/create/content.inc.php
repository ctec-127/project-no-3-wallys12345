<?php // Filename: connect.inc.php

require __DIR__ . "/../db/mysqli_connect.inc.php";
require __DIR__ . "/../functions/functions.inc.php";
require __DIR__ . "/../app/config.inc.php";

$error_bucket = [];

// http://php.net/manual/en/mysqli.real-escape-string.php


//code below checks to see if fields posted data,
//if yes, then the data is collected, otherwise an error message
//is collected into a 'bucket'. if all the data is collected, 
//then the data is inserted into the database, if not then a list of 
//errors are displayed
if($_SERVER['REQUEST_METHOD']=="POST"){
    // First insure that all required fields are filled in
    if (empty($_POST['first'])) {
        array_push($error_bucket,"<p>A first name is required.</p>");
    } else {
        # Old way
        #$first = $_POST['first'];
        # New way
        $first = $db->real_escape_string($_POST['first']);
    }
    if (empty($_POST['last'])) {
        array_push($error_bucket,"<p>A last name is required.</p>");
    } else {
        #$last = $_POST['last'];
        $last = $db->real_escape_string($_POST['last']);
    }
    if (empty($_POST['id'])) {
        array_push($error_bucket,"<p>A student ID is required.</p>");
    } else {
        #$id = $_POST['id'];
        $id = $db->real_escape_string($_POST['id']);
    }
    if (empty($_POST['email'])) {
        array_push($error_bucket,"<p>An email address is required.</p>");
    } else {
        #$email = $_POST['email'];
        $email = $db->real_escape_string($_POST['email']);
    }
    if (empty($_POST['phone'])) {
        array_push($error_bucket,"<p>A phone number is required.</p>");
    } else {
        #$phone = $_POST['phone'];
        $phone = $db->real_escape_string($_POST['phone']);
    }
    if (empty($_POST['gradDate'])) {
        array_push($error_bucket,"<p>A graduation date is required.</p>");
    } else {
        #$gradDate = $_POST['gradDate'];
        $gradDate = $db->real_escape_string($_POST['gradDate']);
    }
    if (empty($_POST['gpa'])) {
        array_push($error_bucket,"<p>Gpa is required.</p>");
    } else {
        #$gpa = $_POST['gpa'];
        $gpa = $db->real_escape_string($_POST['gpa']);
    }
    if (empty($_POST['degree'])) {
        array_push($error_bucket,"<p>A choice of degree is required.</p>");
    } else {
        #$degree = $_POST['degree'];
        $degree = $db->real_escape_string($_POST['degree']);
    }
    if (empty($_POST['aid'])) {
        array_push($error_bucket,"<p>indicate whether you need aid or not.</p>");
    } else {
        #$aid = $_POST['aid'];
        $aid = $db->real_escape_string($_POST['aid']);
    }



    // If we have no errors than we can try and insert the data
    if (count($error_bucket) == 0) {
        // Time for some SQL
        $sql = "INSERT INTO $db_table (first_name,last_name,student_id,email,phone,degree_program,gpa,financial_aid,grad_date) ";
        $sql .= "VALUES ('$first','$last','$id','$email','$phone','$degree','$gpa','$aid','$gradDate')";

        // comment in for debug of SQL
        // echo $sql;

        $result = $db->query($sql);
        if (!$result) {
            echo '<div class="alert alert-danger" role="alert">
            I am sorry, but I could not save that record for you. ' .  
            $db->error . '.</div>';
        } else {
            echo '<div class="alert alert-success" role="alert">
            I saved that new record for you!
          </div>';
            unset($first);
            unset($last);
            unset($id);
            unset($email);
            unset($phone);
            unset($gradDate);
            unset($gpa);
            unset($degree);
            unset($aid);
        }
    } else {
        display_error_bucket($error_bucket);
    }
}

?>
