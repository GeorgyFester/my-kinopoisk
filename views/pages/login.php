<?php
/**
 * @var \App\Kernel\Session\SessionInterface $session
 * @var \App\Kernel\View\ViewInterface $view
 */
?>

<?php $view->component('start') ?>

<main>
    <form action="/login" method="post">
        <?php if ($session->has('error')) { ?>
            <div>
                <?php echo $session->getFlash('error') ?>
            </div>
        <?php } ?>
        <div style="align-items: center; justify-content: space-between">
            <h2>Вход</h2>
            <a href="/">
                <h5>Кинопоиск <span>Lite</span></h5>
            </a>
        </div>
        <div>
            <input
                type="email"
                class="form-control"
                name="email"
                id="floatingInput"
                placeholder="name@areaweb.su"
            >
            <label for="floatingInput">E-mail</label>
        </div>
        <div>
            <input
                type="password"
                name="password"
                class="form-control"
                id="floatingPassword"
                placeholder="Пароль"
            >
            <label for="floatingPassword">Пароль</label>
        </div>
        <button type="submit">Войти</button>
        <p>Кинопоиск 2023</p>
    </form>
</main>

<?php $view->component('end') ?>