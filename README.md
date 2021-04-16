# API-BILEMO
[![Codacy Badge](https://app.codacy.com/project/badge/Grade/3f2cca3fd6bc4d1c9c9c7b02ab256b4c)](https://www.codacy.com/gh/Paulcottin1/API-BILEMO-AP/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=Paulcottin1/API-BILEMO-AP&amp;utm_campaign=Badge_Grade)
## Prerequisites (Development environement)
    - Linux
    - Php 7.3
    - MySQL 5.7
    - Apache2
## Installation

Clone the repository Github

```
git clone https://github.com/Paulcottin1/API-BILEMO-AP.git
```

Create file `.env.local` at the root of the project by making a copy of the file `.env` in order to configure the environment variables.

Install dependencies

```
composer install
```

Create the database

```
php bin/console doctrine:database:create
```

Create the different tables with the migration

```
php bin/console doctrine:migrations:migrate
```

Install fixtures

```
php bin/console doctrine:fixtures:load
```

Generate the SSL Keys:
```
php bin/console lexik:jwt:generate-keypair
```

Run the project

```
symfony server:start
```

URL documentation
```
http://127.0.0.1:8000/docs
```

Use admin account to try request after login

> login: admin@gmail.com
>
> password: admin
