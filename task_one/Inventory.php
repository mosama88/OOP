<?php

// Interface for Storable objects
interface Storable
{
    public function getDetails();
}

// Product class
class Product implements Storable
{
    private string $name;
    private int $quantity;
    private float $price;

    public function __construct($name, $quantity, $price)
    {
        $this->name = $name;
        $this->quantity = $quantity;
        $this->price = $price;
    }

    public function getDetails()
    {
        return "Product: {$this->name}, Quantity: {$this->quantity}, Price: \${$this->price}";
    }

    public function updateQuantity($quantity)
    {
        $this->quantity += $quantity;
    }

    public function decreaseQuantity($quantity)
    {
        if ($this->quantity >= $quantity) {
            $this->quantity -= $quantity;
        } else {
            echo "Not enough stock for {$this->name}\n";
        }
    }
}

// Supplier class
class Supplier
{
    private string $name;
    private string $contact;

    public function __construct($name, $contact)
    {
        $this->name = $name;
        $this->contact = $contact;
    }

    public function supplyProduct(Product $product, $quantity)
    {
        $product->updateQuantity($quantity);
        echo "Supplier {$this->name} supplied {$quantity} units of {$product->getDetails()}\n";
    }
}

// Warehouse class
class Warehouse
{
    private array $products = [];

    public function addProduct(Product $product)
    {
        $this->products[] = $product;
    }

    public function listProducts()
    {
        echo "Products in warehouse:\n";
        foreach ($this->products as $product) {
            echo $product->getDetails() . "\n";
        }
    }

    public function searchProductByName($name)
    {
        foreach ($this->products as $product) {
            if (strpos(strtolower($product->getDetails()), strtolower($name)) !== false) {
                return $product;
            }
        }
        return null;
    }
}

// Order class
class Order
{
    private Product $product;
    private int $quantity;

    public function __construct(Product $product, $quantity)
    {
        $this->product = $product;
        $this->quantity = $quantity;
    }

    public function placeOrder()
    {
        echo "Placing order for {$this->quantity} units of {$this->product->getDetails()}\n";
        $this->product->decreaseQuantity($this->quantity);
    }

    public function checkStock()
    {
        if ($this->product->getDetails()) {
            echo "Stock check: Available quantity is " . $this->product->getDetails() . "\n";
        }
    }
}

// Example Usage

// Create warehouse and products
$warehouse = new Warehouse();
$product1 = new Product("Laptop", 50, 1000);
$product2 = new Product("Phone", 200, 500);

// Add products to warehouse
$warehouse->addProduct($product1);
$warehouse->addProduct($product2);

// Create a supplier and supply products
$supplier = new Supplier("ABC Supplies", "123-456-789");
$supplier->supplyProduct($product1, 20);

// Create an order and place it
$order = new Order($product1, 30);
$order->checkStock();
$order->placeOrder();

// Display products in the warehouse
$warehouse->listProducts();


echo "<pre>";
print_r($warehouse);
print_r($supplier);
print_r($order);
