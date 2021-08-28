## View Routes

The view method accepts a URI as its first argument and a view name (blade template file) as its second argument. In addition, you may provide an
array of data to pass to the view as an optional third argument:
```
Route::view('/welcome', 'welcome');
Route::view('/welcome', 'welcome', ['name' => 'Taylor']);
```
