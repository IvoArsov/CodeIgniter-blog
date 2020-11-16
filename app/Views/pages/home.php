<section>
    <?php 
        $session = \Config\Services::session();
    ?>

    <?php if(isset($session->success)): ?>
        <div class="alert alert-success text-center alert-dismissible fade show mb-0" role="0">
            <?= $session->success ?>
                <button type="button" class="close" data-dismiss="alert" aria-lable="Close">
                    <span aria-hidden="true">x</span>
                </button>
        </div>
    <?php endif; ?>    
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
        </div>
    </div>
</section>

<section class="blog-section">
    <div class="container">
        <?php if ($news) : ?>
            <?php foreach ($news as $newsItem) : ?>
                <h3><a href="/blog/<?php echo $newsItem['slug']; ?>"><?php echo $newsItem['title']; ?></a></h3>
            <?php endforeach; ?>
        <?php else : ?>
            <p class="text-center">No post have been found!</p>
        <?php endif; ?>
    </div>
</section>