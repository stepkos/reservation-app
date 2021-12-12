## Reservation app



<br/>


**<p align="center">Application built with Laravel for administrating dental offices</p>**

![Application logo](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/login.png)
[![forthebadge](https://forthebadge.com/images/badges/built-by-developers.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/compatibility-ie-6.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](https://forthebadge.com)



## Table of Contents
* **[Authors](#Authors)**
* **[Installation](#Installation)**
* **[Description](#Description)**
* **[Functionalities](#Functionalities)**
* **[Database](#Database)**
* **[Documentation](#Documentation)**
* **[Licence](#Licence)**


## Authors

- Jakub Stępkowski [stepkos](https://github.com/stepkos) : Team Leader, Full-Stack Developer
- Jan Napieralski [R3VANEK](https://github.com/R3VANEK) : Back-End Developer, Database Engineer
- Mateusz Sztankiewicz [DΣUS](https://github.com/GodsCrisis) : Front-End Developer
- Kamil Paczkowski [Avngarde](https://github.com/Avngarde) : Front-End Developer


## Installation

### Before you start
 - Install [Composer](https://getcomposer.org/)
 - Install [Mysql](https://www.apachefriends.org/pl/index.html)


### Steps
- Clone repository to your computer
- Go to xampp phpmyadmin site and hit command ```create database reservationapp```
- Go to project directory and run in terminal ```composer install```
- Run command ```php artisan key:generate```
- Execute ```php artisan migrate:fresh --seed```
- In project locate ```env.example``` clone it, fill with your environment specs and save as ```.env```
- For local server to run app enter ```php artisan serve```


## Description

This app was built within 5 months as an term project for school. It is service handling 3 types of users and their actions :
- ```patient``` : Views all doctors in database, views his visits and can book new one
- ```doctor``` : Can view his visits and has special subsite where he can view all details about patient with whom he has right now visit
- ```reception``` : Views all visits in database, can modify users, cancel visits and change dates of incoming visits


## Functionalities

### Login Panel
![Login Panel](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/login.png)


**Features**
- Working login functionalities
- Fully secure CSRF token authentication
- Protection from SQL Injection attacks
- Redirecting user to appriopriate panel based on user role

<br/>
<br/>


### Registration Panel
![Registration Panel](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/registration.png)

**Features**
- Working registration functionalities
- Fully secure CSRF token authentication
- Protection from SQL Injection attacks
- Checking input formats
- Redirecting user to panel 
- New user's role is automatically set to ```patient``` reception stuff can later change that
- Hashing and salting user password in database

<br/>
<br/>

### Patient main panel
![Patient main panel](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/patient_main.png)

**Features**
- User can see here his/hers upcoming visits in dental office in form of compact cards with necessary data
- On the right there is compact calendar. On it there are marked visits
- Log out button

<br/>
<br/>

### Patient all doctor panel
![Patient all doctor panel](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/patient_doctors.png)

**Features**
- User can see information about all ```doctor``` users in database in form of compact cards
- Log out button

<br/>
<br/>

### Patient create visit panel
![Patient create visit panel](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/patient_visit.png)

**Features**
- User can book new visit with ```doctor```
- Select input with real ```doctor``` data
- Asynchronous viewing selected ```doctor``` work hours 
- Create short note about your health status in textarea input
- Validation of given visit date
    - Checking if entered date is in future
    - Checking if entered hour matches ```doctor``` work hours in correct day week
    - Checking if selected ```doctor``` doesn't have visit during entered date and hour

## Database

Thanks to Laravel features, database schema is stored in multiple php files in ```database/migrations``` folder
- Be sure your XAMPP is running mysql port and you have empty database called ```reservationapp```
- You can easily import it via command ```php artisan migrate:fresh``` 
- To fill database with random data please use ```php artisan db:seed```
<br/>

Below you can see graphical schema for tables

![Database schema](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/schema.png)

## Documentation
full documentation for this project in polish you can find [here](https://github.com/stepkos/ReservationApp/blob/main/doc/ReservationApp.pdf)

## License

All rights reserved



