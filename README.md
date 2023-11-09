# Charity Donation System

## Table of Contents
1. [Introduction](#introduction)
2. [System Requirements](#system-requirements)
3. [Installation](#installation)
4. [Configuration](#configuration)
5. [Usage](#usage)
    - [Admin Block](#admin-block)
    - [Volunteer Block](#volunteer-block)
    - [Donor Block](#donor-block)
6. [Contributing](#contributing)
7. [License](#license)

## 1. Introduction

The Charity Donation System is a web-based application built using PHP and MySQL, designed to facilitate charitable organizations in managing donations and volunteers. The system consists of three main user roles: Admin, Volunteer, and Donor. Admins have full control over the system, volunteers can add or accept tasks, and donors can log in and make donations.

## 2. System Requirements

To run the Charity Donation System, you will need the following components:

- [XAMPP](https://www.apachefriends.org/index.html) or a similar web server package.
- A modern web browser (e.g., Google Chrome, Mozilla Firefox).
- Internet connectivity (for remote access).

## 3. Installation

1. Download and install XAMPP from the official website.
2. Clone or download this repository to your local machine.
3. Place the repository files in the `htdocs` folder of your XAMPP installation directory.
4. Start the Apache and MySQL services from the XAMPP control panel.

## 4. Configuration

1. Create a MySQL database using phpMyAdmin or the command line.
2. Import the `database.sql` file into your newly created database to set up the required tables and initial data.
3. Update the database connection configuration in `config.php`:

```php
$host = "localhost"; // Your MySQL host
$user = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$database = "charity_donation"; // Your MySQL database name
```

## 5. Usage

Admin Block

As an Admin, you have full control over the system. You can:

- Log in using your admin credentials.
- Monitor and manage volunteers and donors.
- View and edit tasks and donations.
- Add new admins if necessary.
- Access the system's control panel to make system-wide configurations.
  
Volunteer Block

Volunteers can:

- Log in using their volunteer credentials.
- View available tasks.
- Accept tasks they are willing to complete.
- Add new tasks if required.
- Update their profiles.
  
Donor Block

Donors can:

- Log in using their donor credentials.
- View donation opportunities.
- Make donations to the listed opportunities.
- View their donation history.
- Update their profiles.

## 6. Contributing

We welcome contributions to the Charity Donation System. If you'd like to contribute, please follow these steps:

- Fork the repository.
- Create a new branch for your feature or bug fix.
- Make your changes and commit them.
- Submit a pull request with a clear description of your changes.
