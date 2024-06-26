# offkeypage
Web Page for Off Key Records (never released)

## Requirements
- Download [PHP](https://www.php.net/downloads.php)
- Download [composer]()

## Get the project
- Download it as zip or do a git clone:
```
git clone https://github.com/tetrapaker238/offkeypage.git
```

## Install dependencies
- To install the dependencies of this project, run the following line on a terminal located at the root folder:
```
composer install
```

## Set the Env file
- Copy [Env example file](./.env.example) and paste it in the same directory and rename it as "**.env**"
- Set Username, Password, Host and Port inside .env file. Default Host and port is set to Outlook SMTP. Change it as you need following this [page](https://domar.com/pages/smtp_pop3_server). If you're using services from Outlook.com, use [this](https://support.microsoft.com/en-us/office/pop-imap-and-smtp-settings-for-outlook-com-d088b986-291d-42b8-9564-9c414e2aa040)

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

### Disclaimer
- Form validation **_isn't completed_**
- Some links won't work (they were deleted)
