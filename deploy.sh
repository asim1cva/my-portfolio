#!/bin/bash

# GitHub Deployment Script for Laravel Portfolio
# This script helps you deploy your Laravel portfolio to GitHub

echo "🚀 Starting GitHub Deployment Process..."

# Check if git is installed
if ! command -v git &> /dev/null; then
    echo "❌ Git is not installed. Please install Git first."
    exit 1
fi

# Check if repository is already initialized
if [ ! -d ".git" ]; then
    echo "📦 Initializing Git repository..."
    git init
    echo "✅ Git repository initialized"
else
    echo "✅ Git repository already exists"
fi

# Check if .env.example exists (for reference)
if [ ! -f ".env.example" ]; then
    echo "⚠️  Warning: .env.example file not found. Make sure to create one for reference."
fi

# Add all files
echo "📝 Adding files to Git..."
git add .

# Check if there are changes to commit
if git diff --staged --quiet; then
    echo "ℹ️  No changes to commit. Everything is up to date."
else
    # Commit changes
    read -p "Enter commit message (or press Enter for default): " commit_message
    if [ -z "$commit_message" ]; then
        commit_message="Deploy portfolio to GitHub"
    fi
    
    echo "💾 Committing changes..."
    git commit -m "$commit_message"
    echo "✅ Changes committed"
fi

# Check if remote exists
if git remote | grep -q "origin"; then
    echo "✅ Remote 'origin' already exists"
    git remote -v
else
    echo "🔗 Please add your GitHub repository as remote:"
    echo "   git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git"
    echo ""
    read -p "Enter your GitHub repository URL (or press Enter to skip): " repo_url
    if [ ! -z "$repo_url" ]; then
        git remote add origin "$repo_url"
        echo "✅ Remote added: $repo_url"
    fi
fi

# Push to GitHub
echo "📤 Pushing to GitHub..."
read -p "Enter branch name (default: main): " branch_name
if [ -z "$branch_name" ]; then
    branch_name="main"
fi

# Check if branch exists
if git show-ref --verify --quiet refs/heads/$branch_name; then
    git checkout $branch_name
else
    git checkout -b $branch_name
fi

# Push to remote
if git remote | grep -q "origin"; then
    echo "🚀 Pushing to origin/$branch_name..."
    git push -u origin $branch_name
    echo "✅ Successfully pushed to GitHub!"
    echo ""
    echo "🎉 Deployment complete!"
    echo "📋 Your portfolio is now on GitHub at:"
    git remote get-url origin
else
    echo "⚠️  No remote repository configured."
    echo "   Please add your GitHub repository:"
    echo "   git remote add origin https://github.com/YOUR_USERNAME/YOUR_REPO_NAME.git"
    echo "   Then run: git push -u origin $branch_name"
fi

