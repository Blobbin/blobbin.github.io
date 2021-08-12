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

table {
  text-align: center;
  margin-left: auto;
  margin-right: auto;
  width: 80%;
  height: 100%;
}

.box {
  padding-top: 30px;
  width: 100%;
  text-align: center;
}

#search {
  text-align: center;
  margin: 0 auto;
  display: inline-block;
}

h3 {
  text-align: center;
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

    <div class="box">
      <input type="search" id="search" name="search"><br>
    </div>

    <div style="text-align:center; padding-top: 10px;">
      <button>Search</button>
    </div>

    <h3><br>Students</h3>
    <table border="5">
      <tr>
        <thead colspan="4">
          <th>Student Name</th>
          <th>Class</th>
          <th>Engineering Journal</th>
          <th>Outstanding Tasks</th>
        </thead>
      </tr>
      <tr>
        <td>John Smith</td>
        <td>UOS CET269</td>
        <td><a href="http://127.0.0.1">Link</a>
        <td>3</td>
      </tr>
      <tr>
        <td>Mary Blank</td>
        <td>UOS CET120</td>
        <td><a href="http://127.0.0.1">Link</a>
        <td>8</td>
      </tr>
      <tr>
        <td>Carl Wheezer</td>
        <td>UOS CET327</td>
        <td><a href="http://127.0.0.1">Link</a>
        <td>0</td>
      </tr>
    </table>
</body>
</html>