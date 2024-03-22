<a href='/post?id=<?= $post['id'] ?>'>
<div class="post">
    <img class="post__image" src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
    <h3 class="post__title"><?= $post['title'] ?></h3>
    <p class="post__text"><?= $post['subtitle'] ?></p>
    <div class="recent-publication">
        <img class="recent-publication__author author" src="<?= $post['author_photo'] ?>" alt="<?= $post['author_name'] ?>">
        <p class="recent-publication__author-name"><?= $post['author_name'] ?></p>
        <p class="recent-publication__data"><?= date("F d, Y", $post['post_data']) ?></p>
    </div>
</div>
</a>