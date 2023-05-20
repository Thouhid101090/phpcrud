<?php require_once('connection.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <a href="create.php">Add New</a>
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Batch</th>
                        <th>Contact</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $sql="select * from students";
                        $result=$mysqli->query($sql);
                        if($result->num_rows > 0){
                            while($r=$result->fetch_object()){
                    ?>
                                <tr>
                                    <td><?php echo $r->id; ?> </td>
                                    <td><?php echo $r->name; ?></td>
                                    <td><?php echo $r->batch_no; ?></td>
                                    <td><?php echo $r->contact_no; ?></td>
                                    <td><?php echo $r->email; ?></td>
                                    <td>
                                        <a href="edit.php?id=<?php echo $r->id; ?>"> Update</a>
                                        <a href="delete.php?id=<?php echo $r->id; ?>"> Delete</a>
                                    </td>
                                </tr>

                    <?php   }
                        }
                    ?>
                </table>
            </div>
        </div>
    </div>
</body>
</html>