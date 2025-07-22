<?php
include 'download.php';
include 'db_conn.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>थारु राष्ट्रिय पुस्तकालय</title>
    
    <!-- font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    

</head>

<body>


    <!-- navbar and main -->

    <section class='main' id="home" >
        <nav>
            <a herf="index.php" target="_blank" class="logo">
                <img src="img/logo final.png">
            </a>
            <input class="menu-btn" type="checkbox" id="menu-btn" >
            <label class="menu-btn" for="menu-btn" > 
                <span class="nav-icon" > </span>     
            </label>

            <ul class="menu">
                
                <nav class="navbar" >
                    <li><a  href="#" > Home</a></li>
                    <li><a  href="#affilates"  >Links</a></li>
                    <li><a  href="#about"  > About </a></li>
                    <li><a  href="#contact"> Contact  </a></li>
                    <li><a  href="books.php"> Books  </a></li>
                </nav>
                
                
            <div class="icons">
                <div id="menu-btn" class="fas fa-bars"></div>
                
                <div id="user-btn" class="fas fa-user"></div>
            </div>

        </nav>
        


        <div class="header-content">
            <div class="header-text" >
                <h1>थारु राष्ट्रिय   <span>पुस्तकालय.</span> </h1>
                <h2>Tharu National library.</h2>
                <h5>Tharu Rastriya Pustakalaya is a platform where variety of books are stored including tharu cultural books,stories,researchs and many more which anyone can read.</h5>

                <a href="books.php" class="header-btn">Start Reading</a>
            </div>
            
        </div>

    </section>



    <!-- affilates -->


    <section class="affilates" id="affilates" >

        
            <h2 class="heading" >Our Links</h2>
            <p>This are the orgainizations wich are directly affilated with us :</p>
       
        <div class="affilates-box">

            <div class="box" >
                <img src="img/fm.png" alt="" >
                <h4>Gurbaba F.M</h4>
                <p>गुर्बाबा एफएम प्राचिन सृजनशिल आदिबासी समाज बर्दिया द्धारा संचालित एफएम हो । यो एफएम २०६५ सालमा स्थापना भएको हाे । यसको मुख्य भाषा थारुरहेको छ ।  </p>    
                <a href="https://www.radiogurbaba.org.np/" class="header-btn" >Check</a>
                
            </div>

           <div class="box" >
                <img src="img/patra.png" alt="" >
                <h4>Tharu Patra</h4>
                <p>थारु अनलाइन पात्रा, थारु समुदाय ओ सक्कु नेपालीनह एक्क मालाम जोरना पहील थारु एप्स हो । यी पात्रा बि.सं २०७७, थारु सम्बत २६४४ माघसे शुरु हुइलक हो ।  </p>    
                <a href="download.php?file=app/Patra.apk" class="header-btn" >Download</a>
            </div>
       </div>
    </section>



    <!-- about us -->


    <h2 class="heading" >About us</h2>
    <section class="about" id="about" >

        <div class="box">
        
            <div class="about-img">
                    <img src="img/photo2.png" >
            </div>
            <div class="about-text" >
                <h2>Tharu Rastriya Pustakalaya</h2>
                <p>Tharu Rastriya Pustakalaya, a dedicated online repository for the Tharu language, stands as a vital resource in preserving and promoting the linguistic and cultural heritage of the Tharu community. The website serves as a comprehensive library, housing a rich collection of literary works, historical documents, and educational materials in the Tharu language. Visitors to the site are welcomed by an aesthetically pleasing and user-friendly interface, facilitating easy navigation through the diverse array of content. Tharu Rastraya Pustakalaya not only offers a digital haven for Tharu literature but also fosters community engagement through forums, discussions, and collaborative initiatives.Whether one seeks to explore Tharu folklore, language tutorials, or contemporary writings, this digital library stands as a beacon for the Tharu people, fostering a sense of pride and connectivity to their linguistic roots.</p>
                
            </div>

        </div>
    
    </section>


    <!-- contact us -->


    <section class="contact" id="contact" >
        <div class="contact-heading">
            <h1>Contact Us</h1>
            <p>We value your input! If you have any queries or suggestions to enhance your experience on our webpage, please feel free to leave them here.</p>
        </div>
    <form>
        <input type="text" name="user" placeholder="Your Full Name" />
        <input type="email" name="email" placeholder="Your E-mail" />
        <textarea name="message" placeholder="Type Your Message Here...." ></textarea>
        <button class="header-btn" >Submit</button>

    </form>

    </section>





    
</body>
</html>