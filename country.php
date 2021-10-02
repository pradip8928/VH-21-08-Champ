<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Country data</title>
    
 </head> 
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
 <style>
         /* .table-responsive{
             border: 1px solid #fc8888;
              }
              tbody{
                background: #c3c3e3;
              }
              .title{
                background: rosybrown;
              } */



             
              
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

 <body>
 <section class="corona update container-fluid">
    <div class="table-responsive">
        <center>
            <!-- add -->
            <!-- <div id="divs"> -->

                <!--  -->

        <h2>  COVID-19 DATA STATE WISE</h2>
        <table class="table-bordered table-striped text-center" id="tbval">
            <tr class="title">
                <th class="text-capitalize">dailyconfirmed</th>
                <th class="text-capitalize">dailydeceased</th>
                <th class="text-capitalize">dailyrecovered</th>
                <th class="text-capitalize">date</th>
                <th class="text-capitalize">totalconfirmed</th>
                <th class="text-capitalize">totaldeceased</th>
                <th class="text-capitalize">totalrecovered</th>
                 
            </tr>

            <?php
$data=file_get_contents('https://data.covid19india.org/data.json');
$coronalive=json_decode($data,true);
 
 $statescount= count($coronalive['cases_time_series']);

 $i=1;
 while($i< $statescount){
 
     ?>
      <tr>
    <td> <?php echo $coronalive['cases_time_series'][$i]['dailyconfirmed']  ?></td>
    <td> <?php echo $coronalive['cases_time_series'][$i]['dailydeceased']  ?></td>
    <td> <?php echo $coronalive['cases_time_series'][$i]['dailyrecovered']  ?></td>
    <td> <?php echo $coronalive['cases_time_series'][$i]['date']  ?></td>
    <td> <?php echo $coronalive['cases_time_series'][$i]['totalconfirmed']  ?></td>
    <td> <?php echo $coronalive['cases_time_series'][$i]['totaldeceased']  ?></td>
    <td> <?php echo $coronalive['cases_time_series'][$i]['totalrecovered']  ?></td>
    </tr>
 

     <?php
    $i++;
   
}

?>
  


             
        </table>
        </center>

    </div> 
    </section>
 </body>
 </html>