<?php 

session_start();

	if(empty($_SESSION['login'])){
		header("Location: ../userlogin/userlogin.php");
	}

	if(isset($_GET['#logout'])){
		session_destroy();
		header("Location: ../userlogin/userlogin.php");
	}
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>BBaccess Dashboard</title>
        <link rel="icon" href="../image/newlogo.png">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div class="sidebar">
        <div class="top">
            <div class="logo">
                <img src="../image/newlogo.png" class="BBlogo">
                <span>BBAccess Account</span>
            </div>
            <i class="bx bx-menu" id="btn"></i>
        </div>
        <hr class="mb-3">
        <div class="user">
            <img src="../image/585e4beacb11b227491c3399.png" alt="me" class="user-img">
            <div>
                <p>Hello, Welcome</p>
                <p class="bold"><?php echo $_SESSION['username']?></p>
            </div>
        </div>
        <ul>
            <li>
                <a href="registerpet.php">
                    <i class="bx bxs-dashboard"></i>
                    <span class="nav-item">Register Pet</span>
                </a>
                <span class="tooltip">Register Pet</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-home"></i>
                    <span class="nav-item">My Pet</span>
                </a>
                <span class="tooltip">My Pet</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-cart"></i>
                    <span class="nav-item">Schedule</span>
                </a>
                <span class="tooltip">Schedule</span>
            </li>
            <li>
                <a href="#gallery">
                    <i class="bx bxs-shopping-bags"></i>
                    <span class="nav-item">Transaction</span>
                </a>
                <span class="tooltip">Transaction</span>
            </li>
            <li>
                <a href="#">
                    <i class="bx bxs-bulb"></i>
                    <span class="nav-item">About</span>
                </a>
                <span class="tooltip">About</span>
            </li>
            <li>
                <a href="logout.php">
                    <i class="bx bxs-log-out"></i>
                    <span class="nav-item" id="logout">Logout</span>
                </a>
            <span class="tooltip">Logout</span>
            </li></ul>
    </div>



    <div class="main-content">
        <div class="container">
            <h1>BB access Dashboard</h1>
        </div>
        
    </div>

    
</body>  

<script>
    let btn = document.querySelector('#btn');
    let sidebar = document.querySelector('.sidebar');

    btn.onclick = function () {
        sidebar.classList.toggle('active');
    };
</script>

</html>