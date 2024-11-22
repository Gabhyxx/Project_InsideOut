
![insideOutBanner](https://github.com/user-attachments/assets/714017d9-84d4-42c1-b1a3-6dc69c4635ef)


## Description of the Project

This is a project for the ESMAL3 bootcamp, where we create a page, that displays a journal as a table, and used the information of a database. That database is feeded by an API, where it gives us an ID, an entry, an image of the emotion. Also, internally, it registers the exact date where the entry was created and the last time it was updates.

## Screenshots
![image](https://github.com/user-attachments/assets/4e86461e-b120-4bc2-b453-c70640d5b872)
![image](https://github.com/user-attachments/assets/087d3ab1-f112-467a-ad4d-0b49e2d4ec79)
![image](https://github.com/user-attachments/assets/b0cebbb2-0839-4532-aa48-5e2d06ff8cb4)


## Pre-Requirements

- A database manager (XAMMP, MAMP or similar)
- A web browser (Firefox, Opera, Chrome or similar)
- An API manager (Postman or similar)
- An IDE (VS Code or similar)
- GIT
- GIT Bash

## Installation

- 1 - Install the database manager
- 2 - Install the API manager
- 3 - Run the database manager and the IDE
- 4 - Install dependencies paste in bash this two commands:
   ```php
     $ composer install
     ```
   ```php
     $ npm install
     ```
- 6 - Open two GIT Bash
- 7 - type the following commands, one on each prompt
   ```php
     $ php artisan serve
     ```
   ```php
     $ npm run dev
     ```
- 8 - In the "php artisan serve" prompt, there's a link to the page. It looks similar to an IP address. Control + Click and it will open on the web browser
- 9 - Then, you create a database named "insideoutapp".
- 10 - Now, you need to open a new git bash prompt and type this command
    ```php 
    $ php artisan key:generate
    ```
- 11 - Change this section in .env file:
    DB_CONNECTION=mysql
    DB_DATABASE=insideOutApp
    
- 12 - Finally, there's one more command you need to type, and is
    ```php 
    $ php artisan migrate:fresh
    ```
- 13 - You can see our page!
## Endpoints
- An endpoint is the URL of the API you want to interact with.
- Follow the next steps.
- 1 - Install Postman and open it.
- 2 - Open a new request, the most used are: Get, Get by id, Post, Put and Delete.
- 3 - Copy the link you want to use, and paste on postman, next to the Request (get, post, etc).
-   GET: to retrieve data, POST: to send data (create), PUT: to update data, DELETE: to delete data.
- 4 - Examples and screenshots.

- This one is GET (all), you have to use http://127.0.0.1:8000/api/journals
![get all](https://github.com/user-attachments/assets/c6c872e4-ee35-4c24-bfa9-51b38f205172)
---
- This one is GET by id, you have to use http://127.0.0.1:8000/api/journals/{id}
![getById](https://github.com/user-attachments/assets/2295ec18-c3ce-4270-8640-2d4671439f9e)
---
- This one is POST, you have to use http://127.0.0.1:8000/api/journals and select "Body" and "raw" to be able to write.
![post](https://github.com/user-attachments/assets/6b2dd8bd-16ba-4694-9d7b-487dba1dcbff)
---
- This one is DELETE, you have to use http://127.0.0.1:8000/api/journals/{id}
![delete](https://github.com/user-attachments/assets/18ab7c37-9cce-46db-a2d2-789fee8ede44)
---
- This one is PUT, you have to use http://127.0.0.1:8000/api/journals/{id} and select "Body" and "raw" to be able to write.
![put](https://github.com/user-attachments/assets/61649703-b2b8-4341-80a1-df7cd69ffbed)
## Tests
For test
```php 
    $ php artisan test
```

Only if you have Xdebug installed
```php 
    $ php artisan test --coverage
```
![image](https://github.com/user-attachments/assets/3d50f637-74ee-4f1e-9f34-caabfdc617df)


## Diagrams

### Database Diagram
![Diagram](https://res.cloudinary.com/dmkvpncg9/image/upload/v1732191863/image_kyw84q.png)

## Technologies and tools

We have used different pages that have helped us in the creation of the project. I leave the links below:
- Stack Overflow: https://stackoverflow.com/ (Resolve doubts about languages)
- W3Schools: https://www.w3schools.com/ (General code)
- Neumorphism: https://neumorphism.io/#e0e0e0 (css shadow)
- Cloudinary: https://cloudinary.com (Upload images)

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='HTML5' src='https://img.shields.io/badge/HTML5-100000?style=for-the-badge&logo=HTML5&logoColor=white&labelColor=E34F26&color=E34F26'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='CSS3' src='https://img.shields.io/badge/CSS3-100000?style=for-the-badge&logo=CSS3&logoColor=white&labelColor=1572B6&color=1572B6'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='JavaScript' src='https://img.shields.io/badge/JavaScript-100000?style=for-the-badge&logo=JavaScript&logoColor=white&labelColor=F7DF1E&color=F7DF1E'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='php' src='https://img.shields.io/badge/PHP-100000?style=for-the-badge&logo=php&logoColor=white&labelColor=777BB4&color=777BB4'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='laravel' src='https://img.shields.io/badge/Laravel-100000?style=for-the-badge&logo=laravel&logoColor=white&labelColor=FF2D20&color=FF2D20'/></a>

<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='Git' src='https://img.shields.io/badge/Git-100000?style=for-the-badge&logo=Git&logoColor=white&labelColor=F05032&color=F05032'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='GitHub' src='https://img.shields.io/badge/GitHub-100000?style=for-the-badge&logo=GitHub&logoColor=white&labelColor=181717&color=181717'/></a>
<a href='https://github.com/shivamkapasia0' target="_blank"><img alt='composer' src='https://img.shields.io/badge/Composer-100000?style=for-the-badge&logo=composer&logoColor=white&labelColor=885630&color=885630'/></a>

## Authors

- [Alejando Campos](https://github.com/Camposx)
- [Miguel Ángel García López](https://github.com/Mangel111111111)
- [Matias Stadler](https://github.com/Matias-Stadler)
- [Fran Muñoz](https://github.com/Crudo7)
- [Jose Gabriel "Gabhyxx" Peña García](https://github.com/Gabhyxx)
