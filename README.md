# showdown-dan-boilerplate

**!WORK IN PROGRESS!**

A simple project to use as a Boilerplate for loading Markdown content using Showdown.

This project is using **PHP** and **Javascript**. The main goal of this project is to use Javascript to render Markdown on the client side (using Showdown), so I don't need to worry if my server side language can handle or not Markdown documents. This way I can use any language I want on server side and I will still have the same result.

**Why PHP in this project?**

That's the language I am used to. I'm only using it to "see" files on server side and "show" on the front end, just it. You can use any language you like to get the same goal, even Javascript if you are using an Node server.

The code itself is very self explanatory and well commented, but fell free to open an issue if you have any question or suggestion. Of course, Fork it and use wherever you want, PR are welcome too.

## Structure

- assets
- libs
- documents

**assets**

This folder has some CSS and JS assets. The main file that has all Showdown loading stuff is `assets/js/main.js`. Go check it if you want to customize Showdown settings.

**libs**

This folders keeps all the libraries that are in use on this project. Make sure you have this folder updated if you are not using CDN links.

**documents**

This folder is just to keep the Markdown documents file. On this project I`ll set up a Style Guide file and a simple example of a book. You can organize this folder the way you want.

## Customize it!

A really interesting thing in Showdown is that you can create your own patterns on Markdown documents. To do that, you can [create your own extension]() with your own logic.
I`ve included a simple example where I can wrap things inside a `span` with a `.center` class. Don't worry why, I was just experimenting. So when you want to wrap something, you can write like this:

~~~ markdown
!C
**This will be centered**
!/C
~~~

This will output:

~~~ HTML
<span class="center">
   <strong>This will be centered</strong>
</span>
~~~

So, you have the option to set up your own customized Markdown and be sure that it will be rendered the way you want.

## Markdown Sintax

The Sintax you can use to write your Markdown files are:

- https://github.com/showdownjs/showdown/wiki/Showdown's-Markdown-syntax
- http://daringfireball.net/projects/markdown/syntax

## Google Code Prettify Themes

Fell free to change any theme. This is the list I was using to choose from:

- https://cdn.rawgit.com/google/code-prettify/master/styles/index.html
- http://jmblog.github.io/color-themes-for-google-code-prettify/

- - -

## To Do

- Implement SASS Style

- - -

## Credits

I don't own the Showdown project and I don't want to take credits for their (amazing, by the way) work. I just got in a situation where I needed some kind of project boilerplate to load Markdown content and convert to HTML with pure Javascript, so I can use it with any language I prefer (in this case, php).

Libraries used on this project:

- [Showdown](https://github.com/showdownjs/showdown) - The library that makes it possible to convert Markdown into HTML
- [Google Code Prettify Extension](https://github.com/showdownjs/prettify-extension) - Showdown extension that adds the [Google Code Prettify](https://github.com/google/code-prettify) feature on the project.
- [Markdown7 Theme](http://jasonm23.github.io/markdown-css-themes/markdown7.css) - Markdown Theme that I liked to work with.
- [Font Awesome](https://fortawesome.github.io/Font-Awesome/) - Because it`s really awesome :)
- [Normalize](https://necolas.github.io/normalize.css/) - For css reset.
- [Kube](https://imperavi.com/kube/) - CSS Framework, just to speed things up.
