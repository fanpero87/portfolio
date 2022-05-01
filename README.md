# Laravel 9 Portfolio App

> **Initial Comment:**
>
> This is a simple Laravel Application that works as my first attempt of doing a Portfolio page for myself.

## Getting Ready

1. This Laravel app was clone from this [Github Repo](https://github.com/thecodeholic/laravel9-tailwind-portfolio)

2. This project is using the following tools:

- [TailwindCSS](https://tailwindcss.com)
- [AlpineJS](https://alpinejs.dev)
- [TailGrids](https://tailgrids.com)
- [Google Fonts](https://fonts.google.com/specimen/Roboto+Mono?query=Roboto+mono)

## Running the App

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

## Setting up the App

You can now clone this repo like this:

```bash
git clone https://github-url-of-project
```

Create an `.env` file by running:

```bash
sudo cp .env.example .env
```

Edit your new `.env` file and make sure it contains the following lines:

```env
APP_NAME="AppName"
APP_ENV=production
APP_DEBUG=false
APP_URL=<http://Server-IP/>
```

Install all dependencies by running:

```bash
composer install
```

Finally, generate the `APP_KEY` by running:

```bash
php artisan key:generate --ansi
```

## Hosting the App on the Web

This app is hosted on [Heroku](https://heroku.com). You can follow this [link](https://postsrc.com/posts/how-to-deploy-your-laravel-website-to-heroku-for-free) to know how to do it.

Here is the URL for the site: `https://fabio-porfolio.herokuapp.com/`

Basically, you need to create a file named `Procfile` on the root of the folder and add the following line:

```file
web: vendor/bin/heroku-php-nginx public/
```

You might have a `Mixed Content` issue with your UPP using HTTP pages and requesting HHTPS instead.
To solve this, just add this to the `web.php` file:

```file
if (App::environment('production')) {
    URL::forceScheme('https');
}
```

Now, if you deploy the app again, you should be ok.
