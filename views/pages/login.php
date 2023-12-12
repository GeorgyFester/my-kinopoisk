<?php
/**
 * @var \App\Kernel\Session\SessionInterface $session
 * @var \App\Kernel\View\ViewInterface $view
 */
?>

<?php $view->component('start') ?>
    <h1>Авторизация</h1>
        <form action="/login" method="post">
            <?php if ($session->has('error')) { ?>
                <p style="color: red">
                    <?php echo $session->getFlash('error') ?>
                </p>
            <?php } ?>

            <div>
                <input type="text"
                       id="name"
                       name="name"
                       placeholder="Иван Иванов"
                >
                <label for="name">Имя</label>
            </div>
            <div>
                <input type="email"
                       name="email"
                       id="email"
                       placeholder="name@gmail.com"
                >
                <label for="email">E-mail</label>
            </div>
            <div>
                <input type="password"
                       id="password"
                       name="password"
                       placeholder="*********"
                >
                <label for="password">Пароль</label>
            </div>
            <div>
                <input type="password"
                       class="form-control"
                       id="password_confirmation"
                       name="password_confirmation"
                       placeholder="*********"
                >
                <label for="password_confirmation">Подтверждение</label>
            </div>

            <button>Войти</button>
        </form>

<?php $view->component('end') ?>