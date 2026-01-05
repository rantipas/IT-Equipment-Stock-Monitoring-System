<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$serverName = "192.168.10.172"; //serverName\instanceName
$connectionInfo = array( "Database"=>"AMDB", "UID"=>"itam", "PWD"=>"DtDb@2905");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
   // echo "Connection established.<H1><font color=blue>Welcome to SQL</font></H1><br />";
}else{
     echo "Connection could not be established.<br />";
     die( print_r( sqlsrv_errors(), true));
}




