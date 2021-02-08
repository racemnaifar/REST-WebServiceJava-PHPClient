<?php
	$url = "http://localhost:8080/FleuristeApp/webresources/commande/GetByCode?codeCom=".$_REQUEST['code'];
	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
	$response = curl_exec($ch);
	$new = simplexml_load_string($response);
	$con = json_encode($new);
	$com = json_decode($con,true);
?>
<br><br>
 <div class="card">
            <div class="card-header">
              <h3 >List Of Orders</h3>
            </div>
            <div class="card-body">
		<div class="card card-default">
          <div class="card-header">
            <h3 class="card-title">Order Information</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
              <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
            </div>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-md-4">
               <div class="form-group">
                    <label for="code">Code</label>
                    <input type="text" class="form-control" name="code" value="<?php echo $com['code'] ?>" readonly>
                </div>
              </div>
              <div class="col-md-4">
				<div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" class="form-control" name="date" value="<?php echo $com['date'] ?>" readonly>
                 </div>
              </div>
			  <div class="col-md-4">
				<div class="form-group">
                    <label for="client">Customer</label>
                    <input type="text" class="form-control" name="client" value="<?php echo $com['id_client'] ?>" readonly>
                 </div>
              </div>
            </div>
          </div>
          <div class="card-footer">

          </div>
        </div>	
<?php
echo '<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
	<th>Description Flower</th>
	<th>Category Flower</th>
	<th>Color Flower</th>
	<th>Quantity</th>	
</tr>
 </thead>
 <tbody>
 ';
 $arr =[];
 $arrv = [];
foreach ( $com['listCommande']['entry'] as $key => $value )
{
	foreach ( $value as $key => $value ){
		if ($key == "key"){
			array_push($arr, $value);
		}
		else{
			array_push($arrv, $value);
		}
	}
}
for($i=0;$i<count($arr); $i++){
	$url = "http://localhost:8080/FleuristeApp/webresources/fleur/GetByCode?code=".$arr[$i];
							$ch = curl_init($url);
							curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
							curl_setopt($ch, CURLOPT_CUSTOMREQUEST,"GET");
							$response = curl_exec($ch);
							$new = simplexml_load_string($response);
							$con = json_encode($new);
							$fleur = json_decode($con,true);
	echo "<tr>";
		echo "
			<td>".$fleur['lib']."</td>
			<td>".$fleur['categorie']."</td>
			<td>".$fleur['couleur']."</td>
			<td>".$arrv[$i]."</td>
		";
	echo "</tr>";
}
echo "</tbody>
<tfoot>
<tr>
	<th>Description Flower</th>
	<th>Category Flower</th>
	<th>Color Flower</th>
	<th>Quantity</th>
</tr>
 </tfoot>
</table>";
?>
</div>
</div>
