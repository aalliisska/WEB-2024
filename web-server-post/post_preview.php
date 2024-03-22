<a  href='/post?id=<?= $post['id'] ?>'>
<div class="featured-post">
    <img src="<?= $post['background'] ?>" class="featured-post__background"/>
    <h3 class="featured-posts-title"><?= $post['title'] ?></h3>
    <p class="featured-posts-text"><?= $post['subtitle'] ?></p>
    
    <div class="featured-publication">
        <img class="featured-publication__author author" src="<?= $post['author_photo'] ?>" alt="<?= $post['author_name'] ?>">
        <p class="featured-publication__author-name"><?= $post['author_name'] ?></p>
        <p class="featured-publication__data"><?= date("F d, Y", $post['post_data']) ?></p>
    </div>
</div>
</a>