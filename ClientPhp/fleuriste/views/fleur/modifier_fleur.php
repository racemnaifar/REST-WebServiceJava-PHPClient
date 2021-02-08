<br><br>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Flower</h3>
    </div>

    <form role="form" method="post" action="index_Admin.php?controller=fleur&action=edit" enctype="multipart/form-data">
                <div class="card-body">
				<div class="row">
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="lib">Description</label>
                    <input type="text" class="form-control" name="lib" placeholder="Enter Description" value="<?php echo $flower->lib;?>" required>
                  </div>
				 </div>
				 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="color">Color</label>
					 <div class="input-group my-colorpicker2">
						<input type="text" class="form-control" name="color" value="<?php echo $flower->couleur;?>">
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
                    <select class="form-control select2" style="width: 100%" name="categorie" value="<?php echo $flower->categorie;?>">
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
					<input type="text" class="form-control" name="qte" placeholder="Enter Quantity" value="<?php echo $flower->qte;?>" required>
                  </div>
				 </div>
				 </div>
				</div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit Flower</button>
                </div>
              </form>
            </div> 