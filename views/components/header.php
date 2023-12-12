<?php
/**
 * @var \App\Kernel\Auth\AuthInterface $auth
 */
$user = $auth->user();
?>

<header>
    <?php if ($auth->check()) { ?>
    <h3>User: <?php echo $user->name() ?></h3>
    <form action="/logout" method="post">
        <button>Выйти</button>
    </form>
    <?php } ?>
    <hr>
</header>