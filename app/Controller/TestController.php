<?php

declare(strict_types=1);

namespace App\Controller;

use App\Request\Index;
use Hyperf\HttpServer\Annotation\Controller;
use Hyperf\HttpServer\Annotation\GetMapping;

/**
 * @Controller
 */
class TestController
{
    /**
     * @GetMapping
     */
    public function index(Index $request)
    {
        $data = $request->validated();
        return $data;
    }
}
