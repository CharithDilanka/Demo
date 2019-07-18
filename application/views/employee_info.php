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
    <li style="float:right"><a class="active" href="<?php echo site_url('Add_EmpController/insert');?>">Back</a></li>
</ul>
<!--
    Employee Information Table
-->

<table class="table table-dark">
    <thead>
    <tr>
        <th scope="col">Employee Id</th>
        <th scope="col">Employee Name</th>
        <th scope="col">Gender</th>
        <th scope="col">Status</th>
        <th scope="col">Address</th>
        <th scope="col">Phone Number</th>
        <th scope="col">CSS</th>
        <th scope="col">HTML</th>
        <th scope="col">JAVASCRIPT</th>
        <th scope="col">PHP</th>
        <th scope="col">Update</th>
        <th scope="col">Delete</th>

    </tr>
    </thead>

    <tbody>
    <?php foreach($query->result() as $row){
        echo '
    
    <tr>
        <th scope="row">'.$row->emp_id.'</th>
        <td>'.$row->emp_name.'</td>';

        if ($row->emp_gender==1){
            echo '<td>Male</td>';
        }
        else if($row->emp_gender==2)
        {
            echo '<td>Female</td>';
        }

        if ($row->status==1){
            echo '<td>Single</td>';
        }
        else if($row->status==2)
        {
            echo '<td>Married</td>';
        }
        else if($row->status==3)
        {
            echo '<td>Engaged</td>';
        }
        else if($row->status==4)
        {
            echo '<td>In a relationship</td>';
        }
        else if($row->status==5)
        {
            echo '<td>Waiting for a miracle</td>';
        }

        echo '
        <td>'.$row->address.'</td>
        <td>'.$row->phone_number.'</td>';

        if ($row->css==1){
            echo '<td>+</td>';
        }
        else
        {
            echo '<td>-</td>';
        }

        if ($row->html==1){
            echo '<td>+</td>';
        }
        else
        {
            echo '<td>-</td>';
        }

        if ($row->javascript==1){
            echo '<td>+</td>';
        }
        else
        {
            echo '<td>-</td>';
        }

        if ($row->php==1){
            echo '<td>+</td>';
        }
        else {
            echo '<td>-</td>';
        }

        echo '<td><input type="button" class="btn btn-outline-success" id="'.$row->emp_id.'" value="Update" onclick="updateInfo('.$row->emp_id.')"></td>
        <td><input type="button" class="btn btn-outline-danger" id="'.$row->emp_id.'" value="Delete" onclick="deleteInfo('.$row->emp_id.')"></td></tr>';
            }?>

    </tbody>
</table>

<?php

    echo $this->pagination->create_links();

?>


<div style="display: none;">
    <form action="<?php echo base_url('index.php/Add_EmpController/update')?>" method="get" id="updateInformation">
        <input type="text" name="updateInformation" id="update">
    </form>
</div>

<div style="display: none;">
    <form action="<?php echo base_url('index.php/Add_EmpController/delete')?>" method="post" id="deleteInforamation">
        <input type="text" name="deleteInforamation" id="delete">
    </form>
</div>




</body>
</html>

<script>
function deleteInfo(id) {

document.getElementById("delete").value = id;

document.getElementById("deleteInforamation").submit();
}

function updateInfo(id) {

document.getElementById("update").value = id;

document.getElementById("updateInformation").submit();
}

</script>

<!--Alert-->

<script>

    window.onload = function(e){
        var x="<?php if(isset($_SESSION['success'])){ echo $_SESSION['success'];}?>";
        if("1"==x){
            swal("Successful!", "Delete successful!", "success");
            <?php $this->session->set_flashdata("success",null); ?>
        }else if("2"==x){
            swal("Successful!", "Update successful!", "success");
            <?php $this->session->set_flashdata("success",null); ?>
        }
    }

</script>
