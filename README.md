<!-- PROJECT LOGO -->
<br />
<div align="center">
  <a href="https://github.com/github_username/repo_name">
    <img src="/readme%20images/project%20logo.png" alt="Logo" width="150" height="150">
  </a>

<h3 align="center">Flatpack - Estate websop</h3>

  <p align="center">
    Flatpack aims to create a simple website, where users can buy and sell properties, similar to product webshops
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
    <li><a href="#developers">Contributing</a></li>
    <li><a href="#contact">Contact</a></li>
  </ol>
</details>



<!-- ABOUT THE PROJECT -->
## About The Project

![Product Main Screen Shot](/readme%20images/main%20screenshot.png)

In this application, users are able to sell, buy and brows properties and estates, 
similar to how it works on webshops.
The user can create an account, which they can use to buy, sell, brows and save estates.  
The application's backend has been written in PHP, using the Laravel framework.

<p align="right">(<a href="#readme-top">back to top</a>)</p>



### Built With

* [![React][React.js]][React-url]
* [![Laravel][Laravel.com]][Laravel-url]
* [![Vite][Vite]][Vite-url]

<p align="right">(<a href="#readme-top">back to top</a>)</p>


## Getting Started
### Prerequisites

This project has been containerized, using Docker. You will need the Docker desktop ap, in order to run it.

### Installation

1. Get a free API Key at [https://example.com](https://example.com)
2. Clone the repo
   ```sh
   git clone https://github.com/github_username/repo_name.git
   ```
3. Install NPM packages
   ```sh
   npm install
   ```
4. Enter your API in `config.js`
   ```js
   const API_KEY = 'ENTER YOUR API';
   ```
5. Change git remote url to avoid accidental pushes to base project
   ```sh
   git remote set-url origin github_username/repo_name
   git remote -v # confirm the changes
   ```

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- USAGE EXAMPLES -->
## Usage

On the homepage, you can see 3 main parts. 
* The __menu bar__ :You can access certain functionalities from this bar. 
For example, logging in, registering, return to home.<br>
![menubar](/readme%20images/logged%20out%20menu%20bar.png)<br>
When logged in, there are further options, like __My favorites__, __My properties__ and __Upload__
![menubar](/readme%20images/logged%20in%20menu%20bar.png)
* The __search parameters__: Search parameters help with finding the right estate. There are several properties to search by (see the screenshot)
<br>Default:
![search-parameters](/readme%20images/default%20search%20parameters.png)
<br>With parameters:
![search-parameters](/readme%20images/search%20parameters%20example.png)
* The __estate list__: This is the list that shows the right estates, depending on the search parameters. By default, it shows all the available estates on the site
![estate-list](/readme%20images/main%20screenshot.png)
* The __estate card__: There are several estate cards on the site, depending on the search result. They display a few properties of the estates, a main screenshot (generated estates have the fallback images) and the __Read more__ button. It will open the estate's page

The __Estate page__ shows all the information about the estate. For example,
* Images
* Seller
* Price
* Size
* Rooms
* Type (home, flat)
* etc...

Here, the user can buy, or add the estate to its favorites when logged in

![estate-properties](/readme%20images/estate%20properties%20example.png)

When logged in clicking the __My favorites__ button will display all the users favorite estates

![favorites](/readme%20images/favorites.png)

When logged in, clicking on the __Upload__ button, will take the user to a page, where they can submit their own estates
![upload-main](/readme%20images/upload.png)
Here, the user is required to put in all information and properties about the estate. 
<br>
<br>
After pressing next, the user can add multiple images to be displayed on the site
![upload-images](/readme%20images/upload%20images.png)

When the user is finished, this estate will be displayed on the site. The user can also see their properties, by clicking the __My properties__ button in the menu bar.
![menu-bar-my-properties](/readme%20images/my-properties.png)

When the user who owns the estate opens the estate's site, there will be extra options next to the __buy__ button. These new options will allow the user to remove or edit the estate (In the current state, these options are NON FUNCTIONAL)


<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- DEVELOPERS -->
## Developers

* Adam Moór
* Attila Gonda
* Patrik Bódis


<p align="right">(<a href="#readme-top">back to top</a>)</p>

<!-- CONTACT -->
## Contact

Adam Moór - [GitHub](https://github.com/MoorAdam) - moor.adam.is@gmail.com

Project Link: [Flatpack-estate-webshop](https://github.com/MoorAdam/Flatpack-estate-website)

<p align="right">(<a href="#readme-top">back to top</a>)</p>



<!-- MARKDOWN LINKS & IMAGES -->
<!-- https://www.markdownguide.org/basic-syntax/#reference-style-links -->
[contributors-shield]: https://img.shields.io/github/contributors/github_username/repo_name.svg?style=for-the-badge
[contributors-url]: https://github.com/github_username/repo_name/graphs/contributors
[forks-shield]: https://img.shields.io/github/forks/github_username/repo_name.svg?style=for-the-badge
[forks-url]: https://github.com/github_username/repo_name/network/members
[stars-shield]: https://img.shields.io/github/stars/github_username/repo_name.svg?style=for-the-badge
[stars-url]: https://github.com/github_username/repo_name/stargazers
[issues-shield]: https://img.shields.io/github/issues/github_username/repo_name.svg?style=for-the-badge
[issues-url]: https://github.com/github_username/repo_name/issues
[license-shield]: https://img.shields.io/github/license/github_username/repo_name.svg?style=for-the-badge
[license-url]: https://github.com/github_username/repo_name/blob/master/LICENSE.txt
[linkedin-shield]: https://img.shields.io/badge/-LinkedIn-black.svg?style=for-the-badge&logo=linkedin&colorB=555
[linkedin-url]: https://linkedin.com/in/linkedin_username
[product-screenshot]: images/screenshot.png
[Next.js]: https://img.shields.io/badge/next.js-000000?style=for-the-badge&logo=nextdotjs&logoColor=white
[Next-url]: https://nextjs.org/
[React.js]: https://img.shields.io/badge/React-20232A?style=for-the-badge&logo=react&logoColor=61DAFB
[React-url]: https://reactjs.org/
[Vue.js]: https://img.shields.io/badge/Vue.js-35495E?style=for-the-badge&logo=vuedotjs&logoColor=4FC08D
[Vue-url]: https://vuejs.org/
[Angular.io]: https://img.shields.io/badge/Angular-DD0031?style=for-the-badge&logo=angular&logoColor=white
[Angular-url]: https://angular.io/
[Svelte.dev]: https://img.shields.io/badge/Svelte-4A4A55?style=for-the-badge&logo=svelte&logoColor=FF3E00
[Svelte-url]: https://svelte.dev/
[Laravel.com]: https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white
[Laravel-url]: https://laravel.com
[Bootstrap.com]: https://img.shields.io/badge/Bootstrap-563D7C?style=for-the-badge&logo=bootstrap&logoColor=white
[Bootstrap-url]: https://getbootstrap.com
[JQuery.com]: https://img.shields.io/badge/jQuery-0769AD?style=for-the-badge&logo=jquery&logoColor=white
[JQuery-url]: https://jquery.com 
[Vite-url]: https://vite.dev
[Vite]: https://img.shields.io/badge/vite-20232A?style=for-the-badge&logo=vite&logoColor=61DgFB
[GitHub]: https://img.shields.io/badge/GitHub-gray?style=flat-square&logo=github&logoColor=white&logoSize=60px&labelColor=black&color=black
