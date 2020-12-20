<?php

session_start();
$server = "localhost";
$database = "testing";
$username = "root";
$password = "";

$conn = new mysqli($server,$username,$password,$database);

$keyword1 = @$_POST['name'];
$keyword2 = @$_POST['address'];
$keyword3 = @$_POST['contact'];
$keyword4 = @$_POST['age'];

if(empty($keyword1)){
    $keyword1 = '';
}
if(empty($keyword2)){
    $keyword2 = '';
}
if(empty($keyword3)){
    $keyword3 = '';
}
if(empty($keyword4)){
    $keyword4 = '';
}

$query = "SELECT * FROM testing WHERE Name LIKE '%$keyword1%' AND Address LIKE '%$keyword2%' AND Contact LIKE '%$keyword3%' AND Age LIKE '%$keyword4%'" ;
$result = $conn->query($query);
$count=1;
while($row = $result->fetch_assoc()){
    $id = $row['id'];
    $name = $row['Name'];
    $address = $row['Address'];
    $contact = $row['Contact'];
    $age = $row['Age'];

    echo "<tr>
    <th scope='col'>".$count."</th>
    <td class='text-center'><a onclick='getData(".$id.")'>".$name."</a></td>
    <td class='text-center'>".$address."</td>
    <td class='text-center'>".$contact."</td>
    <td class='text-center'>".$age."</td>
    <td class='text-center'><a onclick='deleteUser(".$id.")'><i class='fa fa-trash' style='font-size:24px;'></i></a></td>";
    $count++;
}
 
?>