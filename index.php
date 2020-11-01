<!doctype html>
 <html>
 <head>
 <title>Bhide Institute</title>
 <link rel="stylesheet" type="text/css" href="bhide.css">
<script src="jquery-3.5.1.min.js"></script>
 </head>
 <body >
 <div class="main">
 <div class="header">
 <div class="logo">
 <img src="bhide1.jpg">
 </div>
 <div class="title">
 Bhide Institute
 </div>
 </div>
 </div>
 <div class="nav">
 <ul>
 <li><input type="button" value="HOME" id="btn1" class="active"></li>
 <li><input type="button" value="REGISTRATION" id="btn2" ></li>
 <li><input type="button" value="SHOW REGISTRATION" id="btn3"></li>
 </ul>
 </div>
 <div id="content" >
 <br><br><br><br>
 <center><h1>Bhide Coaching Classes</h1><br><br>
 <h3>Where Learning Begins<h3><br>
 
 <div class="display2">15th December 2020</div>
 <div class="display3">11:00 AM to 4:00 PM </div><br>
 <div class="display4">Presenting you:</div>
 <div class="display5"><br><h2>Workshop on Basics of Robotics</h2> </div>
<div class="display1"><br>Address: Alka Takies chowk, Pune</div>
</center>
 </div>
 
 <div id="content2" style="display: none;">
 <br><br>
 <center><h2 style="color:orange">Registration Form</h2></center>
 <form id="form" name="myform" action="Insert.php" method="POST" onsubmit="return validateForm()">
 <label for="Name">Name:</label><br>
 <input type="text" id="name" name="Name" size="50"><br>
 <span id="nam1"></span><br>
 
 <label for="Email">Email:</label><br>
 <input type="text" id="email" name="Email" size="50"><br>
 <span id="emal"></span><br>
 
 <label for="Mobile_no">Mobile no:</label><br>
 <input type="text" id="mnum" name="Mobile_no" size="50"><br>
 <span id="mno"></span><br>
 
 <label for="Age">Age:</label><br>
 <input type="text" id="age" name="Age" size="50"><br>
 <span id="age1"></span><br>
 
 <label for="Gender">Gender : </label>
 <input type="radio" id="male" name="Gender" value="Male">
 <label for="Gender">Male</label>
 <input type="radio" id="female" name="Gender" value="Female">
 <label for="Gender">Female</label><br>
 <span id="gen1"></span><br>
 
 
 <label for="No_of_members">No of Members:</label><br>
 <input type="text" id="nom" name="No_of_members" size="50" placeholder="Only if you are coming in groups"><br>
 <span id="nom1"></span><br>
 
 <label for="Type">Entry Fees:</label><br>
 <select id="dtype" name="Type" >
 <option value ="" disabled selected hidden>Select type</option>
 <option value="normal">Rs 100 regular fee</option>
 <option value="Premium">Rs 250 (food included)</option>
 </select><br>
 <span id="dtype1"></span><br>
 
 <label for="Comment">Comment:</label><br>
 <textarea name="Comment"  cols="47" placeholder="If any queries"></textarea><br>
 <span id="comment1"></span><br>
 
 <input type="checkbox"  name="agree" value="agree">
 <label for="agree"> I agree all the conditions</label><br>
 <span id="agree1"></span><br><br><br>
 <input type="submit" value="Register" id="btna">
 </form><br><br>
 </div>
 <div id="content3" style="display: none;">
 <center>
 <table border="4" id="show">
 <tr>
 <th>Name</th>
 <th>Email</th>
 <th>Mobile no</th>
 <th>Gender</th>
 <th>No of members</th>
 <th>Entry Fess</th>
 <th>comment</th>
 </tr>
 <?php include "readAll.php" ?>
 </table>
 </center>
 </div>
 <div class="footer">
	
</div>
<script src="jp.js"></script>
 </body>
 </html>
