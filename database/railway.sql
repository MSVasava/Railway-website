CREATE DATABASE IF NOT EXISTS railway_db CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE railway_db;

CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100) NOT NULL,
  email VARCHAR(150) NOT NULL UNIQUE,
  mobile VARCHAR(20),
  password VARCHAR(255) NOT NULL,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE trains (
  id INT AUTO_INCREMENT PRIMARY KEY,
  train_number VARCHAR(20) NOT NULL UNIQUE,
  train_name VARCHAR(150) NOT NULL,
  source VARCHAR(100) NOT NULL,
  destination VARCHAR(100) NOT NULL,
  departure TIME NOT NULL,
  arrival TIME NOT NULL,
  duration VARCHAR(30),
  class VARCHAR(20) DEFAULT 'SL',
  fare DECIMAL(10,2) DEFAULT 0,
  seats_available INT DEFAULT 0,
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE bookings (
  id INT AUTO_INCREMENT PRIMARY KEY,
  pnr VARCHAR(20) NOT NULL UNIQUE,
  user_id INT NULL,
  train_id INT NULL,
  passenger_name VARCHAR(100) NOT NULL,
  age INT,
  gender VARCHAR(20),
  mobile VARCHAR(20),
  email VARCHAR(150),
  journey_date DATE NOT NULL,
  seat_number VARCHAR(20),
  status ENUM('Confirmed','Waiting','Cancelled') DEFAULT 'Confirmed',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
  FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL,
  FOREIGN KEY (train_id) REFERENCES trains(id) ON DELETE SET NULL
);

INSERT INTO trains (train_number, train_name, source, destination, departure, arrival, duration, class, fare, seats_available) VALUES
('12915','Gujarat Express','Surat','Vadodara','06:15:00','08:45:00','02h 30m','SL',140,120),
('19017','Dadar Express','Surat','Mumbai','07:40:00','10:20:00','02h 40m','SL',140,90),
('20903','Vande Gujarat Express','Surat','Vadodara','09:30:00','12:05:00','02h 35m','CC',395,75),
('12909','Gujarat Mail','Surat','Ahmedabad','15:20:00','18:05:00','02h 45m','SL',140,110),
('19116','Saurashtra Express','Surat','Bharuch','18:10:00','20:55:00','02h 45m','SL',140,100);
