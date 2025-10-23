# Vehicle Rent Management System - XAMPP Setup Guide

## Prerequisites
- XAMPP installed and running
- PHP 8.2+ (included with XAMPP)
- MySQL (included with XAMPP)

## Setup Instructions

### 1. Start XAMPP Services
1. Open XAMPP Control Panel
2. Start **Apache** service
3. Start **MySQL** service

### 2. Database Setup
1. Open phpMyAdmin (http://localhost/phpmyadmin)
2. Create a new database named `vehiclerentmanagement`
3. Or run the database setup script:
   ```bash
   C:\xampp\php\php.exe setup_database.php
   ```

### 3. Install Dependencies
```bash
# Install PHP dependencies
C:\xampp\php\php.exe composer install

# Install Node.js dependencies (if needed)
npm install
```

### 4. Environment Configuration
The `.env` file has been created with XAMPP-compatible settings:
- Database: MySQL
- Host: 127.0.0.1
- Port: 3306
- Username: root
- Password: (empty)

### 5. Run Migrations
```bash
C:\xampp\php\php.exe artisan migrate
```

### 6. Generate Application Key (if needed)
```bash
C:\xampp\php\php.exe artisan key:generate
```

### 7. Access the Application
- URL: http://localhost/vehiclerentmanagement/public
- Or create a virtual host for cleaner URLs

## Virtual Host Setup (Optional)

### Create Virtual Host
1. Open `C:\xampp\apache\conf\extra\httpd-vhosts.conf`
2. Add the following configuration:

```apache
<VirtualHost *:80>
    DocumentRoot "C:/xampp/htdocs/vehiclerentmanagement/public"
    ServerName vehiclerent.local
    <Directory "C:/xampp/htdocs/vehiclerentmanagement/public">
        AllowOverride All
        Require all granted
    </Directory>
</VirtualHost>
```

3. Add to `C:\Windows\System32\drivers\etc\hosts`:
```
127.0.0.1 vehiclerent.local
```

4. Restart Apache
5. Access: http://vehiclerent.local

## Troubleshooting

### Common Issues:
1. **Database Connection Error**: Ensure MySQL service is running in XAMPP
2. **Permission Denied**: Check file permissions in storage/ and bootstrap/cache/
3. **404 Errors**: Ensure mod_rewrite is enabled in Apache
4. **Composer Not Found**: Use full path: `C:\xampp\php\php.exe composer install`

### File Permissions (if needed):
```bash
# Make storage and cache directories writable
chmod -R 775 storage/
chmod -R 775 bootstrap/cache/
```

## Project Structure
- **Public Directory**: `public/` (Document root for web server)
- **Application Code**: `app/`
- **Database Migrations**: `database/migrations/`
- **Views**: `resources/views/`
- **Configuration**: `config/`

## Features Included
- User Authentication (Laravel Breeze)
- Vehicle Management
- Customer Management
- Rental Management
- Dashboard
- Responsive Design (Tailwind CSS)

## Development Commands
```bash
# Start development server
C:\xampp\php\php.exe artisan serve

# Run migrations
C:\xampp\php\php.exe artisan migrate

# Clear cache
C:\xampp\php\php.exe artisan cache:clear
C:\xampp\php\php.exe artisan config:clear
C:\xampp\php\php.exe artisan view:clear

# Run tests
C:\xampp\php\php.exe artisan test
```


