<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 * @var array<\App\Models\Category> $categories
 */
?>

<?php $view->component('start'); ?>
    <main>
        <div>
            <h3>Добавление фильма</h3>
            <hr>
        </div>
        <div>
            <form action="/admin/movies/add" method="post" enctype="multipart/form-data">
                <div class="form-floating">
                    <input
                        type="text"
                        class="form-control <?php echo $session->has('name') ? 'is-invalid' : '' ?>"
                        id="name"
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
                        class="form-control <?php echo $session->has('description') ? 'is-invalid' : '' ?>"
                        id="description"
                        name="description"
                        placeholder="Крутой фильм про..."
                    ></textarea>
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
                        <option selected>Жанр</option>
                        <?php foreach ($categories as $category) { ?>
                            <option value="<?php echo $category->id() ?>">
                                <?php echo $category->name() ?>
                            </option>
                        <?php } ?>
                    </select>
                </div>
                <div>
                    <button>Добавить</button>
                </div>
            </form>
        </div>
    </main>

<?php $view->component('end'); ?>