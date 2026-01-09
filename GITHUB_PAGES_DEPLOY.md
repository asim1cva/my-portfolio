# 🚀 Deploy Portfolio to GitHub Pages - Step by Step Guide

This guide will walk you through deploying your static portfolio to GitHub Pages completely free.

---

## Prerequisites

- A GitHub account (create one at [github.com](https://github.com) if you don't have one)
- Git installed on your computer (download from [git-scm.com](https://git-scm.com))
- Your portfolio files ready (`index.html` and `css/` folder)

---

## Step 1: Initialize Git Repository (If Not Already Done)

Open your terminal/command prompt and navigate to your portfolio folder:

```bash
cd /Users/digitaldtech/Desktop/MobileApps/Practice/Portfolio/my-portfolio
```

Initialize Git (if not already initialized):

```bash
git init
```

---

## Step 2: Create a New Repository on GitHub

1. **Go to GitHub:**
   - Visit [github.com](https://github.com) and sign in
   
2. **Create New Repository:**
   - Click the **"+"** icon in the top right corner
   - Select **"New repository"**

3. **Repository Settings:**
   - **Repository name:** `my-portfolio` (or any name you prefer)
   - **Description:** (optional) "My Portfolio Website"
   - **Visibility:** Choose **Public** (required for free GitHub Pages)
   - **DO NOT** check "Initialize this repository with a README"
   - Click **"Create repository"**

4. **Copy the Repository URL:**
   - GitHub will show you a page with setup instructions
   - Copy the HTTPS URL (looks like: `https://github.com/yourusername/my-portfolio.git`)

---

## Step 3: Add Files and Commit

In your terminal, run these commands:

```bash
# Add all files to Git
git add .

# Create your first commit
git commit -m "Initial commit - Portfolio website"

# Rename branch to main (if needed)
git branch -M main
```

---

## Step 4: Connect to GitHub and Push

```bash
# Add GitHub as remote (replace with YOUR repository URL)
git remote add origin https://github.com/yourusername/my-portfolio.git

# Push to GitHub
git push -u origin main
```

**Note:** You'll be prompted for your GitHub username and password (or personal access token).

**If you get authentication errors:**
- Use a **Personal Access Token** instead of password:
  1. Go to GitHub → Settings → Developer settings → Personal access tokens → Tokens (classic)
  2. Generate new token with `repo` permissions
  3. Use the token as your password

---

## Step 5: Enable GitHub Pages

1. **Go to Your Repository:**
   - Visit your repository page on GitHub (e.g., `https://github.com/yourusername/my-portfolio`)

2. **Open Settings:**
   - Click on the **"Settings"** tab (top menu)

3. **Navigate to Pages:**
   - In the left sidebar, scroll down and click **"Pages"**

4. **Configure Source:**
   - Under **"Source"**, select:
     - **Branch:** `main`
     - **Folder:** `/ (root)`
   - Click **"Save"**

5. **Wait for Deployment:**
   - GitHub will show: *"Your site is ready to be published at..."*
   - It may take 1-2 minutes for the first deployment

---

## Step 6: Access Your Live Website

Your portfolio will be live at:

```
https://yourusername.github.io/my-portfolio/
```

**Example:** If your username is `john-doe` and repo is `my-portfolio`:
```
https://john-doe.github.io/my-portfolio/
```

---

## Step 7: Update Your Site (Making Changes)

Whenever you make changes to your portfolio:

```bash
# Navigate to your project folder
cd /Users/digitaldtech/Desktop/MobileApps/Practice/Portfolio/my-portfolio

# Add changed files
git add .

# Commit changes
git commit -m "Update portfolio content"

# Push to GitHub
git push
```

GitHub Pages will automatically update your site (usually within 1-2 minutes).

---

## 🎯 Quick Command Reference

```bash
# First time setup
git init
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin https://github.com/yourusername/my-portfolio.git
git push -u origin main

# Making updates
git add .
git commit -m "Your commit message"
git push
```

---

## 🔧 Troubleshooting

### Issue: "Repository not found"
- **Solution:** Check that your repository URL is correct and the repository exists on GitHub

### Issue: "Authentication failed"
- **Solution:** Use a Personal Access Token instead of password (see Step 4)

### Issue: "Site not loading / 404 error"
- **Solution:** 
  - Wait 2-3 minutes after enabling Pages
  - Check that your `index.html` is in the root directory
  - Verify the branch is set to `main` in Pages settings
  - Check the repository is **Public** (not Private)

### Issue: "CSS not loading"
- **Solution:** 
  - Verify `css/portfolio.css` exists
  - Check the path in `index.html` is `css/portfolio.css` (not `/css/portfolio.css`)
  - Clear browser cache (Ctrl+F5 or Cmd+Shift+R)

### Issue: "Changes not showing"
- **Solution:**
  - Wait 1-2 minutes for GitHub to rebuild
  - Hard refresh your browser (Ctrl+F5 or Cmd+Shift+R)
  - Check GitHub Actions tab for build status

---

## 📝 Custom Domain (Optional)

If you want to use your own domain (e.g., `yourname.com`):

1. In GitHub Pages settings, add your custom domain
2. Update your DNS records:
   - Add a `CNAME` record pointing to `yourusername.github.io`
3. GitHub will automatically configure HTTPS for your custom domain

---

## ✅ Success Checklist

- [ ] Git repository initialized
- [ ] Files committed locally
- [ ] Repository created on GitHub
- [ ] Files pushed to GitHub
- [ ] GitHub Pages enabled in Settings
- [ ] Branch set to `main` and folder to `/ (root)`
- [ ] Site accessible at `https://yourusername.github.io/my-portfolio/`
- [ ] All styles and images loading correctly

---

## 🎉 You're Done!

Your portfolio is now live on GitHub Pages! Share your link with the world!

**Need help?** Check the [GitHub Pages documentation](https://docs.github.com/en/pages) or open an issue in your repository.

