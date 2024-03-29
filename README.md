## Prototype Figma
<div class="1 -line" style="display: flex;flex-direction: row;align-items: center;align-items: start;">
    <img src="https://github.com/vinvintjg/MANGKAS-ecoomerce-website/blob/main/public/assets/HOME%20PAGE.png" style="height:300px">
    <img src="https://github.com/vinvintjg/MANGKAS-ecoomerce-website/blob/main/public/assets/PRODUCT-PAGE.png" style="height:300px">
    <img src="https://github.com/vinvintjg/MANGKAS-ecoomerce-website/blob/main/public/assets/SHOP-PAGE.png" style="height:300px">
    <img src="https://github.com/vinvintjg/MANGKAS-ecoomerce-website/blob/main/public/assets/SHOP-DETAIL-PAGE.png" style="height:300px">
    <img src="https://github.com/vinvintjg/MANGKAS-ecoomerce-website/blob/main/public/assets/BOOKING-DETAIL.png" style="height:300px">
    <img src="https://github.com/vinvintjg/MANGKAS-ecoomerce-website/blob/main/public/assets/FAQ-Page.png" style="height:300px">
    <img src="https://github.com/vinvintjg/MANGKAS-ecoomerce-website/blob/main/public/assets/Contact-Us-Page.png" style="height:150px;">
</div>
This is Link To Access the prototype use Figma.
<p>https://www.figma.com/proto/9UKhZXK0trDWWr4S49J0j0/Team-Project-Sofware-Engineer?type=design&node-id=438-8&scaling=min-zoom&page-id=0%3A1&starting-point-node-id=438%3A8</p>

## Guide Installation
There are some application and tools you must prepare for this website:
<p>GUIDE STEP BY STEP :  https://bit.ly/GUIDEINSTALL</p>

- Visual Studio Code
https://code.visualstudio.com/download

- XAMPP 8.2.4
https://www.apachefriends.org/download.html

- Composer
https://getcomposer.org/Composer-Setup.exe

Step-step Installation:
- Open CMD and select where location document you want to put this file
- Type this in your CMD
<pre>git clone https://github.com/vinvintjg/MANGKAS-ecoomerce-website.git</pre>
- Open The file use Visual Studio Code
- In Visual Studio Code there are several things that you need to install in terminal
<pre>
composer install
composer update
cp .env.example .env
</pre>
- Open file .env and change DB_DATABASE name
<pre>
DB_DATABASE=mangkas3
</pre>
- Start Apache and MySQL in your XAMPP Apps
- Open this link in your browser
<pre>
http://localhost/phpmyadmin/
</pre>
- Click NEW Button to create new database with name "mangkas3"
- And Run This All command in terminal Visual Studio Code
<pre>
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
</pre>
- Run this link to your browser
<pre>http://127.0.0.1:8000/</pre>
- If Your Image Error you can ERASE folder storage in Mangkas\public and run this command in terminal again
<pre>
php artisan storage:link
php artisan serve
</pre>

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
