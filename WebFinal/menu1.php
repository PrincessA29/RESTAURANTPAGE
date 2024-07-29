<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="menustyle.css">
</head>

<body>

<div class="nav">
<div class="title"><a href="index1.php" class="logotitle">Let's <span>Steak</span> a Break</a></div>
    <ul>
    <li><button class="activepage"><a href="menu1.php"><b>Menu</b></a></button></li>
    <li><button class="notactivepage"><a href="login.php"><b>Feedback</b></a></button></li>
    <li><button class="notactivepage"><a href="login.php"><b>Login/Signup</b></a></button></li>
    </ul>
</div>

<div class="webpage">
<div class="container">    
    <h3>Let's <span>Steak</span> a Break</h3>
    <h1>MENU</h1>
    <div class="menupages">
    <button class="menulinks active" onclick="openMenu(event, 'main')">Main Dish</button>
    <button class="menulinks" onclick="openMenu(event, 'side')">Side Dish</button>
    <button class="menulinks" onclick="openMenu(event, 'addons')">Add-ons</button> <br><br>
</div>
    <div class="gridcontainer" id="main">
  <div class="grid-item">
    <div class="description">
      <h2>Buttered Chicken</h2>
      <p>The creamy, savory sauce, created with butter,
onions, garlic, and other seasonings,
 enhances the dish's flavor and texture of the 
Chicken that will surely enjoy by your family
</p>
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
    </div>
    <div class="image">
      <img src="images/gbs.png">
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
    </div>
    <div class="image">
      <img src="images/teriyaki.png">
    </div>
  </div>
  <div class="see-more">
    <button class="see-more-btn" onclick="location.href='login.php'">Want to see more?</button>
  </div>
</div>






<div class="gridcontainer" id="side" style="display: none;">
  <div class="grid-item">
    <div class="description">
      <h2>Creamed spinach with Parmesan cheese</h2>
      <p>Frozen spinach makes this creamed spinach dish a snap to make. It has a smooth, velvety texture, thanks to the simple white sauce that is flavored with Parmesan cheese, a little garlic, and a hint of nutmeg.
</p>
    </div>
    <div class="image">
      <img src="images/creamedspinach.jpg">
    </div>
  </div>
  <div class="grid-item">
    <div class="description">
      <h2>Roasted Brussels Sprouts</h2>
      <p>Resemble small cabbages. They are firm and bright green in color. They are believed to have originated from Brussels, Belgium.</p>
    </div>
    <div class="image">
      <img src="images/brussels.png">
    </div>
  </div>
  <div class="grid-item">
    <div class="description">
      <h2>Truffle Mashed Potatoes</h2>
      <p>Are rich and creamy mashed potatoes made with garlic, parmesan cheese, and flavored with truffle oil.</p>
    </div>
    <div class="image">
      <img src="images/truffle.jpg">
    </div>
  </div>
  <div class="see-more">
    <button class="see-more-btn" onclick="location.href='login.php'">Want to see more?</button>
  </div>
</div>




<div class="gridcontainer" id="addons" style="display: none;">
  <div class="grid-item">
    <div class="description">
      <h2>Halo Halo</h2>
      <p>
Halo-halo is a Filipino-style shaved ice made with sweetened beans, fruits, and jellies and topped with milk, Leche flan, purple yam jam, and ice cream.
 

</p>
    </div>
    <div class="image">
      <img src="images/halohalo.jpg">
    </div>
  </div>
  <div class="grid-item">
    <div class="description">
      <h2>Lobster Bisque</h2>
      <p>Bisque is a French soup that is typically made from a strained broth of crustaceans and is smooth, buttery, and highly seasoned. It may be prepared with lobster, langoustine, crab, shrimp, or crustaceans.</p>
    </div>
    <div class="image">
      <img src="images/bisque.jpg">
    </div>
  </div>
  <div class="grid-item">
    <div class="description">
      <h2>Souffle Pancake</h2>
      <p>Accompanied by a dollop of whipped cream, 
fresh fruits, and maple syrup for added flavor and 
Indulgence
</p>
    </div>
    <div class="image">
      <img src="images/souffle.jpg">
    </div>
  </div><div class="grid-item">
    <div class="description">
      <h2>Oysters on the Half Shell</h2>
      <p>Are uncooked oysters that have been opened by shucking. The top shell has been removed, and the muscle (the edible portion) has been separated from the bottom shell so that it is ready to be slurped.</p>
    </div>
    <div class="image">
      <img src="images/oysters.png">
    </div>
  </div>
</div>
<div class="see-more">
    <button class="see-more-btn" onclick="location.href='login.php'">Want to see more?</button>
  </div>
</div>

</div>








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
  document.getElementById(menuName).style.display = "grid"; // Use "grid" to maintain the grid layout
  evt.currentTarget.classList.add("active");
}
</script>


</body>
</html>
