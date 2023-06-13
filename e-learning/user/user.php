

<?php
$con=new mysqli('localhost','root','','crudoperation');
if(!$con){
    die("connection was not succefully".mysqli_error($con));
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Brainbuster</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    
      <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;500&family=Ubuntu:wght@700&display=swap" rel="stylesheet">
    
<style>
    * {
    font-family: 'Open Sans', sans-serif;
    margin: 0;
    padding: 0;
            box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    
    transition: all .2s linear;
  }
  
  html {
    font-size: 62.5%;
    overflow-x: hidden;
    scroll-behavior: smooth;
  }
  
  body {
    padding-left: 30rem;
  }
  
  section {
    padding: 3rem 5%;
  }
  
  section:nth-child(even) {
    background: #f6f6f6;
  }
  
  .heading {
    text-align: center;
    margin-bottom: 3rem;
  }
  
  .heading span {
    font-size: 2rem;
    color: #44bb6a;
    text-transform: uppercase;
  }
  
  .heading h3 {
    padding-top: 1rem;
    font-size: 3rem;
    color: #263238;
    text-transform: uppercase;
  }
  
  .btn {
    display: inline-block;
    margin-top: 1rem;
    padding: 1.2rem 3rem;
    cursor: pointer;
    color: #fff;
    background: #263238;
    font-size: 1.7rem;
  }
  
  .btn:hover {
    background: #44bb6a;
  }
  
  .header {
    position: fixed;
    top: 0;
    left: 0;
    z-index: 1000;
    background: #44bb6a;
    width: 30rem;
    height: 100%;
    padding: 3rem;
  }
  
  .header .logo {
    font-size: 2.5rem;
    color: #fff;
  }
  
  .header .logo i {
    color: #ff0;
  }
  
  .header .navbar {
    padding: 20% 0;
  }
  
  .header .navbar a {
    display: block;
    font-size: 2rem;
    margin: 1.7rem 0;
    color: #fff;
  }
  
  .header .navbar a i {
    color: #ff0;
    padding-right: .5rem;
  }
  
  .header .navbar a:hover {
    color: #ff0;
  }
  
  .header .navbar a:hover i {
    padding-right: 2rem;
  }
  
  .header #Login{
    font-size: 3rem;
    color: #fff;
    cursor: pointer;
  }
  
  .header #Login:hover{
    color: #444;
  }
  .header .share {
    text-align: center;
  }
  
  .header .share a {
    height: 4.5rem;
    width: 4.5rem;
    line-height: 4.5rem;
    font-size: 1.8rem;
    background: #fff;
    color: #263238;
    margin: 0 .1rem;
  }
  
  .header .share a:hover {
    color: #fff;
    background: #263238;
  }
  
  .header .credit {
    text-align: center;
    color: #fff;
    font-size: 1.6rem;
    padding-top: 15%;
  }
  
  .header .credit span {
    color: #ff0;
  }
  
  #menu-btn {
    position: fixed;
    top: 1rem;
    right: 2rem;
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2.5rem;
    background: #44bb6a;
    color: #fff;
    cursor: pointer;
    text-align: center;
    z-index: 10000;
    display: none;
  }
  
  #menu-btn.fa-times {
    background: #fff;
    color: #263238;
  }
  
  .home {
    display: flex;
            align-items: center;
        flex-wrap: wrap;
    gap: 2rem;
  }
  
  .home .image {
        
            flex: 1 1 40rem;
  }
  
  .home .image img {
    width: 50%;
  }
  
  .home .content {
    width: 45rem;
  }
  
  .home .content span {
    color: #44bb6a;
    font-size: 2rem;
  }
  
  .home .content h3 {
    color: #263238;
    font-size: 3rem;
    padding: 2rem 0;
  }
  
  .home .content h3 a {
    color: #44bb6a;
  }
  
  .home .content h3 a:hover {
    text-decoration: underline;
  }
  
  .home .content p {
    font-size: 1.4rem;
    color: #777;
    padding-bottom: 1rem;
    line-height: 2;
  }
  .category .box-container {
    display: grid;
    -ms-grid-columns: (minmax(30rem, 1fr))[auto-fit];
        grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 2rem;
  }
  
  .category .box-container .box {
    text-align: center;
    padding: 3rem 2rem;
    border: 0.1rem solid #999;
    display: block;
  }
  
  .category .box-container .box:hover i {
    
            transform: translateY(-1rem);
  }
  
  .category .box-container .box i {
    height: 5.5rem;
    width: 5.5rem;
    line-height: 5.5rem;
    font-size: 2rem;
    border-radius: .5rem;
    color: #fff;
    background: #44bb6a;
    margin-bottom: 1.5rem;
  }
  
  .category .box-container .box h3 {
    font-size: 2rem;
    color: #263238;
  }
  
  .category .box-container .box p {
    font-size: 1.4rem;
    color: #777;
    line-height: 2;
    padding-top: 1.5rem;
  }
  
  
  
  .about {
    
    display: flex;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
    -ms-flex-wrap: wrap;
        flex-wrap: wrap;
    gap: 2rem;
  }
  
  .about .image {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 40rem;
            flex: 1 1 40rem;
  }
  
  .about .image img {
    width: 50%;
  }
  
  .about .content {
    width: 45rem;
  }
  
  .about .content span {
    font-size: 2rem;
    color: #44bb6a;
  }
  
  .about .content h3 {
    padding-top: 2rem;
    font-size: 2.4rem;
    color: #263238;
  }
  
  .about .content p {
    padding: 1.5rem 0;
    line-height: 2;
    font-size: 1.4rem;
    color: #777;
  }
  
  .courses .box-container {
    display: grid;
        grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 2rem;
  }
  
  .courses .box-container .box {
    position: relative;
    padding: 2rem;
    border: 0.1rem solid #999;
    overflow: hidden;
    text-align: center;
  }
  
  .courses .box-container .box:hover .content {
    opacity: 1;
  }
  
  .courses .box-container .box .image img {
    width: 100%;
  }
  
  .courses .box-container .box .image h3 {
    font-size: 2rem;
    color: #263238;
    font-weight: normal;
    padding-bottom: 1rem;
  }
  
  .courses .box-container .box .content {
    position: absolute;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    display: flex;
            align-items: center;
            justify-content: center;
            flex-flow: column;
    background: #44bb6a;
    padding: 2rem;
    opacity: 0;
  }
  
  
  
  .courses .box-container .box .content h3 {
    font-size: 2rem;
    color: #fff;
  }
  
  .courses .box-container .box .content p {
    font-size: 1.4rem;
    color: #fff;
    padding: 1.5rem 0;
    line-height: 2;
  }
  
  .courses .box-container .box .content .btn:hover {
    background: #ff0;
    color: #263238;
  }
  .contact .row {
    display: flex;
    gap: 2rem;
  }
  
  .contact .row .contact-info-container {
    width: 40rem;
  }
  
  .contact .row .contact-info-container .box {
    margin-bottom: 3rem;
    display: flex;
    gap: 1.5rem;
  }
  
  .contact .row .contact-info-container .box i {
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 1.7rem;
    background: #44bb6a;
    color: #fff;
    border-radius: 50%;
    text-align: center;
    margin-top: -1rem;
  }
  
  .contact .row .contact-info-container .box h3 {
    font-size: 2rem;
    color: #263238;
    padding-bottom: 1rem;
  }
  
  .contact .row .contact-info-container .box p {
    font-size: 1.5rem;
    color: #777;
    line-height: 2;
  }
  
  .contact .row .contact-info-container .share {
    padding-top: 1rem;
  }
  
  .contact .row .contact-info-container .share a {
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 2rem;
    background: #263238;
    color: #fff;
    margin-right: .1rem;
    text-align: center;
  }
  
  .contact .row .contact-info-container .share a:hover {
    background: #44bb6a;
  }
  
  .contact .row form {
    -webkit-box-flex: 1;
        -ms-flex: 1 1 42rem;
            flex: 1 1 42rem;
  }
  
  .contact .row form .inputBox {
    display: flex;
        flex-wrap: wrap;
            justify-content: space-between;
  }
  
  .contact .row form .inputBox input {
    width: 49%;
  }
  
  .contact .row form .inputBox input, .contact .row form textarea {
    padding: 1.4rem;
    background: #f6f6f6;
    text-transform: none;
    color: #777;
    margin: .7rem 0;
    font-size: 1.6rem;
    border: 0.1rem solid #999;
  }
  
  .contact .row form textarea {
    width: 100%;
    resize: none;
    height: 15rem;
  }
  .reviews .box-container {
    display: grid;
        grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 2rem;
  }
  
  .reviews .box-container .box {
    text-align: center;
    padding: 3rem;
    background: #fff;
    border: 0.1rem solid #999;
  }
  
  .reviews .box-container .box img {
    height: 10rem;
    width: 10rem;
    border-radius: 50%;
    margin-bottom: 1rem;
  }
  
  .reviews .box-container .box h3 {
    font-size: 2rem;
    color: #263238;
  }
  
  .reviews .box-container .box p {
    line-height: 2;
    padding: 2rem 0;
    font-size: 1.3rem;
    color: #777;
  }
  
  .reviews .box-container .box .stars i {
    font-size: 1.7rem;
    color: #44bb6a;
  } 
  
  @media (max-width: 1200px) {
    html {
      font-size: 55%;
    }
  }
  
  @media (max-width: 991px) {
    body {
      padding-left: 0;
    }
    #menu-btn {
      display: block;
    }
    .header {
      left: -110%;
    }
    .header.active {
      left: 0;
              box-shadow: 0 0 0 100vw rgba(0, 0, 0, 0.7);
      width: 35rem;
    }
    .home .content h3 {
      font-size: 2.5rem;
    }
  }
  
  @media (max-width: 450px) {
    html {
      font-size: 50%;
    }
    .contact .row form .inputBox input {
      width: 100%;
    }
  }
  /*# sourceMappingURL=style.css.map */
