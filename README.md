## ✅ Project Setup Instructions

1. Clone the repository

```sh
https://github.com/Mirza-Md-Golam-Nabi/software_app.git
```

2. Goto project folder

```sh
cd software_app
```

3. Install dependencies using Composer

```sh
composer install
```

3. Create the **.env** file

Copy the example environment file:

```sh
cp .env.example .env
```

> ⚠️ Make sure to keep the same **APP_KEY** across both **website-app** and **software-app**.

4. Create the database

Create a database named:

```sh
website_app
```

5. Run migrations and seeders

Run the following command to migrate and seed the database:

```sh
php artisan migrate --seed
```

6. Serve the application on port **8002**
   Make sure to run the application on port **8002**

```sh
php artisan serve --port=8002
```
