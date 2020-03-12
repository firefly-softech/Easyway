<?php include ('header.php') ?>

 <section class="form-one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>DATABANK REGISTRATION </h2>
                      </div>
                        
                    <div class="col-md-7" >
                        <div class="registration-section" style="margin-left:40px; margin-right:40px;border:1px solid black;box-shadow:5px 10px 18px #888888; background-color: #f2eeed;" >
                         <div class="title-line">
                            <h1 style="text-align:center;height:50px;font-family: 'Rubik';color:#FF9933;font-weight: bold;font-size: 30px; ">Registration Form</h1>
                          <form class="msme-form">
                           
                        <div class="form-group col-md-12">
                            <label for="exampleFormControlInput1">1.Aadhar Number/आधार नंबर</label>
                            <input type="number" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Aadhar Number">
                        

                        
                            <label for="exampleFormControlInput1">2.Name of Entrepreneur /Applicant as printed on Aadhaar Card/उद्यमी का नाम</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Name of Entrepreneur">
                        

                        
                            <label for="exampleFormControlInput1">3. Udyog Aadhaar Number (UAN)</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Udyog Aadhaar Number (UAN)">
                            
                        
                            <label for="exampleFormControlInput1">4. PAN</label>
                              <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="PAN">  
                         
                        
                             <label for="exampleFormControlInput1">5. Mobile No</label>
                                <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Mobile Number">         
                         
                         
                            <label for="exampleFormControlInput1">6. Email ID</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Email ID">
                        
                        
                            <label for="exampleFormControlInput1">7. State</label>
                             <select style="margin-bottom: 17px;" class="form-control form-control-lg" name="state[]" id="state_1" data-fv-notempty data-fv-notempty-message="The state is required" onchange="load_district1(this.value, 1);">
                                
                                   <option value="">Select State</option>
                                    
                                    <option value="Andhra Pradesh">ANDHRA PRADESH</option>
                                    <option value="Arunachal Pradesh">ARUNACHAL PRADESH</option>
                                    <option value="Assam">ASSAM</option>
                                    <option value="Bihar">BIHAR</option>
                                    <option value="Chandigarh (UT)">CHANDIGARH</option>
                                    <option value="Chhattisgarh">CHHATISGARH</option>
                                    <option value="Dadra and Nagar Haveli (UT)">DADRA AND NAGAR HAVELI</option>
                                    <option value="Daman and Diu (UT)">DAMAN AND DIU</option>
                                    <option value="Delhi (NCT)">DELHI</option>
                                    <option value="Goa">GOA</option>
                                    <option value="Gujarat">GUJARAT</option>
                                    <option value="Haryana">HARYANA</option>
                                    <option value="Himachal Pradesh">HIMACHAL PRADESH</option>
                                    <option value="Jammu and Kashmir">JAMMU AND KASHMIR</option>
                                    <option value="Jharkhand">JHARKHAND</option>
                                    <option value="Karnataka">KARNATAKA</option>
                                    <option value="Kerala">KERALA</option>
                                    <option value="Lakshadweep (UT)">LAKSHADWEEP</option>
                                    <option value="Madhya Pradesh">MADHYA PRADESH</option>
                                    <option value="Maharashtra">MAHARASHTRA</option>
                                    <option value="Manipur">MANIPUR</option>
                                    <option value="Meghalaya">MEGHALAYA</option>
                                    <option value="Mizoram">MIZORAM</option>
                                    <option value="Nagaland">NAGALAND</option>
                                    <option value="Odisha">ODISHA</option>
                                    <option value="Puducherry (UT)">PONDICHERRY</option>
                                    <option value="Punjab">PUNJAB</option>
                                    <option value="Rajasthan">RAJASTHAN</option>
                                    <option value="Sikkim">SIKKIM</option>
                                    <option value="Tamil Nadu">TAMIL NADU</option>
                                    <option value="Telangana">TELANGANA</option>
                                    <option value="Tripura">TRIPURA</option>
                                    <option value="Uttar Pradesh">UTTAR PRADESH</option>
                                    <option value="Uttarakhand">UTTARAKHAND</option>
                                    <option value="West Bengal">WEST BENGAL</option>
                                 </select>
                             
                            
                                <select type="text" class="form-control form-control-lg" placeholder="District /जिला" name="district_name[]" id="district_name_1">
                                    <option value="">Select District</option>
                                </select>

 <script type="text/javascript">
        function load_district1(value, flag)
        {
            var results = $.getJSON("states-and-districts.json", function(data) 
            {
                console.log('data here');
                console.log(data);
                newstate = data['states'].filter(function (states) { return states.state == value });
                console.log(newstate[0]['districts']);
                var select = document.getElementById("district_name_1");
                select.options.length = 0;
                for(var i = 0; i < newstate[0]['districts'].length; i++) 
                {
                    var option = document.createElement("option");
                    option.text = newstate[0]['districts'][i];
                    option.value = newstate[0]['districts'][i];
                    select.appendChild(option);
                
                }
            });
         }
     </script>
                        
                            <label for="exampleFormControlInput1">8. Product / Service Details</label><br>
                            <label for="exampleFormControlInput1"> Product / Service Name</label>
                            <input type="number" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Product / Service Name">
                            <label for="exampleFormControlInput1"> Product / Service Description</label>
                            <input type="number" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Product / Service Description">
                         
                            <label for="exampleFormControlInput1">9. Annual Production Capacity</label>
                             <input type="text" class="form-control" name="txt_annual_prod_capacity" id="txt_annual_prod_capacity" value="0" maxlength="12" onkeypress="return isNumberKey(event)" placeholder="Annual Production Capacity">

                             <label for="exampleFormControlInput1">10. Production Measurement Unit</label>
                             <select class="form-control form-control-lg" name="organisation_type" id="organisation_type" >
                                            <option value="">Select Production Measurement Unit</option>
                                            <option  value="Foot">Foot</option>
                                            <option  value="Inch">Inch</option>
                                            <option  value="Kilo_Watt">Kilo_Watt</option>
                                            <option  value="Kilogram">Kilogram</option>
                                            <option  value="Kilometre">Kilometre</option>
                                            <option  value="Litre">"Litre"</option>
                                            <option  value="Mega_Watt">Mega_Watt</option>
                                            <option  value="Meter">Meter</option>
                                            <option  value="Metric_ton">Metric_ton</option>
                                            <option  value="Piece">Piece</option>
                                            <option  value="Square_Feet">Square_Feet</option>
                                            <option  value="Square_Meter">Square_Meter</option>
                                            <option  value="Ton">Ton</option>
                                            <option  value="Unit">Unit</option>
                                            <option  value="Yard">Yard</option>
                           </select>
                        


                          <button type="submit " name="msme_form" class="btn btn-default mb-20px" style="color: #fff;font-weight: 600; background-color:#ff861c;margin:50px;font-size: 18px;padding:10px;margin-left: 200px;">Validate & Pay Consultancy Fees </button>
                  </div><!--col-md-12-->
