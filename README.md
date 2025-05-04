# Designo Agency Portfolio

A fully responsive Laravel-powered portfolio website for a fictional creative agency. Built to showcase design work in Web, App, and Graphic categories — with a modern UI and admin panel to manage projects.

**Live Site:**  
[https://designo.leannegrunewald.co.za](https://designo.leannegrunewald.co.za)

---

## Preview

![Screenshot of Designo Site](https://leannegrunewald.co.za/assets/img/project-designo.jpg)

---

## Features

- Public-facing portfolio for Web, App, and Graphic design
- Admin login with dashboard (Laravel Breeze)
- Full CRUD functionality for projects
- Filtered project views by category
- Static pages: “Our Company”, “Locations”, and “Contact”
- Fully responsive layout with TailwindCSS
- Built with Laravel 11 + Vite

---

## Tech Stack

- **Laravel 11** with Laravel Breeze (Blade)
- **TailwindCSS** for styling
- **Vite** for asset bundling
- **PHP 8.2**, **MySQL**, **Live deployment** on Afrihost shared hosting

---

## Setup Instructions

```bash
git clone https://github.com/Leanne-Grunewald-Work/designo.git
cd designo

composer install
npm install
cp .env.example .env
php artisan key:generate

# Set your DB credentials in .env

php artisan migrate
npm run build
php artisan serve

```

## Future Enhancements (Ideas)

- Role-based access for multiple users
- Contact form functionality
- Light/Dark theme toggle

## About the Developer

Built by [Leanne Grunewald](https://leannegrunewald.co.za), a full-stack web developer with a love for creative, clean code and modern web experiences.

## Feedback & Contact

Feel free to [reach out](https://leannegrunewald.co.za/#contact), or message via the contact form on my portfolio.

