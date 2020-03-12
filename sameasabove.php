<?php include ('header.php') ?>



	<label for="exampleFormControlInput1">9. Location of Plant (Address) / संयंत्र के स्थान</label>



                             <input type="text" class="form-control form-control-lg" placeholder="Flat/Door No. /फ्लैट / द्वार / ब्लॉक सं" name="location_address" id="location_address" value="" maxlength="200" >

                             <input type="text" style="margin-bottom: 17px;margin-top: 17px;" class="form-control form-control-lg" placeholder="Name of Premise/Building /परिसर / भवन / गांव का नाम" name="location_building_premise" id="location_building_premise" value="" maxlength="200" >


<label for="exampleFormControlInput1">10. Office Address / आधिकारिक पता</label>
				<label>
				<input type ="checkbox" style="width:18px;height:18px;margin-left: 20px;" name="locationcheckaddress" id="locationcheckaddress"/> Same As Above 
                </label>

                                <input type="text" style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="Flat/Door No. /फ्लैट / द्वार / ब्लॉक सं" name="office_address" id="office_address" value="" maxlength="200" >

                                <input type="text"style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="Name of Premise/Building /परिसर / भवन / गांव का नाम" name="office_building_premise" id="office_building_premise" value="" maxlength="200" >





<script type="text/javascript">
	function setBillingAddress(){
  if ($("#locationcheckaddress").is(":checked")) {
    $('#office_address').val($('#location_address').val());
    $('#office_address').attr('disabled', 'disabled');

    $('#office_building_premise').val($('#location_building_premise').val());
    $('#office_building_premise').attr('disabled', 'disabled');


  } else {
    $('#office_address').removeAttr('disabled');
    $('#office_building_premise').removeAttr('disabled');

  }



}

$('#locationcheckaddress').click(function(){
  setBillingAddress();
})
	
</script>





<?php include('footer.php') ?>