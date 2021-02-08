<br><br>
<div class="card card-primary">
    <div class="card-header">
        <h3 class="card-title">Edit Flower</h3>
    </div>

    <?php echo "<form role='form' method='post' action='index_Admin.php?controller=fleur&action=edit&code=".$fleur['code']."' >" ?>
                <div class="card-body">
				<div class="row">
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="lib">Description</label>
                    <input type="text" class="form-control" name="lib"  value="<?php echo $fleur['lib'];?>" required>
                  </div>
				 </div>
				 <div class="col-sm-6">
                  <div class="form-group">
                    <label for="color">Color</label>
					<input type="text" class="form-control" name="couleur"  value="<?php echo $fleur['couleur'];?>" >
                  </div>
				 </div>
				 </div>
				
				<div class="row">
				<div class="col-sm-6">
                  <div class="form-group">
                    <label for="categorie">Category</label>
                    <select class="form-control select2" style="width: 100%" name="categorie">
					<option selected><?php echo $fleur['categorie'];?></option>
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
					<input type="text" class="form-control" name="qte" placeholder="Enter Quantity" value="<?php echo $fleur['qte'];?>" required>
                  </div>
				 </div>
				 </div>
				</div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Edit Flower</button>
                </div>
              </form>
            </div> 