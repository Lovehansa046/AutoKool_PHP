# AutoKool

This repository contains the source code for the Autokool web application, which is built using PHP and relies on a database to manage driving school operations.

## Features

- **User Management**: Allows instructors, students, and admins to register and manage their accounts.
- **Courses**: Provides information about available driving courses and schedules.
- **Booking**: Enables students to book driving lessons.
- **Admin Dashboard**: Offers administrators tools to manage users, courses, and bookings.

## Technologies Used

- **PHP**: Server-side scripting language used for the backend.
- **MySQL**: Database management system used to store application data.
- **HTML/CSS/JavaScript**: Frontend technologies for building the user interface.
- **Bootstrap**: Frontend framework for responsive design.

## Prerequisites

Before setting up the application, ensure you have the following installed:

- Web server (e.g., Apache, Nginx)
- PHP
- MySQL

## Installation

1. **Clone the Repository**:

   ```bash
   git clone https://github.com/yourusername/autokool.git
   ```

2. **Database Setup**:

   - Create a new MySQL database named `autokool`.
   - Import the database schema from `database/schema.sql` to set up the necessary tables:

     ```bash
     mysql -u username -p autokool < database/schema.sql
     ```

3. **Configuration**:

   - Copy `config/config.example.php` to `config/config.php`.
   - Update `config.php` with your database credentials:

     ```php
     <?php
     define('DB_HOST', 'localhost');
     define('DB_USER', 'your_database_username');
     define('DB_PASS', 'your_database_password');
     define('DB_NAME', 'autokool');
     ```

4. **Run the Application**:

   - Start your web server.
   - Access the application via your browser (e.g., `http://localhost/autokool`).

## Folder Structure

- `config/`: Contains configuration files.
- `database/`: Includes the database schema and seed data.
- `public/`: Holds publicly accessible files (e.g., CSS, JavaScript).
- `src/`: Contains PHP source code for the application.
- `templates/`: Includes HTML templates.

## Contributing

Contributions are welcome! If you want to contribute to this project, please follow these steps:

1. Fork the repository.
2. Create a new branch (`git checkout -b feature/your-feature`).
3. Make your changes.
4. Commit your changes (`git commit -am 'Add new feature'`).
5. Push to the branch (`git push origin feature/your-feature`).
6. Create a new Pull Request.

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Contact

For any inquiries or issues, please contact us at autokool@example.com.
