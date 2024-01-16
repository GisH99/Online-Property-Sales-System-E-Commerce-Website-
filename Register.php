<?php require_once('includes/connect.php'); ?>
<!DOCTYPE html>
<html>

<head>

    <title>NewDoor</title>

    <!--CSS Linked-->
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/homepage.css">
    <link rel="stylesheet" href="styles/postAD.css">
    <link rel="stylesheet" href="styles/register.css">

    <!--jS Linked-->
    <script type="text/javascript" src="js/register.js"></script>

</head>

<!--*************************************************************************************************-->

<body id="mainBody">


    <header class="head">


        <!--Top NavigationBar-->
        <div class="TopNavigation">
            <!--*************************************************************************************************-->
            <ul class="navbar1_left">
                <!-- <li class="li_left_C"><a href="#"><i class="sIconHome"></i></a></li> -->
                <li class="li_left_C"><a href="Login.php">Log In</a></li>
                <li class="li_left_C"><a class="active"  href="#">Register</a></li>
                <li id="pnumber" class="li_right_C"><i class="sIconPhone"><b>+94225785925</b></li>
                <li id="email" class="li_right_C"><i class="sIconEmail"><b>Info@newdoor.lk</b></li>
            </ul>
            <!--*************************************************************************************************-->
        </div>

        <div class="SecNavBar">
        <!-- Header Image -->
        <img src="images/s1c.JPG" alt="Header Image" class="header_image">
            <a href="index.php">Home</a>
            <a href="about.html">About Us</a>
            <a href="lands.php">Lands</a>
            <a href="houses.php">Houses</a>
            <a href="apartments.php">Apartments</a>
            <a href="postAd.php">Selling</a>
            <a href="payplans.php">Payment Plans</a>
            <a href="contact_me.php">Contact Us</a>
            <a href="myaccount.php">My Account</a>


            <!-- Search bar -->
            <div class="search-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Search.." name="search">
                    <button type="submit">Submit</button>
                </form>
            </div>

        </div>
        <!--navigation bar end-->
    </header>
    <!--*************************************************************************************************-->

    <center>
        <br>
            
        <div class="form1">
            <br>
            <img src="images/reg.png" class="avatar">
        <form action="Registerdb.php" method="POST">
            <h1 style="color:  gold"> <i>
            <b>Registration Form</b> </i> </h1>
            <br><br>
            <label></label>
            First Name<br>
            <input type="text" id="fname" name="fname" style="width: 500px" placeholder="Enter your first name" required><br><br>
            Last Name<br>
            <input type="text" id="lname" name="lname" style="width: 500px" placeholder="Enter your last name" required><br><br>
            Username<br>
            <input type="text" id="uname" name="username" style="width: 500px" placeholder="Pick a username" required><br><br>
            Gender<br>
            
             <label class="radio-inline"><input type="radio" id="gender" name="radio" value="male">male</label>
             <label class="radio-inline"><input type="radio" id="gender" name="radio" value="femail">femail</label><br>
             
             <br>
            Mobile Number<br>
            <input type="text" id="mobile" name="mobile" style="width: 500px" pattern="[0-9]{5,10}"placeholder="+94" required><br><br>
            Email Address<br>
            <input type="text" id="emailAdd" name="emailAdd" style="width: 500px" pattern="[a-zA-Z0-9._%+-#]+@[a-z0-9]+\.[a-z]{2,3}"placeholder="example@gmail.com"required><br><br>
            Address<br>
            <textarea id="address" name="address" rows="10" cols="50" style="width: 500px"placeholder="Enter your permanet address"required></textarea><br><br>
            Choose Your DOB<br>
            <input type="date" id="dob" name="dob"required><br><br>
            Password<br>
            <input type="Password" id="pw" name="pw" style="width: 600px"pattren="[a-zA-Z0-9]{5,8}"placeholder="Enter your password"required><br><br>
            Re-enter Password<br>
            <input type="Password" id="repw" name="repw" style="width: 600px"placeholder="Re-Enter password"required><br><br>
            Accept privace policy terms
            <input type="checkbox" id="policy" name="policy"  onclick="enableButton()"><br><br>
            
            <input type="submit" value="Submit Details" id="Register_btn1"  name="register" onclick="show_alert();">
        
            <br><br><br>
        </form>
        </div>
        </center>
	    <!--*************************************************************************************************-->

    <hr>

    <footer>
        <div class="footer">
            <table border="0" class="footerTable">
                <tr>
                    <th>About Us</th>
                    <th>Contact Us</th>
                    <th>Quick Links</th>
                    <th>NewsLetter</th>
                </tr>
                <tr>
                    <td>
                        <center>
                            <img class="smallMainLogo" src="images/MainLogo.jpg" width="70"
                                height="70"><br><b>NewDoor</b><br>
                        </center>
                        <p> <b>NewDoor established itself in 2003 in the<br>
                                Real Estate industry. It is dedicated to<br>
                                providing residential and real estate<br>
                                solutions and striving to exceed customer<br>
                                expectations through providing reliable real<br>
                                estate and financial solutions.</b>
                            <hr id="FootLine">
                        </p>

                    </td>
                    <td>
                        <p><img src="images/locationIcon.png" width="30" height="30">
                            &ensp;<b>New Door(pvt)Ltd, <br>
                                &ensp;&emsp;&emsp;No 1060, Kandy Road,<br>
                                &ensp;&emsp;&emsp;Malabe Sri Lanka.</b>
                            <hr id="FootLine">
                            <br>
                        </p>


                        <img src="images/phoneIcon.png" width="30" height="30">
                        <b>&ensp; +945785925
                            <hr id="FootLine">
                            <br>

                            <img src="images/mailIcon.png" width="30" height="30">
                            &ensp;Info@newdoor.lk
                        </b>
                        <hr id="FootLine">
                        <br>

                    </td>
                    <td class="footLinks">
            <a href="index.php">Home</a><br>
            <hr id="FootLine">
            <a href="feedback.php">Feedback</a><br>
            <hr id="FootLine">
            <a href="about.html">About Us</a><br>
            <hr id="FootLine">
            <a href="houses.php">Houses</a><br>
            <hr id="FootLine">
            <a href="lands.php">Lands</a><br>
            <hr id="FootLine">
            <a href="apartments.php">Apartments</a><br>
            <hr id="FootLine">
            <a href="postAd.php">Selling</a><br>
            <hr id="FootLine">
            <a href="issusubmit.php">Issues Submit</a><br>
            <hr id="FootLine">
            <a href="contact_me.php">Contact Us</a><br>
            <hr id="FootLine">

                    </td>
                    <td>
                        <div>
                            <p><b>Subscribe to our newsletter<br>
                                    For exclusive updates</b></p>
                            <div>
                                <form method="post" action="reg.php"></form>
                                <input type="email" name="email" required placeholder="Email Address">
                                <input type="submit" id="subscribe" value="Subscribe">
                                </form>
                            </div>
                        </div>

                    </td>
                </tr>

            </table>
            <center>
                <h6>Copyright © 2021 - NewDoor - All Rights Reserved,Concept,
                    Design and Development by SLIIT FOC Students.
                </h6>
            </center>
            <br>
        </div>

    </footer>

    <!--*************************************************************************************************-->
</body>

</html>
<?php mysqli_close($conn); ?>