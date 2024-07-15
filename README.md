# aima-developpement.fr

<a href="https://skillicons.dev"><img src="https://skillicons.dev/icons?i=html,css,php,js,svg,git,github,githubactions,figma,vscode"/></a>

This repository contains the source code for the [aima-developpement.fr](https://www.aima-developpement.fr) website.

Uses [PHPMailer](https://github.com/PHPMailer/PHPMailer)

Uses [AutoSitemapUpdater](https://github.com/YoruKiwi/AutoSitemapUpdater)

Uses [AutoDeployToFTP](https://github.com/YoruKiwi/AutoDeployToFTP)

Uses [AutoCopyright](https://github.com/YoruKiwi/AutoCopyright)

![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/AIMA-Dev/aima-developpement.fr/sitemap.yml?label=CI-AutoSitemapUpdater)
![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/AIMA-Dev/aima-developpement.fr/codeql.yml?label=CI-CodeQL)
![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/AIMA-Dev/aima-developpement.fr/phpmd.yml?label=CI-PhpMD)
![GitHub Actions Workflow Status](https://img.shields.io/github/actions/workflow/status/AIMA-Dev/aima-developpement.fr/deploy.yml?label=CD-AutoDeployToFTP)

## Installation

To install and run the website locally, follow these steps:

1. Clone the repository: `git clone https://github.com/AIMA-Dev/aima-developpement.fr.git`
2. Navigate to the project directory: `cd aima-developpement.fr`

## Usage

Create a .env file and setup these fields <br>
`ENCRYPTION_KEY=` <br>
`DB_HOST=` <br>
`DB_USER=` <br>
`DB_NAME=` <br>
`DB_PASS=` <br>

Once the development server is running, you can access the website at `http://localhost:3000` or at `127.0.0.1:3000` 

## Contributing

If you would like to contribute to this project, please follow these guidelines:

1. Fork the repository
2. Create a new branch: `git checkout -b my-feature`
3. Make your changes and commit them: `git commit -am 'Add some feature'` note that your commit message may start with a [gitmoji](https://gitmoji.dev/)
4. Push the branch to your forked repository: `git push origin my-feature`
5. Submit a pull request

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more information.
