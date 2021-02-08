<br><br>
 <div class="card">
            <div class="card-header">
              <h3 >List Of Customers</h3>
            </div>
            <div class="card-body">
<?php

echo '<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
	<th>Nom & Prenom</th>
	<th>Email</th>
	<th>UserName</th>
</tr>
 </thead>
 <tbody>
 ';
for($i=0;$i<count($clients['Client']); $i++){
	echo "<tr>";
		echo "
			<td>".$clients['Client'][$i]['nomPrenom']."</td>
			<td>".$clients['Client'][$i]['email']."</td>
			<td>".$clients['Client'][$i]['username']."</td>
		";
	echo "</tr>";
	
}
echo "</tbody>
<tfoot>
<tr>
	<th>Nom & Prenom</th>
	<th>Email</th>
	<th>UserName</th>
</tr>
 </tfoot>
</table>";
?>
</div>
</div>