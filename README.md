# offkeypage
Web Page for Off Key Records (never released)

## Requirements
- Download [PHP](https://www.php.net/downloads.php)

## Set the Env file
- Copy [Env example file](./.env.example) and paste it in the same directory and rename it as "**.env**"
- Set Username, Password, Host and Port inside .env file. Default Host and port is set to Office 365. Change it as you need following this [page](https://domar.com/pages/smtp_pop3_server)

## Serve the page
- After cloning this repo, open a terminal at the root folder of this project (the folder where you executed git clone)
- Write the following command:
```
php -S localhost:8000
```
Change the port (in this case, 8000) if needed.

Visit http://localhost:8000

## Mailer
This page uses [PHP Mailer](https://github.com/PHPMailer/PHPMailer). After configuring .env and starting the server, try to send an email and verify that it works.
