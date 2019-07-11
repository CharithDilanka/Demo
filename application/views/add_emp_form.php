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
        <h2 style="text-align: center;">Insert Employee Details</h2>
        <form action="insert" method="post">
            <div class="form-group">
                <label for="empname">Employee Name:</label>
                <input type="text" class="form-control" id="empname" placeholder="Enter name" name="empname"required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <select class="form-control" name="gender" id="gender" onchange="set()" required>
                    <option value="">Select gender</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="status">Relationship Status:</label>
                <select class="form-control" name="status" id="status" onchange="set()" required>
                    <option value="">Select your relationship status</option>
                    <option value="1">Single</option>
                    <option value="2">Married</option>
                    <option value="3">Engaged</option>
                    <option value="4">In a relationship</option>
                    <option value="5">Waiting for a miracle</option>

                </select>
            </div>
            <div class="form-group">
                <label for="address">Address:</label>
                <input type="text" class="form-control" id="address" placeholder="Enter address" name="address"required>
            </div>
            <div class="form-group">
                <label for="phonenumber">Phone Number:</label>
                <input type="tel" class="form-control" pattern="[0-9]{10}" id="phonenumber" placeholder="Enter phone number" name="phonenumber"required>
            </div>
            <div class="form-group">
                <label for="skills">Skills</label>
                <div class="checkbox">
                    <label><input type="checkbox" name="css" id="css">CSS</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="html" id="html">HTML</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="javascript" id="javascript">JAVASCRIPT</label>
                </div>
                <div class="checkbox">
                    <label><input type="checkbox" name="php" id="php">PHP</label>
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

<!--Alert-->

<script>

    window.onload = function(e){
        var x="<?php if(isset($_SESSION['success'])){ echo $_SESSION['success'];}?>";
        if("1"==x){
            swal("Successful!", "Registration successful!", "success");
            <?php $this->session->set_flashdata("success",null); ?>
        }
    }

</script>
