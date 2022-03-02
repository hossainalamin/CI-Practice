<?php include'templates/header.php';?>
<body>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                    <form action="<?php echo base_url()."insert_data"?>" method="POST">
                        Name : <input type="text" name="name"><br> <br>
                       <span class="text-danger"> <?php echo form_error('name')?></span>
                        Email : <input type="text" name= "email"><br><br>
                       <span class="text-danger"> <?php echo form_error('email')?></span>                        
                        Phone : <input type="text" name = "phone"><br><br>
                       <span class="text-danger"> <?php echo form_error('phone')?></span>
                        <input type="submit" value="Add" class="btn btn-success">
                    </form>
                    <form action="http://localhost/codeignator-ci/bcit-ci-CodeIgniter-b73eb19/index.php/Test/index" method="POST">
                        <input type="submit" value="Home" class="btn btn-primary my-2">
                    </form>
                    </div>
                </div>
            </div>
        </div>
<?php include'templates/footer.php';?>