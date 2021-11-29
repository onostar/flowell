<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Flowell Pharmacy and Stores is a World class super medicine store, with best quality of drug supplies, and other house hold items">
    <meta name="keyword" content="Flowell, flowel, flowell pharmacy, drugs, wholesale, retail, supermarket, deliveries, antibiotics, pharmacy, antimalaria, medical tests, prescription"/>
	<meta name="author" content="Applied Macrosystem"/>
	<meta name="og:url" property="og:url" content="https://flowellpharmacy.com">
    <meta name="og:type "property="og:type" content="website">
    <meta name="og:title" property="og:title" content="Flowell Pharmacy" />
    <meta name="og:site_name" property="og:site_name" content="Flowell Pharmacy" />
    <meta name="og:description" property="og:description" content="Flowell Pharmacy and Supermarket is a World class super medicine store, with best quality of drug supplies, and other house hold items">
    <meta name="og:image" property="og:image" itemprop="image" content="images/flowell_logo.jpg">
    <meta property="og:image:width" content="300" />
    <meta property="og:image:height" content="300" />
    <title>Welcome to Flowell Pharmacy</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.1-web/css/all.min.css">
    <link rel="icon" href="images/flowell_logo.jpg" type="image/png" size="32X32">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- <div class="loading">
        <div class="loader">
            <div class="circle"></div>
            <div class="circle"></div>
        </div>
    </div> -->
    <!-- <div class="main"> -->
    <section class="top_head" id="topHeader">
        <div class="social_media">
            <p>
                <i class="fas fa-mobile"></i> <span>Call us </span>(+234) 905 123 4567
            </p>
        </div>
        <div class="contact_phone">
            <ul>
                <li><a href="javascript:void(0);" class="showRequest">Schedule Appointment</a></li>
                <li><a href="doctors.php">Find a Pharmacist</a></li>
                <li><a href="javascript:void(0);">Pay Bills</a></li>
                <!-- <li><a href="javascript:void(0);">Covid-19 Updates</a></li> -->
            </ul>
        </div>
    </section>
    <section id="banner">
        <header id="mainHeader" class="main_header">
            <h1>
                <a href="index.php">
                    <img src="images/flowell_logo.png" alt="Flowell Pharmacy">
                </a>
            </h1>
            <nav id="navigation">
                <ul>
                    <li><a href="about.php" title="who we are">Who we are</a></li>
                    <li>
                        <a href="javascript:void(0);" title="What we do">Our Services <i class="fas fa-chevron-down"></i></a>
                        <ul>
                            <li><a href="retail.php"><i class="fas fa-vials"></i> Retail</a></li>
                            <li><a href="wholesale.php">Wholesale</a></li>
                            <li><a href="drug_information.php">Drug Information</a></li>
                            <li><a href="medication.php">Medication Administration</a></li>
                            <li><a href="supermarket.php">Supermarket</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="contact.php" title="Contact us">Get in touch</a></li>
                    <li><a class="active" href="recruitment.php" title="Job recruitment">Career</a></li>
                    <li><a href="blog.php" title="News and Updates">Our Blog</a></li>
                    <!-- <li id="login"><a href="login.html" title="Login">Login</a></li> -->
                </ul>
            </nav>
            <div class="menu-icon" onclick="displayMenu()"><a href="javascript:void(0);"><i class="fas fa-bars"></i></a></div>
        </header>
        <div id="slider">
            <div class="login_form">
                <div class="slide">
                    <div class="banner_img">
                        <img src="images/flowell_pharmacy2.jpg" alt="Flowell Pharmacy and stores">
                    </div>
                    <div class="taglines" id="application">
                        <h3 style="color:#fff;">Career Opportunities</h3>
                        <hr>
                        <p>Kindly fill the form below to apply for a position</p>
                        <form action="recruitment.php" method="POST" enctype="multipart/form-data">
                            <div class="apply">
                                <input type="text" name="first_name" placeholder="First Name" required><br>
                                <input type="text" name="last_name" placeholder="Last Name" required><br>
                            </div>
                            <div class="apply">
                                <input type="email" name="email" placeholder="Email" required><br>
                                <input type="tel" name="phone" placeholder="Phone Number" required>
                            </div>
                            <div class="log">
                            <div class="apply">
                                <select name="position" id="position">
                                    <option value="" selected>Select Position</option>
                                    <option value="Nurse" >Nurse</option>
                                    <option value="Nanny" >Pharmacist</option>
                                    <option value="Midwife" >Sales Assistant</option>
                                </select><br>
                                <div class="resume">
                                    <label>Upload CV</label>
                                    <input type="file" name="resume" placeholder="Upload CV" required><br>
                                </div>
                            </div>
                            <div class="log">
                                <button type="submit" name="application" value="Apply">Send Application</button>
                                
                            </div>
                        </form>
                    </div>
                </div>
                <!-- <div class="slide">
                    <div class="banner_img">
                        <img src="images/training.jpg" alt="applied macros ict training">
                    </div>
                    <div class="taglines taglines2">
                        <h2>Applied mAcros Academy</h2>
                        <p>We offer basic and advanced professional ICT courses to both individuals and corporate bodies</p>
                        <a href="academy.html">Learn more</a>
                        <a href="contact.html">Get a Quote</a>
                    </div>>
                </div> -->
            </div>
            
        </div>
        <!-- <div class="client_assess">
            <a href="#reqMaster">Client Assessment Form</a><i class="fas fa-plus"></i>
        </div> -->
    </section>
    
    <?php include "footer.php";?>
    <script src="jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>