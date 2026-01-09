# Muhammad Asim - Mobile App Developer Portfolio

A modern, responsive static portfolio website showcasing mobile app development projects and experience.

## 🛠 Tech Stack
**Frontend:** HTML5 | CSS3 | JavaScript  
**Libraries:** AOS (Animate On Scroll) | Font Awesome | Google Fonts

## 📋 Features

- ✅ Fully responsive design
- ✅ Modern UI/UX with smooth animations
- ✅ Project showcase with 12+ published apps
- ✅ Skills and technologies section
- ✅ Experience timeline
- ✅ Contact links (Email, GitHub, LinkedIn)
- ✅ No backend required - pure static site

## 🚀 Deployment to Free Hosting

This is a static website that can be deployed to any free hosting service. Here are the steps:

### Option 1: GitHub Pages (Recommended - Free & Easy)

📖 **Detailed Step-by-Step Guide:** See [GITHUB_PAGES_DEPLOY.md](GITHUB_PAGES_DEPLOY.md) for complete instructions.

**Quick Steps:**

1. **Push to GitHub:**
   ```bash
   git init
   git add .
   git commit -m "Initial commit - Static portfolio"
   git branch -M main
   git remote add origin https://github.com/yourusername/your-repo.git
   git push -u origin main
   ```

2. **Enable GitHub Pages:**
   - Go to your repository on GitHub
   - Click **Settings** → **Pages** (left sidebar)
   - Under **Source**, select **main** branch and `/ (root)` folder
   - Click **Save**
   - Your site will be live at: `https://yourusername.github.io/your-repo/`

   ⏱️ Wait 1-2 minutes for the first deployment to complete.

### Option 2: Netlify (Free & Fast)

1. **Push to GitHub** (same as above)

2. **Deploy on Netlify:**
   - Go to [netlify.com](https://www.netlify.com)
   - Sign up/login with GitHub
   - Click **New site from Git**
   - Select your repository
   - Build settings:
     - **Build command:** (leave empty)
     - **Publish directory:** `/` (root)
   - Click **Deploy site**
   - Your site will get a free `.netlify.app` domain

### Option 3: Vercel (Free & Fast)

1. **Push to GitHub** (same as above)

2. **Deploy on Vercel:**
   - Go to [vercel.com](https://www.vercel.com)
   - Sign up/login with GitHub
   - Click **New Project**
   - Import your repository
   - Framework Preset: **Other**
   - Root Directory: `./`
   - Click **Deploy**
   - Your site will get a free `.vercel.app` domain

### Option 4: Render (Free Tier Available)

1. **Push to GitHub** (same as above)

2. **Deploy on Render:**
   - Go to [render.com](https://www.render.com)
   - Sign up/login with GitHub
   - Click **New** → **Static Site**
   - Connect your repository
   - Build command: (leave empty)
   - Publish directory: `/`
   - Click **Create Static Site**

### Option 5: Any Static Hosting

You can also upload the files to:
- **InfinityFree** (free shared hosting)
- **000webhost** (free hosting)
- **Firebase Hosting** (free tier)
- **Cloudflare Pages** (free)
- Any web server with static file hosting

Just upload the `index.html` and `css/` folder to your web root.

## 📁 Project Structure

```
my-portfolio/
├── index.html          # Main HTML file
├── css/
│   └── portfolio.css  # All styles
└── README.md          # This file
```

## 🎨 Customization

To customize the portfolio:

1. **Update content:** Edit `index.html` directly
2. **Change styles:** Modify `css/portfolio.css`
3. **Add projects:** Copy a project `<div>` and update the content
4. **Update contact info:** Change email, GitHub, LinkedIn links in the Contact section

## 📱 Local Testing

Simply open `index.html` in your browser, or use a local server:

```bash
# Python 3
python3 -m http.server 8000

# Node.js (if you have http-server installed)
npx http-server

# PHP
php -S localhost:8000
```

Then visit `http://localhost:8000`

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---
⭐ *Thanks for visiting!*
