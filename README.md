# Scalpel
Scalpel is a composer package that adds extra directives to the Blade templating engine.
*I do not recommend using this in production as I created this for personal use and I am not providing support of any kind. The package is provided as-is and you are free to do with it as you like, fork it, submit PR's e.t.c.*

If you'd like to see added features you can submit a PR.

## Extra directives

| Directive                           | Description   			                                                       |
| ----------------------------------- | -------------------------------------------------------------------------- |
| @selectedif(expression)             | Print 'selected' if the expression is true                                 |
| @checkedif(expression)              | Print 'checked' if the expression is true                                  |



## Intallation
Add this repository to your composer.json file

```
{
    "repositories": [
        {
            "type": "git",
            "url": "https://github.com/gwleuverink/scalpel/"
        }
    ],
    "require": {
        "leuverink/scalpel": "dev-stable"
    }
}
```

update your composer dependencies.
```
composer update
```

Add the service provider to the providers array in config/app.php.
```
Leuverink\Scalpel\ScalpelServiceProvider::class,
```

Before you can use the additional Blade directives you have to clear all compiled views.
```
php artisan view:clear
```
