<?php

namespace DesignPatterns\Adapter\Test;

use DesignPatterns\Decorator\BaseResponse;
use DesignPatterns\Decorator\ProductDecorator;
use DesignPatterns\Decorator\Response;
use DesignPatterns\Decorator\UserDecorator;
use DesignPatterns\Shared\Domain\Product\Guitar;
use DesignPatterns\Shared\Domain\Product\Product;
use DesignPatterns\Shared\Domain\User\User;
use Exception;
use PHPUnit_Framework_TestCase;

class DecoratorTest extends PHPUnit_Framework_TestCase
{
    const BASE_RESPONSE_TEST = 'BaseResponse Test';

    /**
     * @test
     *
     * @throws Exception
     */
    public function it_should_decorate_base_response()
    {

        $expectedValue = ['content' => self::BASE_RESPONSE_TEST,];
        $baseResponse = new BaseResponse(self::BASE_RESPONSE_TEST);

        $this->assertInstanceOf(Response::class, $baseResponse);
        $this->assertInternalType('array', $baseResponse->content());
        $this->assertEquals($expectedValue, $baseResponse->content());
    }

    /**
     * @test
     *
     * @throws Exception
     */
    public function it_should_decorate_base_response_with_product()
    {
        $productResponse = new ProductDecorator(new BaseResponse(self::BASE_RESPONSE_TEST));

        $this->assertInstanceOf(Response::class, $productResponse);
        $this->assertInternalType('array', $productResponse->content());
        $this->assertInstanceOf(Product::class, $productResponse->content()['product']);
        $this->assertInstanceOf(Guitar::class, $productResponse->content()['product']);
        $this->assertEquals(self::BASE_RESPONSE_TEST, $productResponse->content()['content']);
    }

    /**
     * @test
     *
     * @throws Exception
     */
    public function it_should_decorate_base_response_with_user()
    {
        $productResponse = new UserDecorator(new BaseResponse(self::BASE_RESPONSE_TEST));

        $this->assertInstanceOf(Response::class, $productResponse);
        $this->assertInternalType('array', $productResponse->content());
        $this->assertInstanceOf(User::class, $productResponse->content()['user']);
        $this->assertEquals(self::BASE_RESPONSE_TEST, $productResponse->content()['content']);
    }

    /**
     * @test
     *
     * @throws Exception
     */
    public function it_should_decorate_base_response_with_product_and_user()
    {
        $productResponse = new UserDecorator(new ProductDecorator(new BaseResponse(self::BASE_RESPONSE_TEST)));

        $this->assertInstanceOf(Response::class, $productResponse);
        $this->assertInternalType('array', $productResponse->content());
        $this->assertInstanceOf(Product::class, $productResponse->content()['product']);
        $this->assertInstanceOf(Guitar::class, $productResponse->content()['product']);
        $this->assertInstanceOf(User::class, $productResponse->content()['user']);
        $this->assertEquals(self::BASE_RESPONSE_TEST, $productResponse->content()['content']);
    }
}
