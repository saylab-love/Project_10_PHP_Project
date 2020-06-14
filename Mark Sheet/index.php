<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
	 integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
	 crossorigin="anonymous">
	<title>Student MarkSheet</title>
	<style>
		.html{
			width: 900px;
			margin: 0 auto;
		}
	</style>
</head>
<body>
	<section style="background: #707B7C" class="html">
<h1 class="text-center">Mark Sheet</h1><br><br>
		<div class="row">
            <div class="col-sm-6">
                <div class="card-body">

                <h3 class="text-center">Student Details</h3>
<form action="index.php" method="post">
  <div class="form-row">
    <div class="col">
    	<label class="col-sm-2 col-form-label">Name</label>
      <input type="text" class="form-control" name="name" placeholder="student name">
    </div>
    <div class="col">
    	<label class="col-sm-2  col-form-label" for="inlineFormCustomSelect">Division</label>
      <select class="custom-select mr-sm-2" name="div" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Comilla">Comilla</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Barishal">Barishal</option>
        <option value="Rangpur">Rangpur</option>
        <option value="Sylhet">Sylhet</option>
      </select>
    </div>
  </div>

  <div class="form-group row">
    <div class="col-sm-10">
    	<label class="col-sm-2 col-form-label">Address</label>
      <input style="width: 395px;" type="text" name="address" class="form-control" placeholder="address">
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    	<label class="col-sm-2 col-form-label"  for="inlineFormCustomSelect">Class</label>
      <select class="custom-select mr-sm-2" name="class" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="Nine">Nine</option>
        <option value="Ten">Ten</option>
        <option value="Inter 1st year">Inter 1st year</option>
        <option value="Inter 2nd year">Inter 2nd year</option>
      </select>
    </div>
    <div class="col">
    	<label class="col-sm-2  col-form-label" for="inlineFormCustomSelect">Group</label>
      <select class="custom-select mr-sm-2" name="group" id="inlineFormCustomSelect">
        <option selected>Choose...</option>
        <option value="Science">Science</option>
        <option value="Business Studied">Business Studied</option>
        <option value="Arts">Arts</option>
      </select>
    </div>
  </div>

  <div class="form-row">
    <div class="col">
    	<label class="col-sm-2 col-form-label">ID</label>
      <input type="number" class="form-control" name="id" placeholder="id">
    </div>
    <div class="col">
    	<label class="col-sm-2 col-form-label">Registration</label>
      <input type="number" class="form-control" name="reg" placeholder="registration">
    </div>
  </div>
<!--</form>-->
<!--<form action="index.php" method="post">-->
	<!--<section>
    <div class="form-check">
  <input class="form-check-input position-static" name="ma" type="checkbox" id="blankCheckbox"  aria-label="...">
  <label>Male</label>
</div>
<div class="form-check">
  <input class="form-check-input position-static" name="fe" type="checkbox" id="blankCheckbox"  aria-label="...">
    <label>Fe-Male</label>

</div>
	</section>-->
<!--</form>-->
      </div>
  </div>

  <div class="col-sm-6">
      <div class="card-body">
        <h3 class="text-center">Marks</h3>

<!--<form action="index.php" method="post">-->
  <div class="form-group">
    <label for="formGroupExampleInput">Bangla</label>
    <input type="number" name="ban" class="form-control" id="formGroupExampleInput" placeholder="000">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">English</label>
    <input type="number" name="eng" class="form-control" id="formGroupExampleInput2" placeholder="000">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Mathematics</label>
    <input type="number" name="math" class="form-control" id="formGroupExampleInput2" placeholder="00">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Physics/Accounting/Geography</label>
    <input type="number" name="phy" class="form-control" id="formGroupExampleInput2" placeholder="000">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Chemistry/Business Ent./Economics</label>
    <input type="number" name="che" class="form-control" id="formGroupExampleInput2" placeholder="000">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Biology/General Science/Civic & Citizenship</label>
    <input type="number" name="bio" class="form-control" id="formGroupExampleInput2" placeholder="000">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">ICT</label>
    <input type="number" name="ict" class="form-control" id="formGroupExampleInput2" placeholder="00">
  </div>

    <div class=" text-center">
      <input class="text-center" type="submit" value="Submit">
      <input class="text-center" type="Reset">
   </div>

</form>

      </div>
    </div>
</div>
	</section>
<hr>
<?php 

$value = $_POST["name"];
$value2 = $_POST['div'];
$value3 = $_POST['address'];
$value4 = $_POST['class'];
$value5 = $_POST['group'];
$value6 = $_POST['id'];
$value7 = $_POST['reg'];
//$value8 = $_POST['ma'];
//$value9 = $_POST['fe'];
$value10 = $_POST['ban'];
$value11 = $_POST['eng'];
$value12 = $_POST['math'];
$value13 = $_POST['phy'];
$value14 = $_POST['che'];
$value15 = $_POST['bio'];
$value16 = $_POST['ict'];

 ?>
 <?php 
   $total=($value10+$value11+$value12+$value13+$value14+$value15+$value16)
  ?>

   <?php 
