<?php
$conn = mysqli_connect("localhost","root","","restaurant");
session_start();


$SessEmail = $_SESSION['user_email'];

$query = "SELECT * FROM accounts where USER_EMAIL = '$SessEmail'";
$result = mysqli_query($conn, $query);

if($row=mysqli_fetch_assoc($result)){
   $username=$row['USER_NAME'];
   $fname = $row['FIRST_NAME'];
   $lname = $row['LAST_NAME'];
   $usermail= $row['USER_EMAIL'];  
}else{
   echo "<script>alert('You Have to Log In before going to this page.');;
   window.location.href='index1.php' </script>";
 }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Menu</title>
    <link rel="stylesheet" href="menustyle.css">
</head>

<body>
<div class="webpage">
<div class="nav">
<div class="title"><a href="index2.php" class="logotitle">Let's <span>Steak</span> a Break</a></div>  
    <ul>
    <li><button class="activepage"><a href="menu2.php"><b>Menu</b></a></button></li>
    <li><button class="notactivepage"><a href="feedback.php"><b>Feedback</b></a></button></li>
    <li><div class="dropdown">
    <a class="profile-link" href="#">    
    <img src="profile-icon.png" alt="Profile" class="profile-icon.png">
        </a>
        <div class="dropdown-content">
          <a href="profile.php">Profile</a>
          <a href="history.php">History</a>
          <a href="logout.php">Logout</a></div></div>
    </ul>
    </div>
<div class="container" style="height:1400px">    
    <h3>Let's <span>Steak</span> a Break</h3>
    <h1>MENU</h1>
    <div class="menupages">
    <button class="menulinks active" onclick="openMenu(event, 'main')">Main Dish</button>
    <button class="menulinks" onclick="openMenu(event, 'side')">Side Dish</button>
    <button class="menulinks" onclick="openMenu(event, 'addons')">Add-ons</button> <br><br>
</div>
<!-- ---------------------------------------------------------------------------------------- -->

    <div class="gridcontainer" id="main">
  
    <div class="grid-item">
    <div class="description">
      <h2>Baked Salmon</h2>
      <p> For seafood enthusiasts, a flavorful and flaky baked salmon can be a delightful choice.

</p>
<p class="price">Php 300 | 4 pax</p> 
    </div>
    <div class="image">
      <img src="images/bakedsalmon.png">
    </div>
</div>
  
  
    <div class="grid-item">
    <div class="description">
      <h2>Buttered Chicken</h2>
      <p>The creamy, savory sauce, created with butter,
onions, garlic, and other seasonings,
 enhances the dish's flavor and texture of the 
Chicken that will surely enjoy by your family
</p>
<p class="price">Php 200 | 5 pax</p> 
    </div>
    <div class="image">
      <img src="images/butteredchicken.jpg">
    </div>
  </div>


  <div class="grid-item">
    <div class="description">
      <h2>Fish Fillet</h2>
      <p> Fish is filled with omega-3 fatty acids and vitamins such as D and B2 (riboflavin). Fish is rich in calcium and phosphorus and a great source of minerals, such as iron, zinc, iodine, magnesium, and potassium. 
</p>
<p class="price">Php 300 | 3-4 pax</p> 

    </div>
    <div class="image">
      <img src="images/fishfillet.jpg">
    </div>
  </div>


  <div class="grid-item">
    <div class="description">
      <h2>Garlic Beef Salpicao</h2>
      <p>Savory taste that comes with a tender beef and 
garlicky taste, that melts in your mouth. 
The sweetness, aromatic and
 savory taste will surely satisfy your craving.
</p>
<p class="price">Php 150 | 2 pax</p> 
    </div>
    <div class="image">
      <img src="images/gbs.png">
    </div>
  </div>


  <div class="grid-item">
    <div class="description">
      <h2>Grilled Steak</h2>
      <p>Steak is a cuisine that can be characterized as tender, flavorful, succulent, and perfectly prepared; A medium-rare sirloin that is tender, aromatic, and not excessively salted.
</p>
<p class="price">Php 400 | 3 pax</p> 
    </div>
    <div class="image">
      <img src="images/grilledsteak.jpg">
    </div>
  </div>


  <div class="grid-item">
    <div class="description">
      <h2>Roasted Chicken</h2>
      <p> A well-seasoned and tender roasted chicken with oranges. It combines the succulence of perfectly cooked chicken with the tangy sweetness of citrus, creating a harmonious blend that tantalizes the taste buds.
