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

li a:hover {
  background-color: #111;
}

#taskbuttons {
  text-align: center;
  width: 100%;
}

.inner {
  display: inline-block;
  padding-left: 15px;
}

* {
  box-sizing: border-box;
}

.row {
  margin-left:-5px;
  margin-right:-5px;
}
  
.column {
  float: left;
  width: 50%;
  padding: 5px;
}

/* Clearfix (clear floats) */
.row::after {
  content: "";
  clear: both;
  display: table;
}

table {
  border-collapse: collapse;
  border-spacing: 0;
  width: 100%;
  border: 1px solid #ddd;
}

th, td {
  text-align: left;
  padding: 16px;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

.tasktables {
  display: inline-block
}

#save {
  float: right;
}

h1 {
  text-align: center;
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

  
  <h1>Tasks</h1>
    <div id="taskbuttons">
      <div class="inner"><button>Add Task</button></div>
      <div class="inner"><button>Edit Task</button></div>
      <div class="inner"><button>Delete Task</button></div>
    </div><br>
    <div class="row">
      <div class="column">
        <table border>
          <tr>
            <thead colspan="4">
              <th>Task Name</th>
              <th>Description</th>
              <th>Due Date</th>
              <th>Assigned Students</th>
              <th>Select</th>
            </thead>
          </tr>
          <tr>
            <td>CET237 OSPF</td>
            <td>Complete OSPF task from CET237</td>
            <td>09/09/2021</td>
            <td><a href="http://127.0.0.1/staffhomepage">List</a></td>
            <td><input type="checkbox" name="task"></td>
          </tr>
          <tr>
            <td>PacketTracer PPW1</td>
            <td>Submit PacketTracer for PPW1</td>
            <td>18/08/2021</td>
            <td><a href="http://127.0.0.1/staffhomepage">List</a></td>
            <td><input type="checkbox" name="task"></td>
          </tr>
          <tr>
            <td>Engineering Journal</td>
            <td>Submit Engineering Journal for marking</td>
            <td>20/08/2021</td>
            <td><a href="http://127.0.0.1/staffhomepage">List</a></td>
            <td><input type="checkbox" name="task"></td>
          </tr>
        </table>
      </div>
    <div class="column">
    <table border>
      <tr>
        <thead colspan="4">
          <th>Student Name</th>
          <th>Class</th>
          <th>Outstanding Tasks</th>
          <th>Select</th>
        </thead>
      </tr>
      <tr>
        <td>John Smith</td>
        <td>UOS CET269</td>
        <td><a href="http://127.0.0.1">Link</a>
        <td><input type="checkbox" name="task"></td>
      </tr>
      <tr>
        <td>Mary Blank</td>
        <td>UOS CET120</td>
        <td><a href="http://127.0.0.1">Link</a>
        <td><input type="checkbox" name="task"></td>
      </tr>
      <tr>
        <td>Carl Wheezer</td>
        <td>UOS CET327</td>
        <td><a href="http://127.0.0.1">Link</a>
        <td><input type="checkbox" name="task"></td>
      </tr>
    </table>
    </div>
   <button id="save">Save</button>
  </div>  
   
</body>
</html>