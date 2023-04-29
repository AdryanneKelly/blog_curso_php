<?php

include_once("templates/header.php");

if (isset($_GET['id'])) {
  $postId = $_GET['id'];
  $currentPost;

  foreach ($posts as $post) {
    if ($post['id'] == $postId) {
      $currentPost = $post;
    }
  }
}

?>


<main id="post-container">
  <div class="content-container">
    <h1 id="main-title"><?= $currentPost['title'] ?></h1>
    <p id="post-description"><?= $currentPost['description'] ?></p>
    <div class="img-container">
      <img src="<?= $BASE_URL ?>/img/<?= $currentPost['img']; ?>" alt="<?= $currentPost['title']; ?>">
    </div>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero doloremque nesciunt unde sunt asperiores tempore sequi sapiente eum! Illum obcaecati nobis ab saepe cumque rerum eum eos mollitia iure blanditiis!
      Sint error odit explicabo omnis sunt laborum consequuntur nostrum iusto numquam obcaecati possimus doloribus quidem ex, pariatur at labore. Sunt voluptates voluptate natus suscipit excepturi, illo cumque dolorem animi non?
      Minima atque numquam hic, omnis quasi obcaecati iusto necessitatibus nobis, unde placeat repellat nihil laudantium, quidem tempore ab laborum? Asperiores consequatur velit perspiciatis laudantium dolorum recusandae laboriosam neque enim? Atque?
      Deserunt, cupiditate non! Recusandae repellendus obcaecati, quasi molestiae, aliquam eos fugiat, debitis consequatur asperiores animi rem sit exercitationem! Et itaque aliquid dolor non, molestiae doloremque. Facilis possimus fugiat dolore saepe.
      Repudiandae dolorum dolores quos dolorem ab voluptatibus, dolor rem esse saepe libero enim, alias architecto aliquam pariatur tempora vitae molestiae nisi accusantium illo! Harum exercitationem temporibus quidem quam veritatis omnis?</p>
    <p class="post-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Vero doloremque nesciunt unde sunt asperiores tempore sequi sapiente eum! Illum obcaecati nobis ab saepe cumque rerum eum eos mollitia iure blanditiis!
      Sint error odit explicabo omnis sunt laborum consequuntur nostrum iusto numquam obcaecati possimus doloribus quidem ex, pariatur at labore. Sunt voluptates voluptate natus suscipit excepturi, illo cumque dolorem animi non?
      Minima atque numquam hic, omnis quasi obcaecati iusto necessitatibus nobis, unde placeat repellat nihil laudantium, quidem tempore ab laborum? Asperiores consequatur velit perspiciatis laudantium dolorum recusandae laboriosam neque enim? Atque?
      Deserunt, cupiditate non! Recusandae repellendus obcaecati, quasi molestiae, aliquam eos fugiat, debitis consequatur asperiores animi rem sit exercitationem! Et itaque aliquid dolor non, molestiae doloremque. Facilis possimus fugiat dolore saepe.
      Repudiandae dolorum dolores quos dolorem ab voluptatibus, dolor rem esse saepe libero enim, alias architecto aliquam pariatur tempora vitae molestiae nisi accusantium illo! Harum exercitationem temporibus quidem quam veritatis omnis?</p>

  </div>
  <aside id="nav-container">
    <h3 id="tags-title">Tags</h3>
    <ul id="tags-list">
      <?php foreach ($currentPost["tags"] as $tag) : ?>
        <li><a href="#"><?= $tag ?></a></li>
      <?php endforeach; ?>
    </ul>
    <h3 id="categories-title">Categories</h3>
    <ul id="categories-list">
      <?php foreach ($categories as $category) : ?>
        <li><a href="#"><?= $category; ?></a></li>
      <?php endforeach; ?>
    </ul>
  </aside>
</main>

<?php

include_once("templates/footer.php")

?>