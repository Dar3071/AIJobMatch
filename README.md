## AIJobMatch
## Project Overview
AIJobMatch is a LAMP-based job recommendation platform that uses AI to match job seekers with opportunities based on their skills and resumes. It includes features for employers to post jobs and admins to view analytics, with deployment planned on AWS. This project showcases my skills in full-stack development, machine learning, and cloud technologies for my GitHub portfolio.

## Planned Features
- Job seekers can register, create profiles with skills, experience, and resumes, receive AI-driven job - recommendations, apply to jobs, and track applications.
- Employers can post and manage job listings and review applicant profiles.
- Admins can manage users, jobs, and applications, and view analytics like top skills and application trends.
- AI recommends jobs using a Python-based model (scikit-learn) analyzing user skills and resume content.
- Analytics dashboards display job posting trends for admins and applicant stats for employers using MySQL and    JavaScript visualizations.
- Cloud deployment on AWS using EC2 for the LAMP stack, RDS for MySQL, S3 for resumes, and Lambda for the AI API.
## Tech Stack
- Backend: PHP (Laravel), Python (Flask for AI).
- Frontend: Tailwind CSS, JavaScript (planned).
- Database: MySQL.
- Cloud: AWS EC2, RDS, S3, Lambda (planned).
- Tools: Git, Composer, pip, Homebrew, pyenv.
## Progress
- Completed Step 1: Defined requirements for job seekers, employers, admins, AI, and analytics. Planned architecture with Laravel for backend, MySQL for data, Python Flask for AI, and AWS for deployment. Created GitHub repo with initial README.

- Completed Step 2: Set up development environment with Homebrew. Installed MySQL and created aijobmatch database. Installed Apache, verified at http://localhost:8080. Installed PHP with MySQL support (mysqli, pdo_mysql) and extensions (curl, gd, zip). Configured Apache to process PHP, tested with http://localhost:8080/test.php and MySQL connectivity via mysql_test.php. Resolved php-mysql Homebrew error. Fixed Laravel subfolder issue by moving files. Resolved MissingAppKeyException by generating key. Configured Apache with DocumentRoot and <Directory> for Laravel’s public/ folder. Fixed httpd error 1 caused by incorrect DocumentRoot and .htaccess permissions. Suppressed ServerName warning. Resolved Git non-fast-forward error by force-pushing local changes. Installed Python 3.9 with pyenv, set up virtual environment, installed Flask, scikit-learn, and numpy for AI recommendations.

- Completed Step 3: Designed MySQL schema with tables for users, profiles, skills, profile_skills, jobs, job_skills, applications, and analytics. Fixed missing users migration, resolved duplicate jobs migration, and fixed analytics table conflict by dropping existing table. Added missing applications table migration and verified Laravel’s default cache and cache_locks tables. Created Laravel migrations and seeders, applied to aijobmatch database, tested connectivity with sample data.
## Setup Instructions
- Installed Homebrew for package management on macOS.
- Installed LAMP stack:
- MySQL: brew install mysql, started service, secured installation, created aijobmatch database.
- Apache: brew install httpd, started service, verified at http://localhost:8080.
- PHP: brew install php, includes mysqli, pdo_mysql for MySQL support.
- Additional PHP extensions: curl, gd, zip via Homebrew.
- Installed Composer: brew install composer.
## Configured Apache for PHP:
Updated /opt/homebrew/etc/httpd/httpd.conf with PHP module and FilesMatch directive.
Set DocumentRoot to /Users/trillology/AIJobMatch/public.
Set <Directory "/Users/trillology/AIJobMatch/public"> with AllowOverride All, Require all granted.
Set ServerName localhost.
Tested PHP: Created test.php for phpinfo() and mysql_test.php for database connectivity.
Installed Laravel: composer create-project laravel/laravel . in ~/AIJobMatch.
Fixed Laravel issues: Moved files from subfolder, ran php artisan key:generate for APP_KEY.
Set permissions: chmod -R 755 ~/AIJobMatch.
Restarted Apache: brew services restart httpd.
Verified Laravel: http://localhost:8080 shows welcome page.
Managed Git: Fixed push errors with git push --force to sync repo (github.com:Dar3071/AIJobMatch.git).
## Installed Python 3.9:
Used brew install pyenv and pyenv install 3.9.20.
Set local version: pyenv local 3.9.20 in ~/AIJobMatch.
Created virtual environment: python -m venv venv.
Installed packages: pip install flask scikit-learn numpy.

## Designed MySQL schema:
Fixed missing users migration with php artisan make:migration create_users_table.
Resolved duplicate jobs migration by dropping table and removing default migration.
Fixed analytics table conflict by dropping existing table and using migrate:fresh.
Added applications table migration to complete schema.
Created migrations for profiles, skills, profile_skills, jobs, job_skills, applications, analytics.
Ran php artisan migrate:fresh to apply schema, including Laravel’s cache and cache_locks.
Added seeder for sample users and skills, ran php artisan migrate:fresh --seed.
Tested at http://localhost:8080/test-db.

## Challenges Faced
- Homebrew error: “No php-mysql formula”. Resolved by installing php with mysqli, pdo_mysql.
- Laravel subfolder issue: Moved files to root with mv laravel/* ..
- MissingAppKeyException: Generated key with php artisan key:generate.
- Apache httpd error 1: Corrected DocumentRoot and .htaccess permissions.
- ServerName warning: Set ServerName localhost in httpd.conf.
- Git push error: Fixed non-fast-forward with git push --force.
- Python setup: Configured pyenv to ensure Python 3.9 compatibility.
- Missing users migration: Created new migration to restore users table schema.
- Duplicate jobs migration: Removed default migration and dropped conflicting table.
  analytics table conflict: Dropped existing table and used migrate:fresh.
- Missing applications table: Added migration and reset schema to ensure all tables created.