# Install
```bash
git clone git@github.com:rdok/laravel-expects-jobs-never.git
vagrant up
vagrant ssh
cd Code/expects-jobs-never/
composer install
```

# Run
```bash
./vendor/bin/phpunit
```

# Workflow
```bash
vagrant ssh
php artisan make:test JobTest --unit
php artisan make:job SampleJob
./vendor/bin/phpunit
```

