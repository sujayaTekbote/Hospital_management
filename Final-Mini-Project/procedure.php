


<?php
//all the variables defined here are accessible in all the files that include this one
$con= new mysqli('localhost','root','','db_info')or die("Could not connect to mysql".mysqli_error($con));

?>
<?php

      include_once 'library.php';
      $records=mysqli_query($con,"CALL `doctlist`();");
?>

<!DOCTYPE html>
<head>
<style>
            .button
            {
                width:100px;
                height:50px;

                margin-top:80px;
                background:#9ACD32;
            }

    #table1
    {
        background:white;
    }
    </style>
    </head>

<html>
    <head><title> record4</title >
        </head>
    <body bgcolor="#FFE4E1"></body>
    <center>

          <table width="1000px" border="1" callpadding="1" callspacing="1" id="table1">
        <tr>

            <th> Email</th>
            <th>Name</th>
            <th> Speciality</th>
            
              <!-- <th>price</th> -->


        </tr>
        <?php
        while($user=mysqli_fetch_assoc($records))
        {
            echo "<tr>";

            echo "<td>".$user['email']."</td>";
            echo "<td>".$user['fullname']."</td>";
            echo "<td>".$user['speciality']."</td>";


            // echo "<td>".$user['price']."</td>";


           echo" </tr>";


        }
        ?>
    </table>
         <form name="record" action="trigger.php" width="50px" >
              <a href="admin_home.php?q=1"><input type="button" name="button" value="back" class="button"/></a>
        </form>
        </center>

</html>
