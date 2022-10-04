
class ObjectA
{
    public string $name;
    private int $id;

    public function greet(): string
    {
        return 'Hello ' . $this->name;
    }
}

$struct = [
    'id' => 1,
    'name' => 'Evan',
    'surname' => 'Snow',
    'car' => 'Audi X22',
];

