## Reservation app

[![forthebadge](https://forthebadge.com/images/badges/built-by-developers.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/compatibility-ie-6.svg)](https://forthebadge.com)
[![forthebadge](https://forthebadge.com/images/badges/built-with-love.svg)](https://forthebadge.com)

<br/>


**<p align="center">Application built with Laravel for administrating dental offices</p>**

[image logo here]

**<p>Reservation app was developed for school project. It handles full flow of patients, doctors and reception in dental office</p>**


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
lorem ipsum


## Database

[db schema png here]()

## Documentation
full documentation for this project in polish you can find [here](https://www.lipsum.com/)

## License

All rights reserved



