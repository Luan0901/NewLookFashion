# New Look Fashion

## Overview
New Look Fashion is a PHP-based e-commerce platform specializing in fashion retail. Built with modern web technologies, it offers a comprehensive solution for managing an online fashion store with both customer-facing features and administrative capabilities.

## Key Features
- **Product Management**
  - Categorized product listings
  - Image management
  - Inventory tracking
  - Best seller showcases

- **User Features**
  - User authentication and accounts
  - Shopping cart functionality
  - Order history
  - Secure checkout process

- **Admin Dashboard**
  - Sales statistics and reporting 
  - Product management
  - Order processing
  - User management

- **Responsive Design**
  - Mobile-friendly interface
  - Optimized shopping experience
  - Multi-device compatibility

## Technology Stack
- **Frontend:**
  - HTML5
  - CSS3 (Custom stylesheets in `css/` directory)
  - JavaScript
  - Bootstrap

- **Backend:**
  - PHP
  - Carbon PHP framework

- **Database:**
  - MySQL 

## Installation

1. **Prerequisites:**
   - PHP 7.4 or higher
   - MySQL
   - Web server (Apache/Nginx)
   - Composer (for Carbon dependencies)

2. **Setup Steps:**
   ```bash
   # Clone the repository
   git clone https://github.com/Luan0901/NewLookFashion.git
   cd NewLookFashion

   # Install dependencies
   composer install
   ```

3. **Database Configuration:**
   - Create a new MySQL database
   - Import `web_newlook.sql`
   - Configure database connection in `config_momo.json`:
     ```json
     {
       "DB_HOST": "localhost",
       "DB_USER": "your_username",
       "DB_PASS": "your_password",
       "DB_NAME": "web_newlook"
     }
     ```

4. **Web Server:**
   - Configure your web server to point to the project directory
   - Ensure proper permissions on `images/` and other writable directories

## Project Structure
```
├── admincp/           # Admin control panel
├── carbon/            # PHP Carbon framework
├── css/              # Stylesheets
├── images/           # Product and asset images
├── mail/             # Email templates
├── pages/            # Frontend pages
└── tfpdf/            # PDF generation library
```

## Development
- Follow PHP PSR standards
- Use meaningful commit messages
- Test thoroughly before submitting pull requests

## License
This project is proprietary software. All rights reserved.

## Support
For technical support or inquiries:
- Email: contact@newlookfashion.com
- Admin Panel: `/admincp`
