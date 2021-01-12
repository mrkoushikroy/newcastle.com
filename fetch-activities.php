<?php
include"db/config.php";
$sql="SELECT * FROM activities";
$result = mysqli_query($conn, $sql);
$no=mysqli_num_rows($result);
$output = "";
if(mysqli_num_rows($result)>0){
//  $output = '<div class="row" >';
 $output='<div class="row border rounded mb-5">';
while($row = mysqli_fetch_assoc($result)){
$output.= '<div class="col-11 d-flex flex-row mb-4 p-2">';
$output.= '<div class="col-3 text-center" ><img src="assets/img/logo11.png" alt="" width="100" height="100"></div>';
$output.= "<div class='col-8'>
<h3 class='mb-0'>{$row['activity_name']}</h3>
<p class='card-text mb-auto'>{$row['description']}</p>
<p class='card-text mb-auto'>Location: {$row['location']}</p>
<div>
<button class='btn btn-danger edit-btn'>price: £ {$row['price']}</button>
<button class='btn btn-info edit-btn'  data-toggle='modal' data-target='#exampleModal' data-eid='".$row['activityID']."'>Buy now</button>
</div></div>";
    $output.= '</div><hr>';
}
$output.= '</div>';
mysqli_close($conn);
echo $output;
}
else{
    echo '<div class="alert alert-danger text-center h4" role="alert">
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;No Activities found!&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </div>';
}

?>