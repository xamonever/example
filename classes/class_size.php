
class Big
{
    private Class1 $class1;
    private Class2 $class2;
    private Class3 $class3;

    public function func1(Class4 $class4): void
    {
        ... some logic

        $class5 = new Class5;
    }
}

class Small
{
    private int $param1;
    private string $param2;
    private array $param3;

    public function func1(int $param4): void
    {
        ... some logic
    }
}
