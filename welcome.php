<?php
require_once 'config.php';
session_start();
$query= mysqli_query($link,"SELECT * FROM `users` WHERE `username` = '".$_SESSION['username']."' ");//or die(mysqli_error($link));
$arr = mysqli_fetch_assoc($query);
 ?>
 <!DOCTYPE html>
 <html>
   <head>
     <meta charset="utf-8">
     <title></title>
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
 
     <style media="screen">
       table{
         margin: auto;
         border: 2px solid #111;
         padding: 8px;
         width:95%;
         text-align: center;
         max-width: 95%;
       }
       body{
         text-align: center;
       }
     </style>
   </head>
   <body>
     <h2>Welcome Mr. <?php echo $arr['password']; ?></h2>
     <h3>Class- <?php echo $arr['class']; ?></h3>
     <br>
     <h2>Semi-Annual Result</h2>
     <table>
       <tr>
         <th>English</th>
         <th>Hindi</th>
         <th>Maths</th>
         <th>Science</th>
         <th>Sst.</th>
       </tr>
       <td><?php echo $arr['eng1'] ?></td>
       <td><?php echo $arr['hin1'] ?></td>
       <td><?php echo $arr['math1'] ?></td>
       <td><?php echo $arr['sci1'] ?></td>
       <td><?php echo $arr['sst1'] ?></td>
     </table>

<h2>Final Annual Result</h2>
       <table>
         <tr>
           <th>English</th>
           <th>Hindi</th>
           <th>Maths</th>
           <th>Science</th>
           <th>Sst.</th>
         </tr>
         <td><?php echo $arr['eng2'] ?></td>
         <td><?php echo $arr['hin2'] ?></td>
         <td><?php echo $arr['math2'] ?></td>
         <td><?php echo $arr['sci2'] ?></td>
         <td><?php echo $arr['sst2'] ?></td>
       </table>
   </body>
 </html>
