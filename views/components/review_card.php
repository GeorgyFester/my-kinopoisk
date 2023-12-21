<?php
/**
 * @var \App\Models\Review $review
 */
?>

<div>
    <div>
        Пользователь: <?php echo $review->user()->name() ?>
    </div>
    <div>
        <blockquote>
            <p><?php echo $review->comment() ?></p>
            <footer>Оценка <span><?php echo $review->rating() ?></span></footer>
        </blockquote>
    </div>
</div>
