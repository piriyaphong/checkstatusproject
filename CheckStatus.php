

<!DOCTYPE HTML>
<html>
<head>
<title>
Telecommunication Engineering
</title>
<style>
body{
    background-image: url("http://all4desktop.com/data_images/original/4236532-background-images.jpg");
    font-family : Angsana new;
    background-repeat: no-repeat;
  background-position: right top;
  background-attachment: fixed;
}
 header{
    padding: 30px;
 }

img{
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    border-radius: 8px;
    margin-left: auto;
    margin-right: auto;
    width: 80%;

}

p9{
    color : gray ;
    font-size : 100%;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    padding : 30px;

}

input[type=text] {
  border: none;
  border-top: 4px solid blue;
  border-bottom: 4px solid blue;
  padding : 5%;
  width : 80%;
  height : 40px;
  font-size : 20px;
  text-align : center;
  border-radius: 8px;
  
}

input[type=submit]{
    width : 100%;
    height : 100%;
}
table#t01 {
  width: 80%; 
  background-color: white;
  text-align : left;
  padding : 10px;
 font-size : 20px;
  box-shadow: 10px 10px 5px grey;
  border-radius: 8px;
  border-bottom: 4px solid blue;
}
th,td{
    border-bottom: 1px solid #ddd;
}


textbox{
    border-color : black;
}

</style>
</head>







<body>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
$servername  = "178.128.63.128";
$username = "TCEformSQL";
$password = "TCEsut1234*";
$dbname = "SUT_Student_Project";
$con = mysqli_connect($servername, $username, $password, $dbname);
if( $con->connect_error){
    die('Error: ' . $con->connect_error);
}
$con->set_charset("utf8");
$sql = "SELECT * FROM inform_std";
if( isset($_GET['search']) ){
    $name = mysqli_real_escape_string($con, htmlspecialchars($_GET['search']));
    $sql = "SELECT * FROM inform_std WHERE STD_Barcode LIKE '$name'";
}
$result = $con->query($sql);
?>
 
<center>
  
<header>

         <img src="http://eng.sut.ac.th/tce/2016/administrator/images/cover/1502335378CEGA.gif">
</header>  
   

    <form name ="search" method="GET">
        <table width="400px"><tr ><th style="text-shadow: 2px 2px 5px gray;color:Blue;font-size : 30px;box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19); border-radius: 8px;margin-left: auto;margin-right: auto;width: 80%;padding : 5%;background-color: rgba(255, 255, 255, 0.7); font-color: blue;">Enter Barcode</th></tr>
        <tr><td height="20px" width="400px"></td></tr>
        <tr><td align="center" width="400px"><input type="text" placeholder="Enter barcode here" name="search" ></td></tr>
        
        <tr><td align="center" width="400px"><input type="submit" value="Search"></td></tr>
        
        </table>
    </form>
</center>

<table align="center" id="t01" >
<tr>
<th width="100px">ID</th>
<th width="400px">Name</th>
<th width="400px">Status</th>

</tr>


<?php
while($row = $result->fetch_assoc()){
    ?>
    <tr>
    <td><?php echo $row['STD_ID']; ?></td>
    <td><?php echo $row['STD_NAME']; ?></td>
    <td><?php echo $row['STD_STATUS']; ?></td>
   
    </tr>
    <?php
}
?>
</table>




</body>
</html>


