# Tito Mutethia — Software Developer Portfolio

A modern, responsive, and recruiter-focused Software Developer Portfolio built with **Laravel 12, Blade Templates, Vanilla CSS, and JavaScript**.

[![Laravel Version](https://img.shields.io/badge/Laravel-12.x-FF2D20?style=flat&logo=laravel&logoColor=white)](https://laravel.com)
[![PHP Version](https://img.shields.io/badge/PHP-8.2%2B-777BB4?style=flat&logo=php&logoColor=white)](https://php.net)
[![GitHub](https://img.shields.io/badge/GitHub-dinidu2002-181717?style=flat&logo=github&logoColor=white)](https://github.com/dinidu2002)

---

## 🌟 Highlights & Design Features

- **Dark Navy Theme**: Premium dark navy background (`#07111F`) paired with cyan (`#06b6d4`) and sky blue (`#38bdf8`) accents.
- **Glassmorphism**: Subtle glass cards with backdrop filters and delicate glow effects.
- **100% Responsive**: Tested across mobile smartphones, tablets, laptops, and ultra-wide desktops.
- **Fast & Zero Heavy Dependencies**: Crafted with lightweight native CSS and Vanilla JS for instant page load speeds without bulky build steps.
- **Verified CV Information**: Reflects real qualifications (SLIATE HND in Information Technology), 1-year banking experience at RDB, verified skills, and genuine projects.
- **Dynamic CV Download**: Working CV download button linking to the official PDF stored in `public/cv/Dinidu_Dissanayake_CV.pdf`.
- **Honest Contact Channels**: Direct copy buttons for email, phone, and address, paired with a functional Laravel contact route.

---

## 🛠️ Tech Stack

- **Backend**: Laravel 12, PHP 8.2+
- **Templating**: Laravel Blade Components & Partials
- **Frontend**: HTML5, Modern CSS3 (CSS Variables, Flexbox, Grid), Vanilla JavaScript (ES6+)
- **Database / Storage**: MySQL / Relational Architecture Ready
- **Styling**: Custom Dark Navy Design System (`public/css/portfolio.css`)

---

## 📂 Project Architecture

```
portfolio/
├── app/
│   └── Http/
│       └── Controllers/
│           └── PortfolioController.php  <-- Handles profile, projects, skills & contact
├── public/
│   ├── css/
│   │   └── portfolio.css               <-- Dark navy & glass styling
│   ├── js/
│   │   └── portfolio.js                <-- ScrollSpy, copy feedback, mobile menu
│   ├── images/
│   │   ├── profile.png                 <-- Real photo from CV
│   │   └── profile.jpg
│   └── cv/
│       └── Dinidu_Dissanayake_CV.pdf   <-- Verified CV PDF download
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php           <-- SEO meta, OpenGraph & master layout
│       ├── partials/
│       │   ├── navbar.blade.php
│       │   ├── hero.blade.php
│       │   ├── about.blade.php
│       │   ├── skills.blade.php
│       │   ├── projects.blade.php
│       │   ├── experience.blade.php
│       │   ├── education.blade.php
│       │   ├── references.blade.php
│       │   ├── contact.blade.php
│       │   └── footer.blade.php
│       └── portfolio.blade.php         <-- Main page linking all partials
└── routes/
    └── web.php                         <-- Web routes (home, cv.download, contact.submit)
```

---

## 🚀 How to Run Locally on Windows

### Option 1: Using Laravel Artisan (Recommended)
1. Open PowerShell or Command Prompt in the project folder:
   ```powershell
   cd C:\xampp\htdocs\portfolio
   ```
2. Start the local Laravel development server:
   ```powershell
   php artisan serve
   ```
3. Open your browser and navigate to:
   ```
   http://127.0.0.1:8000
   ```

### Option 2: Using XAMPP Apache
1. Open the **XAMPP Control Panel** and click **Start** next to **Apache** (and **MySQL** if needed).
2. Open your browser and navigate to:
   ```
   http://localhost/portfolio/public
   ```

---

## 📦 How to Push to GitHub

1. Initialize Git in the project root:
   ```powershell
   git init
   git add .
   git commit -m "Initial commit: Complete Dinidu Dissanayake Developer Portfolio"
   ```
2. Create a repository on your GitHub account (`https://github.com/`).
3. Link your remote repository and push:
   ```powershell
   git branch -M main
   git remote add origin https:
   git push -u origin main
   ```

---

## 🌐 Free Deployment Options

### 1. Render.com / Railway.app
- Connect your GitHub repository.
- Select PHP environment or Docker.
- Build command: `composer install --no-dev --optimize-autoloader`
- Start command: `php artisan serve --host=0.0.0.0 --port=$PORT`

### 2. Free Shared Web Hosting (e.g., InfinityFree / 000webhost)
- Upload the project files to your hosting `public_html` directory.
- Configure document root to point to the `public/` directory.
- Ensure `.env` is configured with `APP_ENV=production` and `APP_DEBUG=false`.

---

## 👤 Author

**Tito Mutethia**
- 📍 Bakamoona, Sri Lanka
- 📧 [titomutethia@gmail.com](titomutethia@gmail.com)
- 📞 0740953711
- 💻 GitHub: [@titomutethia](https://github.com/titomutethia)
