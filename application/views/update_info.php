<!DOCTYPE html>
<html>
<head>
    <title>Add Employee Details</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo base_url(); ?>assets/js/sweetalert.min.js"></script>
</head>
<body style ="background-color: lightslategray" >

<ul>
    <li><a href="<?php echo site_url('Add_EmpController/insert');?>">Dilanka Enterprices</a></li>
    <li style="float:right"><a class="active" href="<?php echo site_url('Add_EmpController/info');?>">Employee Infomation</a></li>
</ul>

<div class="container">
    <h2 style="text-align: center;">Update Employee Details</h2>
    <form action="updateInfo" method="post">
        <div class="form-group">
            <label for="empid">Employee id:</label>
            <input type="text" class="form-control" id="empid"  name="empid" value="<?php foreach ($emp as $row){ echo $row->emp_id;} ?>" readonly>
        </div>
        <div class="form-group">
            <label for="empname">Employee Name:</label>
            <input type="text" class="form-control" id="empname" placeholder="Enter name" name="empname" value="<?php foreach ($emp as $row) { echo $row->emp_name;} ?>" required>
        </div>
        <div class="form-group">
            <label for="gender">Gender</label>
            <select class="form-control" name="gender" id="gender" onchange="set()"  required>
                <option value="">Select gender</option>
                <option value="1"<?php foreach ($emp as $row){ if($row->emp_gender=='1'){ echo 'selected';}} ?>>Male</option>
                <option value="2"<?php foreach ($emp as $row){ if($row->emp_gender=='2'){ echo 'selected';}} ?>>Female</option>
            </select>
        </div>
        <div class="form-group">
            <label for="status">Relationship Status:</label>
            <select class="form-control" name="status" id="status" onchange="set()" required>
                <option value="">Select your relationship status</option>
                <option value="1" <?php foreach ($emp as $row){ if($row->status=='1'){ echo 'selected';}} ?>>Single</option>
                <option value="2"<?php foreach ($emp as $row){ if($row->status=='2'){ echo 'selected';}} ?>>Married</option>
                <option value="3"<?php foreach ($emp as $row){ if($row->status=='3'){ echo 'selected';}} ?>>Engaged</option>
                <option value="4"<?php foreach ($emp as $row){ if($row->status=='4'){ echo 'selected';}} ?>>In a relationship</option>
                <option value="5"<?php foreach ($emp as $row){ if($row->status=='5'){ echo 'selected';}} ?>>Waiting for a miracle</option>

            </select>
        </div>
        <div class="form-group">
            <label for="address">Address:</label>
            <input type="text" class="form-control" id="address" placeholder="Enter address" name="address" value="<?php foreach ($emp as $row){ echo $row->address;} ?>" required>
        </div>
        <div class="form-group">
            <label for="phonenumber">Phone Number:</label>
            <input type="tel" class="form-control" pattern="[0-9]{10}" id="phonenumber" placeholder="Enter phone number" name="phonenumber" value="<?php foreach ($emp as $row){ echo $row->phone_number;} ?>"required>
        </div>
        <div class="form-group">
            <label for="skills">Skills</label>
            <div class="checkbox">
                <label><input type="checkbox" name="css"  value="css" <?php foreach ($emp as $row){ if($row->css=='1'){ echo 'checked';}} ?>  id="css">CSS</label>

            <div class="checkbox">
                <label><input type="checkbox" name="html" value="html" <?php foreach ($emp as $row){ if($row->html=='1'){ echo 'checked';}} ?> id="html">HTML</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="javascript" value="javascript" <?php foreach ($emp as $row){ if($row->javascript=='1'){ echo 'checked';}} ?>  id="javascript">JAVASCRIPT</label>
            </div>
            <div class="checkbox">
                <label><input type="checkbox" name="php" value="php" <?php foreach ($emp as $row){ if($row->php=='1'){ echo 'checked';}} ?>  id="php">PHP</label>
            </div>
        </div>
        <br>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
<hr>

<br>
<br>
<br>
<br>
<ul>
    <li><a href="#home"></a></li>
    <li style="float:right"><a class="active" href="#about"></a></li>
</ul>

</body>
</html>
