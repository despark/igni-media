# Installation

Add service provider to `config/app.php`
```
'providers' => [
 ...
 Despark\Cms\Media\Providers\MediaServiceProvider::class,
]
```
Add configurations

`php artisan vendor:publish --provider='Despark\Cms\Media\Providers\ElfinderServiceProvider' --tag=config`

Add requirements to your bower.json file

```
"dependencies": {
...
"jquery-colorbox": "^1.6.0",
"elfinder": "^2.1.22"
}
```

#Credits
https://github.com/barryvdh/laravel-elfinder
https://github.com/spatie/laravel-medialibrary (Don't forget to send them a postcard)