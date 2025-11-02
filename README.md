# Molaka News

A news website that provides a comprehensive overview of current events, featuring top stories, international news, and sports.

## About The Project

This project is a news aggregator website built with the TALL stack, but with a twist. It uses Laravel for the backend, Inertia.js and React for the frontend, and Tailwind CSS for styling. It's a modern, single-page application that feels fast and responsive.

### Built With

*   [Laravel](https://laravel.com)
*   [React](https://reactjs.org)
*   [Inertia.js](https://inertiajs.com)
*   [Tailwind CSS](https://tailwindcss.com)
*   [Vite](https://vitejs.dev)

## Getting Started

To get a local copy up and running follow these simple example steps.

### Prerequisites

*   PHP >= 8.4
*   Node.js & npm
*   Composer

### Installation

1.  Clone the repo
    ```sh
    git clone https://github.com/your_username/molakanews.git
    ```
2.  Install PHP dependencies
    ```sh
    composer install
    ```
3.  Install NPM dependencies
    ```sh
    npm install
    ```
4.  Create a copy of your .env file
    ```sh
    cp .env.example .env
    ```
5.  Generate an app encryption key
    ```sh
    php artisan key:generate
    ```
6.  Run the database migrations
    ```sh
    php artisan migrate
    ```

### Running the Application

You can run the development server with the following command:

```sh
npm run dev
```

This will start the Vite development server and the Laravel development server concurrently.

### Running Tests

To run the test suite, you can use the following command:

```sh
composer test
```

