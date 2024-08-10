<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application - Update Student</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>" >
</head>
<body>
    <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Crud Application</a>
        </div>
    </div>
    <div class="container pt-3">
        <h3>Update Student</h3>
        <hr>
        <form name="createStudent" method="post" action="<?php echo base_url().'student/edit/'.$student['id']; ?>">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo set_value('name',$student['name']); ?>" class="form-control">
                    <?php echo form_error('name'); ?>
                </div>

                <div class="form-group mb-3">
                    <label>Class</label>
                    <input type="text" name="class" value="<?php echo set_value('class',$student['class']); ?>" class="form-control">
                    <?php echo form_error('class'); ?>
                </div>

                <div class="form-group mb-3">
                    <label>Roll No</label>
                    <input type="text" name="rollno" value="<?php echo set_value('rollno',$student['rollno']); ?>" class="form-control">
                    <?php echo form_error('rollno'); ?>
                </div>

                 <div class="form-group mb-3">
                    <label>Phone</label>
                    <input type="text" name="phone" value="<?php echo set_value('phone',$student['phone']); ?>" class="form-control">
                    <?php echo form_error('phone'); ?>
                </div>


                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo set_value('email',$student['email']); ?>" class="form-control">
                    <?php echo form_error('email'); ?>
                </div>

                <div class="form-group mb-3">
                    <label>Address</label>
                    <input type="text" name="address" value="<?php echo set_value('address',$student['address']); ?>" class="form-control">
                    <?php echo form_error('address'); ?>
                </div>


                <div class="form-group mb-3">
                <button class="btn btn-primary">Update</button>
                <a href="<?php echo base_url().'Student/index'; ?>" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
        </form>
    </div>
</body>
</html>