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

#p1 {
  text-align: center;
  font-size: 32px;
}

#p2 {
  text-align: center;
}

h1 {
  text-align: center;
  font-size: 40px;
}

#announcementbuttons {
  text-align: center;
  width: 100%;
}

#savebutton {
  text-align: center;
  width: 100%;
  padding-top: 20px;
}

textarea {
  height: 100%;
}

.inner {
  display: inline-block;
}
    </style>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://cdn.tiny.cloud/1/e6lg2krzyux8ciz7aqs8ljl69d8l5xmxgbxzy36wflfr9lnz/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
    tinymce.init({
      selector: '#mytextarea'
    });
  </script>

</head>
<body>
    <ul>
        <li><a href="http://127.0.0.1/staffhomepage"><h2>Home</h2></a></li>
        <li><a href="http://127.0.0.1/staffstudentlist"><h2>Students</h2></a></li>
        <li><a href="http://127.0.0.1/stafftasks"><h2>Tasks</h2></a></li>
        <li><a href="http://127.0.0.1/staffannouncements"><h2>Announcements</h2></a></li>
        <li id="logout"><a href="http://127.0.0.1/"><h2>Log Out</h2></a></li>
    </ul>

    <h1>Current announcements: </h1>

    <p id="p1">There will be no CET300 class on the 13th July due to a closure of the David Goldman building at St Peter’s Campus. Any work will be posted on Canvas with an expectation that this will be completed by the following week</p1>

    <p id="p2">Expiry Date: 13th July 20:00 UTC</p><br>

    <p id="p1">The Library will be open till 23:59pm on 19th August for students needing a last minute push to get their dissertation done</p1>

    <p id="p2">Expiry Date: 20th August 00:00 UTC</p><br>

    <div id="announcementbuttons">
      <div class="inner"><button>Add Announcements</button></div>
      <div class="inner"><button>Edit Announcements</button></div>
      <div class="inner"><button>Delete Announcements</button></div>
    </div><br>

  <form method="post">
    <textarea id="mytextarea" name="mytextarea">
      Hello, World!
    </textarea>
  </form>
    
  <div id="savebutton">
      <div class="inner"><button>Save</button></div>
  </div>
    
    
</body>
</html>