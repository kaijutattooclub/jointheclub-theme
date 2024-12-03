[![Build Status](https://travis-ci.org/Automattic/_s.svg?branch=master)](https://travis-ci.org/Automattic/_s)

_s
===

### Download repo
```
git clone https://github.com/mikkelrask/kaijutattooclub-wordpress
cd kaijutattooclub-wordpress
```

### Install dependencies
To be able to build the CSS with [tailwind CSS](https://tailwindcss.com) and zip the built and upload ready theme you need to install these dependencies, with npm, yarn or bun (or your favourite node package manager). 
```
# with classic npm
npm install

# if you use yarn
yarn

# if you use bun
bun install
```

### Building the CSS
While working on the CSS you can start a long running process to watch for changes made to `. /src/style.css`, and auto generate a new `style.css` in the root directory every time you save
```
# 1. run the watch command
npm run watch:css
```
And make your changes in your favourite editor
```
$EDITOR src/style.css
```

Or if you have already made your wanted changes and just want to build the CSS file, you can run this
```
npm run build:css
```

### Create upload ready zip
When you are finished making your changes you can create a zip file by invoking the following command
```
npm run bundle
```
This will create `join-the-club.zip` in the root of your project. This file is ready to upload to your wordpress instance. 