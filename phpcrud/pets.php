
<?php
       
       include('connection.php');
       include('header.php');
       
        ?>  
<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">PHP CRUD using MySQLi Database</a>
            </div>
     
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Users</a>
                    </li>
                    <li class="active">
                        <a href="pets.php"><i class="fa fa-fw fa-dashboard"></i> Pets</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                         PHP CRUD With Datatables Using Twitter Bootstrap
                        </h1>
                       
                    </div>
                </div>
                <!-- /.row -->


             <div class="col-lg-12">
                        <h2>List of Records</h2> <a href="add.php?action=add" type="button" class="btn btn-xs btn-info">Add New</a>
                                
                        <div class="table-responsive">
                            <table class="table table-bordered table-hover table-striped">
                                <thead>
                                    <tr>
                                    <th>Pet ID</th>
                                        <!-- Paltan Owner ID to Owner name gamit inner join soon -->
                                        <th>Owner ID</th>
                                        <th>Pet Name</th>
                                        <th>Breed</th>
                                        <th>Gender</th>
                                        <th>Birthdate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                 <?php                  
                $sql = "SELECT * FROM pets";
                $stmt = $conn->prepare($sql);
                
                if ($stmt->execute()) {
                    $result = $stmt->get_result();
                }
                    while ($row = $result->fetch_assoc()) {
                                             
                            echo '<tr>';
                            echo '<td>'. $row['petid'].'</td>';
                            echo '<td>'. $row['ownerid'].'</td>';
                            echo '<td>'. $row['petname'].'</td>';
                            echo '<td>'. $row['breed'].'</td>';
                            echo '<td>'. $row['gender'].'</td>';
                            echo '<td>'. $row['birthdate'].'</td>';
                            echo '<td> <a  type="button" class="btn btn-xs btn-warning" href="edit.php?action=edit & petid='.$row['petid'] . '"> EDIT </a> ';
                            echo ' <a  type="button" class="btn btn-xs btn-danger" href="del.php?type=users&delete & petid=' . $row['petid'] . '">DELETE </a> </td>';
                            echo '</tr> ';
                }
            ?> 
                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                
            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="js/plugins/morris/raphael.min.js"></script>
    <script src="js/plugins/morris/morris.min.js"></script>
    <script src="js/plugins/morris/morris-data.js"></script>

</body>

</html>
        
