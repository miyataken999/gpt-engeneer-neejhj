namespace Tests\Unit;

use Tests\TestCase;
use App\Models\Product;

class ProductUnitTest extends TestCase
{
    public function test_product_has_name_description_and_price()
    {
        $product = new Product();
        $product->name = 'Test Product';
        $product->description = 'This is a test product';
        $product->price = 10.99;
        $this->assertEquals('Test Product', $product->name);
        $this->assertEquals('This is a test product', $product->description);
        $this->assertEquals(10.99, $product->price);
    }
}