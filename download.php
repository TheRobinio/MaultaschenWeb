<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
    session_start();
        if(!isset($_SESSION['userid'])) {
            die('Bitte zuerst <a href="login.php">einloggen</a>');
  
        }

        $servername = "localhost";
        $username = "maul_user";
        $password = "alpaka";
        $dbname = "maul_db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Interner Fehler " . $conn->connect_error);
        }

        $sql = "SELECT orderid, name, adresse, abholzeit, anzahl, ordertime FROM maul_ve WHERE orderstatus='0' ";
        $result = $conn->query($sql);
        $items = array();

        //Store table records into an array
        while( $row = $result->fetch_assoc() ) {
        $items[] = $row;
        }
        //Check the export button is pressed or not
        //Define the filename with current date
        $fileName = "bestellungen".date('d-m-Y').".xls";

        //Set header information to export data in excel format 
        header("Content-Type:   application/xls; charset=utf-8");
        header('Content-Disposition: attachment; filename='.$fileName);
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0, pre-check=0");
        header("Cache-Control: private",false);

        //Set variable to false for heading
        $heading = false;

        //Add the MySQL table data to excel file
        if(!empty($items)) {
        foreach($items as $item) {
        if(!$heading) {
        echo implode("\t", array_keys($item)) . "\n";
        $heading = true;
        }
        echo implode("\t", array_values($item)) . "\n";
        }
        }
        $conn->close();



?>

