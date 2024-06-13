namespace Tests\Feature;

use Tests\TestCase;
use App\Models\Product;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ProductTest extends TestCase
{
    use RefreshDatabase;

    public function test_index_displays_all_products()
    {
        $products = factory(Product::class, 10)->create();
        $response = $this->get('/products');
        $response->assertStatus(200);
        $response->assertViewIs('products.index');
        $response->assertViewHas('products');
    }

    public function test_store_creates_new_product()
    {
        $response = $this->post('/products', [
            'name' => 'Test Product',
            'description' => 'This is a test product',
            'price' => 10.99,
        ]);
        $response->assertRedirect('/products');
        $this->assertCount(1, Product::all());
    }
}