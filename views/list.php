<!DOCTYPE html>
<html>
    <head>
        <title>Crud application - View user</title>
        <link rel="stylesheet" type="text/css" href="http://localhost/codeignitor_project/assets/css/bootstrap.css">
    </head>
    <body>
        <div class="navbar navbar-dark bg-dark">
            <div class="container">
                <a href="#" class="navbar-brand">CRUD APPLICATION</a>
            </div>
        </div>
        <div class="container" style="padding-top:10px;">
            <div class="col-md-12">
                <?php 
                $success = $this->session->userdata('success');
                if ($success != "") {
                ?>
                <div class="alert alert-success"><?php echo $success;?></div>
                <?php
                }
                ?>
                <?php 
                $failures = $this->session->userdata('failures');
                if ($failures != "") {
                ?>
                <div class="alert alert-success"><?php echo $failures; ?></div>
                <?php
                }
                ?>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="row">
                        <div class="col-6"><h3>View Users</h3></div>
                        <div class="col-6" style="text-align: right;">
                            <a href="<?php echo base_url().'index.php/users/create/'?>" class="btn btn-primary">Create</a>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>

            <div class="row">
                
                <div class = "col-md-8">
                    <table class="table table-striped">
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th width="60">Edit</th>
                            <th width="100">Delete</th>
                        </tr>
                        <?php if(!empty($users)) { foreach($users as $user)  {?>
                        <tr>
                            <td><?php echo $user['users_id']?></td>
                            <td><?php echo $user['name']?></tdh>
                            <td><?php echo $user['email']?></td>
                            <td>
                                <a href="<?php echo base_url().'index.php/users/edit/'.$user['users_id']?>" class="btn btn-primary">Edit</a>
                            </td>
                            <td>
                                <a href="<?php echo base_url().'index.php/users/delete/'.$user['users_id']?>" class="btn btn-danger">Delete</a>
                            </td>                        
                        </tr>
                        <?php } } else {?>
                        <tr>
                            <td colspan="5">Record not found</td>
                        </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>