<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var array<\App\Models\Category> $categories
 */
?>

<?php $view->component('start'); ?>

<main>
    <div>
        <h3>Жанры</h3>
        <hr>
        <div>TODO: Этот раздел нужно завершить</div>
        <div>
            <?php foreach ($categories as $category) { ?>
                <a href="#">
                    <div>
                        <h5><?php echo $category->name() ?></h5>
                        <p>Фильмов <span>10</span></p>
                    </div>
                </a>
            <?php } ?>
        </div>
    </div>
</main>

<?php $view->component('end'); ?>
