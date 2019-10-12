<html>
<head>
    <title>DOCDOT</title>
    <link rel="stylesheet" type="text/css" href="medicine_display.css">
</head>
<body>

<h3><center>ALTERNATE MEDICINE</center></h3>
  
<form name="form" action="" method="get"> 

<select  name="inputfld" style="width:160px; height:42px; border-radius:15px; font-family:Arial Rounded MT Bold; font-size: 17px;">
<option value="find substitute">Medicine Name</option>>
<option value="Flagyl">Flagyl</option>
<option value="Motrin">Motrin</option>
<option value="Naprosyn">Naproxen</option>
<option value="Codeine">Codeine</option>
<option value="Niacin">Niacin</option>
<option value="Flomax">Flomax</option>
<option value="Migraine">Menthol</option>
<option value="Actiprofen">Actiprofen</option>
<option value="Topiromat">Topiromat</option>
<option value="Ambien">Ambien</option>
<option value="Didrex">Didrex</option>
<option value="Terbutaline">Terbutaline</option>
<option value="Solaraze">Solaraze</option>
<option value="Methylin">Methylin</option>
</select> 
  
<input type="submit" name="submit">
</form>

<table id="tabletag">
    
        <tr style="">
            <th>ALTERNATE 1</th>
            <th>ALTERNATE 2</th>
            <th>ALTERNATE 3</th>
            <th>ALTERNATE 4</th>
            <th>ALTERNATE 5</th>
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
        
                Echo "<html>";
                Echo
                  "<center><h2><b>MEDICINE NAME:</b>";
                        echo $invar;
    $sql = "SELECT alternate_1,alternate_2,alternate_3,alternate_4,alternate_5 FROM alternate WHERE medicine_name = '$invar'";
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
      
<form action="drugsymbtom.php" >
<button type="submit"
 style="width: 100px;
    background-color: white;
    color: black;
     font-size: 1.2em;
      padding: 12px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;">Back</button>
</form>
</body>
</head>
</html>