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
                    <form action="">
                    Name : <input type="text" name="name"><br> <br>
                    Email : <input type="text" name= "email"><br><br>
                    Phone : <input type="text" name = "phone"><br><br>
                    <input type="submit" value="Add" class="btn btn-success">
                    </form>
                    </div>
                </div>
            </div>
        </div>
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
                            <td><a href="" class="btn btn-danger">Edit</a></td>
                            <td><a href="" class="btn btn-danger">Delete</a></td>
                        </tr>
                    <?php 
                    }
                    ?>
                </table>
            </div>
        </div>
    </div>
<?php include'templates/footer.php';?>