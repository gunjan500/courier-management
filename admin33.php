<?php
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    
</body>
</html>

<div class="content-wrapper">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Dashboard</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                        <li class="breadcrumb-item active">Booking Details</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
               
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Booking Details</h3>
                        
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body">
                        <?php 
                        if (isset($_SESSION['SUCCESS'])&& $_SESSION['SUCCESS'] !='')
                        {
                            echo '<h2> '.$_SESSION['SUCCESS']. '</h2>';
                            unset($_SESSION['SUCCESS']);
                        }
                        ?>
                        
                        <table class="table table-dark table-striped">
                            <thead>
                                <tr>
                                    <th>Senders name</th>
                                   
                                    
                                    <th>Senders phone</th>
                                    <!-- <th>Senders address </th>
                                    <th>Senders postalcode</th> -->
                                    <th>Recievers name</th>
                                   
                                    
                                    <th>Recievers phone</th>
                                    <!-- <th>Recievers address </th>
                                    <th>Recievers postalcode</th> -->
                                    <th>Order status</th>
                                    <th>Tracking id</th>
                                    
                                    <th>Action</th>                                  
                                                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $connection = mysqli_connect('localhost', 'root', '', 'tours');
                                    $query = "SELECT * FROM order_reg";
                                    $query_run = mysqli_query($connection, $query);

                                    if (mysqli_num_rows($query_run) > 0) 
                                    {
                                        foreach ($query_run as $row ) {
                                ?>
                                <tr>
                                    <td>
                                        <?php echo $row['n1'];?>
                                        </td>

                                        <td>
                                        <?php echo $row['p1']; ?>
                                    </td>
                                   
                
                                    <td>
                                        <?php echo $row['n2']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['p2']; ?>
                                    </td>
                                   
                                    <td>
                                        <?php echo $row['order_status']; ?>
                                    </td>
                                    <td>
                                        <?php echo $row['tracking_id']; ?>
                                    </td>
                                    <td>
                                        <form action="delete33.php" method="post" >
                                            <input type="text" name="delete1" value="<?php echo $row['order_status'];?>">
                                            <button type="submit" name="delete_btn" class="btn-danger">UPDATE</button>  
                                            <input type="hidden" name="delete" value="<?php echo $row['tracking_id'];?>">
                                        </form>                      
                                        </td>

                                    
                                   
                                </tr>
                                <?php
                                        }        
                                    } else {
                                        ?>
                                <tr>
                                    <td>No records found!</td>
                                </tr>
                                <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
