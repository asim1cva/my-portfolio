# 🚀 Quick GitHub Deployment Commands

Copy and paste these commands to deploy your portfolio to GitHub:

## First Time Setup

```bash
# 1. Initialize Git repository
git init

# 2. Add all files
git add .

# 3. Create initial commit
git commit -m "Initial commit: Laravel portfolio"

# 4. Add your GitHub repository (replace with your actual repo URL)
git remote add origin https://github.com/asim1cva/my-portfolio.git

# 5. Rename branch to main (if needed)
git branch -M main

# 6. Push to GitHub
git push -u origin main
```

## Subsequent Updates

```bash
# 1. Add changed files
git add .

# 2. Commit changes
git commit -m "Your commit message here"

# 3. Push to GitHub
git push
```

## Alternative: Using SSH

If you prefer SSH authentication:

```bash
# Add SSH remote instead
git remote add origin git@github.com:YOUR_USERNAME/YOUR_REPO_NAME.git

# Then push as usual
git push -u origin main
```

## Create GitHub Repository First

Before running the commands above, create a new repository on GitHub:

1. Go to https://github.com/new
2. Enter repository name (e.g., `my-portfolio`)
3. Choose Public or Private
4. **Don't** initialize with README, .gitignore, or license
5. Click "Create repository"
6. Copy the repository URL
7. Use it in step 4 above

## Troubleshooting

### Authentication Error
```bash
# Use Personal Access Token or SSH keys
# See DEPLOYMENT.md for detailed instructions
```

### Branch Already Exists
```bash
# If main branch already exists on GitHub
git pull origin main --allow-unrelated-histories
git push -u origin main
```

### Check Remote URL
```bash
# View current remote
git remote -v

# Update remote URL if needed
git remote set-url origin https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git
```

---

**Pro Tip:** Use the `deploy.sh` script for automated deployment:
```bash
chmod +x deploy.sh
./deploy.sh
```

