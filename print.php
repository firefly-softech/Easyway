

<?php include ('header.php') ?>

 <section class="form-one">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title">
                        <h2>Print MSME Udyog Aadhaar Certificate</h2>
                    </div>
                    <div class="registration-section" style="margin-right: 110px; margin-left:110px;">
                    	<div class="title-line">
                            <h1 style="text-align:center;height:50px;font-family: 'Rubik';color:#FF9933;font-weight: bold;font-size: 30px; ">Registration Form</h1>
                       
                        <form class="msme-form">
                           
                        <div class="form-group col-md-12">

                            <label for="exampleFormControlInput1">1. Udyog Aadhaar Number (UAN)</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Udyog Aadhaar Number (UAN)">
                        
                         	<label for="exampleFormControlInput1">2.Aadhar Number/आधार नंबर</label>
                            <input type="number" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Aadhar Number">

                        
                            <label for="exampleFormControlInput1">3.Name of Entrepreneur /Applicant as printed on Aadhaar Card/उद्यमी का नाम</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Name of Entrepreneur">
                        

                         <label for="exampleFormControlInput1">4. Name of Enterprise/Business / उद्यम का नाम</label>
                            <input type="text" class="form-control form-control-lg" id="exampleFormControlInput1" placeholder="Name of Enterprise/Business">
                        
                    
                         
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

                              
                                 <label class="text-left">8. Attach your Aadhaar Card (File should be: jpg,png file &lt; 500KB)</label>
                            <br>&nbsp;&nbsp;&nbsp;&nbsp;
                            <button class="btn btn-default ">
                             <input style="font-size: 15px;"type="file" name="file" id="file" >
                                            </button>
                                            
                                            <br>
                              <span style="color: #1c3155;margin-top:30px">
                                                                
                              <font style="font-weight:bold;margin-left:16px; font-size:19px;"> OR You Can send</font>  <font style="font-weight:bold; color:#ff8000;font-size:19px;"> Documents on </font>  <i style="font-size:19px; color:
#25D366;" class="fa fa-whatsapp swapp"></i> <font style="font-weight:bold;font-size:19px;"> &nbsp;9112211457</font>  
                                            </span></br>


                        
               
                 <button type="submit " name="msme_form" class="btn btn-default mb-20px" style="color: #fff;font-weight: 600; background-color:#ff861c;margin:50px;font-size: 18px;padding:10px;margin-left: 280px;">Validate & Pay Consultancy Fees </button>
                        </div>

                        </form>
                        </div><!--title-line-->
                        </div><!--reg section-->
                        
                    </div>
                </div><!--col-md-12-->
            </div><!--row-->
        </div><!--container-->
</section>



<?php include('footer.php') ?>
                        