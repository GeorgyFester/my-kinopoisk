<?php

namespace App\Kernel\View;

use App\kernel\Exceptions\ViewNotFoundException;
use App\Kernel\Session\SessionInterface;

class View implements ViewInterface
{
    private string $title;

    public function __construct(
        private SessionInterface $session,
//        private AuthInterface $auth,
//        private StorageInterface $storage
    ) {
    }

    public function page(string $name, array $data = [], string $title = ''): void
    {
        $this->title = $title;

        $viewPath = APP_PATH."/views/pages/$name.php";

        if (! file_exists($viewPath)) {
            throw new ViewNotFoundException("View $name not found");
        }

        //extract(array_merge($this->defaultData(), $data));
        extract($this->defaultData());

        include_once $viewPath;
    }

    /**
     * @throws ViewNotFoundException
     */
    public function component(string $name, array $data = []): void
    {
        $componentPath = APP_PATH."/views/components/$name.php";

        if (! file_exists($componentPath)) {
            echo "Component $name not found";

            return;
        }

        //extract(array_merge($this->defaultData(), $data));
        extract(['view' => $this]);

        include_once $componentPath;
    }

    private function defaultData(): array
    {
        return [
            'view' => $this,
            'session' => $this->session,
            //'auth' => $this->auth,
            //'storage' => $this->storage,
        ];
    }

//    public function title(): string
//    {
//        return $this->title;
//    }
}