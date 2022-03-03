<?php include'templates/header.php';?>
<body>
    <br><br>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php echo base_url().'create'?>" class="btn btn-success">Create User</a>
            </div>
        </div>
    <?php
        $session = $this->session->userdata('add');
        $session = $this->session->userdata('update');
        $session = $this->session->userdata('delete');
        if($session != ''){
        ?>
        <div class="alert alert-success my-2">
            <?php
                echo $session;
            ?>
        </div>
    <?php 
        }
    ?>
        <div class="row">
            <div class="col">
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Action</th>

                    </tr>
                    <?php
                        foreach($test as $value){
                    ?>
                        <tr>
                            <td><?php echo $value['id'];?></td>
                            <td><?php echo $value['name'];?></td>
                            <td><?php echo $value['email'];?></td>
                            <td><?php echo $value['phone'];?></td>
                            <td><a href="edit/<?php echo $value['id']?>" class="btn btn-warning">Edit</a></td>
                            <td><a href="delete/<?php echo $value['id']?>" class="btn btn-danger" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php 
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
    <script>
        function formValidation(){
            let x = document.getElementById("name").value;
            let y = document.getElementById("email").value;
            let z = document.getElementById("phone").value;
            if (x == "" || y == "" || z == "") {
                alert("All field must be filled out");
                return false;
            }
        }
    </script>
    
<?php include'templates/footer.php';?>