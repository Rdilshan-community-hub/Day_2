
---

# Simple PHP Form Submission Application

This application allows users to fill out a form, save the data to a database, and view the submitted data in a table.

---

## Database Setup

### Step 1: Create a Database
Run the following SQL command to create the database:

```sql
CREATE DATABASE form_data;
```

### Step 2: Create the `submissions` Table
Use the SQL commands below to create the `submissions` table in the `form_data` database:

```sql
USE form_data;

CREATE TABLE submissions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    message TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

---

## Application Details

1. **Form Submission**: Users fill out the form and submit their data.
2. **Database Integration**: Data is saved into the `submissions` table.
3. **View Submissions**: Submitted data can be viewed in a table format.

---

## Run Instructions

1. Import the database schema into your MySQL server.
2. Ensure the `submit.php` and `view.php` files have correct database connection credentials.
3. Open the application in your browser using a local server (e.g., XAMPP or WAMP).

---

This `README.md` file provides clear steps for setting up the database and table, making it easy for anyone to get started with your application.