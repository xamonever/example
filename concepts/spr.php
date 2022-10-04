
В класе SelectQuery мы видим методы, которые каботают с созданием sql запроса, а также методы,
которые работают с полученными данными. Очевидно, что класс имеет более одной ответственности.

// before
class SelectQuery
{
    public function __construct(QueryExecutor $executor) {...}

    public function select($column, $alias = null): self {...}
    public function from($table, $alias = null): self {...}
    public function join(string $type, $table, $conditions = null): self {...}
    public function where($column, $operator = null, $value = null): self {...}
    public function orderBy($column, $order = null): self {...}
    public function groupBy($column, $order = null): self {...}
    public function limit(?int $limit): self {...}
    public function offset(?int $offset): self {...}
    public function build(): string {...}

    public function rows(): array {...}
    public function row(): array {...}
    public function column(): array {...}
    public function scalar() {...}
    public function count() {...}
}

В класс ExecutableSelectQuery были вынесены методы отвечающие за обработку данных.
Таким образом SelectQuery отвечает только за построение sql запроса, а ExecutableSelectQuery только за
обработку результата.

// after
class SelectQuery
{
    public function select($column, $alias = null): self {...}
    public function from($table, $alias = null): self {...}
    public function join(string $type, $table, $conditions = null): self {...}
    public function where($column, $operator = null, $value = null): self {...}
    public function orderBy($column, $order = null): self {...}
    public function groupBy($column, $order = null): self {...}
    public function limit(?int $limit): self {...}
    public function offset(?int $offset): self {...}
    public function build(): string {...}
}

class ExecutableSelectQuery extends SelectQuery
{
    public function __construct(QueryExecutor $executor) {...}

    public function rows(): array {...}
    public function row(): array {...}
    public function column(): array {...}
    public function scalar() {...}
    public function count() {...}
}