<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
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

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

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


# ChadHotel

# Descripción - objetivo de la aplicación
El administrador será el encargado de administrar los usuarios, información de las habitaciones, disponibilidad, edición y ver el seguimiento de todas las reservas.
Es una aplicación de reserva de hoteles. El usuario podrá ver y reservar todas las habitaciones disponibles, además de ver, cancelar o modificar la reserva.

# Enlace al video funcionamiento en Heroku:
https://youtu.be/2SvO8eDsnfw

# Tecnología
- Para el backend usaré PHP en el framework Laravel v8
- Para el frontend usaré tailwind / css, y probablamente jquery
- También usaré Chartjs para mostrar un gráfico con la información de las reservas mensuales y ver quien tiene reservado cada dia una habitación
- Heroku para el despliegue

# Diagrama de la base de datos
![image](https://user-images.githubusercontent.com/91119635/175098912-8ac1aa4b-95f1-408d-ad4c-b060b59b5526.png)


# Configuración
Se podrá ver la landing page al ingresar a la aplicación  y se requerirá estar registrado para poder hacer la reserva.

# Instalación
Se recomienda ddev--local con docker para instalar la aplicación en local, para su instalación y configuración, seguir la documentación oficial en:
https://ddev.readthedocs.io/en/stable/

# Manual de uso
Usuario rol cliente de prueba: freida33@example.com
Contraseña: admin

# Login
![image](https://user-images.githubusercontent.com/91119635/175100185-3528a511-6689-4743-85d1-b2973f4f204d.png)

Se puede ver un gráfico con las reservas activas del mes y una tabla con las mismas y la información correspondiente
![image](https://user-images.githubusercontent.com/91119635/175100825-0fd3988d-7431-4eef-ab5d-8e1a7c7f0d93.png)

Además pinchando en el gráfico en un dia se puede ver quien ha reservado la habitación
![image](https://user-images.githubusercontent.com/91119635/175101305-580b220a-6838-4a43-8671-1556f8a9e20d.png)

En transactions está toda la información de las reservas tanto activas como antiguas.
![image](https://user-images.githubusercontent.com/91119635/175101427-ac0bceca-4aae-4f57-a9bc-e53716c3c9ba.png)

Donde además el administrador podrá reservar una habitación para cualquier usuario que quiera
![image](https://user-images.githubusercontent.com/91119635/175101545-a270e3b8-afea-4468-821c-ba8c4cd4a4f2.png)

![image](https://user-images.githubusercontent.com/91119635/175101602-8ab126e9-980a-495d-9f2f-1a6a069d074f.png)

![image](https://user-images.githubusercontent.com/91119635/175101667-15f70d22-e7c0-4675-a20b-fcdc6c8d6215.png)

![image](https://user-images.githubusercontent.com/91119635/175101706-9d9492c5-7c19-4bff-9978-792d309e9c30.png)

Los usuarios podrán ver y descargar su factura:

![image](https://user-images.githubusercontent.com/91119635/175101786-0150bfed-3c31-44b6-b543-f2abab0c57fd.png)



