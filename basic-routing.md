# Basic Routing
use Illuminate\Support\Facades\Route;

## The router allows you to register routes that respond to get
* type in php code
```
Route::get('/', function () {
return 'Hello World';
});
```

```
Route::get('/greeting', function () {
return 'Hello World';
});
```

## The router allows you to register routes that respond to post
```
Route::post('foo/bar', function () {
   return 'Hello World';
});
```
