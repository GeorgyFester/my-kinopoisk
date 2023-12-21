<?php
/**
 * @var \App\Kernel\Storage\StorageInterface $storage
 * @var \App\Models\Movie $movie
 */
?>

<a href="/movie?id=<?php echo $movie->id() ?>">
    <img src="<?php echo $storage->url($movie->preview()) ?>" height="200px" alt="<?php echo $movie->name() ?>">
    <div>
        <h5><?php echo $movie->name() ?></h5>
        <p>Оценка <span><?php echo $movie->avgRating() ?></span></p>
        <p><?php echo $movie->description() ?></p>
    </div>
</a>
