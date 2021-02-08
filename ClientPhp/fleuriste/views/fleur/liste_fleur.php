<br><br>
 <div class="card">
            <div class="card-header">
              <h3 >List Of Flowers</h3>
			  <a href="index_Admin.php?controller=fleur&action=add1"><input type="submit" class="btn btn-primary" value="ADD Flower" /></a>
            </div>
            <div class="card-body">
<?php

echo '<table id="example1" class="table table-bordered table-striped">
 <thead>
<tr>
	<th>Code</th>
	<th>Description</th>
	<th>Category</th>
	<th>Color</th>
	<th>Quantity</th>
	<th>Add Qte</th>
	<th>Edit</th>
	<th>Delete</th>
</tr>
 </thead>
 <tbody>
 ';
for($i=0;$i<count($fleurs['Fleur']); $i++){
	echo "<tr>";
		echo "
			<td style='width:5%'>".$fleurs['Fleur'][$i]['code']."</td>
			<td>".$fleurs['Fleur'][$i]['lib']."</td>
			<td style='width:15%'>".$fleurs['Fleur'][$i]['categorie']."</td>
			<td style='width:15%'>".$fleurs['Fleur'][$i]['couleur']."</td>			
			<td style='width:10%'>".$fleurs['Fleur'][$i]['qte']."</td>
			
			<td style='width:12%'>
			<form action='addqte.php' method='post' style='display: flex;flex-direction: row;'>
			<input type='hidden' name='code' id='code' class='form-control' value=".$fleurs['Fleur'][$i]['code'].">
			<input type='text' name='qte' id='qte' class='form-control' />
			<input  type='submit' name='submit' value='Add' class='btn btn-block btn-secondary'/>
			</form>
			</td>
			<td style='width:10%'><a href='index_Admin.php?controller=fleur&action=edit1&code=".$fleurs['Fleur'][$i]['code']."' class='btn btn-block btn-info'>EDIT</a></td>
			<td style='width:10%;color:white'><a onclick=\"deletefunction(".$fleurs['Fleur'][$i]['code'].")\"  class='btn btn-block btn-danger'>DELETE</a></td>

		";
	echo "</tr>";
	
}
echo "</tbody>
<tfoot>
<tr>
	<th>Code</th>
	<th>Description</th>
	<th>Category</th>
	<th>Color</th>
	<th>Quantity</th>
	<th>Add Qte</th>
	<th>Edit</th>
	<th>Delete</th>
</tr>
 </tfoot>
</table>";
?>
</div>
</div>
<script>
function  deletefunction(code){
	const swalWithBootstrapButtons = Swal.mixin({
  customClass: {
    confirmButton: 'btn btn-success',
    cancelButton: 'btn btn-danger'
  },
  buttonsStyling: false
})

swalWithBootstrapButtons.fire({
  title: 'Are you sure?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  confirmButtonText: 'Yes, delete it!',
  cancelButtonText: 'No, cancel!',
  reverseButtons: true
}).then((result) => {
  if (result.isConfirmed) {
	window.location.replace("index_Admin.php?controller=fleur&action=supp&code="+code);
    swalWithBootstrapButtons.fire(
      'Deleted!',
      'Flower has been deleted.',
      'success'
    )
  } else if (
    result.dismiss === Swal.DismissReason.cancel
  ) {
    swalWithBootstrapButtons.fire(
      'Cancelled',
      'Flower is safe :)',
      'error'
    )
  }
})
}
</script>