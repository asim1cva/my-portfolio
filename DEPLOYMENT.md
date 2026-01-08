# 🚀 GitHub Deployment Guide

This guide will help you deploy your Laravel portfolio to GitHub.

## Prerequisites

- Git installed on your system
- A GitHub account
- GitHub repository created (or you can create one during the process)

## Quick Deployment Steps

### Option 1: Using the Deployment Script (Recommended)

1. **Make the script executable:**
   ```bash
   chmod +x deploy.sh
   ```

2. **Run the deployment script:**
   ```bash
   ./deploy.sh
   ```

3. **Follow the prompts:**
   - Enter a commit message (or use the default)
   - Enter your GitHub repository URL when prompted
   - Enter branch name (default: main)

### Option 2: Manual Deployment

#### Step 1: Initialize Git Repository (if not already done)

```bash
git init
```

#### Step 2: Add All Files

```bash
git add .
```

#### Step 3: Create Initial Commit

```bash
git commit -m "Initial commit: Laravel portfolio"
```

#### Step 4: Add GitHub Remote

Replace `YOUR_USERNAME` and `YOUR_REPO_NAME` with your actual GitHub username and repository name:

```bash
git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git
```

Or if you prefer SSH:

```bash
git remote add origin git@github.com:YOUR_USERNAME/YOUR_REPO_NAME.git
```

#### Step 5: Push to GitHub

```bash
git branch -M main
git push -u origin main
```

## Important Notes

### Before Pushing to GitHub

1. **Environment Variables:**
   - Make sure `.env` is in `.gitignore` (it already is)
   - Create a `.env.example` file with placeholder values for reference
   - Never commit sensitive information like API keys, passwords, etc.

2. **Database:**
   - The `database.sqlite` file is already in `.gitignore`
   - For production, use a proper database (MySQL, PostgreSQL, etc.)

3. **Dependencies:**
   - `vendor/` and `node_modules/` are already in `.gitignore`
   - Others will need to run `composer install` and `npm install` after cloning

### After Deployment

1. **Set up GitHub Actions:**
   - The workflow file (`.github/workflows/deploy.yml`) is already configured
   - It will automatically run tests and build assets on push
   - Make sure to enable GitHub Actions in your repository settings

2. **Environment Setup:**
   - Add environment variables in GitHub repository settings (Settings → Secrets and variables → Actions)
   - Or use GitHub Pages/Vercel/Netlify for hosting with their respective environment variable configurations

## Continuous Deployment

The included GitHub Actions workflow (`.github/workflows/deploy.yml`) will:
- ✅ Run tests on every push
- ✅ Build assets automatically
- ✅ Validate code quality

## Troubleshooting

### Authentication Issues

If you encounter authentication errors:

1. **Use Personal Access Token:**
   - Go to GitHub Settings → Developer settings → Personal access tokens
   - Generate a new token with `repo` permissions
   - Use the token as password when pushing

2. **Or use SSH:**
   - Set up SSH keys: `ssh-keygen -t ed25519 -C "your_email@example.com"`
   - Add public key to GitHub: Settings → SSH and GPG keys
   - Use SSH URL for remote

### Large Files

If you have large files that shouldn't be in Git:
- Add them to `.gitignore`
- Use Git LFS for large assets if needed

## Next Steps

After deploying to GitHub, you can:

1. **Set up hosting:**
   - Deploy to platforms like Vercel, Netlify, or Heroku
   - Or use traditional hosting with SSH deployment

2. **Add CI/CD:**
   - The GitHub Actions workflow is already set up
   - Customize it for your deployment needs

3. **Set up domain:**
   - Configure custom domain in your hosting provider
   - Update DNS settings

## Support

If you encounter any issues during deployment, check:
- Git is properly installed and configured
- GitHub repository exists and you have access
- All required files are committed
- `.gitignore` is properly configured

---

**Happy Deploying! 🎉**

