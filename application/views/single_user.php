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
                    <form action="<?php echo base_url();?>" method="POST">
                        <?php 
                        foreach($single as $value){ 
                        ?>
                        <input type="hidden" name="id" value=<?php echo $value['id'];?>><br> <br>
                       <span class="text-danger"> <?php echo form_error('name')?></span>
                       Name : <input type="text" name="name" value=<?php echo $value['name'];?>><br> <br>
                       <span class="text-danger"> <?php echo form_error('name')?></span>
                        Email : <input type="text" name= "email"  value=<?php echo $value['email'];?>><br><br>
                       <span class="text-danger"> <?php echo form_error('email')?></span>                        
                        Phone : <input type="text" name = "phone"  value=<?php echo $value['phone'];?>><br><br>
                       <span class="text-danger"> <?php echo form_error('phone')?></span>
                        <input type="submit" value="Edit" class="btn btn-success">
                        <?php }?>
                    </form>
                    </div>
                </div>
            </div>
        </div>
<?php include'templates/footer.php';?>