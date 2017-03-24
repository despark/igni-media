# Installation

Add service provider to `config/app.php`
```
'providers' => [
 ...
 Despark\Cms\Media\Providers\MediaServiceProvider::class,
]
```
Add configurations

```bash
php artisan vendor:publish --provider='Despark\Cms\Media\Providers\ElfinderServiceProvider' --tag=config
```

Publish gulp and javascript

```bash
php artisan ven:publish --tag gulp --tag igni-media
```

Add requirements to your bower.json file

```
"dependencies": {
...
"jquery-colorbox": "^1.6.0",
"elfinder": "^2.1.22",
"bootstrap-vertical-tabs": "^1.2.2"
}
```

#Credits
https://github.com/barryvdh/laravel-elfinder
https://github.com/spatie/laravel-medialibrary (Don't forget to send them a postcard)