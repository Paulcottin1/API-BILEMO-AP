# API-BILEMO

[![Codacy Badge](https://api.codacy.com/project/badge/Grade/251e4fb8d48d411c9b185f24c4fd50d1)](https://app.codacy.com/gh/Paulcottin1/API-BILEMO-AP?utm_source=github.com&utm_medium=referral&utm_content=Paulcottin1/API-BILEMO-AP&utm_campaign=Badge_Grade_Settings)

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
