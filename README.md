## M150 - E-Business-Applikationen anpassen
### Christopher O'Connor

## Ausgangssituation
Bei der Applikation handelt es sich um einen einfachen Webshop. Dieser soll nach Wunsch erweitert werden, sodass künftig bei einem neuen Kauf die Kunden eine E-Mail mit der Kaufbestätigung erhalten.

## Docs
- [**Dokumentation.pdf**](M150_OConnor_Dokumentation_2022_04_27.pdf)

## Installation

### Installations voraussetzungen

- php v7.4 (XAMPP v3.2+)
- Composer v2+
- git
- Mailtrap.io Konto (Key & Secret) für das Versenden von E-Mails oder ähnliches

### Konsole öffnen und folgende Befehle ausführen:

- `cd C:\xampp\htdocs`
- `git clone https://github.com/chrisoco/m150.git`
- `cd m150/app`
- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- Leere Db erstellen und .env ergänzen
  - DB_DATABASE=
  - MAIL_USERNAME=
  - MAIL_PASSWORD=
- `php artisan migrate:fresh --seed`

### Default Information
- Default Login = admin@appli.ch
- Passwort von allen generierten Users = 123

### Tipps und Bugs

Um die Datenbank zu leeren und die Migrations und den Seeder auszuführen:
- `php artisan migrate:fresh --seed`

Falls Seeder nicht erkannt werden hilft:
- `composer dump-autoload`
