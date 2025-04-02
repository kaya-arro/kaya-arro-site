# Overview

This is a pretty simple website; there isn't too much to say about it. If you like the design, you can pretty much copy the HTML, CSS, and JS verbatim into your own project with no hassle.

The website does have one bell and one whistle:

- The whistle: there is a PHP component that automagically recognizes galleries from subdirectories of `pics`, populates them with responsively sized images with formatting for both desktop and mobile devices, and creates corresponding drop-down menus in the site navbar. Naturally, in order to use this portion of the code, you will need to use a webhost which offers PHP.

- The bell: there is a shell script (specifically, written in `fish`; sorry if this isn't your preferred shell, but it is mine) which takes a full-resolution image and automatically creates compressed `avif` versions in a range of sizes suitable for use as thumbnail and display images on screens of various dimensions as well as `jpg` versions intended for download by the user.

# Dependences

## Local

- To do automate much everything:
  
  - `fish`

- To generate reformatted and resized images:
  
  - `ffmpeg`
  
  - `cjpegli`
  
  - ImageMagick
    
    - Provides `identify` and `magick`

- To compress the code:
  
  - `minify`

- To subset font files:
  
  - Python `fonttools`

- To update the live website from the command line:
  
  - `lftp`

- To save space by linking identical images:
  
  - `fclones`

- To make a local backup of the site:
  
  - `rsync`

## Webhost

- For the photo gallery page:
  
  - PHP

- If you want to use my `.htaccess` file; but of course you could use any other HTTP server of your preference instead.
  
  - Apache HTTP Server
  
  - The most important line in `.htaccess` might be `AddType image/avif avif`. Without that, your server might not know that `avif` files are images, which could result the server parsing images as text files if users try to `Open Image in New Tab`, for example.

# To do

- [ ] Add documentation for the `fish` scripts, especially `site-pics-make`

- [ ] Add an explanation of how to subset fonts with `fonttools`

- [ ] Add an explanation of which PHP modules are necessary and which PHP versions are supported.

- [ ] Add a better explanation of how the PHP interprets image filenames.

Don't count on me getting around to any of these things in the immediate future. I would be flattered for anyone to use parts of my code, but this project is first and foremost just my own personal website.

If there's anything in particular you'd really appreciate, you can reach out to me with polite encouragement and I may then feel motivated (or I might not, but either way I'll write you a nice message back and it won't hurt to ask).

# Legal

Copyright 2025 Kaya Arro.

This website uses a slightly modified version of Sachin Neravath's [lightGallery]([GitHub - sachinchoolur/lightGallery: A customizable, modular, responsive, lightbox gallery plugin.](https://github.com/sachinchoolur/lightGallery)) (I have removed some modules the site does not use and have added cute purple borders around preview images), an unmodified version of Nicolas Gallagher and Jonathan Neal's [normalize.css]([GitHub - necolas/normalize.css: A modern alternative to CSS resets](https://github.com/necolas/normalize.css/)), and a modified version of Manas Tungare's [On-the-fly CSS Compression](https://gist.github.com/manastungare/2625128) (modified to refer to my actual CSS files). The rest of the code hosted here is written by me.

The code hosted here is available for use under the GPLv3. See `LICENSE` or read the license [online](https://www.gnu.org/licenses/gpl-3.0.en.html).
