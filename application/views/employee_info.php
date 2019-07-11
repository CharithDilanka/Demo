<!DOCTYPE html>
<html>
<head>
    <title>Add Employee Details</title>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/style.css">
    <script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style ="background-color: lightslategray" >

<ul>
    <li><a href="#home">Dilanka Enterprices</a></li>
    <li style="float:right"><a class="active" href="<?php echo site_url('Add_EmpController/insert');?>">Back</a></li>
</ul>


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
    <?php foreach($emp as $row){
        echo '
    
    <tr>
        <th scope="row">'.$row->emp_id.'</th>
        <td>'.$row->emp_name.'</td>
        <td>'.$row->emp_gender.'</td>
        <td>'.$row->status.'</td>
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

<div style="display: none;">
    <form action="update" method="get" id="updateInformation">
        <input type="text" name="updateInformation" id="update">
    </form>
</div>

<div style="display: none;">
    <form action="delete" method="post" id="deleteInforamation">
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