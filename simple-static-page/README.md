# Simple Static Page

This is a simple static webpage project that includes an HTML file, a CSS file, and a JavaScript file.

## How to Deploy to Vercel

Vercel is a cloud platform for static sites and Serverless Functions that fits perfectly with your workflow. It enables developers to host websites and web services that deploy instantly, scale automatically, and require no supervision, all with no configuration.

Follow these steps to deploy this project to Vercel:

### 1. Sign up for Vercel

If you don't have a Vercel account, you'll need to create one. You can sign up with your GitHub, GitLab, or Bitbucket account.

### 2. Install the Vercel CLI

The Vercel Command Line Interface (CLI) allows you to deploy your project from the command line. You can install it using npm:

```bash
npm install -g vercel
```

### 3. Log in to your Vercel account

After installing the Vercel CLI, you need to log in to your Vercel account:

```bash
vercel login
```

This will open a new tab in your browser asking you to log in to your Vercel account.

### 4. Deploy the project

Navigate to the `simple-static-page` directory in your terminal and run the following command:

```bash
vercel
```

The Vercel CLI will ask you a series of questions to configure your project. Here's how you should answer them:

*   **Set up and deploy “~/path/to/your/project/simple-static-page”?** `[Y/n]` - **Y**
*   **Which scope do you want to deploy to?** - Choose your Vercel account.
*   **Link to existing project?** `[y/N]` - **N**
*   **What’s your project’s name?** - You can keep the default (`simple-static-page`) or enter a new one.
*   **In which directory is your code located?** `./` - Press **Enter** to accept the default.

Vercel will then deploy your project and provide you with a unique URL for your deployment.

### Alternative: Deploying with Git

You can also deploy your project by connecting your Git repository (GitHub, GitLab, or Bitbucket) to Vercel.

1.  **Push your project to a Git repository.**
2.  **Go to your Vercel dashboard and click "New Project".**
3.  **Import your Git repository.**
4.  **Configure the project:**
    *   **Framework Preset:** Select `Other`.
    *   **Build & Development Settings:** Leave the defaults.
5.  **Click "Deploy".**

Vercel will automatically deploy your project and will redeploy it every time you push a new commit to your repository.
