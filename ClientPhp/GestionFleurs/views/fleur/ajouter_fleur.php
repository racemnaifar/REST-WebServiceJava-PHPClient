<br><br>
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">New Flower</h3>
              </div>
              <form role="form" method="post" action="index_Admin.php?controller=fleur&action=add" enctype="multipart/form-data">
                <div class="card-body">
				<div class="row">
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="lib">Description</label>
                    <input type="text" class="form-control" name="lib" placeholder="Enter Description" required>
                  </div>
				 </div>
				 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="couleur">Color</label>
					 <div class="input-group my-colorpicker2">
						<input type="text" class="form-control" name="couleur" id="couleur" onkeydown="colorFunction()">
						<div class="input-group-append">
                      <span class="input-group-text"><i class="fas fa-square"></i></span>
                    </div>
					</div>
                  </div>
				 </div>
				 </div>
				
				<div class="row">
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="categorie">Category</label>
                    <select class="form-control select2" name="categorie" style="width: 100%">
                    <option>Alstromeria</option>
                    <option>Asters</option>
                    <option>Bouquets</option>
                    <option>Carnations</option>
                    <option>Chrysanthemum</option>
                    <option>Exotic Blooms and Foliages</option>
					<option>Flowers and Fillers</option>
                    <option>Gladiolas</option>
                    <option>Greens, Foliages and Branches</option>
                    <option>Gypsophila</option>
                    <option>Lilies</option>
                    <option>Limonium</option>
					<option>Orchids</option>
                    <option>Preserved and Dried</option>
                    <option>Proteas and Leucadendrons</option>
                    <option>Roses</option>
                  </select>
                  </div>
				 </div>
				 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="qte">Quantity</label>
					<input type="text" class="form-control" name="qte" placeholder="Enter Quantity" required>
                  </div>
				 </div>
				 </div>
				</div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Add Flower</button>
                </div>
              </form>
            </div> 
<script>
function colorFunction(){
	var ColorCode =document.getElementById('couleur').value;
    var ntcMatch  = ntc.name(ColorCode);
    document.getElementById('couleur').value=ntcMatch[1];
}
</script>
