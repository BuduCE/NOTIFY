<?php
$umail="";
if(isset($_POST["submit"]))
{
    $umail=$_POST["umail"];
    $conn=new mysqli("	i2cpbxbi4neiupid.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","hod1e44ybrm19fne","	k3dy7arlaoek4mpp","fv5kqyr36zg9yp1a");
    $cmd="INSERT into registration value('$umail');";
    if (mysqli_query($conn, $cmd))
    {
    echo "sucessfully";
    }
    else
    {
    echo "Not Save";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Designer'sPortfolio</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    </head>
    <body>
        <section class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 container" style="padding-left: 15%;padding-top: 10%">
                    <img src="./images/logo.png">
                    <h2 style="color: #203893;font-weight:bold;height: 88px;font-size: 72px;">NOTIFY</h2>
                    <p>A Customized, Unified Space for<br>all your<span style="color: #203893;">Social Media Notifications</span></p>
                    <p style="color: #203893; font-size: 30px; font-weight: bold; height: 88px;">Coming Soon</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12" style="background: #F5F7F7; text-align: center;">
                    <img src="./images/phone.png" class="p-5">
                </div>
            </div>
        </section>

        <footer class="container-fluid p-5" style="background: #C7CFEE;">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <img src="./images/socials.png ">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12" style="padding-left: 15%;padding-top: 10%">
                    <img src="./images/logo.png">
                    <h2 style="color: #203893;font-weight:bold;height: 88px;font-size: 72px;">NOTIFY</h2>
                    <p>I bet you would love to be<br>notified when this app launches</p>
                    <form method = "post">    
                        <input type="email" name="umail" placeholder="enter email">
                        <input type="submit" name="submit">
                    </form>    
                </div>
            </div>

        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    </body>
</html>