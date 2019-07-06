<?php

namespace DesignPatterns\Decorator;

use DesignPatterns\Shared\Domain\User\User;

class UserDecorator implements Response
{
    private $content;
    private $user;

    public function __construct(Response $response)
    {
        $this->content = $response->content();
        $this->user = new User();
    }

    /**
     * @return array
     */
    public function content()
    {
        $this->content['user'] = $this->user;

        return $this->content;
    }
}
