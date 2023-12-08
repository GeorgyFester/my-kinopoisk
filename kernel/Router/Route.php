<?php

namespace App\Kernel\Router;

use JetBrains\PhpStorm\Pure;

class Route
{
    public function __construct(
        private string $uri,
        private string $method,
        private $action,
        private array $middlewares = []
    ) {
    }

    #[Pure] public static function get(string $uri, $action, array $middlewares = []): static
    {
        return new static($uri, 'GET', $action, $middlewares);
    }

    #[Pure] public static function post(string $uri, $action, array $middlewares = []): static
    {
        return new static($uri, 'POST', $action, $middlewares);
    }

    public function getUri(): string
    {
        return $this->uri;
    }

    public function getAction()
    {
        return $this->action;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function hasMiddlewares(): bool
    {
        return ! empty($this->middlewares);
    }

    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}