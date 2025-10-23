@echo off
echo Vehicle Rent Management - Laravel Commands for XAMPP
echo ===================================================
echo.

:menu
echo Select an option:
echo 1. Install Composer Dependencies
echo 2. Run Database Migrations
echo 3. Generate Application Key
echo 4. Clear Cache
echo 5. Start Development Server
echo 6. Run Tests
echo 7. Exit
echo.

set /p choice="Enter your choice (1-7): "

if "%choice%"=="1" goto install
if "%choice%"=="2" goto migrate
if "%choice%"=="3" goto keygen
if "%choice%"=="4" goto clear
if "%choice%"=="5" goto serve
if "%choice%"=="6" goto test
if "%choice%"=="7" goto exit
goto menu

:install
echo Installing Composer dependencies...
C:\xampp\php\php.exe composer install
pause
goto menu

:migrate
echo Running database migrations...
C:\xampp\php\php.exe artisan migrate
pause
goto menu

:keygen
echo Generating application key...
C:\xampp\php\php.exe artisan key:generate
pause
goto menu

:clear
echo Clearing cache...
C:\xampp\php\php.exe artisan cache:clear
C:\xampp\php\php.exe artisan config:clear
C:\xampp\php\php.exe artisan view:clear
echo Cache cleared!
pause
goto menu

:serve
echo Starting development server...
echo Access your application at: http://localhost:8000
C:\xampp\php\php.exe artisan serve
pause
goto menu

:test
echo Running tests...
C:\xampp\php\php.exe artisan test
pause
goto menu

:exit
echo Goodbye!
pause


