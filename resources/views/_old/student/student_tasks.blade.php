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


</body>
</html>