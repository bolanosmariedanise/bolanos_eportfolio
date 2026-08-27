# Marie Danise Bolaños — Personal Portfolio

A personal single-page portfolio website built with **Laravel 12** and **Tailwind CSS v4**, presenting the profile, education, certifications, projects, and contact details of Marie Danise Bolaños, a 4th-year Bachelor of Science in Information Technology student.

The site is fully static — no database, models, or authentication. All content is written directly into the Blade templates, so it can be hosted anywhere a standard Laravel application can run.

---

## Table of Contents

- [Sections & Features](#sections--features)
- [Projects](#projects)
- [Technologies Used](#technologies-used)
- [Project Structure](#project-structure)
- [Running Locally](#running-locally)
- [Customization Notes](#customization-notes)

---

## Sections & Features

The site is a one-page layout with anchor navigation (Home, About, Education, Certifications, Projects, Contact).

### Home / Hero
- Greeting badge ("Open to opportunities") with a pulsing dot.
- Name, current role (BSIT — 4th Year), and a short tagline.
- Call-to-action buttons: **View My Work** and **Get In Touch**.
- Animated atmospheric gradient blobs and a subtle noise texture background.

### About
- Profile picture (`public/images/profile.jpg`).
- Short bio describing academic background and interests.
- Skill pills: **Web Development**, **ICT**.
- Quick stats: 4 Years in IT · 3 Certifications · 4th Year in College.

### Education & Certifications
- Education timeline:
  - **BS Information Technology** — Data Center College of the Philippines – Bangued (2023–Present).
  - **TVL–ICT** — An-anaao Integrated School (2021–2023), Graduated With Honors.
- Certifications section with issuer and date. Each certificate can be **clicked to open a viewer modal** with zoom, pan, and pinch controls:
  - Online Safety Through Netiquette — DICT Region II
  - Computer System Servicing (CSS) NCII — TESDA
  - Data Analytics and Visualization Essentials — DICT CAR (ILCDB)

### Projects
- Grid of project cards, each with:
  - Thumbnail image, title, description, and technology tags.
  - Click to open a **lightbox modal** with an image gallery (previous/next navigation, dot indicators, image counter) and full details.

### Contact
- Contact information only (email, phone, location):
  - Email: `bolanosmariedanise@gmail.com`
  - Phone: `+63 975 618 8324`
  - Location: Brgy. Pias Sur, Tayum, Abra

### Footer & Navigation
- Sticky top navbar with anchor links, a **dark/light theme toggle**, and a mobile hamburger menu.
- Footer with quick links and social icons: **Facebook**, **GitHub**, and **Email**.

### Theme
- Beige & peach-pink palette defined as CSS variables, with a matching **dark mode**.
- Neon peach accent glow used for accents and the profile frame.

---

## Projects

| Project | Tech | Gallery |
| --- | --- | --- |
| Online Selling Management System for Streetwear Apparel | C#, Windows Forms, .NET | 6 screenshots |
| Diocese of Bangued — St. James the Elder Cathedral Parish Viewer Portal | PHP, Web Development | 53 screenshots |
| Alegria's School PE Dept. Equipment Monitoring & Inventory System | C#, Windows Forms, .NET | 12 screenshots |
| Area Finder | C#, Windows Forms, .NET | 1 |
| Permanent Record System | C#, Windows Forms, .NET | 1 |
| Student's Grade Computation System | C#, Windows Forms, .NET | 1 |
| VB Sample Records System | VB.NET, Windows Forms | 1 |

Project content lives in a PHP array inside `resources/views/home.blade.php`; screenshots are stored under `public/images/projects/<project>/`.

---

## Technologies Used

- **PHP 8.2+** and **Laravel 12** (Composer-based)
- **Blade** templating (layouts and reusable components)
- **Tailwind CSS v4** — compiled with the official `@tailwindcss/vite` plugin
- **Vite** + `laravel-vite-plugin` for asset bundling
- **Vanilla JavaScript** — theme toggle, mobile menu, project gallery modal, certificate viewer modal, navbar scroll behavior
- **Google Fonts** — Inter, Poppins, Merriweather, Montserrat, Baloo 2, Dancing Script, Abril Fatface

No database is used; there are no models, migrations to run for this project, or external API dependencies.

---

## Project Structure

```
resources/
├── views/
│   ├── layouts/app.blade.php        # HTML shell: head, fonts, nav, footer
│   ├── home.blade.php               # Main single-page content (all sections)
│   └── components/
│       ├── navbar.blade.php         # Sticky nav + theme toggle + mobile menu
│       ├── footer.blade.php         # Quick links + social icons
│       ├── section-header.blade.php # Reusable section titles
│       ├── stat-card.blade.php      # About quick-stats cards
│       └── project-card.blade.php   # Project thumbnail card
├── css/app.css                      # Fonts, theme variables, dark mode, custom styles
└── js/app.js                        # Theme/menu/modals/gallery interactions

routes/web.php                       # Single static route -> view('home')
vite.config.js                       # Vite + Tailwind plugin entry points
```

---

## Running Locally

### Prerequisites

- PHP **8.2+**
- [Composer](https://getcomposer.org/)
- Node.js **20+** and npm

### Steps

```bash
# 1. Install PHP dependencies
composer install

# 2. Create the environment file and generate an app key
copy .env.example .env        # Windows
# cp .env.example .env        # macOS / Linux

php artisan key:generate

# 3. Install and build the frontend assets (Tailwind / JS)
npm install
npm run build                 # production build (or `npm run dev` while developing)

# 4. Start the local server
php artisan serve
```

Visit **http://127.0.0.1:8000** — no database setup or migrations are required, since the portfolio is fully static.

---

## Customization Notes

- **Profile photo** — replace `public/images/profile.jpg`.
- **Bio, education, certifications, and projects** — edit the PHP arrays inside `resources/views/home.blade.php`.
- **Theme colors / fonts** — edit the CSS variables and `@theme` block in `resources/css/app.css`.
- **Social links** — edit the anchors in `resources/views/components/footer.blade.php`.

---

## License

This is a personal student portfolio project. The underlying Laravel skeleton is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).