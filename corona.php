<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

</head>
<style>
     .table-responsive {
        border: 1px solid #fc8888;
    }
    
    tbody {
        background: #c3c3e3;
    }
    
    .title {
        background: rosybrown;
    }
</style>
<body  >
    <section class="corona update container-fluid"></section>
    <div class="table-responsive">
        <table class="table-bordered table-striped text-center" id="tbval">
            <tr>
                <th class+"text-capitalize">Country</th>
                <th class+"text-capitalize">State</th>
                <th class+"text-capitalize">Confirmed</th>
                <th class+"text-capitalize">active</th>
                <th class+"text-capitalize">recovered</th>
                <th class+"text-capitalize">deaths</th>
                 
            </tr>

            <?php
$data=file_get_contents('https://data.covid19india.org/data.json');
$coronalive=json_decode($data,true);
// to check how much 
// echo "<pre>";
// print_r($coronalive);
// echo "</pre>";
// echo count($coronalive['statewise']);


// to know hum states will be there
$statescount= count($coronalive['statewise']);
//loop
$i=1;
while($i< $statescount){

    ?>
<!-- making it in the row format -->
    <tr>
    <td> <?php echo $coronalive['statewise'][$i]['lastupdatedtime']  ?></td>
    <td> <?php echo $coronalive['statewise'][$i]['state']  ?></td>
    <td> <?php echo $coronalive['statewise'][$i]['confirmed']  ?></td>
    <td> <?php echo $coronalive['statewise'][$i]['active']  ?></td>
    <td> <?php echo $coronalive['statewise'][$i]['recovered']  ?></td>
    <td> <?php echo $coronalive['statewise'][$i]['deaths']  ?></td>

    </tr>
    <!-- echo $coronalive['statewise'][$i]['lastupdatedtime']  . "<br>";
    echo $coronalive['statewise'][$i]['state']  . "<br>";
    echo $coronalive['statewise'][$i]['confirmed']  . "<br>";
    echo $coronalive['statewise'][$i]['active']  . "<br>";
    echo $coronalive['statewise'][$i]['recovered']  . "<br>";
    echo $coronalive['statewise'][$i]['deaths']  . "<br>"; -->
    <?php
    $i++;
   
}


// echo $coronalive['statewise'][1]['state'];


            ?>
        </table>

    </div> 
</body>
</html>