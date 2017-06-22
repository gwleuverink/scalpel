# Scalpel
[![Latest Stable Version](https://poser.pugx.org/leuverink/scalpel/v/stable?format=flat-square)](https://packagist.org/packages/leuverink/scalpel)
[![Latest Unstable Version](https://poser.pugx.org/leuverink/scalpel/v/unstable?format=flat-square)](https://packagist.org/packages/leuverink/scalpel)
[![StyleCI Build Status](https://styleci.io/repos/94558450/shield)](https://styleci.io/repos/94558450)
[![License](https://poser.pugx.org/leuverink/scalpel/license?format=flat-square)](https://packagist.org/packages/leuverink/scalpel)

Scalpel is a composer package that adds extra directives to the Blade templating engine.
*I do not recommend using this in production as I created this for personal use and I am not providing support of any kind. The package is provided as-is and you are free to do with it as you like, fork it, submit PR's e.t.c.*

If you'd like to see added features you can submit a PR.

## Extra directives

| Directive                           | Description   			                                                   |
| ----------------------------------- | -------------------------------------------------------------------------- |
| @mix(resource)                      | Prints either a script or link html tag based on the file extension        |
| @selectedif(expression)             | Print 'selected' if the expression is true                                 |
| @checkedif(expression)              | Print 'checked' if the expression is true                                  |



## Intallation
**1. Add Scalpel to you project.**
  ```
  composer require leuverink/scalpel
  ```
  

**2. Add the service provider to the providers array in config/app.php.**

  \* *Skip this step if you are on Laravel 5.5 or up.*
  ```
  Leuverink\Scalpel\ScalpelServiceProvider::class,
  ```


**3. Before you can use the additional Blade directives you have to clear all compiled views.**
  ```
  php artisan view:clear
  ```
