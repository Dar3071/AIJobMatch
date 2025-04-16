# AIJobMatch

## Project Overview
AIJobMatch is a LAMP-based job recommendation platform that uses AI to match job seekers with opportunities based on their skills and resumes. It includes features for employers to post jobs and admins to view analytics, with deployment planned on AWS. This project showcases my skills in full-stack development, machine learning, and cloud technologies for my GitHub portfolio.

## Planned Features
- Job seekers can register, create profiles with skills, experience, and resumes, receive AI-driven job recommendations, apply to jobs, and track applications.
- Employers can post and manage job listings and review applicant profiles.
- Admins can manage users, jobs, and applications, and view analytics like top skills and application trends.
- AI recommends jobs using a Python-based model (scikit-learn) analyzing user skills and resume content.
- Analytics dashboards display job posting trends for admins and applicant stats for employers using MySQL and JavaScript visualizations.
- Cloud deployment on AWS using EC2 for the LAMP stack, RDS for MySQL, S3 for resumes, and Lambda for the AI API.

## Tech Stack
- Backend: PHP (Laravel), Python (Flask for AI).
- Frontend: Tailwind CSS, JavaScript (planned).
- Database: MySQL.
- Cloud: AWS EC2, RDS, S3, Lambda (planned).
- Tools: Git, Composer, pip, Homebrew.

## Progress
- Completed Step 1: Defined requirements for job seekers, employers, admins, AI, and analytics. Planned architecture with Laravel for backend, MySQL for data, Python Flask for AI, and AWS for deployment. Created GitHub repo with initial README.
- Partial Step 2: Set up development environment with Homebrew, installed MySQL and created `aijobmatch` database, installed Apache (verified at `http://localhost:8080`), installed PHP with MySQL support (`mysqli`, `pdo_mysql`) and extensions (`curl`, `gd`, `zip`), configured Apache for PHP, and tested MySQL connectivity with `mysql_test.php`. Resolved `php-mysql` Homebrew error by using modern PHP formula.

## Setup Instructions
- Installed Homebrew for package management on macOS.
- Installed LAMP stack:
  - MySQL: `brew install mysql`, started service, secured installation, created `aijobmatch` database.
  - Apache: `brew install httpd`, started service, verified at `http://localhost:8080`.
  - PHP: `brew install php` (includes `mysqli` and `pdo_mysql` for MySQL support).
  - Additional PHP extensions: `curl`, `gd`, `zip` (bundled or via `shivammathur/extensions` tap).
- Configured Apache to process PHP files by updating `/opt/homebrew/etc/httpd/httpd.conf` with PHP module and `FilesMatch` directive, restarted Apache.
- Tested PHP with `http://localhost:8080/test.php` (shows `phpinfo()`) and MySQL connectivity with `http://localhost:8080/mysql_test.php`.
- Resolved `php-mysql` Homebrew error by using modern `php` formula with built-in MySQL extensions, verified with `php -m`.

## Next Steps
- Install Laravel to set up the PHP backend.
- Set up Python 3.9 for the AI recommendation engine.
- Initialize Git for version control and push updates to GitHub.

## Challenges & Solutions
- Encountered Homebrew error: `No available formula with the name "php-mysql"`.
- Resolved by installing `php` via `brew install php`, which includes `mysqli` and `pdo_mysql` by default, confirmed with `php -m | grep -E 'mysql|mysqli|pdo_mysql'`.