$marks1 = $_POST['ban'];
if ($marks1>=101) {
	$p1 ="null";
}elseif ($marks1>=80) {
	$p1 ="A+";
}elseif ($marks1>=70) {
	$p1 ="A";
}elseif ($marks1>=60) {
	$p1= "A-";
}elseif ($marks1>=50) {
	$p1= "B";
}elseif ($marks1>=45) {
	$p1 ="C";
}elseif ($marks1>=33) {
	$p1= "D";
}elseif ($marks1<=32) {
	$p1= "F";
}else{
	$p1 ="null";
}
   ?> 
  <?php 
$marks1 = $_POST['eng'];
if ($marks1>=101) {
	$p2 ="null";
}elseif ($marks1>=80) {
	$p2 ="A+";
}elseif ($marks1>=70) {
	$p2 ="A";
}elseif ($marks1>=60) {
	$p2 = "A-";
}elseif ($marks1>=50) {
	$p2 ="B";
}elseif ($marks1>=45) {
	$p2= "C";
}elseif ($marks1>=33) {
	$p2 ="D";
}elseif ($marks1<=32) {
	$p2= "F";
}else{
	$p2 ="null";
}
   ?>
     <?php 
$marks1 = $_POST['math'];
if ($marks1>=101) {
	$p3 ="null";
}elseif ($marks1>=80) {
	$p3= "A+";
}elseif ($marks1>=70) {
	$p3= "A";
}elseif ($marks1>=60) {
	$p3 ="A-";
}elseif ($marks1>=50) {
	$p3 ="B";
}elseif ($marks1>=45) {
	$p3 ="C";
}elseif ($marks1>=33) {
	$p3= "D";
}elseif ($marks1<=32) {
	$p3= "F";
}else{
	$p3 ="null";
}
   ?>
     <?php 
$marks1 = $_POST['phy'];
if ($marks1>=101) {
	$p4 ="null";
}elseif ($marks1>=80) {
	$p4 ="A+";
}elseif ($marks1>=70) {
	$p4 ="A";
}elseif ($marks1>=60) {
	$p4 ="A-";
}elseif ($marks1>=50) {
	$p4 ="B";
}elseif ($marks1>=45) {
	$p4 ="C";
}elseif ($marks1>=33) {
	$p4 ="D";
}elseif ($marks1<=32) {
	$p4 ="F";
}else{
	$p4 ="null";
}
   ?>
     <?php 
$marks1 = $_POST['che'];
if ($marks1>=101) {
	$p5 ="null";
}elseif ($marks1>=80) {
	$p5 ="A+";
}elseif ($marks1>=70) {
	$p5 ="A";
}elseif ($marks1>=60) {
	$p5 ="A-";
}elseif ($marks1>=50) {
	$p5 ="B";
}elseif ($marks1>=45) {
	$p5 ="C";
}elseif ($marks1>=33) {
	$p5 ="D";
}elseif ($marks1<=32) {
	$p5 ="F";
}else{
	$p5 ="null";
}
   ?>
     <?php 
$marks1 = $_POST['bio'];
if ($marks1>=101) {
	$p6 ="null";
}elseif ($marks1>=80) {
	$p6 ="A+";
}elseif ($marks1>=70) {
	$p6 ="A";
}elseif ($marks1>=60) {
	$p6 ="A-";
}elseif ($marks1>=50) {
	$p6 ="B";
}elseif ($marks1>=45) {
	$p6 ="C";
}elseif ($marks1>=33) {
	$p6 ="D";
}elseif ($marks1<=32) {
	$p6 ="F";
}else{
	$p6 ="null";
}
   ?>
     <?php 
$marks1 = $_POST['ict'];
if ($marks1>=101) {
	$p7 ="null";
}elseif ($marks1>=80) {
	$p7 ="A+";
}elseif ($marks1>=70) {
	$p7 ="A";
}elseif ($marks1>=60) {
	$p7 ="A-";
}elseif ($marks1>=50) {
	$p7 ="B";
}elseif ($marks1>=45) {
	$p7 ="C";
}elseif ($marks1>=33) {
	$p7 ="D";
}elseif ($marks1<=32) {
	$p7 ="F";
}else{
	$p7 ="null";
}
   ?>
      <?php 
