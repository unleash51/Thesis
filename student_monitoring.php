<?php 
include 'connect.php';
include('header_ipsmc.php');
?>
<!DOCTYPE html>
 <head>
   <meta charset="utf-8" />
   <style>
    body {
     margin: 0;
     padding: 3em 0;
     color: #fff;
     background: #0080d2;
     font-family: Georgia, Times New Roman, serif;
    }
 
    #container {
     width: 600px;
     background: #fff;
     color: #555;
     border: 3px solid #ccc;
     -webkit-border-radius: 10px;
     -moz-border-radius: 10px;
     -ms-border-radius: 10px;
     border-radius: 10px;
     border-top: 3px solid #ddd;
     padding: 1em 2em;
     margin: 0 auto;
     -webkit-box-shadow: 3px 7px 5px #000;
     -moz-box-shadow: 3px 7px 5px #000;
     -ms-box-shadow: 3px 7px 5px #000;
     box-shadow: 3px 7px 5px #000;
    }
 
    ul {
     list-style: none;
     padding: 0;
    }
 
    ul > li {
     padding: 0.12em 1em
    }
 
    label {
     display: block;
     float: left;
     width: 130px;
    }
 
    input, textarea {
     font-family: Georgia, Serif;
    }
   </style>
  </head>
  <body>
   <div id="container">
    <h1>Student Monitoring</h1>
    <form action="sendsms.php" method="post">
     <ul>
      <li>
       <label for="email">To:</label>
       <input type="text" class="text" name="email" id="email"/></li>
      <li>
       <label for="subject">Subject:</label>
       <input type="text" class="text" name="subject" id="subject"/></li>
      <li>
       <label for="message">Message</label>
       <textarea name="message" class="text" id="message" cols="45" rows="15"></textarea>
      </li>
     <li><input type="submit" value="Send" name="submit" /></li>
    </ul>
   </form>
  </div>
 </body>
</html>