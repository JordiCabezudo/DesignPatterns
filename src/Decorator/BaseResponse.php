<?php

namespace DesignPatterns\Decorator;

class BaseResponse implements Response
{
    private $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

    /**
     * @return array
     */
    public function content()
    {
        return [
            'content' => $this->content
        ];
    }
}
