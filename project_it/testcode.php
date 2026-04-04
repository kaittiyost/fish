<?php
  include 'connect/connect.php';
  function sortByValue($a, $b) {
      return $b['count'] - $a['count'];
  }
  $arrpro1[]=null;
  $objpro1=mysqli_query($conn, "select * from tb_product where category_id=1");
  while($rspro1=mysqli_fetch_array($objpro1)){
    $objpd1=mysqli_query($conn, "select * from tb_order_details where p_id=".$rspro1['p_id']);
    $cpd1=0;
    while($rspd1=mysqli_fetch_array($objpd1)){
      $cpd1=$cpd1+$rspd1['p_number'];
    }
    array_push($arrpro1,array("p_id"=>$rspro1['p_id'],"count"=>$cpd1));
  }
  for($i=0;$i<count($arrpro1);$i++){
    if($arrpro1[$i]==null){
      echo "null<br>";
    }else{
      print_r($arrpro1[$i]);
      echo "<br>";
    }
  }
  echo "<br>";
  usort($arrpro1, 'sortByValue');
  for($i=0;$i<count($arrpro1);$i++){
    if($arrpro1[$i]!=null){
      print_r($arrpro1[$i]['p_id']);
      echo "<br>";
    }
  }
?>