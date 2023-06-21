<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Assignment 3</title>
    <meta name="How Sweet is this" content="Page about my favorite candy">
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="author" content="Rodolfo Silva">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&family=Orbitron:wght@500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="Css/style.css">
  </head>
  <body>
    <?php
    require_once('header.php');
    ?>
    <main id='divmain'>
    <img id=border src='img/border.png' alt="Candy border">
      <?php
      if(isset($_POST) && !empty($_POST)){
      $send=$_POST["send"];
      $name=$_POST["name"];
      $email=$_POST["email"];
      echo "<p id='main'>Thank you for your subscription <strong>$name</string>, don't worry we will send you new delicious recipes for your email: <string>$email</string>.</p>";
      }
      ?>
 <h1 class="font-effect-neon">Bavarian Cream Doughnut</h1>                
 <p id=main>
 Born in War to Conquer the Palates: Discover the Origins of the Dream
 GRANDMA'S HOUSE
 That our homemade dream is the favorite of 10 out of 10 customers you should already know. But do you know where the dream came from?
 The origin of the candy dates back to the year 1756, when Prussia (today a region of Germany, Poland and the Netherlands) was about to be 
 invaded. So King Frederick the Great (1712-1786) recruited all able-bodied people to fight to protect Berlin.
 One of the fighters called to the front was a baker's assistant, who was responsible for the cannonballs. However, the boy did not have the 
 necessary dexterity to operate the weapon, although he was an enthusiast of the artillery cannon. The anonymous recruit was then removed 
 from the battalion and returned to work in the bakery, but with some new ideas that came to him when he served in the war.
 Recalling the experience, he decided to innovate: he invented a sweet bun, molded dough balls of wheat flour, milk, sugar and eggs, which 
 he had left to rise, giving them the shape and size of cannon projectiles. Instead of putting the sourdoughs directly into the oven, he 
 decided to deep-fry one of the balls he produced. The idea worked, and the candy at the time was baptized as Berliner, in reference to 
 Berlin.
 It wasn't long before the delicacy spread around the world. In Portugal, it is also called the Berlin Ball. Already in the United States, 
 it won a hole in the middle and became the famous donut. In Italy, it is known as krapfen, in the South Tyrol region, and as bomba or 
 bombolone in the center and south of the country. In Argentina and Uruguay, they are known as tassels de fraile, filled with various sweets 
 and creams and consumed at breakfast time or as an accompaniment to chimarrão. In Chile, they are known as berlines.
 Here in Brazil, the dream arrived under the influence of German immigrants, who landed between the 19th and 20th centuries. The first 
 references to its preparation in the country come here from Rio Grande do Sul, when the first immigrants who arrived in São Leopoldo in 
 1824 brought the recipe in their luggage. Upon arriving in São Paulo between the 1920s and 1930s, it was affectionately nicknamed as a 
 dream. At the time, bakers used leftover bread dough to make sweets.
 Did you feel like it? So come and taste or rediscover this delicacy that is the favorite of 10 out of 10 customers at Casa da Vovó! 
 Handmade in our bakery, they are always served crispy on the outside and soft on the inside. Super stuffed in the options: dulce de leche, 
 vanilla cream, guava jam or chocolate.
 </p>
 <h2 class="font-effect-neon">Bavarian Cream Doughnut Nutritional Information:</h2>                
 <img id="picture" src="img/calories.png" alt="calories">
   </main>
  <footer id="divfooter">
   <?php
   require_once('footer.php');
   ?>
  </footer> 
 </body>   
</html>