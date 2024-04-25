<?php
session_start();
if (!isset($_SESSION['email'])) {
    header('Location: login.php');
}
?>
<?php include "lib/header.php";?>

<main>
   <div id="container">
   <h1 class="kop">Question 1</h1>
   <div class="img-vraag">
 <h2>
    Land van afkomt/Heimwee
 </h2> 
 <img src="img/wereld.jpg" alt="ossoo">
 </div>
 <div class="emo-container">


   <div class="emo1"><a href="save.php?selection=<?php echo urlencode('1'); ?>">😊</a></div>
   <div class="emo2"><a href="save.php?selection=<?php echo urlencode('2'); ?>">&#128578</a></div>
   <div class="emo3"><a href="save.php?selection=<?php echo urlencode('3'); ?>">&#128528</a></div>
   <div class="emo4"><a href="save.php?selection=<?php echo urlencode('4'); ?>">&#128542</a></div>
   <div class="emo5"><a href="save.php?selection=<?php echo urlencode('5'); ?>">&#128545</a></div>
   </div>
   <div class = "exit-conatiner">
   <button onclick="history.go(-1)">Exit</button>
   </div>
</div>

<div id="container">
   <h1 class="kop">Question 2</h1>
   <div class="img-vraag">
 <h2>
    Huis/Wonen
 </h2> 
 <img src="img/huis.jpg" alt="ossoo">
 </div>
 <div class="emo-container">


    <div class="emo1">😊</div>
    <div class="emo2">&#128578</div>
    <div class="emo3">&#128528</div>
    <div class="emo4">&#128542</div>
    <div class="emo5">&#128545</div>

   </div>  
   <div class = "exit-conatiner">
   <button onclick="history.go(-1)">Exit</button>
   </div>
</div>

<div id="container">
   <h1 class="kop">Question 3</h1>
   <div class="img-vraag">
 <h2>
    Gezin
 </h2> 
 <img src="img/gezien.png" alt="ossoo">
 </div>
 <div class="emo-container">


    <div class="emo1">😊</div>
    <div class="emo2">&#128578</div>
    <div class="emo3">&#128528</div>
    <div class="emo4">&#128542</div>
    <div class="emo5">&#128545</div>

   </div>  
   <div class = "exit-conatiner">
   <button onclick="history.go(-1)">Exit</button>
   </div>
</div>

<div id="container">
   <h1 class="kop">Question 4</h1>
   <div class="img-vraag">
 <h2>
    Inkomen
 </h2> 
 <img src="img/geld.png" alt="ossoo">
 </div>
 <div class="emo-container">


    <div class="emo1">😊</div>
    <div class="emo2">&#128578</div>
    <div class="emo3">&#128528</div>
    <div class="emo4">&#128542</div>
    <div class="emo5">&#128545</div>

   </div>  
   <div class = "exit-conatiner">
   <button onclick="history.go(-1)">Exit</button>
   </div>
</div>

<div id="container">
   <h1 class="kop">Question 1</h1>
   <div class="img-vraag">
 <h2>
    Zorg/stress
 </h2> 
 <img src="img/stress.png" alt="ossoo">
 </div>
 <div class="emo-container">


    <div class="emo1">😊</div>
    <div class="emo2">&#128578</div>
    <div class="emo3">&#128528</div>
    <div class="emo4">&#128542</div>
    <div class="emo5">&#128545</div>

   </div>  
   <div class = "exit-conatiner">
   <button onclick="history.go(-1)">Exit</button>
   </div>
</div>

<div id="container">
   <h1 class="kop">Question 1</h1>
   <div class="img-vraag">
 <h2>
    Sociaal
 </h2> 
 <img src="img/sociaal.png" alt="ossoo">
 </div>
 <div class="emo-container">


    <div class="emo1">😊</div>
    <div class="emo2">&#128578</div>
    <div class="emo3">&#128528</div>
    <div class="emo4">&#128542</div>
    <div class="emo5">&#128545</div>

   </div>  
   <div class = "exit-conatiner">
   <button onclick="history.go(-1)">Exit</button>
   </div>
</div>

<div id="container">
   <h1 class="kop">Question 1</h1>
   <div class="img-vraag">
 <h2>
    Taal/Opleiding
 </h2> 
 <img src="img/taal.jpg" alt="ossoo">
 </div>
 <div class="emo-container">


    <div class="emo1">😊</div>
    <div class="emo2">&#128578</div>
    <div class="emo3">&#128528</div>
    <div class="emo4">&#128542</div>
    <div class="emo5">&#128545</div>

   </div>  
   <div class = "exit-conatiner">
   <button onclick="history.go(-1)">Exit</button>
   </div>
</div>

<div id="container">
   <h1 class="kop">Question 1</h1>
   <div class="img-vraag">
 <h2>
    Lichaam/gezondheid
 </h2> 
 <img src="img/gezond.png" alt="ossoo">
 </div>
 <div class="emo-container">


    <div class="emo1">😊</div>
    <div class="emo2">&#128578</div>
    <div class="emo3">&#128528</div>
    <div class="emo4">&#128542</div>
    <div class="emo5">&#128545</div>

   </div>  
   <div class = "exit-conatiner">
   <button onclick="history.go(-1)">Exit</button>
   </div>
</div>


</main>


<?php include "lib/footer.php";?>