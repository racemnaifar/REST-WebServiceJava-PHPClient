<br><br>
 <div class="card">
            <div class="card-header">
              <h3 >Order Details</h3>
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
                 <label for="lib">Order Code</label>
                    <input type="text" class="form-control" name="code" value="">
                </div>             
              </div>
              <div class="col-md-4">
                <div class="form-group">
                  <label for="lib">Order Date</label>
                    <input type="date" class="form-control" name="date" value="">
                </div>              
              </div>
			  <div class="col-md-4">
                <div class="form-group">
                  <label for="lib">Customer</label>
                    <input type="text" class="form-control" name="client" value="">
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