</p>
<p class="price">Php 400 | 2 pax</p> 
    </div>
    <div class="image">
      <img src="images/roastedchicken.png">
    </div>
</div>

  <div class="grid-item">
    <div class="description">
      <h2>Teriyaki Salmon</h2>
      <p> Try delicious blend of tender fish and a sweet 
And savory sauce. Soy sauce, mirin, 
ginger, and garlic marinade the
 salmon fillet for Asian-inspired flavor. 
Good for 2 pax
</p>
<p class="price">Php 150 | 2 pax</p> 
    </div>
    <div class="image">
      <img src="images/teriyaki.png">
    </div>
  </div>

  <div class="grid-item">
    <div class="description">
      <h2>Vegetarian Lasagna</h2>
      <p> Packed with layers of pasta, cheese, and vegetables, vegetarian lasagna is a delicious option for non-meat eaters. 
Good for 5 pax
</p>
<p class="price">Php 350 | 5 pax</p> 
    </div>
    <div class="image">
      <img src="images/lasagna.png">
    </div>
  </div>
  <div class="schedule"> 
<button><a href="scheduling.php">Set a Schedule Now!</a></button>
</div>  
</div>



<!-- ---------------------------------------------------------------------------------------- -->


<div class="gridcontainer" id="side" style="display: none;">
  <div class="grid-item">
    <div class="description">
      <h2>Creamed spinach with Parmesan cheese</h2>
      <p>Frozen spinach makes this creamed spinach dish a snap to make. It has a smooth, velvety texture, thanks to the simple white sauce that is flavored with Parmesan cheese, a little garlic, and a hint of nutmeg.
</p>
<p class="price">Php 400 | 4 pax</p> 

    </div>
    <div class="image">
      <img src="images/creamedspinach.jpg">
    </div>
  </div>


  <div class="grid-item">
    <div class="description">
      <h2>Garlic Mashed Potatoes</h2>
      <p>Creamy and flavorful mashed potatoes with a hint of garlic make for a comforting and versatile side dish.
</p>
      <p class="price">Php 300 | 3 pax</p> 

    </div>
    <div class="image">
      <img src="images/garlicmashed.jpg">
    </div>
  </div>


  <div class="grid-item">
    <div class="description">
      <h2>Gratin Dauphinois</h2>
      <p>Thinly sliced potatoes baked with cream, butter, and garlic until golden and bubbling.
</p>
      <p class="price">Php 400 | 4 pax</p> 

    </div>
    <div class="image">
      <img src="images/gratin.png">
    </div>
  </div>


  <div class="grid-item">
    <div class="description">
      <h2>Quinoa Salad</h2>
      <p>A refreshing and nutritious option, quinoa salad often includes a mix of vegetables, herbs, and a tangy dressing.</p>
      <p class="price">Php 200 | 1 pax</p> 
    </div>
    <div class="image">
      <img src="images/quinoa.png">
    </div>
  </div>


  <div class="grid-item">
    <div class="description">
      <h2>Roasted Brussels Sprouts</h2>
      <p>Resemble small cabbages. They are firm and bright green in color. They are believed to have originated from Brussels, Belgium.</p>
      <p class="price">Php 300 | 3 pax</p> 
    </div>
    <div class="image">
      <img src="images/brussels.png">
    </div>
  </div>


  <div class="grid-item">
    <div class="description">
      <h2>Truffle Mashed Potatoes</h2>
      <p>Are rich and creamy mashed potatoes made with garlic, parmesan cheese, and flavored with truffle oil.</p>
      <p class="price">Php 350 | 3 pax</p> 
    </div>
    <div class="image">
      <img src="images/truffle.jpg">
    </div>
  </div>
  <div class="schedule"> 
<button><a href="scheduling.php">Set a Schedule Now!</a></button>
</div> 
</div>



<!-- ---------------------------------------------------------------------------------------- -->


<div class="gridcontainer" id="addons" style="display: none;">
  
