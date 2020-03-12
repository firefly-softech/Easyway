<?php include ('header.php') ?>


<!-----form one----->
    <section class="form-one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>MSME/SSI/Udyog Aadhaar Registration</h2>
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
                        

                        
                            <label for="exampleFormControlInput1">3. Social Category / सामाजिक वर्ग</label>
                            <select class="form-control form-control-lg" name="social_category" id="social_category">
                                            <option value="">Select Social Category</option>
                                            <option  value="General">General</option>
                                            <option  value="SC">SC</option>
                                            <option  value="ST">ST</option>
                                            <option  value="OBC">OBC</option>
                                          </select>
    
                        

                        
                            <label for="exampleFormControlInput1">4. Gender / लिंग</label>
                                <select class="form-control form-control-lg " name="gender" id="gender">
                                            <option  selected="selected"  value="">Select Gender</option>
                                            <option  value="Male">Male</option>
                                            <option  value="Female">Female</option>
                                          </select>
    
                         
                        
                             <label for="exampleFormControlInput1">5. Physically handicapped / शारीरिक रूप से विकलांग</label>
                                          <select class="form-control form-control-lg" name="physically_handicapped" id="physically_handicapped">
                                            <option  selected="selected"  value="">Select Any</option>
                                            <option  value="Yes">Yes</option>
                                            <option  value="No">No</option>
                                           
                                          </select>
                         
                         
                            <label for="exampleFormControlInput1">6. Name of Enterprise/Business / उद्यम का नाम</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Name of Enterprise/Business">
                        
                        
                            <label for="exampleFormControlInput1">7. Type of Organisation / संगठन के प्रकार</label>
                             <select class="form-control form-control-lg" name="organisation_type" id="organisation_type" >
                                            <option value="">Select Type of Organisation</option>
                                            <option  value="Proprietorship Firm">Proprietorship Firm</option>
                                            <option  value="Hindu Undivided Family">Hindu Undivided Family</option>
                                            <option  value="Partnership Firm">Partnership Firm</option>
                                            <option  value="Limited Liability Partnership">Limited Liability Partnership</option>
                                            <option  value="Co-operative Society">Co-operative Society</option>
                                            <option  value="Private Limited">Private Limited</option>
                                            <option  value="Public Limited">Public Limited</option>
                                            <option  value="Self Help Group">Self Help Group</option>
                                            <option  value="Society">Society</option>
                                            <option  value="Trust">Trust</option>
                                                                                    </select>
                        
                        
                            <label for="exampleFormControlInput1">8. PAN / पैन नंबर</label>
                            <input type="number" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="PAN Number">
                    
                         
                           <label for="exampleFormControlInput1">9. Location of Plant (Address) / संयंत्र के स्थान</label>
                             <input type="text" class="form-control form-control-lg" placeholder="Flat/Door No. /फ्लैट / द्वार / ब्लॉक सं" name="location_address" id="location_address" value="" maxlength="200" >
                        
                        
                             <input type="text" style="margin-bottom: 17px;margin-top: 17px;" class="form-control form-control-lg" placeholder="Name of Premise/Building /परिसर / भवन / गांव का नाम" name="location_building_premise" id="location_building_premise" value="" maxlength="200" >
                        
                        
                            <input type="text" style="margin-bottom: 17px;"class="form-control form-control-lg" placeholder="Road/Street /सड़क/ मार्ग / गली" name="location_street" id="location_street" value="" maxlength="200" >
                    
                        
                             <input type="text" style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="Area/Locality /क्षेत्र / स्थान" name="location_locality" id="location_locality" value="" maxlength="200" >
                        
                        
                             <input type="text" style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="City /शहर" name="location_city" id="location_city" value="" maxlength="200" >
                        
                        
                             <input type="text" style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="PIN /पिन" name="location_PIN" id="location_PIN" value="" maxlength="6" onkeypress="return isNumberKey(event)">
                        
                        
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

     
                            
                                <input type="hidden" style="margin-bottom: 17px;" name="addmore_value" id="addmore_value" value="2" />
                                        <button type="button" class="add-more-btn btn text-right add-more-row">Add More</button></br>
                              
                            
                                <label for="exampleFormControlInput1">10. Office Address / आधिकारिक पता</label>
                             <label>
                                <input type ="checkbox" style="width:18px;height:18px;margin-left: 20px;" name="locationcheckaddress" id="locationcheckaddress"/> Same As Above 
                                </label>

                             <input type="text" style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="Flat/Door No. /फ्लैट / द्वार / ब्लॉक सं" name="office_address" id="office_address" value="" maxlength="200" >
                        
                        
                             <input type="text"style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="Name of Premise/Building /परिसर / भवन / गांव का नाम" name="office_building_premise" id="office_building_premise" value="" maxlength="200" >
                        
                        
                            <input type="text"style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="Road/Street /सड़क/ मार्ग / गली" name="office_street" id="office_street" value="" maxlength="200" >
                        
                        
                             <input type="text"style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="Area/Locality /क्षेत्र / स्थान" name="office_locality" id="office_locality" value="" maxlength="200" >
                        
                        
                             <input type="text" style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="City /शहर" name="office_city" id="office_city" value="" maxlength="200" >
                        
                        
                             <input type="text" style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="PIN /पिन" name="office_PIN" id="office_PIN" value="" maxlength="6" onkeypress="return isNumberKey(event)">
                        
                        
                             <select class="form-control form-control-lg" style="margin-bottom: 17px;" name="office_state" id="office_state" data-fv-notempty data-fv-notempty-message="The state is required" onchange="load_district2(this.value, 1);">
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
                             
                            
                                <select type="text" class="form-control form-control-lg" placeholder="District /जिला" name="district_name[]" id="district_name_2">
                                    <option value="">Select District</option>
                                </select>

        

                        
                            <label for="exampleFormControlInput1">11. Mobile No / मोबाइल नंबर +91-</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder=" Mobile No">
                         

                         
                            <label for="exampleFormControlInput1">12. Email ID / ईमेल</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Email ID">
                         

                         
                            <label for="exampleFormControlInput1">13. Date of Commencement of Business / उद्यम के प्रारंभ की तिथि</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="DD/MM/YYYY">
                        

                         
                            <label for="exampleFormControlInput1">14. Bank Account Number / बैंक खाता संख्या</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Bank Account Number">
                        

                         
                            <label for="exampleFormControlInput1">15. IFSC Code / आईएफएस कोड</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="IFSC Code">
                         
                        
                            <label for="exampleFormControlInput1">16. Main Business Activity of Enterprise / इकाई का प्रमुख गतिविधि</label>
                            <select class="form-control" name="main_business_activity" id="main_business_activity" onchange="get_data_nic(this.value);">
                                                <option value="">Select Activity of Enterprise</option>
                                                <option  value="Manufacturer">Manufacturer</option>
                                                <option  value="Service provider">Service provider</option>
                                            </select>
                         
                        
                            <label for="exampleFormControlInput1">17. NIC 2 Digit Code -  Choose primary Business Activity</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="first select Main Business Activity of Enterprise">
                         
                        
                            <label for="exampleFormControlInput1">18. Additional details about Business /व्यापार के बारे में अतिरिक्त जानकारी</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Additional details">
                         
                        
                            <label for="exampleFormControlInput1">19. Number of employees / व्यक्ति नियोजित</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Number of employees">
                         
                        
                            <label for="exampleFormControlInput1">20. Investment in Plant and Machinery (Amount in Lacs) / निवेश</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Investment in Plant and Machinery">
                        
                        
                            <label class="text-left">21. Attach your Aadhaar Card (File should be: jpg,png file &lt; 500KB)</label>
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-default ">
                             <input style="font-size: 15px;"type="file" name="file" id="file" >
                                            </button>
                                            
                                            <br>
                                            <span style="color: #1c3155;margin-top:30px">
                                                                
                                                     <font style="font-weight:bold;margin-left:16px; font-size:19px;"> OR You Can send</font>  <font style="font-weight:bold; color:#ff8000;font-size:19px;"> Documents on </font>  <i style="font-size:19px; color:
