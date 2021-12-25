# Managing a diagnostic center
- Admin User will create users with different roles
- Admin will create all the test (for example: CBC, Lipid Profile) with cost
- There will be an option to receive advance payment
- Users will be notified once the diagnosis report is ready
- To view the report online, patient must have to give full payment


#GIt 
- git clone https://github.com/SobuzDas/DiagnosticCenter.git
- cd DiagnosticCenter
- cp .env.example .env
- composer install
- php artisan migrate --seed
- php artisan serve