</style>

</head>
<body>
    
<!-- header section starts  -->

<div id="menu-btn" class="fas fa-bars"></div>

<header class="header">

    <a href="#" class="logo"> <i class="fas fa-graduation-cap"></i> Brainbuster </a>
   

    <nav class="navbar">
        <a href="#"class="fas fa-user-circle"><span style="padding-left: 4px; font-weight: 400">profile</span></a>
        <a href="#home"> <i class="fas fa-angle-right"></i> home </a>
        <a href="#category"> <i class="fas fa-angle-right"></i> category </a>
        <a href="#about"> <i class="fas fa-angle-right"></i> about </a>
        <a href="#course"> <i class="fas fa-angle-right"></i> courses </a>
        <a href="#contact"> <i class="fas fa-angle-right"></i> contact </a>
        <a href="#reviews"> <i class="fas fa-angle-right"></i> reviews </a>
    </nav>

    

    <div class="share">
        <a href="#" class="fab fa-facebook"></a>
        <a href="#" class="fab fa-twitter"></a>
        <a href="#" class="fab fa-instagram"></a>
        <a href="#" class="fab fa-linkedin"></a>
    </div>

    <p class="credit">created by <span>mr.uchit and mr.nishan</span> | all rights reserved!</p>

</header>



 <!---jquery cdn link--->
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

