<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 * @var array<\App\Models\Category> $categories
 * @var \App\Models\Movie $movie
 */
?>

<?php $view->component('start'); ?>
<main>
    <div>
        <h3>Изменение фильма</h3>
        <hr>
    </div>
    <div>
        <form action="/admin/movies/update" method="post" enctype="multipart/form-data">
            <input type="hidden" value="<?php echo $movie->id() ?>" name="id">
            <div>
                <input
                    type="text"
                    id="name"
                    value="<?php echo $movie->name() ?>"
                    name="name"
                    placeholder="Слово пацана"
                >
                <label for="name">Имя</label>
                <?php if ($session->has('name')) { ?>
                    <div id="name">
                        <?php echo $session->getFlash('name')[0] ?>
                    </div>
                <?php } ?>
            </div>
            <div>
                <textarea
                    style="height: 100px"
                    type="text"
                    id="description"
                    name="description"
                    placeholder="Крутой фильм про..."
                ><?php echo $movie->description() ?></textarea>
                <label for="name">Описание</label>
                <?php if ($session->has('description')) { ?>
                    <div id="name">
                        <?php echo $session->getFlash('description')[0] ?>
                    </div>
                <?php } ?>
            </div>
            <div>
                <label for="image">Изображение</label>
                <input type="file" name="image" id="image">
            </div>
            <div>
                <select name="category">
                    <option>Жанр</option>
                    <?php foreach ($categories as $category) { ?>
                        <option value="<?php echo $category->id() ?>" <?php echo $category->id() === $movie->categoryId() ? 'selected' : ''?>>
                            <?php echo $category->name() ?>
                        </option>
                    <?php } ?>
                </select>
            </div>
            <div>
                <button>Сохранить</button>
            </div>
        </form>
    </div>
</main>

<?php $view->component('end'); ?>
