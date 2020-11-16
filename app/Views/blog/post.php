<section>
    <div class="container">
        <article class="blog-post">
            <h3><?= $post['title'] ?></h3>
            <div class="details">
                Posted: <em><?= date('M d Y', strtotime($post['created_on'])) ?></em> by <a href="https://github.com/IvoArsov" target="_blank">Ivaylo Arsov</a>
            </div>
            <hr >
            <?= $post['body'] ?>
        </article>
    </div>
</section>