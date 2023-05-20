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
                <?php
                    $id=$_GET['id'];
                    $sql="select * from students where id=$id";
                    $rs=$mysqli->query($sql);
                    $r=$rs->fetch_object();
                ?>
                <form action="" method="post">
                    <div class="form-group">
                        <label for="">Name</label>
                        <input type="text" class="form-control" value="<?php echo $r->name; ?>" name="name" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Batch</label>
                        <input type="text" class="form-control" value="<?php echo $r->batch_no; ?>" name="batch_no" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Contact</label>
                        <input type="text" class="form-control" value="<?php echo $r->contact_no; ?>" name="contact_no" id="">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" value="<?php echo $r->email; ?>" name="email" id="">
                    </div>
                    <div class="form-group">
                        <button type="submit">Save</button>
                    </div>
                </form>
                <?php
                    if($_POST){
                        $name=$_POST['name'];
                        $batch_no=$_POST['batch_no'];
                        $contact_no=$_POST['contact_no'];
                        $email=$_POST['email'];
                        $sql="update students set name='$name', batch_no='$batch_no',
                        contact_no='$contact_no',email='$email' where id=$id";
                        $rs=$mysqli->query($sql);
                        if($rs){
                            header('location: index.php');
                        }else{
                            echo $mysqli->error;
                        }
                    }
                ?>
            </div>
        </div>
    </div>
</body>
</html>