</form>
 
                    </div>  
                    </div><!--registration section-->
                    </div><!--col-md-7-->
                    <div class="col-md-5">
                        <div class="Instruction-section" style="margin-left: 30px;margin-right: 30px;border:1px solid black;background-color:#f2eeed;">
                               <div class="title-line">
                                 <h1 style="text-align:center;height:50px;margin-bottom:20px;font-family: 'Rubik';font-weight: bold;font-size: 30px;color:#FF9933;">Instruction</h1>
                                </div>
                      
                        <div class="col-md-12" style="background-color:#f2eeed;border:1px solid black; box-shadow: 10px 10px 8px #888888;">
                            <div class="msme-inst" style="margin:9px 0px 20px 0px;">
                             <p><strong> 1.Aadhar Number :</strong> Fill 12 digit Aadhaar number issued to the applicant in the appropriate field.<br>
                                                  "यहां 12 अंकों का आधार नंबर भरें।"</p>
                            <p><strong> 2. Name of Applicant :</strong> Fill name of Applicant as mentioned on the Aadhaar Card.<br>
                                                                "आधार कार्ड में उल्लिखित आवेदक का नाम भरें।"<br></p>
                             <p><strong> 3. Udyog Aadhaar Number (UAN): </strong> Fill 12 digit Udyog Aadhaar Number (UAN) mentioned on the MSME certificate.<br></p>
                             <p><strong> 4. PAN :</strong> Fill 10 Digit PAN Number<br></p>
                             <p><strong> 5. Mobile No :</strong>  Fill the correct Mobile Number of Applicant </p>
                             <p><strong> 6. Mail ID : </strong> Fill the correct Mail ID of Applicant</p>
                             <p><strong> 7. Product / Service Details:</strong> <br>
                             	<strong>&nbsp&nbsp Product/Service Name:</strong>Fill your Product/Service Name.<br/>
							<strong>&nbsp&nbsp Product/Service Description:</strong>Describe your Product/service details.</p>
                             <p><strong> 8. Annual Production Capacity: </strong> Fill Your Annual Production Capacity. </p>
                             <p><strong> 9. Production Measurement Unit :</strong>  Fill Your Production Measurement Unit (i.e. KG, METER, LITERE etc)</p>

                               </div>

                     </div><!--meme-inst-->
                
             </div><!--instruction section-->
                    </div><!--col-md-5-->
               </div><!--title-->
                </div><!--col-md-12-->
            </div><!--row-->
          </div><!--container-->
    </section>
                        
<?php include('footer.php') ?>