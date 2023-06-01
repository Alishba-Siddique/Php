<?php 
    $users = array(
        array('Ali'     ,'Model Town, Lahore' ,  'ali@hotmail.com'    ,  '090078601' ),
        array('Basim'   , 'Township, Lahore'  , 'basim01@gmail.com'   ,  '090078602' ),
        array('Careem'  ,'Joher Town, Lahore' , 'careem22@gmail.com'  ,  '090078603' ),
        array('Danish'  ,'Bahria Town, Lahore', 'danish32@yahoo.com'  ,  '090078604' ),
        array('Ejaz'    ,'Garden Town, Lahore',  'ejaz56@gmail.com'   ,  '090078605' ),
        array('Faheem'  , 'Rana Town, Lahore'  , 'faheem56@gmail.com' ,  '090078605' )
    );
    
    echo '<table border="3" width =500px  style = "text-align: center;"> ';
    echo '<tr>
            <th>Name</th>
            <th>Adress</th>
            <th>Email</th>
            <th>Phone</th>
          </tr>';
    foreach( $users as $user )
    {
        echo '<tr>';
        foreach( $user as $key )
        {
            echo '<td>'.$key.'</td>';
        }
        echo '</tr>';
    }
    echo '</table>';
?>

<?php
    session_start();
    require 'dbconn.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Client CRUD</title>
</head>
<body>
    <?php echo "<button><a href='logout.php'>Logout</a></button>"; ?>
    <div class="container mt-4">

        <?php include('message.php'); ?>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Client Details
                            <a href="client-create.php" class="btn btn-primary float-end">Add Clients</a>
                        </h4>
                    </div>
                    <div class="card-body">

                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Client Name</th>
                                    <th>Client Address</th>
                                    <th>Client Email</th>
                                    <th>Client Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    $query = "SELECT * FROM clients";
                                    $query_run = mysqli_query($conn, $query);

                                    if(mysqli_num_rows($query_run) > 0)
                                    {
                                        foreach($query_run as $client)
                                        {
                                            ?>
                                            <tr>
                                                <td><?= $client['id']; ?></td>
                                                <td><?= $client['name']; ?></td>
                                                <td><?= $client['address']; ?></td>
                                                <td><?= $client['email']; ?></td>
                                                <td><?= $client['phone']; ?></td>
                                                <td>
                                                    <a href="client-edit.php?id=<?= $client['id']; ?>" class="btn btn-success btn-sm">Edit</a>
                                                    <form action="code.php" method="POST" class="d-inline">
                                                        <button type="submit" name="delete_client" value="<?=$client['id'];?>" class="btn btn-danger btn-sm">Delete</button>
                                                    </form>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                    }
                                    else
                                    {
                                        echo "<h5> No Record Found </h5>";
                                    }
                                ?>
                                
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    

</body>
</html>