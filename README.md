# Crypto Tracker

## Table of Contents

- [Introduction](#introduction)
- [Technologies](#technologies)
- [Setup](#setup)
- [Features](#features)
- [Contributing](#contributing)

## Introduction

Crypto Tracker is a Laravel-based application that allows users to fetch and display the latest data about various cryptocurrencies. This application uses the Coingecko API to fetch the information and displays it in a user-friendly interface built with Tailwind CSS.

## Technologies

- Laravel 8.x
- Tailwind CSS 2.x
- Coingecko API

## Setup

To get started, follow these steps:

1. Clone the repository: `git clone https://github.com/TheKyyn/RWEBproject`

2. Change directory to the cloned repository: `cd repo-name`

3. Install composer dependencies: `composer install`

4. Copy the `.env.example` file to `.env` and update the environment variables as required.

5. Generate application key: `php artisan key:generate`

6. Run migrations: `php artisan migrate`

7. Run the application: `php artisan serve`

## Features

- List of top 100 cryptocurrencies with relevant data such as name, current price, and 24-hour change percentage.
- Detailed view for each cryptocurrency with additional data like market cap, total volume, 7-day change percentage, and a brief description.

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.
