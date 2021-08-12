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

li a:hover {
  background-color: #111;
}
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><a href="http://127.0.0.1/staffhomepage"><h2>Home</h2></a></li>
        <li><a href="http://127.0.0.1/staffstudentlist"><h2>Students</h2></a></li>
        <li><a href="http://127.0.0.1/stafftasks"><h2>Tasks</h2></a></li>
        <li><a href="http://127.0.0.1/staffannouncements"><h2>Announcements</h2></a></li>
        <li id="logout"><a href="http://127.0.0.1/"><h2>Log Out</h2></a></li>
    </ul>

    <h1>Welcome, "Staff Name"</h1>

    <p id="p1">Awaiting tasks - <b>"39"</b></p>

    <p id="p2">Engineering Journals to review - <b>"20"</b></p>

    <p id="p3">Current announcement: There will be no CET300 class on the 13th July due to a closure of the David Goldman building at St Peter’s Campus. Any work will be posted on Canvas with an expectation that this will be completed by the following week</p> 


</body>
</html>