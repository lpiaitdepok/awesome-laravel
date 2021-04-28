## Redirect Routes
If you are defining a route that redirects to another URI, you may use the Route::redirect method. This method
provides a convenient shortcut so that you do not have to define a full route or controller for performing a
simple redirect:

```
use Illuminate\Support\Facades\Route;

Route::redirect('/here', '/there')
```
