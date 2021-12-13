		
<!--Ads On -->
<div class="modal fade" id="modal-default-adon">
			<div class="modal-dialog">
			  <div class="modal-content">
				<div class="modal-header">
				  <h4 class="modal-title">Ad extras</h4>
				  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				  </button>
				</div>
				
				<div class="modal-body rendermodal">
					
				<input type="hidden" name="booking_id" class="booking_id">
				<input type="hidden" name="room_id" class="room_id">
				
				<div class="family-table">
                    <table class="table table-bordered table-hover tableadson">
                        <thead>
                            <tr>
								<th>Category</th>
                                <th>Ad on Name</th>
                                <th>quantity</th>
								<th>From date</th>
								<!--<th>To Date</th>-->
                                <th></th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
							<td>
								<select name="adoncateggory" class="form-control" id="adoncateggory">
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
								
								<select name="adonname" class="form-control" id="adonname-100">
								
								</select>
								
								</td>
                                <td><input type="number" class="validate[custom[integer],maxSize[2]]" min="1"  max="20" name="adon_qty" id="adon_qty" style="margin-top: -7px; margin-left: 5px;"></label></td>
								<td><input type="date" class="" maxlength="2" name="fromdate" id="fromdate" style="margin-top: -7px; margin-left: 5px;"name="fromdate" id="fromdate"></label></td>
								<!--<td><input type="date" class="" maxlength="2" name="todate" id="todate" style="margin-top: -7px; margin-left: 5px;" name="todate" id="todate"></label></td>-->
								
								<td><span><a href="javascript:void(0);" class="add" >Add More</a></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
				
				
				<div class="contents family-table extras_booking_listing">
				
				</div>
				

				</div>
				<div class="modal-footer justify-content-between">
				
				  <button type="button" class="btn btn-primary addfacilites">ADD facilities</button>
				</div>
				
			  </div>
			  <!-- /.modal-content -->
			</div>
        <!-- /.modal-dialog -->
        </div>


<script type="text/javascript">
  
$("#adoncateggory").on('change', function(){    // 2nd way
	 var category=$(this).val();
	 
	 //var category = $('#adoncateggory').val();

	  if(category != '')
	  {
	   $.ajax({
		url:"<?php echo base_url(); ?>fetch_p",
		method:"POST",
		data:{category:category},
		success:function(data)
		{
			
			
			$('#adonname-100').html(data);
		}
	   });
	  }
	  else
	  {
	 
	  }
});

$(document).on('change', '.adoncateggory', function(){ 
     var category=$(this).val();
	 var attval=$(this).attr('attr');
	  if(category != '')
	  {
	   $.ajax({
		url:"<?php echo base_url(); ?>fetch_p",
		method:"POST",
		data:{category:category},
		success:function(data)
		{
			$('#adonname-'+attval).html(data);
		}
	   });
	  }
	  else
	  {
	  }
	  
}); 
</script>
