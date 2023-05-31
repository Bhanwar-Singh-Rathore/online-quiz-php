<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="trynow.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="main.css">
    <!-- <link rel="stylesheet" href="signup.css"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="index.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    

   
</head>
<!-- class="search" id="act" -->
<body>
<!-- <?php
include 'loginlogic.php';
?> -->

    <nav class="navbarmain">
        <ul>
            <!-- <li>Home</li> -->
         
            <!-- <li><h3 ><?php echo $Username?></h3></li> -->
            <!-- <li><a href="signup.php"><button class="joinnowbtn">Logout</button></a></li> -->
            <li><a href="login.php" ><button id="loginbtn">Logout</button></a></li>
           
         
    </nav>
     
</ul>
<div class="btn-group">
    <button type="button" class=" dropdownbtn  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        For Teachers
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#"> login</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">signup</a></li>
    </ul>
  </div>
   


  <div class="btn-group">
    <button type="button" class="  dropdownbtn2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
  Subject
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </div>



  <div class="btn-group">
    <button type="button" class=" dropdownbtn2  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        Quiz
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </div>



  <div class="btn-group">
    <button type="button" class=" dropdownbtn2  dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        ContactUs
    </button>
    <ul class="dropdown-menu">
      <li><a class="dropdown-item" href="#">Action</a></li>
      <li><a class="dropdown-item" href="#">Another action</a></li>
      <li><a class="dropdown-item" href="#">Something else here</a></li>
      <li><hr class="dropdown-divider"></li>
      <li><a class="dropdown-item" href="#">Separated link</a></li>
    </ul>
  </div>

<div class="h">
<h1>What will you teach today?</h1>
<?php 
echo'<div class="main_search_bar">
    <form class="d-flex"  method="get" role="search">
        <input class="form-control me-4" name="serach"  type="search" placeholder="Search" aria-label="Search">
</div>

</div>'
?>

<div class="flexoficon">
<div class="icon-below-searchbar">
    <div class="item1">
       <a href="Mathematicsmain.php"> <img src="img\Mathematics.png"> <h4>Mathematics</h4></a>
    </div>
    <div class="item1"> <a href="english.php"><img src="img\1 - English and Language Arts.png">
    <h4>English </h4></a></div>
    <div class="item1"> <a href="socialstudies.php"><img src="img\3 - Social Studies.png"> <h4> Social Studies</h4></a></div>
    <div class="item1"> <a href="science.php"><img src="img\4 - Science.png"> <h4>Science</h4></a></div>
    <div class="item1"> <a href="main1.php"><img src="img\5- World Languages.png"> <h4>Languages</h4></a></div>
    <div class="item1"> <a href="main2.php"><img src="img\6 - Creative Arts.png"> <h4>Creative Arts</h4></a></div>
    <div class="item1"> <a href="main3.php"><img src="img\7- PE&Health.png"> <h4> PE&Health</h4></a></div>
    <div class="item1"> <a href="main4.php"><img src="img\8 - Computer Science.png"> <h4>Computer Science</h4></a></div>
    <!-- <div class="item1"><img src="img\lifeskills_s.png"> <h4>lifeskills</h4></div> -->
</div>
</div>

<main>
    <h2 class="heading_text">	&#11088; 
        Mathematics</h2>
    <div class="feed-quiz-container">
<div class="quiz-container"><a href="Mathematics.html">
    <img src="img\313900c0-c4eb-41c3-97b5-280ccb09f222_400_400.jfif">
    <h4> Polynomial</h4>
    <h6>20 Question</h6></a>
</div>
<div class="quiz-container"><a href="Mathematics.html"  class="mmmain1" ><img src="img\trigonometry.jpg">
    <h4>  Trigonometry</h4>
    <h6>20 Question</h6></a>
</div>
<div class="quiz-container">
    <a href="Mathematics.html"  ><img src="img\geometry.jpg"><h4> Geometry</h4>
    <h6>20 Question</h6></a></div>
<div class="quiz-container">
    <a href="Mathematics.html"  ><img src="img\probability.jpg">
    <h4>Probability</h4>
    <h6>20 Question</h6></a>
</div>
<div class="quiz-container">
    <a href="Mathematics.html"  > <img  src="img\algebra.jpg">
    <h4>
        Algebra
      </h4>
      <h6>20 Question</h6></a>

</div>
    </div>
    

    <!-- mmainfisnfsidn -->
    <h2 class="heading_text">	&#11088; English</h2>
    <div class="feed-quiz-container2">
