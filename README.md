# Laravel 9 Portfolio App

> **Initial Comment:**
> This is a simple Laravel Application that works as my first attempt of doing a Portfolio page for myself.

This Laravel app was clone from this [Github Repo](https://github.com/thecodeholic/laravel9-tailwind-portfolio)

This project is using the following tools:

- [TailwindCSS](https://tailwindcss.com)
- [AlpineJS](https://alpinejs.dev)
- [TailGrids](https://tailgrids.com)
- [Google Fonts](https://fonts.google.com/specimen/Roboto+Mono?query=Roboto+mono)

I used Laravel Sail to deploy the app. It was as easy as to run the following:

```bash
curl -s "https://laravel.build/laravel9-portfilio" | bash
```

This will create a docker container running the app. From here, you can access the project folder and start the app like this:

```bash
cd laravel9-portfilio

./vendor/bin/sail up
```

When you need to run commands to install packages or to use `php artisan` or `composer` commands, you have to access the container. To do that, just run:

```bash
./vendor/bin/sail shell
```
