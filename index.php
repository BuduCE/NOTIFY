<?php
$umail="";
if(isset($_POST["submit"]))
{
    $umail=$_POST["umail"];
    $conn=new mysqli("i2cpbxbi4neiupid.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","hod1e44ybrm19fne","k3dy7arlaoek4mpp","fv5kqyr36zg9yp1a");
    $cmd="INSERT into registration value('$umail');";
    if (mysqli_query($conn, $cmd))
    {
    echo "Successfully done";
    }
    else
    {
    echo "Unsucessful. Try again";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>NOTIFY</title>

        <link rel="stylesheet" href="style.css" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    </head>
    <body>
        <section class="container-fluid">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 container" style="padding-left: 10%;padding-top: 5%;animation-name: first;animation-duration: 2s;">
                    <img src="./images/logo.png">
                    <h1 style="color: #203893;font-weight:bold;height: 88px;font-size: 400%;">Notify</h1>
                    <p style="height:74px; font-size: 100%;">A Customized, Unified Space for<br>all your<span style="color: #203893;height:74px; font-size: 130%"> Social Media Notifications</span></p>

                    <div id="clockdiv">
                        <div>
                            <span class="days"></span>
                            <div class="smalltext">Days</div>
                        </div>
                        <div>
                            <span class="hours"></span>
                            <div class="smalltext">Hours</div>
                        </div>
                        <div>
                            <span class="minutes"></span>
                            <div class="smalltext">Minutes</div>
                        </div>
                        <div>
                            <span class="seconds"></span>
                            <div class="smalltext">Seconds</div>
                        </div>
                    </div>

                    <p style="color: #203893; font-size: 100%; font-weight: bold; height: 37px;" class="coming">COMING SOON</p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12" style=" text-align: center;animation-name: second;animation-duration: 2s;"><!--background: #F5F7F7;-->
                    <img src="./images/i1.svg" class="p-5 first" style="width:40%">
                </div>
            </div>
        </section>

        <section class="container-fluid py-3" style="background: #203893;">

            <h2 class="topic py-5" style="text-align:center; color: white;">About Notify</h2>

            <div class="row">

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12" style="text-align: center;">
                    <img src="./images/i2.svg" style=" width: 30%;">
                </div>

                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 py-5 pl-5" style="color: white;"><!--font-size:90%;height: 27px;-->
                    <p style="width: 90%">Notify is a social media notification and management platform that filters and houses all notifications from your selected social media accounts.</p><br>
                    <p style="width: 90%">Rather than having to navigate from one app to another to respond to importantmentions during your busy schedules, Notify gives the user an oganized social media space and performance to reply important posts, or tags, activities, events and engage with their audience from within one platform</p>
                </div>

            </div>

        </section>
        <section class="container-fluid my-5" style="background: #F5F7F7;">
            <div class="row py-3">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 topic" style="text-align:center;">
                    <h2>How Notify Works</h2>
                    <p>These 4 things you need to know<br>to get started</p>
                </div>
            </div>
            <div class="row pl-5">
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pl-5">
                    <img src="./images/1.png" class="py-2" style="text-align: center;">
                    <!--<h6>sign in or sign up</h6>-->
                    <p style="width: 80%;" class="py-2">Learning your preferred style of getting notifications. </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pl-5">
                    <img src="./images/2.png" class="py-2" style="text-align: center;">
                    <!--<h6>Select your Accounts</h6>-->
                    <p style="width: 80%;" class="py-2">Arranging your notifications in order of importance. </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pl-5">
                    <img src="./images/3.png" class="py-2" style="text-align: center;">
                    <!--<h6>Verify your accounts</h6>-->
                    <p style="width: 80%;" class="py-2">Prioritizing your preferences over others. </p>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12 pl-5">
                    <img src="./images/4.png" class="py-2" style="text-align: center;">
                    <!--<h6>Dashboard</h6>-->
                    <p style="width: 80%;" class="py-2">Bringing notifications that matter most to your fingertips</p>
                </div>
            </div>
        </section>

        <section class="container py-5 topic" style="text-align:center;">
                <h2>Features</h2>
                <p width: 60%>Let's connect all your important social media notifications in one place</p>

            <div class="row py-5">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <img src="./images/i3.svg" style="width:40%; animation-name: phone1;animation-duration: 12s;">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <p style="width: 85%; padding-top: 20%; padding-left: 20%;" class="">Get Rid of the Dirts
                        You can increase your focus by getting rid of useless notifications. Notify allows you to control what comes to you and in what order. Carefully select the social media notifications you want and get trash notifications away! </p>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 large">
                    <p style="width: 85%; padding-top: 20%; padding-left: 20%;" class="">Never Miss Important Notifications. 
                        Bye-bye to missed opportunities. Notify allows you to determine your most important notifications and bring them straight to your reach, with an easily customizable experience. </p>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
                    <img src="./images/i4.svg" style="width:40%; animation-name: phone2;animation-duration: 12s;">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12 small">
                    <p style="width: 85%; padding-top: 20%; padding-left: 20%;" class="">Never Miss Important Notifications. 
                        Bye-bye to missed opportunities. Notify allows you to determine your most important notifications and bring them straight to your reach, with an easily customizable experience. </p>
                </div>
            </div>
        </section>

        <section class="container-fluid p-5" style="background: #F5F7F7;">
            <h2 class="topic" style="text-align: center;">Stay Notified</h2>
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 p-5" style="text-align: center;">
                    <img src="./images/i5.svg" style="width:40%">
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 pr-5" style="padding-left: 15%;padding-top: 10%">
                    
                    <p style="width: 120%;">Let’s help keep your Social Media Notifications<br>organized when we launch.</p>
                    <form method = "post" class="py-3">    
                        <input type="email" name="umail" placeholder="Enter Email Address" style="border-color: 1px solid #203893; box-sizing: border-box; position: relative; height: 48.8px; width:65%;font-size: 55%;" class="p-2">
                        <input type="submit" id="notify"  name="Notify Me" style="background: #203893; color: white; border: none; height: 48.8px; width: 25%;font-size: 80%;" class="px-4">
                    </form>    
                </div>
            </div>
        </section>
        <footer class="container-fluid" style="background: #203893;">
            <div class="row p-5" style="text-align: center;">
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12" style="animation-name: third;animation-duration: 10s;animation-iteration-count: infinite;">
                    <h2 style="color: white;"><span><img src="./images/logo_white.svg"></span>Notify</h2>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                    <h3 style="color: white;animation-name: fourth; animation-duration: 12s;animation-iteration-count:infinite;">Coming Soon</h3>
                </div>
            </div>
        </footer>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="index.js"></script>
    </body>
</html>