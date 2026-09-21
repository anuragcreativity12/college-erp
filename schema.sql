CREATE DATABASE college_erp;
USE college_erp;

CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin','student') NOT NULL
);

CREATE TABLE students (
    student_id INT AUTO_INCREMENT PRIMARY KEY,
    roll_no VARCHAR(20) UNIQUE NOT NULL,
    name VARCHAR(100) NOT NULL,
    department VARCHAR(50),
    email VARCHAR(100) UNIQUE,
    phone VARCHAR(15),
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
-- Attendance table
CREATE TABLE attendance (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    subject VARCHAR(50),
    date DATE,
    status ENUM('Present','Absent'),
    FOREIGN KEY (student_id) REFERENCES students(student_id)
);

-- Timetable table
CREATE TABLE timetable (
    id INT AUTO_INCREMENT PRIMARY KEY,
    day VARCHAR(20),
    subject VARCHAR(50),
    faculty VARCHAR(50),
    time_slot VARCHAR(20)
);

-- Assignments table
CREATE TABLE assignments (
    id INT AUTO_INCREMENT PRIMARY KEY,
    student_id INT,
    title VARCHAR(100),
    due_date DATE,
    file_path VARCHAR(255),
    FOREIGN KEY (student_id) REFERENCES students(student_id)
);