<div class="quiz-container"><a href="Mathematics.html">
    <img src="img\313900c0-c4eb-41c3-97b5-280ccb09f222_400_400.jfif">
    <h4> Polynomial</h4>
    <h6>20 Question</h6></a>
</div>
<div class="quiz-container"><a href="Mathematics.html"   ><img src="img\b074e5ac-9cda-456f-a1e6-eef27d7086cb_400_400.jfif">
    <h4>  English Grammar</h4>
    <h6>20 Question</h6></a>
</div>
<div class="quiz-container">
    <a href="Mathematics.html"   ><img src="img\84bc06ab-2811-4ae9-bfda-4048d6199b88_400_400.jfif"><h4> verbs</h4>
    <h6>20 Question</h6></a></div>
<div class="quiz-container">
    <a href="Mathematics.html"   > <img src="img\14d45f61-3b72-4626-946b-42127b441cdc_400_400.png">
    <h4>THE tiger</h4>
    <h6>20 Question</h6></a>
</div>
<div class="quiz-container">
    <a href="Mathematics.html"   > <img src="img\410211a6-4a5d-4d47-968d-62e1981a1647_400_400.png">
    <h4>
        Punctuation
      </h4>
      <h6>20 Question</h6></a>

</div>
    </div>

    <!-- feed 3 -->
    <h2 class="heading_text">	&#11088; Social Studies</h2>
    <div class="feed-quiz-container2">
<div class="quiz-container"><a href="Mathematics.html">
    <img src="img\history of rajputs.jpg">
    <h4> History of Rajputs</h4>
    <h6>20 Question</h6></a>
</div>
<div class="quiz-container"><a href="Mathematics.html"   ><img src="img\history of shivaji maharaj.jpg">
    <h4>  History of Shivaji Maharaj</h4>
    <h6>20 Question</h6></a>
</div>
<div class="quiz-container">
    <a href="Mathematics.html"   ><img src="img\nationalism in india.jpg"><h4> Nationalism in India</h4>
    <h6>20 Question</h6></a></div>
<div class="quiz-container">
    <a href="Mathematics.html"   > <img src="img\rise of nationalism in europe.jpg">
    <h4>Rise of Nationalism in Europe</h4>
    <h6>20 Question</h6></a>
</div>
<div class="quiz-container">
    <a href="Mathematics.html"   > <img src="img\agriculture.png">
    <h4>
        Agriculture
      </h4>
      <h6>20 Question</h6></a>

</div>
    </div>

     <!-- feed 3 -->
     <h2 class="heading_text">	&#11088; Science</h2>
     <div class="feed-quiz-container2">
 <div class="quiz-container"><a href="Mathematics.html">
     <img src="img\313900c0-c4eb-41c3-97b5-280ccb09f222_400_400.jfif">
     <h4> Polynomial</h4>
     <h6>20 Question</h6></a>
 </div>
 <div class="quiz-container"><a href="Mathematics.html"   ><img src="img\1226d91e-b1ee-44cc-b67b-b03f83aa2cc4_400_400.jpg">
     <h4>  English Grammar</h4>
     <h6>20 Question</h6></a>
 </div>
 <div class="quiz-container">
     <a href="Mathematics.html"   ><img src="img\84bc06ab-2811-4ae9-bfda-4048d6199b88_400_400.jfif"><h4> verbs</h4>
     <h6>20 Question</h6></a></div>
 <div class="quiz-container">
     <a href="Mathematics.html"   > <img src="img\14d45f61-3b72-4626-946b-42127b441cdc_400_400.png">
     <h4>THE tiger</h4>
     <h6>20 Question</h6></a>
 </div>
 <div class="quiz-container">
     <a href="Mathematics.html"   > <img src="img\410211a6-4a5d-4d47-968d-62e1981a1647_400_400.png">
     <h4>
         Punctuation
       </h4>
       <h6>20 Question</h6></a>
 
 </div>
     </div>

     

      <!-- feed 3 -->
    <h2 class="heading_text">	&#11088; Creative Arts</h2>
    <div class="feed-quiz-container2">
<div class="quiz-container"><a href="Mathematics.html">
    <img src="img\313900c0-c4eb-41c3-97b5-280ccb09f222_400_400.jfif">
    <h4> Polynomial</h4>
    <h6>20 Question</h6></a>
</div>
<div class="quiz-container"><a href="Mathematics.html"   ><img src="img\b074e5ac-9cda-456f-a1e6-eef27d7086cb_400_400.jfif">
    <h4>  English Grammar</h4>
    <h6>20 Question</h6></a>
