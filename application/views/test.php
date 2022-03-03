<?php include'templates/header.php';
?>
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
                        Name : <input type="text" name="name" id="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : '' ?>"><br> <br><br>
                       <span class="text-danger"> <?php echo form_error('name')?></span>
                        Email : <input type="text" name= "email"value="<?php echo isset($_POST['email']) ? $_POST['email'] : '' ?>"><br><br>
                       <span class="text-danger"> <?php echo form_error('email')?></span> 
                        <span class="text-danger"> <?php if($message){echo $message;}else{echo "";}?></span><br>
                        Phone : <input type="text" id="phone" name = "phone"value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : '' ?>" ><br> <br> <br>
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
        <script>
          document.getElementById('phone').addEventListener('blur',function(){
            var phone = this.value;
            var break_phone = phone.substr(0,3)
            if(break_phone != "017" || break_phone != "019"){
                alert("Wrong formate of phone number");
            }
          });
        </script>
<?php include'templates/footer.php';?>