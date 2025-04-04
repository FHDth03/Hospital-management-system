# Hospital Management System

## Overview
A web-based application for managing patient records and appointments in a healthcare facility. The system allows for:
- Patient information management (create, read, update, delete)
- Appointment scheduling and tracking
- Doctor assignment
- Status tracking for appointments

## Features

### Patient Management
- Add new patients with personal details
- Update existing patient records
- Delete patients (with referential integrity checks)
- View all patients in a table format

### Appointment Management
- Schedule new appointments
- Update existing appointments
- Cancel appointments
- Track appointment status (Scheduled, Completed, Cancelled)
- Assign doctors to appointments

## Installation

### Prerequisites
- Web server (Apache, Nginx)
- PHP (version 7.0 or higher)
- MySQL database

### Setup Instructions
1. Clone or download the project files to your web server directory
2. Create a MySQL database for the project
3. Import the database schema by running:
   - `creat_patients_table.php`
   - `creat_appointments_table.php`
4. Configure database connection in `project1.php`

## Usage

### Managing Patients
1. Access the patient management interface (project2.php)
2. To add a new patient:
   - Fill in all required fields (name, age, phone number, gender)
   - Submit the form
3. To update a patient:
   - Click the edit button on an existing patient
   - Modify the information
   - Submit the form
4. To delete a patient:
   - Click the delete button (only allowed if no appointments exist)

### Managing Appointments
1. Access the appointment form (form.html)
2. To schedule a new appointment:
   - Select a patient ID
   - Choose a doctor
   - Set date and time
   - Select status (default: Scheduled)
   - Submit the form
3. To update an appointment:
   - The form auto-populates when accessed with appointment parameters
   - Make changes and submit
4. To cancel an appointment:
   - Change status to "Cancelled" or delete via project3.php

## Validation
- Client-side validation ensures all required fields are completed
- Server-side validation checks for data integrity
- Referential integrity prevents orphaned records

## Dependencies
- PHP for server-side processing
- MySQL for data storage
- HTML/CSS/JavaScript for frontend interface

## Screenshots
<img width="1437" alt="Screenshot 2025-04-04 at 4 57 15 PM" src="https://github.com/user-attachments/assets/a4804ef7-1835-4422-bca6-8f4ff5214ffc" />
<img width="1437" alt="Screenshot 2025-04-04 at 5 42 50 PM" src="https://github.com/user-attachments/assets/70c803c1-7073-410f-9d18-4463a4cf1a94" />
<img width="1437" alt="Screenshot 2025-04-04 at 5 42 59 PM" src="https://github.com/user-attachments/assets/196227f1-581b-4d17-a376-33c716eb374b" />
<img width="1437" alt="Screenshot 2025-04-04 at 5 43 05 PM" src="https://github.com/user-attachments/assets/8df98b9d-205b-476f-ab02-dc622df6aad4" />
