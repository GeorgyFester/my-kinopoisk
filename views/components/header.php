<?php
/**
 * @var \App\Kernel\Auth\AuthInterface $auth
 */
$user = $auth->user();
?>

<header>
        <div>
            <a href="/">
                <h3>Кинопоиск</h3>
            </a>

            <ul>
                <li>
                    <a href="/">
                        <span>Главная</span>
                    </a>
                </li>

                <li>
                    <a href="/best">
                        <span>Лучшее</span>
                    </a>
                </li>

                <li>
                    <a href="/categories">
                        <span>Жанры</span>
                    </a>
                </li>
            </ul>

            <div>
                <?php if ($auth->check()) { ?>
                    <div>
                        <p><?php echo $user->name() ?></p>
                        <form action="/logout" method="post">
                            <button>
                                <span>Выйти</span>
                            </button>
                        </form>
                    </div>
                <?php } else { ?>
                    <a href="/login" type="button">
                        <span>Войти</span>
                    </a>
                    <a href="/register" type="button">
                        <span>Создать аккаунт</span>
                    </a>
                <?php } ?>
            </div>
        </div>
</header>