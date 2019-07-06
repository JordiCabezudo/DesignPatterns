<?php

namespace DesignPatterns\Shared\Domain\User;

use Exception;
use Ramsey\Uuid\Uuid;

class User
{
    private $id;

    /**
     * @param string|null $id
     *
     * @throws Exception
     */
    public function __construct($id = null)
    {
        $this->id = $id ? $id : (Uuid::uuid4())->toString();
    }

    /**
     * @return string
     */
    public function id()
    {
        return $this->id;
    }
}
