<?php
/**
 * @var \App\Kernel\Auth\AuthInterface $auth
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 * @var \App\Kernel\Storage\StorageInterface $storage
 * @var \App\Models\Movie $movie
 */
?>

<?php $view->component('start'); ?>

<main>
    <div>
        <img src="<?php echo $storage->url($movie->preview()) ?>" alt="<?php echo $movie->name() ?>">
        <?php if ($auth->check()) { ?>
            <form action="/reviews/add" method="post">
                <input type="hidden" value="<?php echo $movie->id() ?>" name="id">
                <select name="rating" aria-label="Default select example">
                    <option selected>Оценка</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
                <?php if ($session->has('rating')) { ?>
                    <div id="name">
                        <?php echo $session->getFlash('rating')[0] ?>
                    </div>
                <?php } ?>
                <div>
                    <textarea
                        name="comment"
                        placeholder="Укажи свое мнение о фильме"
                        id="floatingTextarea2"
                        style="height: 100px"
                    ></textarea>
                    <label for="floatingTextarea2">Комментарий</label>
                    <?php if ($session->has('comment')) { ?>
                        <div id="name">
                            <?php echo $session->getFlash('comment')[0] ?>
                        </div>
                    <?php } ?>
                </div>
                <button>Оставить отзыв</button>
            </form>
        <?php } else { ?>
            <div>
                Для того, чтобы оставить отзыв, необходимо <a href="/login">авторизоваться</a>
            </div>
        <?php } ?>
    </div>
    <div>
        <h1><?php echo $movie->name() ?></h1>
        <p>Оценка <span><?php echo $movie->avgRating() ?></span></p>
        <p><?php echo $movie->description() ?></p>
        <p><small>Добавлен <?php echo $movie->createdAt() ?></small></p>
        <h4>Отзывы</h4>
        <div>
            <?php foreach ($movie->reviews() as $review) { ?>
                <?php $view->component('review_card', ['review' => $review])?>
            <?php } ?>
        </div>
    </div>
</main>

<?php $view->component('end'); ?>
