<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 * @var \App\Models\Category $category
 */
?>

<?php $view->component('start'); ?>
<main>
    <div>
        <h3>Изменить - <?php echo $category->name() ?></h3>
        <hr>
    </div>
    <div>
        <form action="/admin/categories/update" method="post">
            <input type="hidden" name="id" value="<?php echo $category->id() ?>">
            <div class="form-floating">
                <input
                    type="text"
                    class="form-control <?php echo $session->has('name') ? 'is-invalid' : '' ?>"
                    id="name"
                    value="<?php echo $category->name() ?>"
                    name="name"
                    placeholder="Название"
                >
                <label for="name">Название</label>
                <?php if ($session->has('name')) { ?>
                    <div id="name">
                        <?php echo $session->getFlash('name')[0] ?>
                    </div>
                <?php } ?>
            </div>
            <div>
                <button>Сохранить</button>
            </div>
        </form>
    </div>
</main>

<?php $view->component('end'); ?>
