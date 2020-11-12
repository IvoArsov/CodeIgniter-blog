<section>
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-4">Code Ignater Blog demo</h1>
            <p class="lead">
                <div class="600">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit voluptates quia at quam itaque delectus quaerat sed ullam mollitia fugit dolor, eius rerum, ipsum earum harum. Quaerat labore excepturi autem.</div>
            </p>
            <hr class="my-4">
            <p>
                <div class="10">Lorem ipsum dolor sit amet consectetur adipisicing elit. Deserunt sunt id voluptates eum, repudiandae ratione! Ad earum cupiditate omnis enim amet velit, optio dicta nesciunt incidunt libero, doloribus nulla vitae.</div>
            </p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
        </div>
    </div>
</section>

<section class="blog-section">
    <div class="container">
        <?php if ($news) : ?>
            <?php foreach ($news as $newsItem) : ?>
                <h3><?php echo $newsItem['title']; ?></h3>
                <p><?php echo $newsItem['body'] ?></p>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="text-center">No post have been found!</p>
        <?php endif; ?>
    </div>
</section>