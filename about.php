<!DOCTYPE html>
<html>
<?php include('bar.php');?>
<head>
<style>
    * {
    box-sizing: border-box;
    }
    body {
            background: linear-gradient(to left, rgba(236, 0, 140, .7), rgba(252, 103, 103, .7));
        }
    .column {
    float: left;
    width: 33.33%;
    padding: 80px;
    height: 300px; 
    }

    .row:after {
    content: "";
    display: table;
    clear: both;
    }

    .icon {
    padding: 10px;
    background: dodgerblue;
    color: white;
    min-width: 50px;
    text-align: center;
    }
</style>
</head>
<body>
    <center>
    <h1>About US</h1>
    <h2>Design and Developed by:-</h2>
    </center>
    <div class="row">
    <div class="column" style="background-color:Tan;">
        <p>Name: CHIRANJEEVI</p>
        <p>Phno: 8270802248</p>
        <p>Email: madireddy.csk0123@gmail.com</p>
    </div>
    <div class="column" style="background-color:wheat;">
        <p>Name: SAI NIKHIL RAGA</p>
        <p>Phno: 9494476534</p>
        <p>Email: raga.sainikhil@gmail.com</p>
    </div>
    <div class="column" style="background-color:#FFEBCD;">
        <p>Name: Manishankar</p>
        <p>Phno: 7095235266</p>
        <p>Email: k.manishankar44@gmail.com</p>
    </div>
    </div>
</body>
</html>

