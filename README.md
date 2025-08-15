# The Figured Intern Experience

Welcome to the Figured Intern Experience application! This is a Laravel application built with Laravel Sail and Prism, designed for our software development graduate event.

## Prerequisites

Before you begin, ensure you have the following installed on your machine:

- **Docker Desktop** (required for Laravel Sail)
  - [Mac Installation Guide](https://docs.docker.com/desktop/setup/install/mac-install/)
  - [Windows Installation Guide](https://docs.docker.com/desktop/setup/install/windows-install/)
- **Composer** (PHP dependency manager)
  - See installation instructions below
- **Git** (for cloning the repository)
- **A terminal application** (Terminal on Mac, PowerShell/WSL on Windows)

### Installing Composer

#### Mac Installation

**Option 1: Using Homebrew (Recommended)**

If you have Homebrew installed, simply run:
```bash
brew install composer
```

**Option 2: Manual Installation**

1. Open Terminal and run this command to download the installer:
```bash
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
```

2. Run the installer:
```bash
php composer-setup.php
```

3. Move Composer to make it globally accessible:
```bash
sudo mv composer.phar /usr/local/bin/composer
```

4. Verify the installation:
```bash
composer --version
```

#### Windows Installation

1. Download and run the [Composer-Setup.exe](https://getcomposer.org/Composer-Setup.exe)

2. Follow the installation wizard:
   - It will automatically find your PHP installation
   - Use the default settings unless you have specific requirements

3. After installation, open a new Command Prompt or PowerShell window and verify:
```cmd
composer --version
```

For more detailed installation instructions and troubleshooting, visit the [official Composer documentation](https://getcomposer.org/doc/00-intro.md).

## Getting Started

Follow these steps to get the application running on your local machine:

> **📋 Challenge Day Setup**: You will receive an OpenAI API key on challenge day that needs to be added to your `.env` file for the AI commentary features to work.

### 1. Clone the Repository

```bash
git clone [repository-url]
cd figured-intern-experience
```

### 2. Install PHP Dependencies

Install the Composer packages locally (this is needed to get Laravel Sail):

```bash
composer install
```

### 3. Start Laravel Sail

Launch the Docker containers using Laravel Sail:

```bash
./vendor/bin/sail up
```

This command will start all the necessary services (web server, database, etc.). Keep this terminal window open while working on the application.

### 4. Set up the Application

In a new terminal window, run these commands to configure the application:

Copy env file:
```bash
cp .env.example .env
```

Generate the application encryption key:
```bash
./vendor/bin/sail artisan key:generate
```

Run database migrations:
```bash
./vendor/bin/sail artisan migrate
```

**Add OpenAI API Key (Challenge Day):**
```bash
# Edit your .env file and add the provided API key:
OPENAI_API_KEY=your-api-key-here
```

### 5. Install JavaScript Dependencies

Install the Node.js packages required for the frontend:

```bash
./vendor/bin/sail npm install
```

### 6. Start the Development Server

Run the Vite development server for hot-reloading and asset compilation:

```bash
./vendor/bin/sail npm run dev
```

Keep this terminal window open alongside the Sail containers for the best development experience.

## Accessing the Application

Once all services are running, you can access the application at:

- **http://localhost/** 
- **http://127.0.0.1/**

You should see the default Laravel welcome page.

## Useful Commands

Here are some commands you'll find helpful during development:

### Laravel Sail Commands

```bash
# Start containers in the background
./vendor/bin/sail up -d

# Stop containers
./vendor/bin/sail down

# Run Artisan commands
./vendor/bin/sail artisan [command]

# Access the MySQL database
./vendor/bin/sail mysql

# Run tests
./vendor/bin/sail test
```

### NPM Commands

```bash
# Build assets for production
./vendor/bin/sail npm run build

# Run the development server
./vendor/bin/sail npm run dev

# Format code with Prettier
./vendor/bin/sail npm run format
```

## Troubleshooting

### Docker Issues

- **Docker not running**: Make sure Docker Desktop is running before executing Sail commands
- **Port conflicts**: If you get port errors, another service might be using port 80. You can change the port by setting `APP_PORT` in your `.env` file

### Permission Issues (Linux/Mac)

If you encounter permission issues, you might need to run:

```bash
chmod +x ./vendor/bin/sail
```

### Windows-Specific Issues

- If using Windows, consider using WSL2 for better performance
- Run commands in WSL2 terminal rather than PowerShell for best compatibility

## Project Structure

```
figured-intern-experience/
├── app/              # Laravel application code
├── resources/        # Frontend assets (Vue components, CSS)
├── routes/           # Application routes
├── database/         # Migrations and seeders
├── public/           # Publicly accessible files
└── docker-compose.yml # Docker configuration
```

## Technologies Used

- **Laravel** - PHP web framework
- **Laravel Sail** - Docker development environment
- **Laravel Prism** - API documentation
- **Vue.js** - Frontend framework
- **Vite** - Build tool and dev server
- **TypeScript** - Type-safe JavaScript

## Support

If you encounter any issues during setup, please reach out to the event organizers or check the documentation for:
- [Laravel Documentation](https://laravel.com/docs)
- [Laravel Sail Documentation](https://laravel.com/docs/sail)
- [Docker Documentation](https://docs.docker.com/)

---

Happy coding! 🚀
