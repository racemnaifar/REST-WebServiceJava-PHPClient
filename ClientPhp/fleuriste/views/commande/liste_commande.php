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
	<th>Date Commande</th>
	<th>Nom & Prénom Client</th>	
	<th>Details</th>
</tr>
 </thead>
 <tbody>
 ';
foreach($commandes as $commande){

	echo "<tr>";
		echo "
			<td>".$commande->code."</td>
			<td>".$commande->datec."</td>
			<td>".$commande->client."</td>
			<td><a href='index_Admin.php?controller=commande&action=detail&code=".$commande->code."'><img src='images/mod.png' ></a></td>
		";
	echo "</tr>";
	
}
echo "</tbody>
<tfoot>
<tr>
	<th>Code</th>
	<th>Date Commande</th>
	<th>Nom & Prénom Client</th>	
	<th>Details</th>
</tr>
 </tfoot>
</table>";
?>
</div>
</div>
