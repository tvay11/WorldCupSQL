# WorldCupSQL

A structured database and web interface for exploring World Cup players and matches.

## Project Overview

WorldCupSQL is a personal portfolio project that demonstrates the integration of a relational database with a lightweight web frontend. The project provides a clean, browsable interface for querying and viewing data related to World Cup tournaments, including player information and match results. The core functionality is delivered through a PHP-based web application that connects to a structured SQL database, enabling users to explore historical World Cup data efficiently.

This project was designed to showcase practical skills in database design, server-side scripting, and frontend development using standard web technologies. It serves as a foundation for more advanced data-driven applications and highlights the ability to create functional, user-friendly interfaces for data exploration.

## Core Features

- **Player Database**: A comprehensive collection of World Cup player records, including names, nationalities, positions, and tournament participation.
- **Match Records**: Detailed information on World Cup matches, including dates, scores, and participating teams.
- **PHP Web Interface**: A dynamic website (`candy_info.php`) that serves as the primary user interface for querying and displaying database content.
- **SQL Query Support**: The backend supports structured queries to filter and retrieve specific data sets based on user input.
- **Responsive HTML Layout**: The frontend is built with clean HTML, ensuring compatibility across modern browsers and devices.
- **Data Integrity**: The database schema enforces relationships between players and matches, ensuring accurate and consistent data retrieval.

## Technology Stack

- **HTML**: Used for structuring the web interface and presenting data in a clear, accessible format. HTML provides a lightweight and universally supported foundation for the frontend.
- **PHP**: Powers the server-side logic, handling database connections, query execution, and dynamic content generation. PHP was chosen for its simplicity and seamless integration with SQL databases.
- **SQL (Structured Query Language)**: The underlying database management system stores and organizes World Cup data. SQL enables efficient querying and data manipulation, forming the backbone of the application.

## Architecture / Design Decisions

The project follows a simple three-tier architecture:

- **Presentation Layer**: The HTML frontend, including `candy_info.php`, handles user interaction and data display. This layer is kept minimal to focus on functionality.
- **Application Layer**: PHP scripts manage business logic, including database connections, query processing, and response generation. The separation of PHP logic from HTML markup improves maintainability.
- **Data Layer**: The SQL database stores all World Cup data in normalized tables, reducing redundancy and ensuring data consistency. Foreign key relationships link players to matches and tournaments.

Design decisions prioritized simplicity and clarity. The use of a single PHP file (`candy_info.php`) for the web interface streamlines development and deployment, while the database schema is designed to be easily extendable for additional data types or queries.

## Installation & Setup

To run WorldCupSQL locally, follow these steps:

1. **Prerequisites**:
   - A web server with PHP support (e.g., Apache, Nginx, or PHP's built-in server).
   - A SQL database system (e.g., MySQL, MariaDB, or SQLite).
   - Git for cloning the repository.

2. **Clone the Repository**:
   ```
   git clone https://github.com/tvay11/WorldCupSQL.git
   cd WorldCupSQL
   ```

3. **Set Up the Database**:
   - Import the provided SQL schema and data files into your database system. (If no schema file is included, create a database and tables based on the project's data structure.)
   - Update database connection credentials in `candy_info.php` to match your local environment.

4. **Run the Application**:
   - Start your web server and navigate to the project directory.
   - Access `candy_info.php` via your browser (e.g., `http://localhost/WorldCupSQL/candy_info.php`).

5. **Verify Functionality**:
   - Test the interface by querying player or match data. Ensure the database connection is active and data is displayed correctly.

## Future Scope / Key Learnings

This project provided hands-on experience with database design, PHP scripting, and web development fundamentals. Key learnings include the importance of normalized database schemas for data integrity and the efficiency of using server-side scripting for dynamic content generation.

Future enhancements could include:

- Adding a search or filter feature to allow users to query data by specific criteria (e.g., year, team, player name).
- Expanding the database to include additional World Cup tournaments or statistical data (e.g., goals, assists, cards).
- Implementing a more sophisticated frontend framework (e.g., Bootstrap) for improved styling and responsiveness.
- Integrating RESTful API endpoints to enable external applications to access the data.

WorldCupSQL serves as a solid foundation for more complex data-driven projects and demonstrates a clear understanding of full-stack development principles.