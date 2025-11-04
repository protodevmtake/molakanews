# Molaka News - Project Context and Development Guide

## Project Overview

Molaka News is a modern news aggregator website built with a TALL stack (Tailwind CSS, Alpine.js/Livewire, Laravel) but with React instead of Alpine.js/Livewire. It's a single-page application (SPA) that uses Laravel for the backend, React for the frontend, Inertia.js for seamless page transitions, and Tailwind CSS for styling. The project is built with Laravel 12 and PHP 8.4.

The application follows Domain-Driven Design (DDD) architecture patterns with a clear separation between domain logic and infrastructure concerns. It provides comprehensive news coverage including top stories, international news, and sports.

## Technologies and Architecture

### Backend Technologies
- **Laravel 12**: Full-stack web application framework
- **PHP 8.4**: Modern PHP with advanced features like union types, attributes, etc.
- **Laravel Actions**: For organizing business logic into single-purpose classes
- **Laravel DDD**: Package for implementing Domain-Driven Design patterns
- **Laravel Scout**: Search functionality with Meilisearch integration
- **Laravel Wayfinder**: Navigation management
- **Laravel Fortify**: Authentication scaffolding
- **Laravel Permission**: Role and permission management system
- **Laravel Media Library**: Media file management with transformations
- **Laravel TypeScript Transformer**: Automatic TypeScript type generation from PHP classes

### Frontend Technologies
- **React 19**: Component-based JavaScript library for building user interfaces
- **Inertia.js**: Framework that enables building classic server-rendered apps with an SPA frontend
- **Vite 7**: Next-generation frontend tooling for fast builds and development
- **Tailwind CSS 4**: Utility-first CSS framework for rapid UI development
- **TypeScript 5.7**: Type-safe JavaScript for improved development experience
- **Headless UI**: Completely unstyled, fully accessible UI components
- **Radix UI**: Accessible low-level UI primitives
- **Lucide React**: Beautifully simple icons for React
- **React Compiler**: Babel plugin for automatic React optimization

### Development and Testing Tools
- **PestPHP 4.1**: Modern PHP testing framework with elegant syntax
- **Larastan 3.7**: Static analysis for Laravel applications
- **Laravel Pint 1.24**: Opinionated PHP code formatter
- **ESLint 9.17**: JavaScript/TypeScript linting tool
- **Prettier 3.4**: Code formatter for consistent code style
- **Laravel Sail**: Docker-based development environment
- **Rector 2.2**: PHP automated refactoring tool

### Database and Search
- **Laravel Scout**: Full-text search capabilities
- **Meilisearch**: Powerful search engine with typo tolerance
- **Laravel Database**: Eloquent ORM and database migrations

## Project Structure

The project follows Domain-Driven Design principles with the following main directories:

```
project-root/
├── app/                    # Main application code
│   ├── Actions/           # Laravel action classes
│   ├── Http/              # Controllers, middleware, requests
│   ├── Models/            # Eloquent models
│   ├── Modules/           # Laravel modules
│   ├── Providers/         # Service providers
│   └── ...
├── src/                   # Domain-driven design structure
│   ├── Domain/            # Core business logic and domain models
│   ├── Infrastructure/    # Infrastructure implementations
│   ├── Integrations/      # Third-party service integrations
│   └── Support/           # Supporting utilities and helpers
├── resources/             # Frontend assets and Blade views
│   ├── css/               # CSS stylesheets
│   └── js/                # JavaScript/React components
├── database/              # Migrations, seeds, factories
├── routes/                # Application routes
├── config/                # Laravel configuration files
├── public/                # Publicly accessible files
└── tests/                 # Test files
```

## Building and Running

### Prerequisites
- PHP 8.4+ with Composer
- Node.js and npm
- Docker (optional, for Laravel Sail)

### Installation
```bash
# 1. Install PHP dependencies
composer install

# 2. Install NPM dependencies
npm install

# 3. Create environment file
cp .env.example .env

# 4. Generate application key
php artisan key:generate

# 5. Run database migrations
php artisan migrate

# 6. (Optional) Seed the database
php artisan db:seed
```

### Development Commands
```bash
# Development server (with hot reload)
npm run dev

# Or using composer script for full setup with queue and logs
composer run dev

# Build for production
npm run build

# Build with Server-Side Rendering (SSR)
npm run build:ssr

# Run with SSR in dev mode
composer run dev:ssr
```

### Testing and Quality
```bash
# Run all tests
composer test

# Run tests with coverage
php artisan test --coverage

# Type checking
npm run types

# Lint JavaScript/TypeScript
npm run lint

# Format code
npm run format

# Format check only
npm run format:check

# Static analysis
php artisan ide-helper:generate  # Generate IDE helper files
```

### Additional Commands
```bash
# Run setup (install dependencies, generate key, migrate, build)
composer run setup

# Run tests
composer run test
```

## Key Features

1. **Modern Architecture**: DDD approach with clear separation of concerns
2. **SPA Experience**: React frontend with Inertia.js for seamless navigation
3. **Responsive Design**: Mobile-first design with Tailwind CSS
4. **Type Safety**: Full TypeScript support on the frontend
5. **Search Functionality**: Meilisearch integration for powerful search
6. **Media Management**: Advanced file handling and image transformations
7. **Authentication**: Laravel Fortify with role-based permissions
8. **Accessibility**: ARIA-compliant components with Radix UI and Headless UI
9. **Performance**: React Compiler and Vite for optimized builds

## Development Conventions

### Code Style
- **Backend**: PSR-12 standard with Laravel Pint formatting
- **Frontend**: ESLint with React hooks rules and Prettier formatting
- **Type Safety**: Strict TypeScript mode for all new code

### Architecture Patterns
- **Domain-Driven Design**: Business logic separated from infrastructure
- **Action Pattern**: Single responsibility classes for business operations
- **Repository Pattern**: Abstract data access layers
- **Service Layer**: Business logic encapsulation

### Testing Strategy
- **Unit Tests**: For individual functions and methods
- **Feature Tests**: For user-facing functionality
- **PestPHP**: Modern PHP testing with expressive syntax
- **Type Coverage**: Ensuring TypeScript type safety

## Environment Configuration

The application uses standard Laravel environment configuration:
- Database settings
- Search engine configuration (Meilisearch)
- File storage options (local, S3)
- Third-party API keys
- Application settings

## Special Configuration Files

- `composer.json`: PHP dependencies and scripts
- `package.json`: Frontend dependencies and scripts
- `vite.config.ts`: Vite build configuration
- `tsconfig.json`: TypeScript compiler options
- `phpstan.neon`: Static analysis configuration
- `rector.php`: Automated refactoring rules
- `mago.toml`: AI coding assistant configuration
- `boost.json`: Laravel Boost configuration
- `eslint.config.js`: JavaScript linting rules
- `pint.json`: PHP code style configuration