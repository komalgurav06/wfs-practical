<?php
include("connect.php");

if(isset($_POST['btninsert']))
{
    $carid = $_POST['txtcarid'];
    $carname = $_POST['txtcarname'];
    $carmodel = $_POST['txtcarmodel'];
    $caryear = $_POST['selcaryear'];
    $carprice = $_POST['txtcarprice'];

    $insert = "INSERT INTO tbl_car(carname, carmodel, caryear, carprice)
                values('$carname', '$carmodel', '$caryear', '$carprice')";

    mysqli_query($connect, $insert);
    header("location:index.php");
}

if(isset($_POST['btnupdate']))
{
    $carid= $_POST['txtcarid'];
    $carname= $_POST['txtcarname'];
    $carmodel= $_POST['txtcarmodel'];
    $caryear= $_POST['selcaryear'];
    $carprice= $_POST['txtcarprice'];

    $update= "UPDATE tbl_car SET carname='$carname', carmodel='$carmodel', 
    caryear='$caryear', carprice='$carprice' WHERE carid=$_GET[editid]";

    mysqli_query($connect, $update);
    header("location:index.php");
}

$row=[];
if(isset($_GET['editid']))
{
    $select= "SELECT * FROM tbl_car WHERE carid=$_GET[editid]";
    $result= mysqli_query($connect, $select);
    $row= mysqli_fetch_array($result);
}

if(isset($_GET['delid']))
{
    $Delete= "DELETE FROM tbl_car WHERE carid=$_GET[delid]";
    $result= mysqli_query($connect, $Delete);
    header("location:index.php");
}

if(isset($_POST['btnsearch']))
{
    $carname = $_POST['search_car_name'];
    $search = "SELECT * FROM tbl_car WHERE carname='$carname'";
    $result = mysqli_query($connect, $search);

    if(mysqli_num_rows($result) > 0)
        {
            echo "<center><table border='1'>
            <tr>
                <th>ID</th>
                <th>CarName</th>
                <th>CarModel</th>
                <th>CarYear</th>
                <th>CarPrice</th>
            </tr>";

            while($row= mysqli_fetch_array($result))
                {
                    echo "<tr>
                        <td>".$row["carid"]."</td>
                        <td>".$row["carname"]."</td>
                        <td>".$row["carmodel"]."</td>
                        <td>".$row["caryear"]."</td>
                        <td>".$row["carprice"]."</td>
                    </tr>";
                }
                echo "</center></table><br>";
        }
        else
        {
            echo "No service history found for '$carname'.<br>";
        }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Car CRUD Operation</title>
</head>
<body>
<center>
    <h2>Car CRUD Operation</h2>
    <form action="" method="POST">
    <table>
        <tr>
            <td>Enter Car ID: </td>
            <td>
                <input type="number" name="txtcarid" value="<?php if(isset($_GET['editid'])) echo $row['carid'];?>">
            </td>
        </tr>

        <tr>
            <td>Enter Car Name: </td>
            <td>
                <input type="text" name="txtcarname" value="<?php if(isset($_GET['editid'])) echo $row['carname'];?>" required>
            </td>
        </tr>

        <tr>
            <td>Enter Car Model: </td>
            <td>
                <input type="text" name="txtcarmodel" value="<?php if(isset($_GET['editid'])) echo $row['carmodel'];?>" required>
            </td>
        </tr>

        <tr>
            <td>Enter Car Year: </td>
            <td>
                <select name="selcaryear">
                <option value="">---Select Year---</option>
                <?php
                    for($i=2000;$i<=2025;$i++)
                        {
                ?>
                <option value="<?php echo $i;?>"><?php echo $i;?></option>
                <?php
                        }                
                ?>
                </select>
            </td>
        </tr>

        <tr>
            <td>Enter Car Price: </td>
            <td>
                <input type="text" name="txtcarprice" value="<?php if(isset($_GET['editid'])) echo $row['carprice'];?>" required>
            </td>
        </tr>

        <tr>
            <td></td>
            <td>
                <?php if(isset($_GET['editid'])) 
                  {
                ?>
                <input type="submit" name="btnupdate" value="Update">
                <?php } else { ?>
                <input type="submit" name="btninsert" value="Insert">
                <?php 
                  }
                ?>
            </td>
        </tr>
    </table>
    <br><br><br>

    <table border="2">
        <tr>
            <th>Car ID</th>
            <th>Car Name</th>
            <th>Car Model</th>
            <th>Car Year</th>
            <th>Car Price</th>
            <th>Action</th>
        </tr>

        <?php 
            $select = "select * from tbl_car order by carid desc";
            $result = mysqli_query($connect, $select);
            $count= mysqli_num_rows($result);
            echo "Total Record: ".$count;

            while ($row = mysqli_fetch_array($result))
                {
        ?>

        <tr align="center">
            <td><?php echo $row['carid'];?></td>
            <td><?php echo $row['carname'];?></td>
            <td><?php echo $row['carmodel'];?></td>
            <td><?php echo $row['caryear'];?></td>
            <td><?php echo $row['carprice'];?></td>
            <td>
                <a href="index.php?editid=<?php echo $row['carid'];?>">Edit</a>
                <a href="index.php?delid=<?php echo $row['carid'];?>">Delete</a>
            </td>
        </tr>
        <?php 
            }
        ?>
    </table>
    </form>

    <h2>Search Your Service History</h2>
    <form method="POST">
        <table>
            <tr>
                <td>Car Name: </td>
                <td>
                    <input type="text" name="search_car_name" required>
                </td>
            </tr>

            <tr>
                <td></td>
                <td>
                    <input type="submit" name="btnsearch" value="Search">
                </td>
            </tr>
        </table>
    </form>
</center>    
</body>
</html>