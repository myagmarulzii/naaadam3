# Эрийн гурван наадам — Laravel + MySQL Web System

Энэ төсөл нь **жинхэнэ Laravel project structure** дээр хийгдсэн:
- Гишүүн хэрэглэгч нэвтэрч профайлаа харах/шинэчлэх
- Нийт оролцогчдын цол, эрэмбэ, медалийн жагсаалт харах
- Админ системээс спорт төрөл болон оролцогчдыг CRUD аргаар удирдах

## Шаардлага
- PHP 8.2+
- Composer
- MySQL 8+

## Суулгах
```bash
cp .env.example .env
composer install
php artisan key:generate
php artisan migrate
php artisan serve
```

## Гол модулиуд
- Public leaderboard: `/`, `/sport/{slug}`
- Auth: `/login`, `/logout`, `/logged-out`
- Member profile: `/profile`
- Admin dashboard: `/admin`
- Admin CRUD:
  - `/admin/sports`
  - `/admin/participants`

## Дизайн
Монголын уламжлалт өнгө ашигласан:
- Хөх: `#015197`
- Улаан: `#DA2032`
- Алтан: `#FFD900`

## Кодын бүтэц
- `app/Models` — `User`, `Sport`, `Participant`
- `app/Http/Controllers` — Public/Auth/Admin контроллерууд
- `app/Http/Middleware/EnsureUserIsAdmin.php` — админ хамгаалалт
- `database/migrations` — users/sports/participants schema
- `resources/views` — Blade UI (public + admin)
- `public/css/naadam.css` — custom style
