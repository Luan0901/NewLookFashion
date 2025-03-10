# New Look Fashion

## Overview
New Look Fashion is a PHP-based e-commerce platform specializing in fashion retail. Built with modern web technologies, it offers a comprehensive solution for managing an online fashion store with both customer-facing features and administrative capabilities.

![Homepage](https://github.com/user-attachments/assets/adae6c78-9985-4faf-8f2a-6c94858ebf39)
![image](https://github.com/user-attachments/assets/09f151e0-d645-4104-94a4-027339eb0f02)
![image](https://github.com/user-attachments/assets/30dede80-fc62-47cd-bd8a-45587c3e8af6)


## Key Features
- **Product Management**
  - Categorized product listings
    ![Categorized product listings](https://github.com/user-attachments/assets/25ce0b3e-fdbe-47fb-91d7-601bd70b72ab)

  - Product Detail
    ![Product Detail](https://github.com/user-attachments/assets/38e2d646-d4e8-4dbf-bae1-109a708c8d37)
    
- **User Features**
  - User authentication and accounts
    ![Login](https://github.com/user-attachments/assets/547170ea-1492-44de-b8da-d48ff49fbbf5)
    ![Register](https://github.com/user-attachments/assets/1b9133a2-24e9-48cd-935b-66aef732b2e6)
    
  - Shopping cart functionality
    ![Cart](https://github.com/user-attachments/assets/44d37373-5cf4-4ac7-b59f-f65b5ca7ccc0)
    
  - Order history
    ![Order History](https://github.com/user-attachments/assets/c4587cf2-3b64-42a5-b54b-0683dfa33018)

  - Secure checkout process
    ![Delivery](https://github.com/user-attachments/assets/8420ff40-02a2-4b7f-aa46-cbaf44cf1132)
    ![Payment](https://github.com/user-attachments/assets/f974b661-dbe8-441c-b211-9c3a0cf62171)

- **Admin Dashboard**
- 
  - Sales statistics and reporting
    ![image](https://github.com/user-attachments/assets/9083eebd-5ba8-48ce-a79b-d291377abfd2)
    
  - Product management
    ![image](https://github.com/user-attachments/assets/a1724bad-1934-4329-9b67-387d75ad0f7a)
    ![image](https://github.com/user-attachments/assets/501d698b-78a3-4cad-90c6-bfdfbbb61e81)
    ![image](https://github.com/user-attachments/assets/e706dfd1-d9b7-4f79-a70a-e327121611d9)
    
  - Order processing
    ![image](https://github.com/user-attachments/assets/614c7bc9-a0f9-4238-be28-dd94f9f55dd9)

  - User management
    ![image](https://github.com/user-attachments/assets/677dda58-4cc0-47f0-ba25-50febd27686f)
    
// chi tiet san pham
![image](https://github.com/user-attachments/assets/38e2d646-d4e8-4dbf-bae1-109a708c8d37)
// danh sach san pham
![image](https://github.com/user-attachments/assets/bf87a259-bc2d-4d95-abf7-a5ac3dc8059d)









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
