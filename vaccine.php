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
    body{
        background: #d7a2a2;
    }
    h2{
        position: relative;
 
top: 18px;
    }
     #tbval{
        position: relative;
top: 30px;
     }
     tbody{
        background: #a6a6f7;
     }

</style>
<body  >
<section class="corona update container-fluid"></section>
    <div class="table-responsive">
        <center>
            

        <h2><b>  VACCINATION STATUS</b></h2>
        <table class="table-bordered table-striped text-center" id="tbval">
            <tr>
                <th class="text-capitalize">dailyrtpcrsamplescollectedicmrapplication</th>
                <th class="text-capitalize">firstdoseadministered</th>
                <th class="text-capitalize">positivecasesfromsamplesreported</th>
                <th class="text-capitalize">seconddoseadministered</th>
                <th class="text-capitalize">testedasof</th>
                <th class="text-capitalize">totaldosesadministered</th>
                 <th class="text-capitalize">totalsamplestested</th> 
                <!-- <th class="text-capitalize">totalsessionsconducted</th>   -->
                 
            </tr>


 
    <?php
     error_reporting(0);
    $data=file_get_contents('https://data.covid19india.org/data.json');
$coronalive=json_decode($data,true);
// echo "<pre>";
// print_r($coronalive);
// echo "</pre>";     

$statescount= count($coronalive['tested']);
//loop
$i=312;
while($i< $statescount){

             
 ?>
 <tr>
    <td> <?php echo $coronalive['tested'][$i]['dailyrtpcrsamplescollectedicmrapplication']  ?></td>
    <td> <?php echo $coronalive['tested'][$i]['firstdoseadministered']  ?></td>
    <!-- <td> <?php //echo $coronalive['tested'][$i]['positivecasesfromsamplesreported']  ?></td> -->
    <td> <?php echo $coronalive['tested'][$i+30]['seconddoseadministered']  ?></td>
    <td> <?php echo $coronalive['tested'][$i]['testedasof']  ?></td>
    <td> <?php echo $coronalive['tested'][$i]['totaldosesadministered']  ?></td>
    <td> <?php echo $coronalive['tested'][$i]['totalsamplestested']  ?></td>
    <td> <?php echo $coronalive['tested'][$i]['totalsessionsconducted']  ?></td>
    </tr>

    <?php
    $i++;
   
}

?>
</table>
</center>

 

</div>



</body>
</html>