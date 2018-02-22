# Symfony 4 skeleton with selenium testing

This is a skeleton for the Symfony 4 framework which can be tested by selenium und php-webdriver.

### Create a project from skeleton
```bash
composer create-project thetodd/symfony-selenium myappname
```

### Test the app
```bash
cd myappname
docker-compose up -d
docker-compose exec webapp /var/www/app/bin/phpunit -c /var/www/app/phpunit.xml.dist
```

The tests are under the `tests` directory. For functional testing with selenium use `App\Tests\Functional\FunctionalTestcase`
as base php class.

### Running the app
If you run docker-compose the app will automatically be available in your browser at `http://localhost/`.