<div class="grid-item">
    <div class="description">
      <h2>Butterscotch</h2>
      <p>
      This rich treat starts with a base of milk and ice cream, which makes the texture velvety and rich. The star of the show is the butterscotch syrup, which gives the shake its sweet and buttery taste.
 

</p>
<p class="price">Php 100 | 1 pax</p> 
    </div>
    <div class="image">
      <img src="images/butterscotch.png">
    </div>
  </div>



<div class="grid-item">
    <div class="description">
      <h2>Halo Halo</h2>
      <p>
Halo-halo is a Filipino-style shaved ice made with sweetened beans, fruits, and jellies and topped with milk, Leche flan, purple yam jam, and ice cream.
 

</p>
<p class="price">Php 100 | 2 pax</p> 
    </div>
    <div class="image">
      <img src="images/halohalo.jpg">
    </div>
  </div>
  
  
  <div class="grid-item">
    <div class="description">
      <h2>Hibiscus Tea</h2>
      <p>Hibiscus tea is a herbal tea made from the dried petals of the hibiscus plant (hibiscus sabdariffa). It has a pleasantly tart, sweet flavor reminiscent of cranberry, and brews up a vibrant magenta color.
</p>
      <p class="price">Php 70 | 1 pax</p> 
    </div>
    <div class="image">
      <img src="images/hibiscus.jpg">
    </div>
  </div>
  

  
  <div class="grid-item">
    <div class="description">
      <h2>Lobster Bisque</h2>
      <p>Bisque is a French soup that is typically made from a strained broth of crustaceans and is smooth, buttery, and highly seasoned. It may be prepared with lobster, langoustine, crab, shrimp, or crustaceans.</p>
      <p class="price">Php 350 | 2 pax</p> 
    </div>
    <div class="image">
      <img src="images/bisque.jpg">
    </div>
  </div>
  


  <div class="grid-item">
    <div class="description">
      <h2>Oysters on the Half Shell</h2>
      <p>Are uncooked oysters that have been opened by shucking. The top shell has been removed, and the muscle (the edible portion) has been separated from the bottom shell so that it is ready to be slurped.</p>
      <p class="price">Php 300 | 2 pax</p> 
    </div>
    <div class="image">
      <img src="images/oysters.png">
    </div>
  </div>
  


  <div class="grid-item">
    <div class="description">
      <h2>Souffle Pancake</h2>
      <p>Accompanied by a dollop of whipped cream, 
fresh fruits, and maple syrup for added flavor and 
Indulgence
</p>
<p class="price">Php 150 | 2 pax</p> 
    </div>
    <div class="image">
      <img src="images/souffle.jpg">
    </div>
  </div>
  
  <div class="grid-item">
    <div class="description">
      <h2>Strawberry Blueberry Parfait</h2>
      <p>Strawberry slices are placed in a glass or bowl to
 start this parfait. A layer of vanilla or Greek yogurt adds 
creaminess and tanginess to the strawberries.

</p>
<p class="price">Php 150 | 2 pax</p> 
    </div>
    <div class="image">
      <img src="images/strawberry.png">
    </div>
  </div>


  <div class="grid-item">
    <div class="description">
      <h2>Tuna Tartare</h2>
      <p>Tuna tartare is a dish composed of raw, sushi-grade tuna that has been finely minced and chilled with lemon juice or another vinaigrette, aromatics, premium olive oil, and, frequently, avocado.
</p>
      <p class="price">Php 300 | 2 pax</p> 
    </div>
    <div class="image">
      <img src="images/tuna.png">
    </div>
  </div>
  <div class="schedule"> 
<button><a href="scheduling.php">Set a Schedule Now!</a></button>
</div> 
</div>
</div>
</div>



<!-- ---------------------------------------------------------------------------------------- -->





<script>
function openMenu(evt, menuName) {
  var i, gridcontainer, menulinks;
  gridcontainer = document.getElementsByClassName("gridcontainer");
  for (i = 0; i < gridcontainer.length; i++) {
    gridcontainer[i].style.display = "none";
  }
  menulinks = document.getElementsByClassName("menulinks");
  for (i = 0; i < menulinks.length; i++) {
    menulinks[i].classList.remove("active");
  }
  document.getElementById(menuName).style.display = "grid";
  evt.currentTarget.classList.add("active");
}
</script>


</body>
</html>
