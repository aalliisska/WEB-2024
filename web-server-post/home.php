<?php
$posts = [
 [ 'id' => 1,
   'background' => './staticc/images/the_road_ahead.jpeg', 
   'title' => 'The Road Ahead',
   'subtitle' => 'The road ahead might be paved - it might not be.',
   'author_photo' => './staticc/images/mat.jpeg',
   'author_name' => 'Mat Vogels',
   'post_data' => '1443157070',
 ],
 [ 'id' => 2,
   'background' => './staticc/images/from_top_down.jpeg', 
   'marking' => 'ADVENTURE',
   'title' => 'From Top Down',
   'subtitle' => 'Once a year, go someplace you’ve never been before.',
   'author_photo' => './staticc/images/william.jpeg',
   'author_name' => 'William Wong',
   'post_data' => '1443157070',
 ],
 [ 'id' => 3,
   'image' => './staticc/images/still_standing_tall.jpeg', 
   'title' => 'Still Standing Tall',
   'subtitle' => 'Life begins at the end of your comfort zone.',
   'author_photo' => './staticc/images/william.jpeg',
   'author_name' => 'William Wong',
   'post_data' => '1443157070',
 ],
 [ 'id' => 4,
   'image' => './staticc/images/sunny_side.jpeg', 
   'title' => 'Sunny Side Up',
   'subtitle' => 'No place is ever as bad as they tell you it’s going to be.',
   'author_photo' => './staticc/images/mat.jpeg',
   'author_name' => 'Mat Vogels',
   'post_data' => '1443157070',
 ],
 [ 'id' => 5,
   'image' => './staticc/images/water_falls.jpeg', 
   'title' => 'Water Falls',
   'subtitle' => 'We travel not to escape life, but for life not to escape us..',
   'author_photo' => './staticc/images/mat.jpeg',
   'author_name' => 'Mat Vogels',
   'post_data' => '1443157070',
 ],
 [ 'id' => 6,
   'image' => './staticc/images/through_the_mist.jpeg', 
   'title' => 'Through the Mist',
   'subtitle' => 'Travel makes you see what a tiny place you occupy in the world.',
   'author_photo' => './staticc/images/william.jpeg',
   'author_name' => 'William Wong',
   'post_data' => '1443157070',
 ],
 [ 'id' => 7,
   'image' => './staticc/images/awaken_early.jpeg', 
   'title' => 'Awaken Early',
   'subtitle' => 'Not all those who wander are lost.',
   'author_photo' => './staticc/images/mat.jpeg',
   'author_name' => 'Mat Vogels',
   'post_data' => '1443157070',
 ],
 [ 'id' => 8,
   'image' => './staticc/images/try_it_always.jpeg', 
   'title' => 'Try it Always',
   'subtitle' => 'The world is a book, and those who do not travel read only one page.',
   'author_photo' => './staticc/images/mat.jpeg',
   'author_name' => 'Mat Vogels',
   'post_data' => '1443157070',
 ],
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./staticc/css/home.css">
  <link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Oxygen&display=swap" rel="stylesheet">
  <title>Home</title>
</head>

<body>
  <header>
    <div class="top">
      <img src="./staticc/images/logo.svg" alt="Logo">
        <nav class="navigation">
          <a class="navigation__button" href="#">Home</a>
          <a class="navigation__button" href="#">Categories</a>
          <a class="navigation__button" href="#">About</a>
          <a class="navigation__button" href="#">Contact</a>
        </nav>
    </div>

    <div class="intro">
      <h1 class="intro__title">Let's do it together.</h1>
      <h2 class="intro__under">We travel the world in search of stories. Come along for the ride.</h2>
      <a class="intro__button" href="#">View Latest Posts</a>
    </div>
  </header>

  <main>
    <nav class="menu">
      <a class="menu__section" href="#">Nature</a>
      <a class="menu__section" href="#">Photography</a>
      <a class="menu__section" href="#">Relexation</a>
      <a class="menu__section" href="#">Vacation</a>
      <a class="menu__section" href="#">Travel</a>
      <a class="menu__section" href="#">Adventure</a>
    </nav>

    <div class="sector">
      <h3 class="sector__title title">Featured Posts</h3>
      <div class="featured-posts">
      <?php 
      foreach ($posts as $post) {
       include 'post_preview.php';
      }
      ?>
    </div>

    <h3 class="main_title title">Most Recent</h3>
    <div class="recent-posts">
    <?php 
      foreach ($posts as $post) {
       include 'post_preview_recent.php';
      }
      ?>  
    </div>
  </main>

  <footer>
    <img src="./staticc/images/logo.svg" alt="Logo">
    <nav class="navigation">
        <a class="navigation__button-foot" href="#">Home</a>
        <a class="navigation__button-foot" href="#">Categories</a>
        <a class="navigation__button-foot" href="#">About</a>
        <a class="navigation__button-foot" href="#">Contact</a>
    </nav>
  </footer>
</body>

</html>