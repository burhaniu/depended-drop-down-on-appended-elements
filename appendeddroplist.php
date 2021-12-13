<?php 
?>
<tbody>
		<tr>
			<td>
				<select name="adoncateggory" class="form-control adoncateggory" id="adoncateggory" 
				attr="<?php echo $count;?>">
				<option disabled="disabled" selected='selected'>Select category</option>
				<?php
				foreach($categories as $val)
				{
				?>
				<option value="<?php echo $val['category'];?>"><?php echo $val['category'];?></option>
				<?php 
				}
				?>
				</select>
			</td>
			<td>

				<select name="adonname" class="form-control" id="adonname-<?php echo$count;?>" >
				</select>
			</td>
<td>
<input type="number" class="validate[custom[integer],maxSize[2]]" min="1"  max="20" name="adon_qty" id="adon_qty" 
style="margin-top: -7px; margin-left: 5px;"></label></td>
<td><input type="date" class="" name="fromdate" id="fromdate" 
style="margin-top: -7px; margin-left: 5px;"></label></td>
<!--<td><input type="date" class="" name="todate" id="todate" 
style="margin-top: -7px; margin-left: 5px;"></label>
</td>-->
<td><a href="javascript:void(0);" class="rem" >Remove</a>
</td>
</tr>
</tbody>
