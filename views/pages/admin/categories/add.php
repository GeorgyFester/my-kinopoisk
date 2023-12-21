<?php
/**
 * @var \App\Kernel\View\ViewInterface $view
 * @var \App\Kernel\Session\SessionInterface $session
 */
?>

<?php $view->component('start'); ?>

<main>
    <div>
        <h3>Добавление нового жанра</h3>
        <hr>
    </div>
    <div>
        <form action="/admin/categories/add" method="post">
            <div class="form-floating">
                <input
                    type="text"
                    class="form-control <?php echo $session->has('name') ? 'is-invalid' : '' ?>"
                    id="name"
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
                <button>Добавить</button>
            </div>
        </form>
    </div>
</main>

<?php $view->component('end'); ?>
