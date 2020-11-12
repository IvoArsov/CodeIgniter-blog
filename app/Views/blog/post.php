<section>
    <div class="container">
        <article class="blog-post">
            <h1><?= $post['title'] ?></h1>
            <div class="details">
                Posted: <em><?= date('M d Y', strtotime($post['created_on'])) ?></em> by <a href="https://github.com/IvoArsov" target="_blank">Ivaylo Arsov</a>
            </div>
            <?= $post['body'] ?>
        </article>
    </div>
</section>