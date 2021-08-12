<!DOCTYPE html>
<html lang="en">
<head>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

#logout {
  float: right;
  padding-right: 20px;
}

h1 {
  text-align: center;
  text-decoration: underline;
  font-family: Arial;
}

#p1 {
  text-align: center;
  font-size: 32px;
}

#p2 {
  text-align: center;
  font-size: 32px;
}

#p3 {
  text-align: center;
  font-size: 32px;
}

    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="http://127.0.0.1/studenthomepage"><h2>Home</h2></a></li>
        <li><a href="http://127.0.0.1/studentengineeringjournal"><h2>Engineering Journal</h2></a></li>
        <li><a href="http://127.0.0.1/studenttasks"><h2>Tasks</h2></a></li>
        <li><a href="http://127.0.0.1/studentannouncements"><h2>Announcements</h2></a></li>
        <li id="logout"><a href="http://127.0.0.1/"><h2>Log Out</h2></a></li>
    </ul>

    <h1>Welcome, "Student Name"</h1>

    <p id="p1">Tasks to complete -<b>"3"</b></p>
    <p id="p1"><a href="http://127.0.0.1"><img src="https://image.flaticon.com/icons/png/512/65/65608.png" alt="Clipboard" style="width: 5%;"></a></p>

    <p id="p2">View my Engineering Journal</p>
    <p id="p2"><a href="http://127.0.0.1"><img src="https://www.pinclipart.com/picdir/big/413-4133227_dream-journals-cook-book-icon-clipart.png" alt="Journal" style="width: 8%;"></a></p>
  
    <p id="p3">View All Announcements</p> 
    <p id="p3"><a href="http://127.0.0.1"><img src="https://i.pinimg.com/originals/fd/1d/a8/fd1da8662cce41041df6a4e05d356ef5.png" alt="Letter" style="width: 5%;"></a></p>
    <p id="p3"><b>Current Announcement:</b></p> 
    <p id="p3">There will be no CET300 class on the 13th July due to a closure of the David Goldman building at St Peter’s Campus. Any work will be posted on Canvas with an expectation that this will be completed by the following week</p>
    
</body>
</html>