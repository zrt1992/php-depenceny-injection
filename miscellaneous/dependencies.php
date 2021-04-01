<?php
class MainController {

    /**
     * @var UserRepository
     */
    private $repository;
    public $name="asd";


    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }
}
class UserRepository {

    /**
     * @var Database
     */
    private $database;

    public function __construct(Database $database)
    {
        $this->database = $database;
    }
}

class Database {

}
class ReflectionResolver
{
    /**
     * @param string $class
     * @return object
     * @throws \ReflectionException
     */
    public function resolve(string $class): object
    {
        $reflectionClass = new \ReflectionClass($class);
        var_dump($reflectionClass);

        if (($constructor = $reflectionClass->getConstructor()) === null) {
            return $reflectionClass->newInstance();
        }

        if (($params = $constructor->getParameters()) === []) {
            return $reflectionClass->newInstance();
        }

        $newInstanceParams = [];
        foreach ($params as $param) {
            $newInstanceParams[] = $param->getClass() === null ? $param->getDefaultValue() : $this->resolve(
                $param->getClass()->getName()
            );
        }

        return $reflectionClass->newInstanceArgs(
            $newInstanceParams
        );
    }
}

$resolver = new ReflectionResolver();
$controller = $resolver->resolve(MainController::class);

