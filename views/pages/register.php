<?php
/**
 * @var \App\Kernel\Session\SessionInterface $session
 * @var \App\Kernel\View\ViewInterface $view
 */
?>

<?php $view->component('start') ?>

<main>
    <div>
        <h3>Регистрация</h3>
        <hr>
    </div>
    <div>
        <form action="/register" method="post">
            <div>
                <input
                    type="text"
                    id="name"
                    name="name"
                    placeholder="Иван Иванов"
                >
                <label for="name">Имя</label>
                <?php if ($session->has('name')) { ?>
                    <ul>
                        <?php foreach ($session->getFlash('name') as $error) { ?>
                            <li style="color: red;"><?php echo $error ?></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <div>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="name@gmail.com"
                >
                <label for="email">E-mail</label>
                <?php if ($session->has('email')) { ?>
                    <ul>
                        <?php foreach ($session->getFlash('email') as $error) { ?>
                            <li style="color: red;"><?php echo $error ?></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <div>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="*********"
                >
                <label for="password">Пароль</label>
                <?php if ($session->has('password')) { ?>
                    <ul>
                        <?php foreach ($session->getFlash('password') as $error) { ?>
                            <li style="color: red;"><?php echo $error ?></li>
                        <?php } ?>
                    </ul>
                <?php } ?>
            </div>
            <div>
                <input
                    type="password"
                    class="form-control"
                    id="password_confirmation"
                    name="password_confirmation"
                    placeholder="*********"
                >
                <label for="password_confirmation">Подтверждение</label>
            </div>

            <button>Создать аккаунт</button>
        </form>
    </div>
</main>

<?php $view->component('end') ?>