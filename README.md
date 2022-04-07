# Laravel 9 Portafolio App

This is a Laravel app cloned from this [repo](https://github.com/thecodeholic/laravel9-tailwind-portfolio)

We are using:
[TailwindCSS](https://tailwindcss.com)
[AlpineJS](https://alpinejs.dev)
[TailGrids](https://tailgrids.com)
[Google Fonts](https://fonts.google.com/specimen/Roboto+Mono?query=Roboto+mono)

We used Laravel Sail to deploy the app.
Just run the following to create a docker container running your Laravel app:

```bash
curl -s "https://laravel.build/laravel9-portafilio" | bash
```

Once the process is done, we can access the project folder and start the app:

```bash
cd laravel9-portafilio

./vendor/bin/sail up
```

When you need to run commands to install packages or to use `php artisan` or `composer` commands, you have to access the container. To do that, just run:

```bash
./vendor/bin/sail shell
```