</div>
<div class="quiz-container">
    <a href="Mathematics.html"   ><img src="img\84bc06ab-2811-4ae9-bfda-4048d6199b88_400_400.jfif"><h4> verbs</h4>
    <h6>20 Question</h6></a></div>
<div class="quiz-container">
    <a href="Mathematics.html"   > <img src="img\14d45f61-3b72-4626-946b-42127b441cdc_400_400.png">
    <h4>THE tiger</h4>
    <h6>20 Question</h6></a>
</div>
<div class="quiz-container">
    <a href="Mathematics.html"   > <img src="img\410211a6-4a5d-4d47-968d-62e1981a1647_400_400.png">
    <h4>
        Punctuation
      </h4>
      <h6>20 Question</h6></a>

</div>
    </div>



     <!-- feed 3 -->
     <h2 class="heading_text">	&#11088; Computer Science</h2>
     <div class="feed-quiz-container2">
 <div class="quiz-container"><a href="Mathematics.html">
     <img src="img\313900c0-c4eb-41c3-97b5-280ccb09f222_400_400.jfif">
     <h4> Polynomial</h4>
     <h6>20 Question</h6></a>
 </div>
 <div class="quiz-container"><a href="Mathematics.html"   ><img src="img\b074e5ac-9cda-456f-a1e6-eef27d7086cb_400_400.jfif">
     <h4>  English Grammar</h4>
     <h6>20 Question</h6></a>
 </div>
 <div class="quiz-container">
     <a href="Mathematics.html"   ><img src="img\84bc06ab-2811-4ae9-bfda-4048d6199b88_400_400.jfif"><h4> verbs</h4>
     <h6>20 Question</h6></a></div>
 <div class="quiz-container">
     <a href="Mathematics.html"    > <img src="img\14d45f61-3b72-4626-946b-42127b441cdc_400_400.png">
     <h4>THE tiger</h4>
     <h6>20 Question</h6></a>
 </div>
 <div class="quiz-container">
     <a   href="Mathematics.html"  class=".main11" > <img  src="img\410211a6-4a5d-4d47-968d-62e1981a1647_400_400.png">
     <h4>
         Punctuation
       </h4>
       <h6>20 Question</h6></a>
 
 </div>
     </div>
 
</main>












<!-- footer -->
<footer>
    <section id="footer">

        <div class="foot">
            <ul>
                <li><a href="Mathematics.html"   >HOME</a></li>
                <li><a href="Mathematics.html"   >ABOUT US</a></li>
                <li><a href="Mathematics.html"   >CONTACT US</a></li>

            </ul>

            <div class="social-links">
                <a href=https://www.instagram.com/accounts/login/?source=desktop_nav ><img class="sociallinks" src="img\4102579_applications_instagram_media_social_icon.png"></img></a>
                <a href="https://twitter.com/i/flow/login"><img  class="sociallinks" src="img\3225183_app_logo_media_popular_social_icon.png"></img></a>
                <a href="https://www.linkedin.com/login"><img   class="sociallinks"src="img\3225183_app_logo_media_popular_social_icon.png"></img></a>
                <a href="https://www.facebook.com/login/"><img  class="sociallinks" src="img\317727_facebook_social media_social_icon.png"></img></a>
              </div>
        </div>
    </section>
</footer>






<div class="modal hidden">
    <button class="close-modal">&times;</button>
    <div class="back">
      <div class="form">
          
          <div class="bor_shadow">
              <div class="border">
              <h1>Sign Up </h1>
          <h3>esay and fast</h3>
      </div>
          <form>
          <p>
          
              <input class="input_type_text" type="text" placeholder="First Name">
                  <input class="input_type_text" type="text"  placeholder=" Last Name">
      </p>
      <p><input   class="input_type_number"type="number" placeholder="Mobile Number">  </p>
  
  </p>
  <p><input class="input_type_password" type="password" placeholder="Password">  </p>
  
  </p>
  <p> <h5 class="text">Birthday</h5><input class="input_type_password" type="date" placeholder="date of birth">  </p>
  <p>  
      <h5 class="text">Gender</h5><label class="male">Male<input type="radio" name="name">  </label>
      <label class="male">Female<input type="radio" name="name"></label>    </p>
  
      <button class="button"><a href="trynow.html">Sign Up </a></button>
      </form>
  </div>
      </div>
  
  </div>
  </div>
  <div class="overlay hidden"></div>







  <script src="script.js"></script>
</body>
</html>