<!--custom js file link--->
<script src="../../js/script.js"></script>








<!-- home section starts  -->

<section class="home" id="home">

    <div class="image">
        <img src="images/home-img.svg" alt="">
    </div>

    <div class="content">
        <span>Well Come User</span>
    </div>
</section>
    

<!-- home section ends -->

<!-- category section starts  -->

<section class="category" id="category">

    <div class="heading">
        <span>our category</span>
        <h3>our top category</h3>
    </div>

    <div class="box-container">

        <div class="box">
            <i class="fas fa-code"></i>
            <h3>programing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, reiciendis.</p>
        </div>

        <div class="box">
            <i class="fas fa-paint-brush"></i>
            <h3>graphic design</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, reiciendis.</p>
        </div>

        <div class="box">
            <i class="fas fa-bullhorn"></i>
            <h3>marketing</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, reiciendis.</p>
        </div>

        <div class="box">
            <i class="fas fa-chart-bar"></i>
            <h3>business management</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, reiciendis.</p>
        </div>

        <div class="box">
            <i class="fas fa-music"></i>
            <h3>music & dance</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, reiciendis.</p>
        </div>

        <div class="box">
            <i class="fas fa-microscope"></i>
            <h3>science & biology</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis, reiciendis.</p>
        </div>

    </div>

</section>

<!-- category section ends -->

<!-- about section starts  -->

