<?php

$conn = mysqli_connect("localhost", "root", "asdasdasd0", "endofperiodpbl");
if (!$conn) {
  die("資料庫連接失敗: " . mysqli_connect_error());
  }
  
  
  $sql = "SELECT * FROM `證照`ORDER BY `生效日期`";
  
  $result = mysqli_query($conn, $sql);

  
'
<div class="w3-container w3-card w3-white">
    <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal fa-spin"></i>專業證照</h2>
   
            <div class="w3-container">
                <h5 class="w3-opacity"><b>數位電子</b> 乙級</h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>生效日期:2019-02-27</h6>
                <h6 class="w3-text-teal">技術士證總編號:117-035331</h6>
                <p>乙級工作範圍：\r\n1、數位電子單元裝置之組裝、量測、調整及維修。\r\n2、數位電子裝置之拆卸、組合、操作及維修。</p>
                <hr>
            </div>



        <div class="w3-container">
                <h5 class="w3-opacity"><b>工業電子</b> 丙級</h5>
                <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>生效日期:2017-08-07</h6>
                <h6 class="w3-text-teal">技術士證總編號:028-351849</h6>
                <p>丙級工業電子技術士工作範圍：\r\n能按圖說完成電子單元結構之組裝、焊接及功能測試。</p>
                <hr>
            </div>
            <div class="w3-container">
            <h5 class="w3-opacity"><b>電腦軟體應用</b> 丙級</h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>生效日期:2018-08-16</h6>
            <h6 class="w3-text-teal">技術士證總編號:118-830829</h6>
            <p>能正確使用文書處理軟體,從事下列工作:\r\n1.編輯文件\r\n2.製作表格\r\n3.區段操作\r\n4.列卬文件\r\n5.檔案存取及刪除\r\n6.文書處理基本知識\r\n7.文書處理軟體指令</p>
            <hr>
        </div>
          </div>
<br>
    ';
?>
