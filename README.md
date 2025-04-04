# Healthcare Management System

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
