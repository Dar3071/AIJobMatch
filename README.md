AIJobMatch
This project builds a LAMP-based job recommendation platform, using AI to match job seekers with opportunities based on 
skills and resumes. It’s a portfolio piece showcasing full-stack development, machine learning, and cloud skills. The 
current implementation sets up a Laravel backend with MySQL, with plans for a Python AI model and AWS deployment. Future 
enhancements include employer job postings, admin analytics, and real-time recommendations.

Developed by: Deon Rennie

Date: April 2025

Environment: Local macOS with VS Code, PHP 8.4.6, Laravel 12.8.1, MySQL

Detailed Overview: PROJECT.md

Environment Setup
Uses PHP 8.4.6, Laravel 12.8.1, and MySQL (installed via Homebrew on macOS).

Install Homebrew: /bin/bash -c "$(curl -fsSL https://raw.githubusercontent.com/Homebrew/install/HEAD/install.sh)".
Install MySQL: brew install mysql, start service, create aijobmatch database.
Install Apache: brew install httpd, verify at http://localhost:8080.
Install PHP: brew install php, includes mysqli, pdo_mysql.
Install Composer: brew install composer.
Install Laravel: composer create-project laravel/laravel . in ~/AIJobMatch.
Configure .env: Set APP_KEY, DB_DATABASE=aijobmatch, DB_USERNAME=root.
Run locally: php artisan serve (tests at http://localhost:8000).
Apache Configuration
Serves Laravel via Apache from ~/AIJobMatch/public.

Update /opt/homebrew/etc/httpd/httpd.conf:
Set DocumentRoot "/Users/trillology/AIJobMatch/public".
Set <Directory "/Users/trillology/AIJobMatch/public"> with AllowOverride All, Require all granted.
Enable PHP: LoadModule php_module, <FilesMatch \.php$>.
Set ServerName localhost.
Fix permissions: chmod -R 755 ~/AIJobMatch.
Restart Apache: brew services restart httpd.
Verify: http://localhost:8080 shows Laravel’s welcome page.
Current Progress
LAMP stack is live, Laravel’s running, and Apache is configured.

Set up Homebrew, MySQL (aijobmatch database), Apache, PHP.
Tested PHP with http://localhost:8080/test.php (phpinfo) and mysql_test.php (DB connection).
Installed Laravel, fixed subfolder issue, generated APP_KEY.
Configured Apache, resolved httpd error 1, fixed DocumentRoot, .htaccess permissions, set ServerName.
Next: Python 3.9 for AI, backend routes, AWS planning.
Challenges Faced
Hit some snags, crushed them all.

Homebrew’s php-mysql error: Used brew install php for mysqli, pdo_mysql.
Laravel subfolder mess: Moved files with mv laravel/* ..
MissingAppKeyException: Ran php artisan key:generate.
Apache httpd error 1: Fixed DocumentRoot, permissions, .htaccess issues.
ServerName warning: Set ServerName localhost in httpd.conf.








