# To-Do-Planning

## Kurulum

Laravel install
```bash
composer install
```

Veritabanlarını oluşturma
```bash
php artisan migrate

php artisan db:seed --class=DevListTableSeeder

```

İş listelerini veritabanına kaydetme
```bash
php artisan todo:create-job-lists
```

## Yeni Provider Api Eklenmesi

app/Http/JobList klasörü altına 'BaseProviderAbstract' class'ından türetilerek yeni Provider dosyası oluşturulmalıdır. Ardından config/job_lists.php dosyasına oluşturulan dosyanın adı yazılmalıdır.
