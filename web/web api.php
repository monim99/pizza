<!DOCTYPE html>
<html>
<head>
    <title>Web Api</title>
<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
.pagination {
    display: inline-block;
}

.pagination a {
    color: black;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>
</head>
<body>
<div align="center"><h1> PIZZERIA FOUNDER </h1></div>
<?php
$page = empty($_GET['page']) ? 1 : $_GET['page'];
 $json_string = file_get_contents("https://api.foursquare.com/v2/venues/search?near=bergamo&client_id=X12L04FUWPH2CBFPUX33TPEIDEAT2O0M3IG5GSJAINZ3JLUP&client_secret=4KKFW0FYR5FE1ZSC0A2ZTQCS11K4F4OBLJLTJD4RWF14SLC5&query=pizza&v=20171209");
 $parsed_json = json_decode($json_string,true);
 $num=count($parsed_json['response']['venues']);
 echo "<table><tr><th>Nome</th><th>Latitudine</th><th>Longitudine</th></tr>";
 for($i=($page*10-10);$i<($page*10);$i++){
    echo "<tr>";
    echo "<td>";
    print_r($parsed_json['response']['venues'][$i]['name']);
    echo "</td><td>";
    print_r($parsed_json['response']['venues'][$i]['location']['lat']);
    echo "</td><td>";
    print_r($parsed_json['response']['venues'][$i]['location']['lng']);
    echo "</td></tr>";
 }
 echo "</table>";
?>
<div align="center" class="pagination" >
<?php for($j=1;$j<=($num/10);$j++){
    echo "<a href='?&page=".$j."'>".$j."</a>";
}?>

</div>
</body>
</html>