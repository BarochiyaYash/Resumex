# Resumex - Resume Generating Website

## Introduction

The purpose of this project is to develop a simple resume generating website using PHP and a MySQL database. The website will allow users to create an ID and login to the system. Once logged in, users will be able to fill out a form with their personal information, languages they speak, programming knowledge, and desired resume template. After submitting the form, users will be able to generate a JPG file of their resume using the GD library in PHP.

## Objectives

The specific objectives of this project are to:
- Create a user-friendly interface for creating resumes.
- Generate resumes in JPG format using PHP and the GD library.
- Store user data in a MySQL database.

## Scope

This project will focus on developing the core functionality of the resume generator website. Additional features, such as resume preview and editing, may be added in future iterations.

## Assumptions

- Users have access to a web browser and an Internet connection.
- Users have a basic understanding of HTML, PHP, and MySQL.

## Software Requirements

- XAMPP server
- PHP language pack
- MySQL database

## Hardware Requirements

- Web hosting with PHP and MySQL support
- Sufficient disk space to store the website files and database

## Project Plan

The project will be completed in the following phases:

1. **Design**: Create wireframes and mockups of the website interface.
2. **Development**: Implement the website using PHP and MySQL.
3. **Testing**: Test the website for functionality and usability.
4. **Deployment**: Deploy the website to a web hosting server.

## Installation Instructions

To set up this project locally, follow these steps:

1. **Install XAMPP**:
    - Download and install XAMPP from [Apache Friends](https://www.apachefriends.org/index.html).
    - Start Apache and MySQL from the XAMPP control panel.

2. **Clone the Repository**:
    - Navigate to the `htdocs` directory of your XAMPP installation. This is typically located at `C:\xampp\htdocs` on Windows or `/Applications/XAMPP/htdocs` on macOS.
    - Open a terminal or command prompt and run the following command to clone the repository:
      ```bash
      git clone https://github.com/BarochiyaYash/Resumex.git
      ```
    - This will create a folder named `Resumex` in your `htdocs` directory.

3. **Set Up the Database**:
    - Open your web browser and go to `http://localhost/phpmyadmin`.
    - Create a new database named `resumex`.
    - Import the database schema by clicking on the `Import` tab and selecting the SQL file located in the `Resumex/database` directory.

4. **Configure the Project**:
    - Open the `Resumex` directory in your text editor or IDE.
    - Locate the `config.php` file and update the database connection settings as needed.

5. **Run the Project**:
    - Open your web browser and go to `http://localhost/Resumex`.
    - You should now be able to create an account, log in, and generate your resume.

## Contributing

If you would like to contribute to this project, please fork the repository and submit a pull request. We welcome all contributions that will help improve the project.


