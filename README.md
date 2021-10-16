<div id="top"></div>

<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/itas-bill-dou/itas255_f21_laravel_docker">
    <img src=".docker/img/itas.png" alt="Logo" height="120">
  </a>

  <h3 align="center">Lab2 - Setup Step Debugging in PHP with Xdebug 3, Docker Compose and VS Code</h3>

  <p align="center">
    Vancouver Island University - <a href="https://www.viu.ca/programs/trades-applied-technology/information-technology-and-applied-systems-systems">
    ITAS
    </a> <br>
    Bill.Dou@itas.ca<br>
    Updated on Oct 16, 2021
    <br />
  </p>
</div>



<!-- TABLE OF CONTENTS -->
<details>
  <summary>Table of Contents</summary>
  <ol>
    <li>
      <a href="#about-the-project">About The Project</a>
      <ul>
        <li><a href="#built-with">Built With</a></li>
      </ul>
    </li>
    <li>
      <a href="#getting-started">Getting Started</a>
      <ul>
        <li><a href="#prerequisites">Prerequisites</a></li>
        <li><a href="#installation">Installation</a></li>
      </ul>
    </li>
    <li><a href="#usage">Usage</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The project

![xdebug screenshot][product-screenshot]

This project presents a way to configure the Docker container and VSCode to enable Xdebug, all that in Windows.

Note the repo branch is "xdebug" - https://github.com/itas-bill-dou/itas255_f21_laravel_docker/tree/xdebug

<p align="right">(<a href="#top">back to top</a>)</p>


### Built With

* [Docker (compose)](https://www.docker.com/)
* [Laravel](https://laravel.com)
* [XDebug](https://xdebug.org/)
* [VS Code](https://code.visualstudio.com/)

<p align="right">(<a href="#top">back to top</a>)</p>



<!-- GETTING STARTED -->
## Getting Started


### Prerequisites

Ensure you have installed [Docker](https://www.docker.com/products/docker-desktop) in your host PC.

### Installation

1. Clone the repository
   ```sh
   git clone https://github.com/itas-bill-dou/itas255_f21_laravel_docker.git
   ```
2. Copy all files in `itas255_f21_laravel_docker` into your local private workspace, let use `lab2/`. Run the `docker-compose` command to build the image and run the containers.
    ```sh
    cd lab2
    docker-composer up --build -d
    ```
3. After all containers are created, run the following commands in the workspace container:
   ```sh
    cp .env.example .env
    php artisan key:generate
    php artisan storage:link
    npm install && npm run watch
   ```
4. Configure Windows Defender Firewall

    Windows Defender Firewall treats WSL as a public network by default and blocks access. This can be fixed by adding a rule. Just run (with Powershell admin mode):
    ```powershell
    New-NetFirewallRule -DisplayName "WSL" -Direction Inbound  -InterfaceAlias "vEthernet (WSL)"  -Action Allow
    ```

<p align="right">(<a href="#top">back to top</a>)</p>


<!-- USAGE EXAMPLES -->
## Usage

Open browser with the following URL:

http://localhost:8020/

It should display:
![Laravel Homepage][laravel-homepage]

Steps to debug:
1. Run a debugging session

    In the left side panel of VSCode, select the "Debug view" (or just press `Ctrl + Shift + D`), make sure that the chosen configuration is the one you added in the file launch.json - "Listen for XDebug on Docker". Then click on the little green triangle titled "Start debugging".
2. Add breakpoints wherever you want to debug the app.
3. Refresh your browser!

Optional:
You can add [Xdebug helper](https://chrome.google.com/webstore/detail/xdebug-helper/eadndfjplgieldjbigjakmdgkmoaaaoc) to debug in Chrome.

PHPMyAdmin

http://localhost:8021/\
server:db\
username: root\
password:

<p align="right">(<a href="#top">back to top</a>)</p>


[product-screenshot]: .docker/img/xdebug.png
[laravel-homepage]: .docker/img/laravel_homepage.png