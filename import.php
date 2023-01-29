<?php

include 'importExcel.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME</title>
    <link rel="stylesheet" href="import.css"> 
    <script src="https://kit.fontawesome.com/36e3dcef98.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="navbar">
        <div class="nav-head">
            <img src="images/mdm-logo.png" class="top-logo">
            <div class="menu" >
            <img src="images/menu-a.png" class="menu-a" id="menu-close" onclick="toggle()">
            </div>
        </div>
        <div class="nav-foot" id="nav-foot-a">
            <ul>
                <li><a href=""><i class="fa-solid fa-house"></i>&ensp; Dashboard </a></li>
                <li><i class="fa-solid fa-file"></i>&ensp; Files 
                    <div class="sub-menu">
                        <ul>
                        <li><a href="import.php"> Import </a></li>
                        <li><a href=""> Assign Work </a></li>
                        <li><a href=""> Send Items </a></li>
                        </ul>
                    </div>
                </li>
                <li><i class="fa-solid fa-book"></i>&ensp; Data Dictionary 
                    <div class="sub-menu">
                        <ul>
                        <li><a href=""> View Dictionary </a></li>
                        <li><a href=""> Value Master </a></li>
                        <li><a href=""> Attribute Master </a></li>
                        <li><a href=""> Create Template </a></li>
                        </ul>
                    </div>
                </li>
                <li><i class="fa-solid fa-list-ul"></i>&ensp; Catalouge 
                    <div class="sub-menu">
                        <ul>
                        <li><a href=""> Catalouge </a></li>
                        <li><a href=""> Quality Control </a></li>
                        <li><a href=""> Bulk Upload </a></li>
                        </ul>
                    </div>
                </li>
                <li><i class="fa-solid  fa-magnifying-glass"></i>&ensp; Search 
                    <div class="sub-menu">
                        <ul>
                        <li><a href=""> Search By DESC </a></li>
                        </ul>
                    </div>
                </li>
                <li><a href=""><i class="fa-solid fa-gears"></i>&ensp; Tools </a></li>
                <li><i class="fa-solid fa-file"></i>&ensp; Reports 
                    <div class="sub-menu">
                        <ul>
                        <li><a href=""> Tracking Reports </a></li>
                        <li><a href=""> Export </a></li>
                        <li><a href=""> Over All </a></li>
                        <li><a href=""> Invoice </a></li>
                        <li><a href=""> Summary Report </a></li>
                        <li><a href=""> User Report </a></li>
                        </ul>
                    </div>
                </li>
                <li><a href=""><i class="fa-solid fa-info"></i>&ensp; About </a></li>
                <div class="active"></div>
            </ul>
        </div>
        
        <div class="card">
            <div class="upload">
                <form method="POST" action="importExcel.php" enctype="multipart/form-data" >

                    <label for="input" class="label" accept=".csv">File Upload</label>

                    <input type="file" name="file" class="file" required="">

                    <button type="submit" name="Submit" class="btn"data-loading-text="Loading..."><i class="fa-solid fa-cloud-arrow-up"></i></button>

                </form>
            </div>
        </div>
    </div>
    <script src="./mdm.js"></script>
</body>
</html>