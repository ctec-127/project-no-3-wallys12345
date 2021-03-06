<?php // Filename: form.inc.php ?>

<!-- Note the use of sticky fields below -->
<!-- Note the use of the PHP Ternary operator
Scroll down the page
http://php.net/manual/en/language.operators.comparison.php#language.operators.comparison.ternary
-->
<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="POST">
    <label class="col-form-label" for="first">First Name </label>
    <input class="form-control" type="text" id="first" name="first" value="<?php echo (isset($first) ? $first: '');?>">
    <br>
    <label class="col-form-label" for="last">Last Name </label>
    <input class="form-control" type="text" id="last" name="last" value="<?php echo (isset($last) ? $first: '');?>"">
    <br>
    <label class="col-form-label" for="id">Student ID </label>
    <input class="form-control" type="text" id="id" name="id" value="<?php echo (isset($id) ? $id: '');?>"">
    <br>
    <label class="col-form-label" for="email">Email </label>
    <input class="form-control" type="text" id="email" name                                                                                                                                                                                                                                                                           ="email" value="<?php echo (isset($email) ? $email: '');?>"">
    <br>
    <label class="col-form-label" for="phone">Phone </label>
    <input class="form-control" type="text" id="phone" name="phone" value="<?php echo (isset($phone) ? $phone: '');?>"">
    <br>
    <br>
    <label class="col-form-label" for="gradDate">Graduation Date </label>
    <input class="form-control" type="date" id="gradDate" name="gradDate" value="<?php echo (isset($gradDate) ? $gradDate: '');?>"">
    <br>
    <br>
    <label class="col-form-label" for="gpa">Gpa </label>
    <input class="form-control" type="text" id="gpa" name="gpa" value="<?php echo (isset($gpa) ? $gpa: '');?>"">
    <br>
    <label class="col-form-label" for="aid">Financial Aid </label>
    <input type="radio" name="aid"  <?php if (isset($aid) && $aid == '1') echo "checked";?>  >Yes
    <input type="radio" name="aid" <?php if (isset($aid) && $aid == '0') echo "checked";?> >No
    <br>
    <label class="col-form-label" for="degree">Decheese </label>
    <select name="degree" id="degree">
    <option value="--Select--" selected>--Select--</option>
    <option value="bachelor of arts">Bachelor of Arts</option>`
    <option value="masters">Masters</option>
    <option value="associates">Associates</option>
    <option value="none">None</option>
  </select>
    <br>
    <a href="display-records.php">Cancel</a>&nbsp;&nbsp;
    <button class="btn btn-primary" type="submit">Save Record</button>
</form>