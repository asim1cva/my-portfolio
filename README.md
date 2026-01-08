# Muhamma Asim - Mobile App Developer

## 🛠 Tech Stack
**Backend:** Laravel 12 | PHP 8.2  
**Frontend:** HTML | CSS | JavaScript | Blade Templates  
**Tools:** VS Code

## 🚀 Quick Start

### Installation

1. Clone the repository:
   ```bash
   git clone https://github.com/YOUR_USERNAME/my-portfolio.git
   cd my-portfolio
   ```

2. Install PHP dependencies:
   ```bash
   composer install
   ```

3. Install Node.js dependencies:
   ```bash
   npm install
   ```

4. Set up environment:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

5. Create database:
   ```bash
   touch database/database.sqlite
   php artisan migrate
   ```

6. Build assets:
   ```bash
   npm run build
   ```

7. Start the development server:
   ```bash
   php artisan serve
   ```

## 📦 Deployment to GitHub

### Quick Deployment

Use the provided deployment script:

```bash
chmod +x deploy.sh
./deploy.sh
```

### Manual Deployment

1. Initialize Git (if not already done):
   ```bash
   git init
   ```

2. Add files and commit:
   ```bash
   git add .
   git commit -m "Initial commit: Laravel portfolio"
   ```

3. Add GitHub remote:
   ```bash
   git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git
   ```

4. Push to GitHub:
   ```bash
   git branch -M main
   git push -u origin main
   ```

For detailed deployment instructions, see [DEPLOYMENT.md](./DEPLOYMENT.md)

## 📋 Features

- Responsive portfolio website
- Laravel backend framework
- Modern UI/UX design
- Project showcase
- Contact form (if implemented)

## 🔧 Development

### Run Tests
```bash
php artisan test
```

### Build Assets
```bash
npm run dev      # Development mode with hot reload
npm run build    # Production build
```

### Code Quality
```bash
./vendor/bin/pint    # Laravel Pint for code formatting
```

## 📝 Project Structure

```
my-portfolio/
├── app/              # Application logic
├── config/           # Configuration files
├── database/         # Migrations and seeders
├── public/           # Public assets
├── resources/        # Views, CSS, JS
├── routes/           # Route definitions
└── tests/            # Test files
```

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch (`git checkout -b feature/amazing-feature`)
3. Commit your changes (`git commit -m 'Add some amazing feature'`)
4. Push to the branch (`git push origin feature/amazing-feature`)
5. Open a Pull Request

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---
⭐ *Thanks for visiting!*
