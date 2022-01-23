
# Wordpress TwentyTwenty Child Theme

<br/>

## Overview 
Thank you for taking a look at my repository, and welcome! 

The templates in this portfolio extend the [twentytwenty wordpress theme](https://github.com/WordPress/twentytwenty) by incorporating CSS frameworks and preprocessors, JavaScript, PHP, and HTML. 

<br/>

## Getting Started

### Adding Child Theme to WordPress 
- Download the .zip file of this repo
- In the WordPress (WP) dashboard, install the twentytwenty theme
- Then, navigate to **Appearance -> Themes -> Add New -> Upload Theme** and upload the wordpress-theme-child.zip file
- Activate the child theme to see the templates

### Local Installation
- Have a local or global installation of  [Node.js](https://nodejs.org/en/)   
- Download, clone, or fork this repo to your local environment 
- Navigate to the folder via CLI or terminal and type `npm install` to install dependencies 

### To auto-compile Sass: 
- In the package.json file, add the following code to your `scripts` block `"sass": "node-sass -w assets/sass/style.scss  -o ./ --recursive"` 
- In the terminal, type `npm run sass` to start watching the sass file  

<br/>

## What I Learned From Working On...
### The Landing Page Template
- How to capture and utilize data from Advanced Custom Fields to populate a template
- How to use conditionals in PHP to load content 
- PHP has great documentation 
- Basically, how to set up a WordPress site 

### The Gallery Template
- The purpose of child themes 
- That the `.lenth` property does not work on HTMLCollections
- The importance of uniform styling while naming classes, file names, etc. 
- That you *can* incorporate JS and PHP if done correctly 
- How to override CSS stylesheet with wp_enqueue_style()

### **Big thank you** to [Rocky Kev](https://www.heyitsrocky.com/) for all of the feedback, support, and patience! 
![](https://media.giphy.com/media/uWlpPGquhGZNFzY90z/giphy.gif)

