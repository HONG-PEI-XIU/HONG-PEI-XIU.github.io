<?php

$conn = mysqli_connect("localhost", "root", "asdasdasd0", "endofperiodpbl");
if (!$conn) {
  die("資料庫連接失敗: " . mysqli_connect_error());
  }
  
  
  $sql = "SELECT * FROM `證照`ORDER BY `生效日期`";
  
  $result = mysqli_query($conn, $sql);

  
echo '
<div class="w3-container w3-card w3-white">
    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal fa-spin"></i>專業證照</h2>
    ';
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            echo '
            <div class="w3-container">
                <h5 class="w3-opacity"><b>'.$row['證照名稱'].'</b> '.$row['等級'].'</h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>生效日期:'.$row['生效日期'].'</h6>
                <h6 class="w3-text-teal">技術士證總編號:'.$row['編號'].'</h6>
                <p>'.$row['證照介紹'].'</p>
                <hr>
            </div>
            ';           
        }
        
        }else{
            echo "No Records Found!";
       }
    

echo '</div>
<br>
    ';
?>