<section class="about" id="about">

    <div class="image">
        <img src="images/about-img.svg" alt="">
    </div>

    <div class="content">
        <span>about us</span>
        <h3>best online platform for e-learning.</h3>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi beatae aperiam iusto officia illo porro. Magni, impedit quam saepe iste, vel perspiciatis eum libero magnam doloribus quisquam sint voluptatibus rem.</p>
       
    </div>

</section>

<!-- about section ends -->

<section class="courses" id="courses">

<div class="heading">
    <span>our top courses</span>
    <h3>popular courses</h3>
</div>

<div class="box-container">

    <div class="box">
        <div class="image">
            <img src="images/course-1.svg" alt="">
            <h3>front-end development</h3>
        </div>
        <div class="content">
           
            <h3>front-end development</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, deleniti!</p>
            <a href="coursesdetail.php" class="btn">select course</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/course-2.svg" alt="">
            <h3>teaching & training</h3>
        </div>
        <div class="content">
          
            <h3>teaching & training</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, deleniti!</p>
            <a href="#" class="btn">select course</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/course-3.svg" alt="">
            <h3>music & dance</h3>
        </div>
        <div class="content">
           
            <h3>music & dance</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, deleniti!</p>
            <a href="#" class="btn">select course</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/course-4.svg" alt="">
            <h3>digital marketing</h3>
        </div>
        <div class="content">
            
            <h3>digital marketing</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, deleniti!</p>
            <a href="#" class="btn">select course</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/course-5.svg" alt="">
            <h3>graphic design</h3>
        </div>
        <div class="content">
            
            <h3>graphic design</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, deleniti!</p>
            <a href="#" class="btn">select course</a>
        </div>
    </div>

    <div class="box">
        <div class="image">
            <img src="images/course-6.svg" alt="">
            <h3>science & biology</h3>
        </div>
        <div class="content">
            <div class="stars">
            
            </div>
            <h3>science & biology</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsa, deleniti!</p>
            <a href="#" class="btn">select course</a>
        </div>
    </div>

</div>
<a href="../course.php" class="btn">view all</a>

</section>


<!-- contact section starts  -->

<section class="contact" id="contact">

    <div class="heading">
        <span>contact us</span>
        <h3>get in touch</h3>
    </div>

    <div class="row">

        <div class="contact-info-container">

            <div class="box">
                <i class="fas fa-phone"></i>
                <div class="info">
                    <h3>phone :</h3>
                    <p >+977-9863930868</p>
                    <p>+977-9841290435</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-envelope"></i>
                <div class="info">
                    <h3>email :</h3>
                    <p>shresthauchit96@gmail.com</p>
                    <p>nishanshrestha@gmail.com</p>
                </div>
            </div>

            <div class="box">
                <i class="fas fa-map"></i>
                <div class="info">
                    <h3>address :</h3>
                    <p>kathmandu,balaju</p>
                </div>
            </div>

            <div class="share">
                <a target="_blank" href="#" class="fab fa-facebook-f"></a>
                <a target="_blank" href="#" class="fab fa-twitter"></a>
                <a target="_blank" href="#" class="fab fa-instagram"></a>
                <a target="_blank" href="#" class="fab fa-linkedin"></a>
            </div>
            
        </div>

        <form action="">
            <div class="inputBox">
                <input type="text" placeholder="Enter your full name" >
                <input type="email" placeholder="Enter your email address" >
            </div>

            <div class="inputBox">
                <input type="number" placeholder="phone">
                <input type="text" placeholder="Subject" >
            </div>

            <textarea name="" placeholder="message" id="" cols="30" rows="10"></textarea>
            
            <input type="submit" value="send message" class="btn">
        </form>

    </div>

</section>

<!-- contact section ends -->
<!-- reviews section starts  -->

<section class="reviews" id="reviews">

    <div class="heading">
        <span>client reviews</span>
        <h3>what they say?</h3>
    </div>

    <div class="box-container">

        <div class="box">
            <img src="images/pic-1.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos repellat sunt a temporibus suscipit distinctio maiores iste tenetur voluptate nostrum.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/pic-2.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos repellat sunt a temporibus suscipit distinctio maiores iste tenetur voluptate nostrum.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

        <div class="box">
            <img src="images/pic-3.png" alt="">
            <h3>john deo</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos repellat sunt a temporibus suscipit distinctio maiores iste tenetur voluptate nostrum.</p>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>
        </div>

    </div>

</section>

<!-- reviews section ends -->




</body>
</html>


 
