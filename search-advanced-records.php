<?php // Filename: create-record.php
$pageTitle = "Advanced Search";
require 'inc/layout/header.inc.php';
require 'inc/db/mysqli_connect.inc.php';

?>

<div class="container">
	<div class="row mt-5">
		<div class="col-lg-12">
			<h1>Advanced Search</h1>
            <form action="inc/shared/resultTest.php" method="post">
            <label class="col-form-label" for="first">First Name </label>
            <input class="form-control" type="text" id="first" name="firstName" value="<?php echo (isset($first) ? $first: '');?>">
            <br>
            <label class="col-form-label" for="last">Last Name </label>
            <input class="form-control" type="text" id="last" name="last" value="<?php echo (isset($last) ? $first: '');?>"">
            <br>
            <label class="col-form-label" for="id">Student ID </label>
            <input class="form-control" type="text" id="id" name="id" value="<?php echo (isset($id) ? $id: '');?>"">
            <br>
            <label class="col-form-label" for="email">Email </label>
            <input class="form-control" type="text" id="email" name="email" value="<?php echo (isset($email) ? $email: '');?>"">                                                                                                                                                                                                                                                                         
            <br>
            <label class="col-form-label" for="phone">Phone </label>
            <input class="form-control" type="text" id="phone" name="phone" value="<?php echo (isset($phone) ? $phone: '');?>"">
            <br>
            <br>
            <label class="col-form-label" for="gpa">Gpa </label>
            <input class="form-control" type="text" id="gpa" name="gpa" value="<?php echo (isset($gpa) ? $gpa: '');?>"">
            <br>
            <input type="submit">
            </form>
			<?php //require __DIR__ .'/inc/create/content.inc.php'; ?>
			<?php //require_once __DIR__ .'/inc/shared/form_advanced_search.php' ?>
		</div>
    </div>
</div>

<?php require 'inc/layout/footer.inc.php'; ?>