# SwiftSignbm

Swift Sign BM is a PHP-based business services website for Swift Sign Group of Companies. The site presents company information, service pages, contact flows, blog content, and an admin area for managing data.

## Project Structure

- `index.php` and the other top-level PHP files power the public website pages.
- `include/` contains shared layout pieces such as the header, navbar, footer, sliders, social links, and WhatsApp widget.
- `assets/` contains the CSS, JavaScript, fonts, and images used by the frontend.
- `admin/` contains the admin dashboard, login, configuration, and database dump for the back office.
- `PHPMailer/` is included for email handling.

## Requirements

- PHP 7.4 or later
- MySQL / MariaDB
- XAMPP, WAMP, MAMP, or a similar local PHP stack

## Local Setup

1. Copy the project into your web server directory.
2. Create a MySQL database named `swift_signbm`.
3. Import `admin/database.sql` into that database.
4. Update the database connection if your local MySQL username, password, or database name is different.
5. Open the site in your browser through your local server.

## Database Connection

The current admin connection file uses:

- Host: `localhost`
- User: `root`
- Password: empty
- Database: `swift_signbm`

You can review and change these values in `admin/config/db.php`.

## Admin Access

The admin SQL dump creates a default admin account:

- Email: `admin@swiftsignbm.com`
- Password: `admin123`

Change the default password after first login.

## Notes

- If you want to deploy this to GitHub, initialize this folder as a git repository, commit the files, and push to your remote repository.
- The folder also contains some duplicate backup copies of pages; keep only the versions you need before publishing if you want a cleaner repository.
