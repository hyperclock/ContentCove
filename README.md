# ContentCove

ContentCove is an open-source CMS built using the Symfony Framework, designed for managing blog posts, pages, and contact forms. It supports internationalization (i18n) to ensure content can be translated into multiple languages.

## Getting Started

### Prerequisites
- PHP 8.1 or higher
- Composer
- Node.js and npm
- MySQL/MariaDB

### Installation

1. Clone the repository:
   
```bash 
git clone https://github.com/hyperclock/ContentCove.git 
cd ContentCove
```

2. Install dependencies using Composer:
   
```bash 
composer install
```

3. Set up your `.env` file with database credentials and other necessary configurations.

4. Run migrations to set up the database schema:
   
```bash 
bin/console doctrine:migrations:migrate
```

5. Load fixtures (optional):
   


6. Install frontend dependencies using npm:
   
```bash 
npm install
```

7. Build the assets:

```bash 
npm run build
```

8. Start the Symfony server:
   
```bash 
symfony server:start
```

## Directory Structure

- `bin/`: Contains executable scripts.
- `config/`: Configuration files for various services and bundles.
- `public/`: The web root directory, containing index.php and other static assets.
- `src/`: Source code of the application.
  - `Controller/`: Controller classes handling incoming requests.
  - `Entity/`: Doctrine entity classes representing database tables.
  - `Repository/`: Repository classes for accessing data from the database.
  - `Service/`: Service classes providing business logic.
  - `Twig/`: Twig templates and extensions.
- `tests/`: Unit tests and functional tests.
- `var/cache/`, `var/logs/`, etc.: Cache, log files, and other runtime directories.

## Dependencies

Ensure you have the following dependencies installed:
- PHP (7.4 or higher)
- Composer
- Node.js and npm
- MySQL/MariaDB

Run `composer install` to install all required PHP packages.
Run `npm install` followed by `npm run build` to set up frontend assets.

## Configuration

Update your `.env` file with the following environment variables:

```plaintext 
DATABASE_URL=mysql://user:password@localhost/dbname 
MAILER_DSN=smtp://user:password@example.com
```

## Contributing

Contributions are welcome! Please follow these guidelines:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Make changes and commit them with descriptive messages.
4. Push to your forked repository.
5. Open a pull request.

### Code Style
Follow Symfony's coding standards by running:

```bash 
./bin/php-cs-fixer fix --config=.php_cs.dist src/
```

### Testing
Run unit tests using PHPUnit:

```bash 
./vendor/bin/phpunit
```

Functional tests can be run with Behat (if configured).

## License

ContentCove is released under the [MIT License](LICENSE).



