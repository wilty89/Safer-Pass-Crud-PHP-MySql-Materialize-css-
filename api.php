<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: GET");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

$dbhost='localhost';
$dbuser='root';
$dbpass='';
$dbname='prueba';

$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

$query="SELECT * FROM usuarios";

        $run=mysqli_query($con,$query);

        while($row=mysqli_fetch_array($run))
        {
               
    $user=$row[0];
    $pass=$row[1];
    $date=$row[2];
    $ip=$row[3];

    if(!empty($_GET['search'])) {
        $key = array_search($_GET['search'], array_column($row, $user),true);
        $id = $row[$key]['user'];
        $name = $row[$key]['pass'];
        $result = array(
        'user' => $id,
        'pass' => $name,
        'status' => 'success'
        );
        } else {
        
        $result['recursos guardados'][] = array(
            'user' => $user,
            'pass' => $pass,
            'status' => 'success'
        );
        $result['status'][] = 'success';
        
        }

        }


$data = array(
array(
'id' => '1',
'name' => 'Bandung'
),
array(
'id' => '2',
'name' => 'Jakarta'
),
array(
'id' => '3',
'name' => 'http://localhost/crudPHP/city.php'
),
);



http_response_code(200);
    
    echo json_encode($result); 
    
    ?>