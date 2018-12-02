<?php
include_once 'connect.php';

$panelInfo = $panel->read();
$allrows = $panelInfo->rowCount();

if($allrows > 0){
    $solar_all = array();
    $solar_all["all"] = array();
    while ($row = $panelInfo->fetch(PDO::FETCH_ASSOC) ){
            $solar_panel = array(
                "ID"=> $row['id'],
                "Name " =>  $row['name'],
                "X_cord"=>$row['X_cord'],
                "Y_cord"=>$row['Y_cord'],
                "Address"=>$row['Address'],
                "Operator_Name"=>$row['Operator_Name'],
                "Commision_Date"=>$row['Commision_Date'],
                "Description"=>$row['Description'],
                "System_Power"=>$row['System_Power'],
                "Annual_Production"=>$row["Annual_Production"],
                "CO2"=>$row['CO2'],
                "Reimbursement"=>$row['Reimbursement'],
                "Panel_Modules"=>$row['Panel_Modules'],
                "Azimuth"=>$row['Azimuth'],
                "Inclination_Angle"=>$row['Inclination_Angle'],
                "Communication"=>$row['Communication'],
                "Inverter"=>$row['Inverter'],
                "Sensors" =>$row['Sensors']
            );
            array_push ($solar_all["all"],$solar_panel);
            http_response_code (200);
            echo json_encode($solar_all);
    }
}





?>