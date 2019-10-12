<html>
<head>
    <title>DOCDOT</title>
    <link rel="stylesheet" type="text/css" href="patient_display.css">
</head>
<body>

<h3 style="font-family:calibri; font-size:38px; color:white;"><center>PATIENT INFORMATION</center></h3>
<form name="form" action="" method="get"> 
  <input type="text" name="inputfld" placeholder="Patient Id">  
  
<input type="submit" name="submit">
</form>

<table id="tabletag" style="border-radius:14px;">
    
        <tr style="">
            <th>DATE</th>
            <th>MEDICINE</th>
            <th>MEDICINE QUANITY</th>
            <th>DAY COUNT</th>
            <th>TIME INTERVALS</th>
            <th>MEDICINE INTAKE</th>
        </tr>
        
        <?php 

            //-------------------------------------------
            $invar = '0';
            if(isset($_GET['inputfld'])){
            $invar = $_GET['inputfld'];
            }
            $host="localhost";
            $dbusername="root";
            $dbpassword="";
            $dbname="docdot";

            $conn =mysqli_connect($host,$dbusername,$dbpassword,$dbname);


            if(!$conn){
                echo"error";
            }

        $sql = "SELECT date,medicines,medicine_quantity,day_count,time_intervals,medicine_intake FROM prescription WHERE patient_id = '$invar'";
        $result = $conn->query($sql);
        while($resultRow = $result->fetch_row()){
            echo "<tr>";
            for($i = 0; $i < $result->field_count; $i++){
                echo "<td>$resultRow[$i]</td>";
    }
    echo "</tr>";
    }
    echo "</table>";
    $conn-> close();
?>
        
<form action="patient.php" >
<button type="submit"
 style="width: 100px;
    background-color: white;
    color: black;
     font-size: 1.2em;
      padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 10px;
    cursor: pointer;">Back</button>
</form>
</body>
</head>
</html>