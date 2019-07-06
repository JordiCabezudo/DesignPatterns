<?php

namespace DesignPatterns\Shared\Domain\Product;

use Exception;
use Ramsey\Uuid\Uuid;

class Piano implements Product
{

    /** @var string */
    private $id;

    /** @var string */
    private $type;

    /**
     * @param null|string $id
     *
     * @throws Exception
     */
    public function __construct($id = null)
    {
        $this->id = $id ? $id : (Uuid::uuid4())->toString();
        $this->type = 'Piano';
    }

    /**
     * @return string
     */
    public function id()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function type()
    {
        return $this->type;
    }

    public function productType()
    {
        return "I'm a {$this->type()}";
    }
}
