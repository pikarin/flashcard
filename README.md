## Flashcard App
This project is a flashcard application build using Laravel, Livewire, and TailwindCSS

### Features

* User registration and authentication
* Flashcard creation, editing, and deletion
* Study and review modes (basic implementation)
* Flashcard categorization (decks to come)
* Progress tracking (basic implementation)

### Technologies

* Laravel 11
* Laravel Breeze
* Livewire
* TailwindCSS

### Database Diagram
![ERD](https://github.com/pikarin/flashcard/blob/main/ERD.png?raw=true)

### Installation

1. Clone the repository:
   ```sh
   git clone https://github.com/pikarin/flashcard.git
   ```
2. Copy env file:
   ```sh
   cp .env.example .env
   ```
3. Install dependencies:
   ```sh
   composer install
   npm install
   ```
4. Generate application key:
   ```sh
   php artisan key:generate
   ```
5. Configure database connection in `.env` file.
6. Build frontend:
   ```sh
   npm run build
   ```
7. Migrate the database:
   ```sh
   php artisan migrate
   ```
8. Seed database:
   ```sh
   php artisan db:seed
   ```
