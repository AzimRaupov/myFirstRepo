1. Model + Migration
php artisan make:model Product -m
2. Migration
Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('category');
            $table->decimal('price');
            $table->date('expiration_date');
            $table->timestamps();
        });
3. php artisan migrate
4. php artisan make:controller ProductController
//Добавить метод index для отображения продуктов
public function index(){
       $products =  Product::all();
       dd($products);
    }
5. Route
Route::get('/products',[ProductsController::class, 'index']);
6. php artisan serve
7. http://127.0.0.1:8000/products
8. controller
public function index(){
       $products =  Product::all();
       //dd($products);
       return view('products', compact('products'));
    }

9.view

@foreach($products as $product)
    {{ $product->name}}
    {{ $product->category}}
    <br>
@endforeach
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>