#25D366;" class="fa fa-whatsapp swapp"></i> <font style="font-weight:bold;font-size:19px;"> &nbsp;9112211457</font>  
                                            </span></br>


                        
               
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
                             <p><strong> 3. Social Category : </strong> Select the Social Category of applicant from the given options.<br>
                                        "आवेदक की सामाजिक श्रेणी का चयन करें।"<br></p>
                             <p><strong> 4. Gender :</strong> Select the gender from provided option<br>
                                            "आवेदक का लिंग चुनें।"<br></p>
                             <p><strong> 5. Physically Handicapped :</strong> Select the status from provided options<br>
                                        "चयन करें कि आवेदक शारीरिक रूप से विकलांग है या नहीं।"<br></p>
                             <p><strong> 6. Name of Enterprise / Business : </strong> Fill the name of Business / Enterprise which will get printed on MSME Certificate.<br>
                                    "यहां अपने व्यवसाय के नाम का उल्लेख करें। यह नाम MSME प्रमाणपत्र पर मुद्रित किया जाएगा।"<br></p>
                             <p><strong> 7. Type of Organization :</strong> Select the type of organization from the given options which will get printed on MSME Certificate.<br>
                                        "दिए गए विकल्पों में से संगठन के प्रकार का चयन करें।"<br></p>
                             <p><strong> 8. PAN: Fill 10 Digit PAN Number</strong> in case of Limited Liability Partnership / Co-operative Society / Private Limited / Public Limited. PAN Number is optional in case of Proprietorship Firm / Hindu Undivided Family / Partnership Firm / Self Help Group <br> 
                                    "यहां बिजनेस पैन का उल्लेख करें। प्रोप्राइटरशिप के मामले में प्रोप्राइटर का पैन उल्लेख करें।"<br></p>
                             <p><strong> 9. Location of Plant :</strong> Please fill the location address properly <br>
                                    "दिए गए क्षेत्रों में ठीक से विनिर्माण सुविधा का पता लिखे |"<br></p>
                             <p><strong> 10. Office Address :</strong> Please provide office address, if address other than plant location.<br>
                                    "दिए गए क्षेत्रों में ठीक से आधिकारिक पता लिखे |"<br></p>
                             <p><strong> 11. Mobile No :</strong> Fill the correct Mobile Number of Applicant <br>
                                    "आवेदक का सही मोबाइल नंबर यहां लिखें। "<br></p>
                             <p><strong> 12. Mail ID :</strong> Fill the correct Mail ID of Applicant<br>
                                "यहां अपनी सही ईमेल आईडी का उल्लेख करें।"<br></p>

                             <p><strong> 13. Date of Commencement of Business :</strong> Fill the date of Commencement of Business which will get printed on MSME Certificate.<br>
                                "व्यवसाय शुरू करने की तारीख का उल्लेख यहां करें।"<br></p>
                             <p><strong> 14. Bank Account Number :</strong> Fill  the Applicant’s bank account number.<br>
                                "यहां अपने बैंक खाता नंबर का उल्लेख करें।"<br></p>

                             <p><strong> 15. Bank IFS Code :</strong> Fill the Applicant Bank IFS Code. The IFS code is printed on the Cheque Books.<br>
                                "अपने बैंक IFSC कोड को यहां लिखें।"<br></p>

                             <p> <strong> 16. Main Business Activity of Enterprise :</strong> Select the Main Business activity from the given options.<br>
                                "अपनी मुख्य व्यावसायिक गतिविधि चुनें।"<br></p>

                             <p><strong> 17. NIC 2 Digit Code :</strong>Select the 2 Digit NIC Code from the given options considering your business activity. <br>
                                "यहां अपनी व्यावसायिक गतिविधि से संबंधित 2 अंकों का एनआईसी कोड चुनें।"<br></p>

                             <p><strong> 18. Additional details about Business :</strong> Fill Additional details about business. (For example – manufacturing of Food Products, Computer programing, Software development) <br>
                                "व्यवसाय के बारे में अतिरिक्त जानकारी भरें।"<br></p>

                             <p><strong> 19. Number of employees :</strong> Fill total number of people been employed. <br>
                                "आपके संगठन में कार्यरत कर्मचारियों की संख्या का उल्लेख करें।"<br></p>

                             <p><strong> 20. Investment in Plant & Machinery / Equipment :</strong> Fill the total investment made in Plant, Machinery, and Equipment etc. to start your business. <br>
                                "अपने व्यवसाय में किए गए निवेश की कुल राशि भरें।"<br></p>

                             <p ><strong> 21. Attachment :</strong> Attach scan copy of your Aadhaar Card. (jpg,png file &lt; 500KB)<br>
                                "अपने आधार कार्ड की स्कैन कॉपी Attach करें। आप अपने आधार कार्ड को  व्हाट्सएप पर  भी भेज सकते हैं।<strong> (9112211457)  </strong><br></p>
                        </div>

                     </div><!--meme-inst-->
                
             </div><!--instruction section-->
                    </div><!--col-md-5-->
                </div><!--title-->
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
    </section>

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

          function load_district2(value, flag)
        {
            var results = $.getJSON("states-and-districts.json", function(data) 
            {
                console.log('data here');
                console.log(data);
                newstate = data['states'].filter(function (states) { return states.state == value });
                console.log(newstate[0]['districts']);
                var select = document.getElementById("district_name_2");
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


<script type="text/javascript">
        
function setBillingAddress(){
  if ($("#locationcheckaddress").is(":checked")) {

    $('#office_address').val($('#location_address').val());
    $('#office_address').attr('disabled', 'disabled');

    $('#office_building_premise').val($('#location_building_premise').val());
    $('#office_building_premise').attr('disabled', 'disabled');

    $('#office_street').val($('#location_street').val());
    $('#office_street').attr('disabled', 'disabled');

    $('#office_locality').val($('#location_locality').val());
    $('#office_locality').attr('disabled', 'disabled');

    $('#office_city').val($('#location_city').val());
    $('#office_city').attr('disabled', 'disabled');

    $('#office_PIN').val($('#location_PIN').val());
    $('#office_PIN').attr('disabled', 'disabled');

    $('#office_state').val($('#location_state').val());
    $('#office_state').attr('disabled', 'disabled');

    $('#district_name_2').val($('#district_name_1').val());
    $('#district_name_2').attr('disabled', 'disabled');



  } else {

    $('#office_address').removeAttr('disabled');
    $('#office_building_premise').removeAttr('disabled');
    $('#office_street').removeAttr('disabled');
    $('#office_locality').removeAttr('disabled');
    $('#office_city').removeAttr('disabled');
    $('#office_PIN').removeAttr('disabled');
    $('#office_state').removeAttr('disabled');
    $('#district_name_2').removeAttr('disabled');



  }



}

$('#locationcheckaddress').click(function(){
  setBillingAddress();
})
    


    </script>




<?php include('footer.php') ?>

























      <!--  <div class="irs-header-nav scrollingto-fixed">
            <div class="container-fluid" style="background-color: green; color:gray;">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <nav class="navbar navbar-default irs-navbar">
                           <!-- <div class="container-fluid">-->
                                <!-- Brand and toggle get grouped for better mobile display -->
                               <!-- <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                    <!--<a class="navbar-brand" href="index-layout1.html">
                                        <img src="images/logo.png" alt="">
                                    </a>--
                                </div>
                                <!-- Collect the nav links, forms, and other content for toggling --
                                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                    <ul style="font-weight: bold;font-family:Rubik;" class="nav navbar-nav" data-hover="dropdown" data-animations="flipInY">
                                       <li style="margin-right: 10px;"><a style="font-size:18px;" href="index.php">Home</a>
                                        </li>
                                        <li style="margin-right: 10px;"><a style="font-size:18px;"href="about.php"></i>About</a>
                                        </li>
                                        <li style="margin-right: 10px;"><a href="course.php"  style= "font-size:18px;">Courses</a>
                                        </li>
                                       <li style="margin-right: 10px;"><a style="font-size:18px;" href="placement.php">Placement</a></li>
                                        <li style="margin-right: 10px;"><a style="font-size:18px;" href="carrer.php">Career</a></li>
                                       
                                        <li style="margin-right: 10px;"><a style="font-size:18px;" href="contact.php">Contact</a>
                                        </li>
                                    </ul>
                                </div>
                                <!-- /.navbar-collapse --
                
                        </nav>
                    </div>
                   
                </div>
            </div>--
        </div>-->
  
    <!-- Main Header end -->

    

   

   

    



   


   
    <!-- Footer start --
    <footer class="irs-footer-field">
        <div class="container">
            <div class="row animatedParent animateOnce animateOnce">
                <div class="col-md-3">
                    <div class="irs-footer-about">
                        <img class="irs-foooter-logo" src="images/footer-logo.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtin eiusmodtin didunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
                        <div class="irs-social">
                            <a href="#"><i class="icofont icofont-social-facebook"></i></a>
                            <a href="#"><i class="icofont icofont-social-twitter"></i></a>
                            <a href="#"><i class="icofont icofont-social-vimeo"></i></a>
                            <a href="#"><i class="icofont icofont-brand-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="irs-footer-link">
                        <h4 class="irs-footer-heading">Useful Links</h4>
                        <ul>
                            <li><a href="#">Home</a>
                            </li>
                            <li><a href="#">About Us</a>
                            </li>
                            <li><a href="#">Courses</a>
                            </li>
                            <li><a href="#">Teachers</a>
                            </li>
                            <li><a href="#">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="irs-footer-tweets">
                        <h4 class="irs-footer-heading">RECENT TWEETS</h4>
                        <div class="irs-tweets">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <p><a href="#">@UNIVERSITY</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtin.</p>
                            <a href="#">about 5 min ago</a>
                        </div>
                        <div class="irs-tweets">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                            <p><a href="#">@UNIVERSITY</a> Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodtin.</p>
                            <a href="#">about 5 min ago</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="irs-footer-contact">
                        <h4 class="irs-footer-heading">Contact Us</h4>
                        <img src="images/footer.jpg" alt="">
                        <div class="irs-mailbox">
                            <p><i class="zmdi zmdi-email"></i> Mail: yourmail@gmail.com </p>
                            <p><i class="zmdi zmdi-gps-dot"></i> 678 Zoomtowr, Main road, Canada</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer end --

    <section class="irs-copyright-field">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="irs-copyright">
                        <p>Copyright© 2017. Design by <a href="https://themeforest.net/user/irs_soft">irs_soft</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>-->

    <!-- script start from here -->
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/bootstrap-dropdownhover.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.js"></script>
    <script type="text/javascript" src="js/jquery-scrolltofixed-min.js"></script>
    <script type="text/javascript" src="js/isotope.js"></script>
    <script type="text/javascript" src="js/stellar.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script type="text/javascript" src="js/jquery.magnific-popup.min.js"></script>
    <script type="text/javascript" src="js/jquery.masonry.min.js"></script>
    <script type="text/javascript" src="js/css3-animate-it.js"></script>
    <script type="text/javascript" src="js/bootstrap-slider.js"></script>
    <script type="text/javascript" src="js/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="js/classie.js"></script>

    <!-- Custom script for all pages -->
    <script type="text/javascript" src="js/script.js"></script>

    <!-- Funfact START -->
    <script type="text/javascript">
        $(document).ready(function($) {
            $('.start-count').each(function() {
                var $this = $(this);
                $this.data('target', parseInt($this.html()));
                $this.data('counted', false);
                $this.html('0');
            });

            $(window).bind('scroll', function() {
                var speed = 3000;
                $('.start-count').each(function() {
                    var $this = $(this);
                    if (!$this.data('counted') && $(window).scrollTop() + $(window).height() >= $this.offset().top) {
                        $this.data('counted', true);
                        $this.animate({
                            dummy: 1
                        }, {
                            duration: speed,
                            step: function(now) {
                                var $this = $(this);
                                var val = Math.round($this.data('target') * now);
                                $this.html(val);
                                if (0 < $this.parent('.value').length) {
                                    $this.parent('.value').css('width', val + '%');
                                }
                            }
                        });
                    }
                });
            }).triggerHandler('scroll');
        });
    </script>

</body>


<!-- Mirrored from irsfoundation.com/tf/templates/EducationPark/index-layout1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 19 Jun 2019 10:54:49 GMT -->
</html>