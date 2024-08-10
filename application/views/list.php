<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application - Student List</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>" >
    <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-3.6.4.min.js';?>"></script>
    <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.min.js';?>"></script>
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Crud Application</a>
        </div>
    </div>
    <div class="container my-3">
        <div class="row">
            <div class="col-md-12">
                <?php 
                $success = $this->session->userdata('success');
                if($success != ""){
                    ?>
                    <div class="alert alert-success"><?php echo $success ?></div>
               <?php } ?>

               <?php 
                $failure = $this->session->userdata('failure');
                if($failure != ""){
                    ?>
                    <div class="alert alert-danger"><?php echo $failure ?></div>
               <?php } ?>
                
            </div>
        </div>
        <!-- <h3 class="float-start my-3" >Users List</h3><a href="<?php //echo base_url().'user/create'; ?>" class="float-end btn btn-primary my-3">Create</a> -->

        <h3 class="float-start my-3" >Student List</h3><a href="<?php echo base_url().'Student/create';?>" class="float-end btn btn-primary my-3">Create</a>

        <table class="table table-hover table-bordered table-striped">
            <thead>
                <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Class</th>
                <th>Roll No</th>
                <th>Phone</th>
                <th>Email</th>
                <th>Address</th>
                <th>Action</th>
               
                </tr>
            </thead>
            <tbody>
                
                <?php if(!empty($student)) { foreach($student as $stud) { ?>
                <tr>
                <th><?php echo $stud['id']; ?></th>
                <td><?php echo $stud['name']; ?></td>
                <td><?php echo $stud['class']; ?></td>
                <td><?php echo $stud['rollno']; ?></td>
                <td><?php echo $stud['phone']; ?></td>
                <td><?php echo $stud['email']; ?></td>
                <td><?php echo $stud['address']; ?></td>
                <td>
                    <a href="<?php echo base_url().'Student/edit/'.$stud['id']; ?>" class="btn btn-primary">Edit</a>
                    <a href="<?php echo base_url().'Student/delete/'.$stud['id']; ?>" class="btn btn-danger">Delete</a>
                </td>
                
                </tr>
                <?php } }
                 else{ 
                    ?>
                    <div class="row">
                        <div class="col-md-12">
                        <div class="alert alert-danger">Records Not Found!
                            
                        </div>
                        </div>
                    </div>
                    
                <?php  } ?>
                
            </tbody>
            </table>
    </div>

    
</body>
</html>