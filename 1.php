<?php
$conn = mysqli_connect("localhost", "root", "asdasdasd0", "endofperiodpbl");
if (!$conn) {
  die("資料庫連接失敗: " . mysqli_connect_error());
  }
  
  
  $sql = "SELECT * FROM `經歷`";
  
  $result = mysqli_query($conn, $sql);
echo '
<div class="w3-container w3-card w3-white">
<h2 class="w3-text-grey w3-padding-16 "><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>工作經歷</h2>
';          

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
      echo '
          <div class="w3-container">
            <h5 class="w3-opacity"><b>'.$row['職位'].'</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>'.$row['入職'].'</h6>
            <p>'.$row['工作內容'].'</p>
            <hr>
          </div>
      ';           
  }
  
  }else{
      echo "No Records Found!";
 }
          
          
echo ' </div><br>';
?>

