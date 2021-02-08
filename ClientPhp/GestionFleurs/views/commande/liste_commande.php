<br><br>
 <div class="card">
            <div class="card-header">
              <h3 >List Of Orders</h3>
            </div>
            <div class="card-body">
<?php

echo '<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
	<th>Code</th>
	<th>Date of the Order</th>
	<th>Customer</th>	
	<th>Details</th>
</tr>
 </thead>
 <tbody>
 ';
for($i=0;$i<count($commandes['Commande']); $i++){

	echo "<tr>";
		echo "
			<td>".$commandes['Commande'][$i]['code']."</td>
			<td>".$commandes['Commande'][$i]['date']."</td>
			<td>".$commandes['Commande'][$i]['id_client']."</td>
			<td><a href='index_Admin.php?controller=commande&action=details&code=".$commandes['Commande'][$i]['code']."' class='btn btn-block btn-info'>Details</a></td>
		";
	echo "</tr>";
	
}
echo "</tbody>
<tfoot>
<tr>
	<th>Code</th>
	<th>Date of the Order</th>
	<th>Customer</th>	
	<th>Details</th>
</tr>
 </tfoot>
</table>";
?>
</div>
</div>
