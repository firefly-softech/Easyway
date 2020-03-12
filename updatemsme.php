<?php include ('header.php') ?>



 <section class="form-one">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>MSME/SSI/Udyog Aadhaar Registration</h2>
                    </div>
                    <div class="col-md-7" >
                        <div class="registration-section">
                         <div class="title-line">
                            <h1 style="text-align:center;height:50px;font-family: 'Rubik';color:#FF9933;font-weight: bold;font-size: 30px; ">Registration Form</h1>
                        
                        
                        
                        
                        <form class="msme-form">
                           
                        <div class="form-group col-md-12">
                            <label for="exampleFormControlInput1">1.Aadhar Number/आधार नंबर</label>
                            <input type="number" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Aadhar Number">
                        

                        
                            <label for="exampleFormControlInput1">2.Name of Entrepreneur /Applicant as printed on Aadhaar Card/उद्यमी का नाम</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Name of Entrepreneur">
                        

                             <label for="exampleFormControlInput1">3. Mobile No / मोबाइल नंबर +91-</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder=" Mobile No">

                             <label for="exampleFormControlInput1">4. Email ID / ईमेल</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Email ID">

                            <label for="exampleFormControlInput1">5. Udyog Aadhaar Number (UAN)</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Udyog Aadhaar Number (UAN)">
                         

                        	<input type="checkbox" style="width:18px;height:18px;" name="chk_box_social_category" id="chk_box_social_category"  onchange = "enableiutextbox()">
                            <label for="exampleFormControlInput1">6. Social Category / सामाजिक वर्ग</label>
                            <select class="form-control form-control-lg" name="social_category" id="social_category" disabled = "" >
                                            <option value="">Select Social Category</option>
                                            <option  value="General">General</option>
                                            <option  value="SC">SC</option>
                                            <option  value="ST">ST</option>
                                            <option  value="OBC">OBC</option>
                                          </select>
    
                        

                        <input type="checkbox" style="width:18px;height:18px;" name="chk_box_gender" id="chk_box_gender"  onchange = "enableiutextbox()">
                            <label for="exampleFormControlInput1">7. Gender / लिंग</label>
                                <select class="form-control form-control-lg " name="gender" id="gender" disabled = "">
                                            <option  selected="selected"  value="">Select Gender</option>
                                            <option  value="Male">Male</option>
                                            <option  value="Female">Female</option>
                                          </select>
    
                         <input type="checkbox" style="width:18px;height:18px;" name="chk_box_physically_handicapped" id="chk_box_physically_handicapped"  onchange = "enableiutextbox()">
                        
                             <label for="exampleFormControlInput1">8. Physically handicapped / शारीरिक रूप से विकलांग</label>
                                          <select class="form-control form-control-lg" name="physically_handicapped" id="physically_handicapped" disabled = "">
                                            <option  selected="selected"  value="">Select Any</option>
                                            <option  value="Yes">Yes</option>
                                            <option  value="No">No</option>
                                           
                                          </select>
                         
                        <input type="checkbox" style="width:18px;height:18px;" name="chk_box_enterprise_business_name" id="chk_box_enterprise_business_name"  onchange = "enableiutextbox()" >
                            <label for="exampleFormControlInput1">9. Name of Enterprise/Business / उद्यम का नाम</label>
                            <input type="text" class="form-control form-control-lg" id="enterprise_business_name" name="enterprise_business_name" placeholder="Name of Enterprise/Business" disabled = "">
                        
                        <input type="checkbox" style="width:18px;height:18px;" name="chk_box_organisation_type" id="chk_box_organisation_type"  onchange = "enableiutextbox()">
                            <label for="exampleFormControlInput1">10. Type of Organisation / संगठन के प्रकार</label>
                             <select class="form-control form-control-lg" name="organisation_type" id="organisation_type" disabled = "" >
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
                        
                        <input type="checkbox" style="width:18px;height:18px;" name="chk_box_pan" id="chk_box_pan"  onchange = "enableiutextbox()">
                            <label for="exampleFormControlInput1">11. PAN / पैन नंबर</label>
                            <input type="number" class="form-control form-control-lg" name="PAN" id="PAN" placeholder="PAN Number" disabled = "">
                    
                         <input type="checkbox" style="width:18px;height:18px;" name="chk_box_location_plant" id="chk_box_location_plant"  onchange = "enableiutextbox()">
                            <label for="exampleFormControlInput1">12. Location of Plant (Address) / संयंत्र के स्थान</label>
                             <input type="text" class="form-control form-control-lg" placeholder="Flat/Door No. /फ्लैट / द्वार / ब्लॉक सं" name="pl_address_1" id="pl_address_1" value="" maxlength="200" disabled = "" >
                        
                        

                             <input type="text" style="margin-bottom: 17px;margin-top: 17px;" class="form-control form-control-lg" placeholder="Name of Premise/Building /परिसर / भवन / गांव का नाम" name="name_of_building_premise_1" id="name_of_building_premise_1" value="" maxlength="200" disabled = "" >
                        
                        
                            <input type="text" style="margin-bottom: 17px;"class="form-control form-control-lg" placeholder="Road/Street /सड़क/ मार्ग / गली" name="road_street_1" id="road_street_1" value="" maxlength="200" disabled = "" >
                    
                        
                             <input type="text" style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="Area/Locality /क्षेत्र / स्थान" name="area_locality_1" id="area_locality_1" value="" maxlength="200" disabled = "" >
                        
                        
                             <input type="text" style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="City /शहर" name="city_1" id="city_1" value="" maxlength="200" disabled = "" >
                        
                        
                             <input type="text" style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="PIN /पिन" name="PIN_1" id="PIN_1" value="" maxlength="6" onkeypress="return isNumberKey(event)" disabled = "">
                        
                        
                         <!--    <select style="margin-bottom: 17px;" class="form-control form-control-lg" name="state_1" id="state_1" data-fv-notempty data-fv-notempty-message="The state is required" onchange="load_district1(this.value, 1);" disabled = "">
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
                             
                            
                                <select type="text" class="form-control form-control-lg" placeholder="District /जिला" name="district_name[]" id="district_name_1" disabled = "">
                                    <option value="">Select District</option>
                                </select>

                                
                            
                               <!-- <input type="hidden" style="margin-bottom: 17px;" name="addmore_value" id="addmore_value" value="2" />
                                        <button type="button" class="add-more-btn btn text-right add-more-row">Add More</button></br>-->


                                        
                              
                        <input type="checkbox" style="width:18px;height:18px;" name="check_box_office_address" id="check_box_office_address" onchange="enableiutextbox()">
                                <label for="exampleFormControlInput1">13. Office Address / आधिकारिक पता</label>
                             <input type="text" style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="Flat/Door No. /फ्लैट / द्वार / ब्लॉक सं" name="address_off" id="address_off" value="" maxlength="200" disabled = "" >
                        
                        
                             <input type="text"style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="Name of Premise/Building /परिसर / भवन / गांव का नाम" name="o_name_of_building_premise" id="o_name_of_building_premise" value="" maxlength="200" disabled = "">
                        
                        
                            <input type="text"style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="Road/Street /सड़क/ मार्ग / गली" name="o_road_street" id="o_road_street" value="" maxlength="200" disabled = "" >
                        
                        
                             <input type="text"style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="Area/Locality /क्षेत्र / स्थान" name="o_area_locality" id="o_area_locality" value="" maxlength="200" disabled = "" >
                        
                        
                             <input type="text" style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="City /शहर" name="o_city" id="o_city" value="" maxlength="200" disabled = "" >
                        
                        
                             <input type="text" style="margin-bottom: 17px;" class="form-control form-control-lg" placeholder="PIN /पिन" name="o_PIN" id="o_PIN" value="" maxlength="6" onkeypress="return isNumberKey(event)" disabled = "">
                        
                        
                          <!--   <select class="form-control form-control-lg" style="margin-bottom: 17px;" name="state_2" id="state_2" data-fv-notempty data-fv-notempty-message="The state is required" onchange="load_district2(this.value, 1);" disabled = "">
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
                             
                            
                                 <select type="text" class="form-control form-control-lg" placeholder="District /जिला" name="district_name_2" id="district_name_2" disabled = "">
                                    <option value="">Select District</option>
                                </select> -->

                        
                          <input type="checkbox" style="width:18px;height:18px;" name="chk_box_mobile_no" id="chk_box_mobile_no"  onchange = "enableiutextbox()"> 
                          <label for="exampleFormControlInput1">14. Mobile No / मोबाइल नंबर +91-</label>
                            <input type="text" class="form-control form-control-lg" name="mobile_no_u" id="mobile_no_u" placeholder=" Mobile No" disabled = "">


                            <input type="checkbox" style="width:18px;height:18px;" name="chk_box_email" id="chk_box_email"  onchange = "enableiutextbox()">
                             <label for="exampleFormControlInput1">15. Email ID / ईमेल</label>
                            <input type="text" class="form-control form-control-lg" name="email_id_u" id="email_id_u" placeholder="Email ID" disabled = "">

                         
                           
                           
                         

                         <input type="checkbox" style="width:18px;height:18px;" name="chk_box_commencement_date" id="chk_box_commencement_date"  onchange = "enableiutextbox()">
                            <label for="exampleFormControlInput1">16. Date of Commencement of Business / उद्यम के प्रारंभ की तिथि</label>
                            <input type="text" class="form-control form-control-lg" name="commencement_date" id="commencement_date" placeholder="DD/MM/YYYY" disabled = "">
                        

                         <input type="checkbox" style="width:18px;height:18px;" name="chk_box_bank_acc" id="chk_box_bank_acc"  onchange = "enableiutextbox()">
                            <label for="exampleFormControlInput1">17. Bank Account Number / बैंक खाता संख्या</label>
                            <input type="text" class="form-control form-control-lg" name="bank_ac_number" id="bank_ac_number" placeholder="Bank Account Number" disabled = "">
                        

                         <input type="checkbox" style="width:18px;height:18px;" name="chk_box_ifsc" id="chk_box_ifsc"  onchange = "enableiutextbox()">
                            <label for="exampleFormControlInput1">18. IFSC Code / आईएफएस कोड</label>
                            <input type="text" class="form-control form-control-lg" name="IFSC_code" id="IFSC_code" placeholder="IFSC Code" disabled = "">
                         
                         <input type="checkbox" style="width:18px;height:18px;" name="chk_box_main_business_activity" id="chk_box_main_business_activity"  onchange = "enableiutextbox()">
                        
                             <label for="exampleFormControlInput1">19. Main Business Activity of Enterprise / इकाई का प्रमुख गतिविधि</label>
                            <select class="form-control" name="main_business_activity" id="main_business_activity" disabled = "">
                                                <option value="">Select Activity of Enterprise</option>
                                                <option  value="Manufacturer">Manufacturer</option>
                                                <option  value="Service">Service provider</option>
                                            </select>
                         <br><br>
                        
                       
                            <label for="exampleFormControlInput1">20. NIC 2 Digit Code -  Choose primary Business Activity</label>
                           <!-- <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="first select Main Business Activity of Enterprise">-->
                            <select class="form-control" name="nic-2-digit-code-manufacturer" id="nic-2-digit-code-manufacturer" disabled = "" >
                        <option value="Manufacturer">Select 2 Digit NIC Code</option>
                        <option value="Manufacturer">01- Crop and animal production, hunting and related service activities</option>
                        <option value="Manufacturer">05-Mining and quarring</option>
                        <option value="Manufacturer">06-Extraction of crude petroleum and natural gas</option>
                        <option value="Manufacturer">07-Mining of metal ores</option>
                        <option value="Manufacturer">08-Other mining and quarring</option>
                        <option value="Manufacturer">09-Mining support service activities</option>
                        <option value="Manufacturer">10-Manufacture of food products</option>
                        <option value="Manufacture">11-Manufacture of beverages</option>
                        <option value="Manufacture">12-Manufacture of tobacco products</option>
                        <option value="Manufacture">13-Manufacture of textiles</option>
                        <option value="Manufacture">14-Manufacture of wearing apparel</option>
                        <option value="Manufacture">15-Manufacture of leather and related products</option>
                        <option value="Manufacture">16-Manufacture of wood and products of wood and cork, except furniture; manufacture of articles of straw and plaiting materials</option>
                        <option value="Manufacture">17-Manufacture of paper and paper products</option>
                        <option value="Manufacturer">18-Printing and reproduction of recorded media</option>
                        <option value="Manufacturer">19-Manufacture of coke and refined petroleum products</option>
                        <option value="Manufacturer">20-Manufacture of chemicals and chemical products</option>
                        <option value="Manufacturer">21-Manufacture of pharmaceuticals, medicinal chemical and botanical products</option>
                        <option value="Manufacturer">22-Manufacture of rubber and plastics products</option>
                        <option value="Manufacturer">23-Manufacture of other non-metallic mineral products</option>
                        <option value="Manufacturer">24-Manufacture of basic metals</option>
                        <option value="Manufacturer">25-Manufacture of fabricated metal products, except machinery and equipment</option>
                        <option value="Manufacturer">26-Manufacture of computer, electronic and optical products</option>
                        <option value="Manufacturer">27-Manufacture of electrical equipment</option>
                        <option value="Manufacturer">28-Manufacture of machinery and equipment n.e.c.</option>
                        <option value="Manufacturer">29-Manufacture of motor vehicles, trailers and semi-trailers</option>
                        <option value="Manufacturer">30-Manufacture of other transport equipment</option>
                        <option value="Manufacturer">31-Manufacture of furniture</option>
                        <option value="Manufacturer">32-Other manufacturing</option>
                        <option value="Manufacturer">33-Repair and installation of machinery and equipment</option>
                        <option value="Manufacturer">35-Electricity, gas, steam and air conditioning supply</option>
                        <option value="Manufacturer">36-Water collection, treatment and supply</option>
                        <option value="Manufacturer">37-Sewerage</option>
                        <option value="Manufacturer">38-Waste collection, treatment and disposal activities; materials recovery</option>
                        <option value="Manufacturer">39-Remediation activities and other waste management services</option>
                        <option value="Manufacturer">41-Construction of building</option>
                        <option value="Manufacturer">42-Civil Engineering</option>
                        <option value="Manufacturer">43-Specialized construction activities</option>
                   
                   <!-- <div id="second-service" style="visibility:hidden;">
                    <select class="form-control dn" name="2_digit_code" id="nic-2-digit-code-service-provider">-->
                        <option value="Service">Select 2 Digit NIC Code</option>-->
                        <option value="Service">49-Land transport and transport via pipelines</option>
                        <option value="Service">50-Water transport</option>
                        <option value="Service">51-Air Transport</option>
                        <option value="Service">52-Warehousing and support activities for transportation</option>
                        <option value="Service">53-Postal and courier activities</option>
                        <option value="Service ">55-Accommodation</option>
                        <option value="Service">56-Food and beverage service activities</option>
                        <option value="Service">58-Publishing activities</option>
                        <option value="Service">59-Motion picture, video and television programme production, sound recording  and music publishing activities</option>
                        <option value="Service">60-Broadcasting and programming activities</option>
                        <option value="Service">61-Telecommunications</option>
                        <option value="Service">62-Computer programming, consultancy and related activities</option>
                        <option value="Service">63-Information service activities</option>
                        <option value="Service">64-Financial service activities, except insurance and pension funding</option>
                        <option value="Service">65-Insurance, reinsurance and pension funding, except compulsory social security</option>
                        <option value="Service">66-Other financial activities</option>
                        <option value="Service ">68-Real estate activities</option>
                        <option value="Service ">69-Legal and accounting activities</option>
                        <option value="Service">70-Activities of head offices; management consultancy activities</option>
                        <option value="Service">71-Architecture and engineering activities; technical testing and analysis</option>
                        <option value="Service">72-Scientific research and development</option>
                        <option value="Service">73-Advertising and market research</option>
                        <option value="Service">74-Other professional, scientific and technical activities</option>
                        <option value="Service">75-Veterinary activities</option>
                        <option value="Service ">77-Rental and leasing activities</option>
                        <option value="Service ">78-Employment activities</option>
                        <option value="Service">79-Travel agency, tour operator and other reservation service activities</option>
                        <option value="Service">80-Security and investigation activities</option>
                        <option value="Service">81-Services to buildings and landscape activities</option>
                        <option value="Service">82-Office administrative, office support and other business support activities</option>
                        <option value="Service">84-Public administration and defence; compulsory social security</option>
                        <option value="Service">85-Education</option>
                        <option value="Service">86-Human health activities</option>
                        <option value="Service">87-Residential care activities</option>
                        <option value="Service">88-Social work activities without accommodation</option>
                        <option value="Service">90-Creative, arts and entertainment activities</option>
                        <option value="Service">91-Libraries, archives, museums and other cultural activities</option>
                        <option value="Service">92-Gambling and betting activities</option>
                        <option value="Service">93-Sports activities and amusement and recreation activities</option>
                        <option value="Service">94-Activities of membership organizations</option>
                        <option value="Service">95-Repair of computers and personal and household goods</option>
                        <option value="Service">96-Other personal service activities</option>
                    </select>
                         
             </form>
             
             <script>
  $("#main_business_activity").change(function() {
  if ($(this).data('options') === undefined) {
    /*Taking an array of all options-2 and kind of embedding it on the select1*/
    $(this).data('options', $('#nic-2-digit-code-manufacturer option').clone());
  }
  var id = $(this).val();
  var options = $(this).data('options').filter('[value=' + id + ']');
  $('#nic-2-digit-code-manufacturer').html(options);
});
  </script>
  							<input type="checkbox" style="width:18px;height:18px;" name="chk_box_additional_details" id="chk_box_additional_details"  onchange = "enableiutextbox()">
                            <label for="exampleFormControlInput1">21. Additional details about Business /व्यापार के बारे में अतिरिक्त जानकारी</label>
                            <input type="text" class="form-control form-control-lg" name="additional_details"id="additional_details" placeholder="Additional details" disabled = "" >
                         
                        <input type="checkbox" style="width:18px;height:18px;" name="chk_box_no_of_emp" id="chk_box_no_of_emp"  onchange = "enableiutextbox()">
                            <label for="exampleFormControlInput1">22. Number of employees / व्यक्ति नियोजित</label>
                            <input type="text" class="form-control form-control-lg" name="number_of_employees" id="number_of_employees" placeholder="Number of employees" disabled = "">
                         
                        <input type="checkbox" style="width:18px;height:18px;" name="chk_box_investment" id="chk_box_investment"  onchange = "enableiutextbox()">
                            <label for="exampleFormControlInput1">23. Investment in Plant and Machinery (Amount in Lacs) / निवेश</label>
                            <input type="text" class="form-control form-control-lg" name="Investment" id="Investment" placeholder="Investment in Plant and Machinery" disabled = "">
                        
                        
                            <label class="text-left">24. Attach your Aadhaar Card (File should be: jpg,png file &lt; 500KB)</label>
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
                      
                        <div class="col-md-12" style="background-color:#f2eeed;border:1px solid black; box-shadow: 5px 5px 8px 10px #888888;">
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
                             <p><strong> 9. Location of Plant :</strong> Please fill the location address properly (Address of State and District could not be changed.)<br>
                                    "दिए गए क्षेत्रों में ठीक से विनिर्माण सुविधा का पता लिखे |"<br></p>
                             <p><strong> 10. Office Address :</strong> Please provide office address, if address other than plant location.(Address of State and District could not be changed.)<br>
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
        /*function load_district1(value, flag)
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
         }*/
    

		function enableiutextbox(){
			var value = document.getElementById('chk_box_social_category').checked;
			//alert(value);
			if(value == true){
				document.getElementById('social_category').disabled = false;
			}else{
				document.getElementById('social_category').disabled = true;
			}
			
			if(document.getElementById('chk_box_gender').checked == true){
				document.getElementById('gender').disabled = false;
			}else{
				document.getElementById('gender').disabled = true;
			}
			if(document.getElementById('chk_box_physically_handicapped').checked == true){
				document.getElementById('physically_handicapped').disabled = false;
			}else{
				document.getElementById('physically_handicapped').disabled = true;
			}
			if(document.getElementById('chk_box_enterprise_business_name').checked == true){
				document.getElementById('enterprise_business_name').disabled = false;
			}else{
				document.getElementById('enterprise_business_name').disabled = true;
			}
			if(document.getElementById('chk_box_organisation_type').checked == true){
				document.getElementById('organisation_type').disabled = false;
			}else{
				document.getElementById('organisation_type').disabled = true;
			}
			if(document.getElementById('chk_box_pan').checked == true){
				document.getElementById('PAN').disabled = false;
			}else{
				document.getElementById('PAN').disabled = true;
			}
			
			if(document.getElementById('chk_box_mobile_no').checked == true){
				document.getElementById('mobile_no_u').disabled = false;
			}else{
				document.getElementById('mobile_no_u').disabled = true;
			}
			if(document.getElementById('chk_box_email').checked == true){
				document.getElementById('email_id_u').disabled = false;
			}else{
				document.getElementById('email_id_u').disabled = true;
			}
			
			if(document.getElementById('chk_box_commencement_date').checked == true){
				document.getElementById('commencement_date').disabled = false;
			}else{
				document.getElementById('commencement_date').disabled = true;
			}
			if(document.getElementById('chk_box_bank_acc').checked == true){
				document.getElementById('bank_ac_number').disabled = false;
			}else{
				document.getElementById('bank_ac_number').disabled = true;
			}
			if(document.getElementById('chk_box_ifsc').checked == true){
				document.getElementById('IFSC_code').disabled = false;
			}else{
				document.getElementById('IFSC_code').disabled = true;
			}
			if(document.getElementById('chk_box_main_business_activity').checked == true){
				document.getElementById('main_business_activity').disabled = false;
				document.getElementById('nic-2-digit-code-manufacturer').disabled = false;
			}else{
				document.getElementById('main_business_activity').disabled = true;
				document.getElementById('nic-2-digit-code-manufacturer').disabled = true;
			}
			if(document.getElementById('chk_box_additional_details').checked == true){
				document.getElementById('additional_details').disabled = false;
			}else{
				document.getElementById('additional_details').disabled = true;
			}
			if(document.getElementById('chk_box_no_of_emp').checked == true){
				document.getElementById('number_of_employees').disabled = false;
			}else{
				document.getElementById('number_of_employees').disabled = true;
			}
			if(document.getElementById('chk_box_investment').checked == true){
				document.getElementById('Investment').disabled = false;
			}else{
				document.getElementById('Investment').disabled = true;
			}
			/**important***/
			if(document.getElementById('chk_box_location_plant').checked == true){
				document.getElementById('pl_address_1').disabled = false;
				document.getElementById('name_of_building_premise_1').disabled = false;
				document.getElementById('road_street_1').disabled = false;
				document.getElementById('area_locality_1').disabled = false;
				document.getElementById('city_1').disabled = false;
				document.getElementById('PIN_1').disabled = false;
				document.getElementById('state_1').disabled = false;
				document.getElementById('district_name_1').disabled = false;
				document.getElementById('add_more').disabled = false;
				
			}else{
				document.getElementById('pl_address_1').disabled = true;
				document.getElementById('name_of_building_premise_1').disabled = true;
				document.getElementById('road_street_1').disabled = true;
				document.getElementById('area_locality_1').disabled = true;
				document.getElementById('city_1').disabled = true;
				document.getElementById('PIN_1').disabled = true;
				document.getElementById('state_1').disabled = true;
				document.getElementById('district_name_1').disabled = true;
				//document.getElementById('add_more').disabled = true;
				//$('#addmore_value').val('2');
				//$('.hidetab').hide();
			}			
			if(document.getElementById('check_box_office_address').checked == true){
				//alert('k');
				document.getElementById('address_off').disabled = false;
				document.getElementById('o_name_of_building_premise').disabled = false;
				document.getElementById('o_road_street').disabled = false;
				document.getElementById('o_area_locality').disabled = false;
				document.getElementById('o_city').disabled = false;
				document.getElementById('o_PIN').disabled = false;
				document.getElementById('state_2').disabled = false;
				document.getElementById('district_name_2').disabled = false;
			}
            else{
				document.getElementById('address_off').disabled = true;
				document.getElementById('o_name_of_building_premise').disabled = true;
				document.getElementById('o_road_street').disabled = true;
				document.getElementById('o_area_locality').disabled = true;
				document.getElementById('o_city').disabled = true;
				document.getElementById('o_PIN').disabled = true;
				document.getElementById('state_2').disabled = true;
				document.getElementById('district_name_2').disabled = true;
               // $('#addmore_value').val('2');
               // $('.hidetab').hide();
			}
			
		}
		
	</script>
	








<?php include('footer.php') ?>