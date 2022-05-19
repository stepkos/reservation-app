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
- In project locate ```env.example``` clone it, fill with your environment specs and save as ```.env```
- Run command ```php artisan key:generate```
- Execute ```php artisan migrate:fresh --seed```
- For local server to run app enter ```php artisan serve```


## Description

This app was built as an term project for school. It is service handling 3 types of users and their actions :
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
- On the right there is compact calendar. On it there are marked upcoming visits
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
- Log out button
- Validation of given visit date
    - Checking if entered date is in future
    - Checking if entered hour matches ```doctor``` work hours in correct day week
    - Checking if selected ```doctor``` doesn't have visit during entered date and hour

<br/>
<br/>

### Doctor main panel
![Doctor main panel](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/doctor_main.png)

**Features**
- User can see here his/hers upcoming visits in dental office in form of compact cards with necessary data
- On the right there is compact calendar. On it there are marked upcoming visits
- Log out button

<br/>
<br/>

### Doctor archive panel
![Doctor archive panel](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/doctor_archive.png)

**Features**
- User can see here his/hers archive visits with ```patient``` users in form of compact cards
- On the right there is compact calendar. On it there are marked upcoming visits
- Log out button

<br/>
<br/>

### Doctor visit panel
![Doctor visit panel](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/doctor_visit.png)

**Features**
- This panel is accesible only if ```doctor``` have right now visit with ```patient```
    - If not it displays information about next upcoming visit
- ```doctor``` user can see all information about current visit and history of previous ```patient``` visits in dental office
- ```doctor``` user can add his note to visit
- Asynchronous timer displaying time left till visit end
- Log out button

<br/>
<br/>

### Reception main panel
![Reception main panel](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/reception_main.png)


**Features**
- ```reception``` users see here upcoming visits
- Upcoming visits can be deleted or ```reception``` users can change date of visit
- Log out button

<br/>
<br/>

### Reception accounts panel

![Reception accounts panel](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/reception_accounts.png)

**Features**
- ```reception``` users see here all users in database
- ```reception``` users can change user roles

<br/>
<br/>

### Reception archive panel

![Reception archive panel](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/reception_archive.png)

**Features**
- ```reception``` users see here all visits (previous and upcoming) in database
- Asynchronous filtering visits by :
    - date
    - ```doctor``` name
    - ```patient``` name
    - visit type



## Database

Thanks to Laravel features, database schema is stored in multiple php files in ```database/migrations``` folder
- Be sure your XAMPP is running mysql port and you have empty database called ```reservationapp```
- You can easily import it via command ```php artisan migrate:fresh``` 
- To fill database with random data please use ```php artisan db:seed```
<br/>

Below you can see graphical schema for tables

![Database schema](https://github.com/stepkos/ReservationApp/blob/main/doc/readme/schema.png)

## Documentation
Full documentation for this project in polish you can find [here](https://github.com/stepkos/ReservationApp/blob/main/doc/ReservationApp.pdf) (Front-End is little out of date)

## License

All rights reserved



