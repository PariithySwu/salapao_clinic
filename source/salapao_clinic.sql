-- สร้างฐานข้อมูล
CREATE DATABASE salapao_appointment;
USE salapao_appointment;

-- ตาราง services
CREATE TABLE services (
    service_id INT AUTO_INCREMENT PRIMARY KEY,
    service_name varchar(200),
    service_price varchar(200) NOT NULL
);

-- ตาราง doctors
CREATE TABLE doctors (
    doctor_id INT AUTO_INCREMENT PRIMARY KEY,
    doctor_name VARCHAR(200) NOT NULL,
    user_id INT NOT NULL,
    doctor_specialty VARCHAR(255) NOT NULL,
    doctor_biography TEXT,
    doctor_photoURL VARCHAR(255)
);

-- ตาราง users
CREATE TABLE users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL
);

-- ตาราง appointments
CREATE TABLE appointments (
    appointment_id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    service_id INT NOT NULL,
    appointment_date DATE NOT NULL,
    appointment_time TIME NOT NULL,
    additional_info TEXT,
    first_name VARCHAR(100) NOT NULL,
    last_name VARCHAR(100) NOT NULL,
    contact_number VARCHAR(10) NOT NULL,
    email VARCHAR(100) NOT NULL,
    service ENUM('orthodontics', 'x-ray', 'retainer', 'denture', 'cleaning', 'pull a tooth', 'tooth impaction', 'removal', 'filling', 'fluoride application', 'others') NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(user_id),
    FOREIGN KEY (service_id) REFERENCES services(service_id)
);

-- เพิ่มข้อมูลตัวอย่างในตาราง services
INSERT INTO services (service_name) VALUES
('orthodontics'),
('x-ray'),
('retainer'),
('denture'),
('cleaning'),
('pull a tooth'),
('tooth impaction'),
('removal'),
('filling'),
('fluoride application'),
('others');

-- เพิ่มข้อมูลตัวอย่างในตาราง users
INSERT INTO users (username, password, email) VALUES
('user1', 'user1', 'user1@gmail.com'),
('waraporn', 'waraporn', 'waraporn@gmail.com');

-- เพิ่มข้อมูลตัวอย่างในตาราง doctors
INSERT INTO doctors (doctor_name, user_id, doctor_specialty, doctor_biography, doctor_photoURL) VALUES
('Dr. Panitta Jingjit', 1, 'Chief Dentist & Founder', 'Dr. Panitta has over 15 years of experience in dentistry. She specializes in general dentistry and orthodontics, ensuring every patient receives exceptional care and attention.', 'doctor.jpg'),
('Dr. Natnicha Sohmalee', 2, 'Dentist & Specialist in Cosmetic Dentistry', 'With a passion for transforming smiles, Dr. Natnicha focuses on cosmetic procedures, including teeth whitening, veneers, and smile design. Her artistic approach to dentistry ensures beautiful and natural results.', 'doctor.jpg');