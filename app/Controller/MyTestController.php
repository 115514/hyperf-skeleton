<?php

declare(strict_types=1);

namespace App\Controller;

use App\Model\Student;
use App\Request\Index;
use App\Request\Method;
use Hyperf\DbConnection\Db;
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

    public function model()
    {
        $data = Db::table('class_table')->get();
        return $data;
    }

    public function model2()
    {
        $data = Student::query()->get();
        return $data;
    }
}
