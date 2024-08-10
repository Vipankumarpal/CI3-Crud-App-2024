
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Application - Create Student</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css';?>" >
</head>
<body>
   <!--  <div class="navbar navbar-dark bg-dark">
        <div class="container">
            <a href="#" class="navbar-brand">Crud Application</a>
        </div>
    </div> -->
    <div class="container pt-3">

        
        <h3>Create Student</h3>
        <hr>
        <div class="modal-body">

        <form name="createStudent" id="createStudent" method="post" action="<?php echo base_url().'Student/create'; ?>">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group mb-3">
                    <label>Name</label>
                    <input type="text" name="name" id="name" value="<?php echo set_value('name'); ?>" class="form-control">
                    
                    <p class="nameError"></p>
                </div>
                <div class="form-group mb-3">
                    <label>Class</label>
                    <input type="text" name="class" id="class" value="<?php echo set_value('class'); ?>" class="form-control">
                    
                    <p class="classError"></p>
                </div>
                <div class="form-group mb-3">
                    <label>Roll No</label>
                    <input type="text" name="rollno" id="rollno" value="<?php echo set_value('rollno'); ?>" class="form-control">
                    
                    <p class="rollnoError"></p>
                </div>
                <div class="form-group mb-3">
                    <label>Phone</label>
                    <input type="tel" name="phone" id="phone" maxlength="10" value="<?php echo set_value('phone'); ?>" class="form-control">
                    
                    <p class="phoneError"></p>
                </div>
                <div class="form-group mb-3">
                    <label>Email</label>
                    <input type="email" name="email" id="email" value="<?php echo set_value('email'); ?>" class="form-control">
                  
                    <p class="emailError"></p>
                </div>

                <div class="form-group mb-3">
                    <label>Address</label>
                    <input type="text" name="address" id="address" value="<?php echo set_value('address'); ?>" class="form-control">
                    
                    <p class="addressError"></p>
                </div>
                
            </div>
        </div>
       
        </div>
          <div class="modal-footer">
            <a href="<?php echo base_url().'Student/index'; ?>" class="btn btn-secondary">Cancel</a>
            <button type="submit" class="btn btn-primary">Create</button>
          </div>
           </form>
    </div>
</body>
</html>