<!DOCTYPE html>
<html>
    <head>
        <title>Crud application - Update user</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/codeignitor_project/assets/css/bootstrap.css">
        <body>
            <div class="navbar navbar-dark bg-dark">
                <div class="container">
                    <a href="#" class="navbar-brand">CRUD APPLICATION</a>
                </div>
            </div>
            <div class="container" style="padding-top:10px;">
                <h3>Update User</h3>
                <hr>
                <form method="post" name="createuser" action="<?php echo base_url().'index.php/users/edit/'.$users['users_id'];?>">                
                <div class="row">
                    <div class="col-md-6">
                        <div class=form-group>
                            <label>Name</label>
                            <input type="text" name="name" value="<?php echo set_value('name',$users['name']);?>" class="form-control">
                            <?php echo form_error('name');?>
                        </div>
                        <div class=form-group>
                            <label>Email</label>
                            <input type="text" name="email" value="<?php echo set_value('email',$users['email']);?>" class="form-control">
                            <?php echo form_error('email');?>
                        </div>
                        <div class=form-group>
                            <button class="btn btn-primary">Update</button>
                            <a href="<?php echo base_url().'index.php/users/index';?>" class="btn-secondary btn">Cancel</a>
                        </div>                                                
                    </div>
                </div>
            </form>
            </div>
        </body>
    </head>
</html>