<?php 
include('session.php'); 

?>
<html>
    <head>
        <link href="css/style.css" rel="stylesheet" type="text/css"> 
    </head>
    <body> 
     
  <?php if(isset($_SESSION['login_user'])){ 
//database connection from separate php script

include_once 'connect.php';

//database connection from separate php script

include_once 'connect.php';

//query list of possible sub models

$sql = "select lModelId, Name from amModel
where FullName like '/Information Technology Broadcasting and Telecommunications/Computer Equipment and Accessories/%' 
and sLvl between '1' and '5' order by Name";
  
$result = sqlsrv_query($conn,$sql);

$x = 0;
while($row = sqlsrv_fetch_array($result,SQLSRV_FETCH_ASSOC)) 
{

$lModelId = $row['lModelId'];
$Name = $row['Name'];

//query list of possible sub models
$sql1 = "select m.Name As Device_Name,count(*) As Qty from amModel m join amPortfolio p on m.lModelId = p.lModelId join amStock s on p.lStockId = s.lStockId join amNature n on m.lNatureId = n.lNatureId
where s.[Name]='rcbu' and m.lParentId='$lModelId'
group by m.Name";

$params = array();
$options =  array( "Scrollable" => SQLSRV_CURSOR_KEYSET );
$stmt = sqlsrv_query( $conn, $sql1 , $params, $options );

$row_count = sqlsrv_num_rows( $stmt );
 
if ($row_count == 0) { // skip 0 count return
        continue;
}

// Print the column names as the headers of a table

echo "<h4 style=color:Blue;font-weight: bold;font-family: Times New Roman, Times, serif> ".$Name.": </h2>";

$dyn_table="<table>";

foreach(sqlsrv_field_metadata($stmt) as $fieldData) {
    $dyn_table.= "<th>".$fieldData['Name']."</th>";
    
}


// Print the data
while($row = sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)) 
{
    $dyn_table.= "<tr>";
    foreach($row as $_column) {
        $dyn_table .= "<td>{$_column}</td>";
    }
    $dyn_table.= "</tr>";
}
$dyn_table.= "</table>";


echo "$dyn_table";
 
}

}
    else {
      echo "Invalid Session";
  }    
?>
           
</body>    
</html>