<footer>
        <section class="mainFooter">
            <section class="mainFooter1">
                <div class="contactAddress">
                    <img src="images/flowell_sign.jpg" alt="Flowell Pharmacy and stores">
                    <!-- <h3>For more info and to book an appointment</h3> -->
                    
                </div>
                <div class="subscribe_category">
                    <div class="address">
                        <i class="fas fa-street-view"></i>
                        <div class="branches">
                            <h4>Flowell Head Office</h4>
                            <p>Our Head Office is Located at 72 Benin/Sapele road, Benin city Edo state.</p>
                        </div>
                    </div>
                    <div class="address">
                        <i class="fas fa-street-view"></i>
                        <div class="branches">
                        <h4>Flowell Ugbowo</h4>
                        <p>92 Ugbowo road, Opposite UBTH, Benin city, Edo state</p>
                         
                    </div>
                    </div>
                    <div class="address">
                        <i class="fas fa-street-view"></i>
                        <div class="branches">
                            <h4>Flowell 25</h4>
                            <p>25 Sapele road opposite Civil service commission, Benin/Sapele road, Benin city, Edo state</p>
                            
                        </div>
                    </div>
                    <div class="address">
                        <i class="fas fa-street-view"></i>
                        <div class="branches">
                            <h4>Other Branch</h4>
                            <p>Our Head Office is Located at 71 Benin/Sapele road, Benin city Edo state.</p>
                            
                        </div>
                    </div>
                    
                    <div class="address phone">
                        <i class="fas fa-tty"></i>
                        <div class="addtext">
                            <h4>Hot Lines:</h4>
                            <p>07012345678<br>08012345678</p>
                        </div>
                    </div>
                    <div class="address email">
                        <i class="fas fa-envelope-open-text"></i>
                        <div class="addtext">
                            <h4>Email:</h4>
                            <p>info@flowellpharmacy.com</p>
                        </div>
                    </div>
                    <!-- <div class="category">
                        <h3>Quick Links</h3>
                        <div class="categories">
                            <li><a href="#">More Flowell Pharmacy</a></li>
                            <li><a href="#">Career Opportunities at Flowell pharmacy</a></li>
                            <li><a href="#">Wholesale & Retail</a></li>
                            
                            <li><a href="#">Shopping</a></li>
                            <li><a href="#">Pharmacist</a></li>
                            <li><a href="#">Drug prescription</a></li>
                            <li><a href="#">Urology</a></li>
                            <li><a href="#">get in touch with Flowell Pharmacy</a></li>
                            <li><a href="#">News and recent stories</a></li>
                        </div>
                    </div> -->
                    <!-- <div class="subscribe">
                        <h3>Please subscribe to our newsletter</h3>
                        <form id="subscribe" method="post" action="subscribe.php">
                            <input type="email" id="email" name="email" placeholder="enter your email">
                            <input type="submit" id="submit" value="Subscribe">
                        </form>
                    </div> -->
                </div>
                <div class="socialMedia_workHours">
                    <div class="workingHours">
                        <h3>Working hours</h3>
                        <div class="hours">
                            <p>Weekdays: 7:30am - 8:00pm</p>
                            <p>Sundays: 9:30am - 8:00pm</p>
                        </div>
                    </div> 
                    <div class="socialMedia">
                        <h3>Follow us on social media</h3>
                        <div class="socialLinks">
                            <a target="_blank" href="#" title="Follow Flowell on facebook"><img src="images/facebook_icon.png"></a>
                            <!-- <a target="_blank" href="#" title="Follow Flowell on twitter"><i class="fab fa-Flowell-square"></i></a> -->
                            <a target="_blank" href="#" title="Follow Flowell on instagram"><img src="images/instagram_icon.png"></a>
                            <a target="_blank" href="#" title="Follow Flowell on Linkedin"><img src="images/linkedin_icon.png"></a>
                        </div>
                    </div>   
                </div>
            </section>
        </section>
        <section class="secondaryFooter">
            <p>All Rights Reserved. &copy;<?php echo date("Y");?> Flowell Pharmacy and Stores. Powerd by <a href="https://appliedmacros.com" title="Applied macrosystems">Applied Macros</a></p>
        </section>
    </footer>
<!-- </div> -->
    <!-- <div class="help" id="help">
        <a target="_blank" href="https://api.whatsapp.com/send?phone=2348157985866"><i class="fab fa-whatsapp"></i> Hello, How can we help?</a>
    </div> -->
    <div id="request_form">
        <h3>Kindly fill the form below</h3>

        <form action="appointment.php" method="POST">
            <a href="javascript:void(0);" id="close_request"><i class="fas fa-window-close"></i></a>
            <div class="inputs">
                <div class="data">
                    <label for="service">Purpose of Appointment</label><br>
                    <select name="service" id="service">
                        <option value="" selected>Choose a service</option>
                        <option value="Drug Wholesale">Wholesale Request</option>
                        <option value="Sales Representative">Sales Representative</option>
                        <option value="Book a Pharmacist">Book Pharmacist</option>
                        <option value="Requst Drug">Request a drug</option>
                        <option value="Medication Adinistration">Mmedication Administration</option>

                    </select>
                </div>
                <div class="data">
                    <label for="gender">Gender</label><br>
                    <select name="gender" id="gender">
                        <option value="" selected>Select Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div>
                <div class="data">
                    <label for="appointmentDate">Appointment date</label><br>
                    <input type="date" name="appointment_date" id="appointmentDate">
                </div>
                <div class="data">
                    <label for="appointmentTime">Time</label><br>
                    <input type="time" name="appointment_time" id="appointmentTime">
                </div>
            </div>
            <div class="inputs inputs2">
                <div class="data">
                    <!-- <label for="name">Enter your Name</label> -->
                    <input type="text" name="client_name" placeholder="Name" required>
                </div>
                <div class="data">
                    <!-- <label for="phone">Enter your Phone Number</label> -->
                    <input type="tel" name="client_phone" placeholder="Phone" required>
                </div>
                <div class="data">
                    <!-- <label for="email">Enter your Email</label> -->
                    <input type="email" name="client_email" placeholder="Email" required>
                </div>
            </div>
            <div class="inputs inputs2">
                <div class="data">
                    <!-- <label for="name">Enter your Name</label> -->
                    <input type="text" name="address" placeholder="Residential Address" required>
                </div>
                <div class="data">
                    <!-- <label for="phone">Enter your Phone Number</label> -->
                    <input type="number" name="client_age" placeholder="Age" required>
                </div>
                <!-- <div class="data">
                    
                    <select name="nurse_gender" id="nurseGender">
                        <option value="" selected>Pharmacist Gender</option>
                        <option value="Male">Male</option>
                        <option value="Female">Female</option>
                    </select>
                </div> -->
            </div>
            <div class="inputss">
                <textarea name="message" id="message" placeholder="Your message"></textarea>
                <div class="data" id="submitReq">
                    <button type="submit" name="submit_request" id="submitRequest">Make Request</button>
                    <i class="fas fa-plus"></i>
                </div>
            </div>
            
        </form>
    </div>
    <div class="toTop">
        <a href="#topHeader"><i class="fas fa-chevron-up" style="color:#fff;" size="10"></i></a>
    </div>