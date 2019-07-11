<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_EmpController extends CI_Controller
{


    /* Insert Employee Details*/

    public function insert()
    {
        if (isset($_POST['empname'])) {
            $name = $_POST['empname'];
            $gender = $_POST['gender'];
            $status = $_POST['status'];
            $address = $_POST['address'];
            $phonenumber = $_POST['phonenumber'];
            if (isset ($_POST['css'])) {
                $css = 1;
            } else {
                $css = 0;
            }
            if (isset ($_POST['html'])) {
                $html = 1;
            } else {
                $html = 0;
            }
            if (isset ($_POST['javascript'])) {
                $javascript = 1;
            } else {
                $javascript = 0;
            }
            if (isset ($_POST['php'])) {
                $php = 1;
            } else {
                $php = 0;
            }
            $this->load->model('AddEmployee');

            $this->AddEmployee->add_employee($name, $gender, $status, $address, $phonenumber, $css, $html, $javascript, $php);


        }


        $this->load->view('add_emp_form');
    }

    public function info()
    {

        $this->load->model('AddEmployee');

        $data['emp'] = $this->AddEmployee->tabledata();

        $this->load->view('employee_info', $data);

    }

    /*Delete Employee Information*/
    public function delete()
    {

        if (isset($_POST['deleteInforamation'])) {

            $this->load->model('AddEmployee');

            $this->AddEmployee->delete($_POST['deleteInforamation']);
        }
        redirect('Add_EmpController/info');

    }

    /*View Update Employee Information*/

    public function update()
    {

        $this->load->model('AddEmployee');

        $data['emp'] = $this->AddEmployee->updateInfo($_GET['updateInformation']);
        $this->load->view('update_info',$data);

    }

    /*Update Employee Information*/

    public function updateInfo(){

        if (isset($_POST['empid'])) {

            $name = $_POST['empname'];
            $gender = $_POST['gender'];
            $status = $_POST['status'];
            $address = $_POST['address'];
            $phonenumber = $_POST['phonenumber'];
            if (isset ($_POST['css'])) {
                $css = 1;
            } else {
                $css = 0;
            }
            if (isset ($_POST['html'])) {
                $html = 1;
            } else {
                $html = 0;
            }
            if (isset ($_POST['javascript'])) {
                $javascript = 1;
            } else {
                $javascript = 0;
            }
            if (isset ($_POST['php'])) {
                $php = 1;
            } else {
                $php = 0;
            }

            $this->load->model('AddEmployee');

            $this->AddEmployee->updateEmp($_POST['empid'],$name, $gender, $status, $address, $phonenumber, $css, $html, $javascript, $php);
        }
        redirect('Add_EmpController/info');


    }





}
