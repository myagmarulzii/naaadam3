# Эрийн гурван наадам — Оролцогчдын цол, эрэмбэ (Laravel + MySQL)

Энэ төсөл нь гишүүн хэрэглэгч өөрийн профайл болон нийт оролцогчдын ранк харах **вэб сайт**, мөн мэдээлэл удирдах **админ систем**-ийн Laravel суурь бүтэц юм.

## Гол боломжууд

- Гишүүний нэвтрэх, профайл шинэчлэх
- Бөх, сур харваа, морины уралдааны төрөл тус бүрээр шүүх
- Оролцогчдын цол, эрэмбэ, медалийн мэдээлэл
- Админ самбар: спорт төрөл, оролцогчийн CRUD удирдлага
- Монгол уламжлалт өнгөний дизайн:
  - Хөх `#015197`
  - Улаан `#DA2032`
  - Алтан `#FFD900`

## UI бүтэц

- Header: Наадмын нэр, огнооны хэсэг
- Sport Tabs: 3 төрлөөр шүүх
- Stats Cards: Медалийн статистик
- Participant Cards: Оролцогчийн карт
- Detail Data: Спортын дэлгэрэнгүй хуудас

## Үндсэн хавтас

- `routes/web.php` — Вэб болон админ чиглүүлэлт
- `app/Http/Controllers` — Public/Auth/Admin контроллерууд
- `app/Models` — `User`, `Sport`, `Participant`
- `database/migrations` — MySQL schema
- `resources/views` — Blade template-ууд
- `public/css/naadam.css` — Дизайн стиль

## MySQL тохиргоо

`.env` файлд:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=naadam
DB_USERNAME=root
DB_PASSWORD=secret
```

Дараа нь:

```bash
php artisan migrate
```

## Тэмдэглэл

Энэ орчинд packagist хандалт хаалттай байсан тул бүрэн Laravel framework-ийг composer-оор татаж суулгах боломжгүй байлаа. Иймээс төслийн бүтцийг Laravel convention-оор гаргаж, хөгжүүлэлтийг шууд үргэлжлүүлэхэд бэлэн scaffold байдлаар оруулав.
