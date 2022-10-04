// Example
class Wallet
{
    private float $money;

    public function getMoney(float $amount): float
    {
        // do smth

        return $amount;
    }

    public function hasMoney(float $amount): bool
    {
        return $this->money > $amount;
    }
}

class Customer
{
    private Wallet $wallet;
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }

    public function getWallet(): Wallet
    {
        return $this->wallet;
    }
}

class PaperBoy
{
    public function acceptPayment(Customer $customer)
    {
        /** @var int $amount*/
        $amount;

        $wallet = $customer->getWallet();
        if ($wallet->hasMoney($amount)) {
            $wallet->getMoney($amount);
        }

        // ...
    }
}


// Solution 1
// В PaperBoy уберем зависимость от Wallet в Customer.
// Таким образом, теперь не важно как Customer хранит деньки для PaperBoy.

class Customer
{
    // ...

    public function getMoney(float $amount): float
    {
        return $this->wallet->getMoney($amount);
    }
}

class PaperBoy
{
    public function acceptPayment(Customer $customer)
    {
        $amount = $customer->getMoney();
        // ...
    }
}

// Solution 2
// Уберем зависимость Customer из PaperBoy.
// Таким образом теперь не важен что за "покупатель".

class PaperBoy
{
    public function acceptPayment(Wallet $wallet)
    {
        $amount = $wallet->getMoney();
        // ...
    }
}