$marks1 = $total;
if ($marks1>=601) {
	$p8 ="null";
}elseif ($marks1>=560) {
	$p8 ="5.00";
}elseif ($marks1>=490) {
	$p8 ="4.50";
}elseif ($marks1>=420) {
	$p8 ="3.90";
}elseif ($marks1>=350) {
	$p8 ="3.45";
}elseif ($marks1>=315) {
	$p8 ="3.00";
}elseif ($marks1>=231) {
	$p8 ="2.80";
}elseif ($marks1<=230) {
	$p8 ="0.0";
}else{
	$p8 ="null";
}
   ?>  
<hr>
<section class="html">
	<div class="text-center">
        <h1>I.E.T GOVT. HIGH SCHOOL</h1>

       <div class="row">
  <div class="col-sm-6">
      <div class="card-body">
        <p> <b>Name :</b> <?php echo "$value";?></p>
        <p><b>Divission :</b> <?php echo "$value2"; ?></p>
        <p><b>Address :</b> <?php echo "$value3"; ?></p>
      </div>
  </div>
  <div class="col-sm-6">
      <div class="card-body">
        <p><b>Class :</b> <?php echo "$value4"; ?></p>
        <p><b>Group :</b> <?php echo "$value5"; ?></p>
        <p><b>ID :</b> <?php echo "$value6"; ?></p>
        <p><b>Registration :</b> <?php echo "$value7"; ?></p>
      </div>
  </div>
</div>      
        
    </div>
    <br>
    <table class="table">
    	<tr class="text-center table-primary">
    	    <th>#</th>
    	    <th>subjects</th>
    	    <th>Full Marks</th>
    	    <th>Written</th>
    	    <th>MCQ</th>
    	    <th>Practical</th>
    	    <th>Students_marks</th>
    	    <th>GPA</th>
    	</tr>
    	<tr class="table-secondary">
    		<td>1</td>
    		<td>Bnagla</td>
    		<td class="text-center">100</td>
    		<td class="text-center">70</td>
    		<td class="text-center">30</td>
            <td class="text-center">00</td>
    		<td class="text-center"><?php echo "$value10"; ?></td>
    		<td class="text-center"><?php echo "$p1"; ?></td>
    	</tr>
    	<tr class="table-primary">
    		<td>2</td>
    		<td>English</td>
    		<td class="text-center">100</td>
    		<td class="text-center">100</td>
    		<td class="text-center">00</td>
    		<td class="text-center">00</td>
    		<td class="text-center"><?php echo "$value11"; ?></td>
    		<td class="text-center"><?php echo "$p2"; ?></td>
    	</tr>
    	<tr class="table-secondary">
    		<td>3</td>
    		<td>Mathematics</td>
    		<td class="text-center">100</td>
    		<td class="text-center">50</td>
    		<td class="text-center">25</td>
    		<td class="text-center">25</td>
    		<td class="text-center"><?php echo "$value12"; ?></td>
    		<td class="text-center"><?php echo "$p3"; ?></td>
    	</tr>
    	<tr class="table-primary">
    		<td>4</td>
    		<td>Physics/Accounting/Geography</td>
    		<td class="text-center">100</td>
    		<td class="text-center">50</td>
    		<td class="text-center">25</td>
    		<td class="text-center">25</td>
    		<td class="text-center"><?php echo "$value13"; ?></td>
    		<td class="text-center"><?php echo "$p4"; ?></td>
    	</tr>
    	<tr class="table-secondary">
    		<td>5</td>
    		<td>Chemistry/Business Ent./Economics</td>
    		<td class="text-center">100</td>
    		<td class="text-center">50</td>
    		<td class="text-center">25</td>
    		<td class="text-center">25</td>
    		<td class="text-center"><?php echo "$value14"; ?></td>
    		<td class="text-center"><?php echo "$p5"; ?></td>
    	</tr>
    	<tr class="table-primary">
    		<td>6</td>
    		<td>Biology/General Science/Civic & Citizenship</td>
    		<td class="text-center">100</td>
    		<td class="text-center">50</td>
    		<td class="text-center">25</td>
    		<td class="text-center">25</td>
    		<td class="text-center"><?php echo "$value15"; ?></td>
    		<td class="text-center"><?php echo "$p6"; ?></td>
    	</tr>
    	<tr class="table-secondary">
            <td>7</td>
            <td>ICT</td>
            <td class="text-center">100</td>
            <td class="text-center">50</td>
    		<td class="text-center">25</td>
    		<td class="text-center">25</td>
            <td class="text-center"><?php echo "$value16";?></td>
            <td class="text-center"><?php echo "$p7";?></td>
      </tr>
    	<tr class="table-primary">
            <td></td>
            <td>Total =</td>
            <td class="text-center">700</td>
            <td class="text-center">420</td>
            <td class="text-center">155</td>
            <td class="text-center">125</td>
            <td class="text-center"><?php echo "$total";?></td>
            <td class="text-center"><?php echo "$p8";?></td>
      </tr>

    </table>
</section>
<br>
<br><br><br><br><br><br>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>