<?php

declare(strict_types=1);

namespace App\Controller;

use App\Request\Index;
use App\Request\Method;
use Hyperf\HttpServer\Annotation\AutoController;

/**
 * @AutoController()
 */
class MyTestController
{

    public function index(Index $request)
    {
        $data = $request->validated();
        return $data['name'];
    }

    public function method(Method $request)
    {
        $data = $request->validated();
        return $data['312312'];
    }
}
