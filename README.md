# admintoolkit-laravel
AdminToolkit Laravel version. AdminToolkit is an admin template based on TailwindCSS and Vanilla JavaScript developed by https://github.com/mostafizurhimself 

## Install

Add package name and github link in `composer.json`

```bash
  "require-dev": {
        "smartwebsource/admintoolkit-laravel": "dev-main"
    }
```

```bash
"repositories": [
        {
            "type": "vcs",
            "url": "https://github.com/SmartWebSource/admintoolkit-laravel"
        }
    ],
```

Open project termianl and run this command

```bash
   composer update
```

publish assests 

```bash
php artisan vendor:publish --provider="Smartwebsource\Admintoolkit\AdminToolkitServiceProvider" --force
```

update your `package.json` file according to bellow code

```bash
{
    "private": true,
    "type": "module",
    "scripts": {
        "dev": "vite",
        "build": "vite build",
        "start": "vite preview",
        "format": "prettier --write \"src/**/*.{js,css,scss,html}\""
    },
    "devDependencies": {
        "@mertasan/tailwindcss-variables": "^2.5.1",
        "@tailwindcss/forms": "^0.5.3",
        "@tailwindcss/typography": "^0.5.9",
        "autoprefixer": "^10.4.19",
        "axios": "^1.6.4",
        "glob": "^8.1.0",
        "laravel-vite-plugin": "^1.0",
        "postcss": "^8.4.38",
        "prettier-plugin-tailwindcss": "^0.2.3",
        "sass": "^1.75.0",
        "tailwindcss": "^3.4.3",
        "vite": "^5.0"
    },
    "dependencies": {
        "@amcharts/amcharts5": "^5.3.11",
        "@amcharts/amcharts5-fonts": "^5.0.1",
        "@amcharts/amcharts5-geodata": "^5.1.0",
        "@floating-ui/dom": "^1.2.1",
        "@fortawesome/fontawesome-free": "^6.3.0",
        "@fullcalendar/core": "^6.1.5",
        "@fullcalendar/daygrid": "^6.1.5",
        "@fullcalendar/interaction": "^6.1.5",
        "@fullcalendar/list": "^6.1.5",
        "@fullcalendar/timegrid": "^6.1.5",
        "@tabler/icons-webfont": "^2.2.0",
        "@yaireo/tagify": "^4.17.8",
        "accordion-js": "^3.3.2",
        "apexcharts": "^3.37.2",
        "boxicons": "^2.1.4",
        "dropzone": "latest",
        "feather-icons": "^4.29.0",
        "flag-icons": "^6.6.6",
        "flatpickr": "^4.6.13",
        "highlight.js": "^11.7.0",
        "js-beautify": "^1.14.7",
        "quill": "^1.3.6",
        "resize-observer-polyfill": "^1.5.1",
        "simple-datatables": "^7.2.0",
        "simplebar": "^6.2.1",
        "spinkit": "^2.0.1",
        "swiper": "^9.0.5",
        "tippy.js": "^6.3.7",
        "toastify-js": "^1.12.0",
        "tom-select": "^2.2.2"
    }
}

```

update your `vite.config.js` file according to bellow code

```bash
import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import { resolve } from 'path';
import glob from 'glob';

export default defineConfig({
  resolve: {
    alias: {
      '@tailwind.config': resolve(__dirname, './tailwind.config.js'),
      '@': resolve(__dirname, 'resources/js'),
    },
  },
  plugins: [
    laravel({
      input: [
        'resources/css/app.css',
        'resources/scss/app.scss',
        'resources/js/app.js',
        ...glob.sync("resources/js/custom/*.js"),
        ...glob.sync("resources/js/components/*.js")
      ],
      refresh: true,
    }),
  ],
});

```

Install all js package and build assets

```bash
npm insalll
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
```

update your `tailwind.config.js` file according to bellow code

```bash
/** @type {import('tailwindcss').Config} */
import defaultTheme from 'tailwindcss/defaultTheme';
import colors from 'tailwindcss/colors';
import forms from '@tailwindcss/forms';
import variables from '@mertasan/tailwindcss-variables';
import typography from '@tailwindcss/typography';

export const themeColors = {
  primary: colors.violet,
  secondary: colors.gray,
  success: colors.emerald,
  warning: colors.amber,
  danger: colors.rose,
  info: colors.indigo,
  dark: colors.slate,
};

export default {
  darkMode: 'class',
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily: {
      sans: ['Poppins', ...defaultTheme.fontFamily.sans],
    },
    container: {
      center: true,
      screens: {
        sm: '100%',
        md: '100%',
        lg: '100%',
        xl: '100%',
        '2xl': '1536px',
      },
    },
    extend: {
      transitionProperty: {
        width: 'width',
        height: 'height',
        margin: 'margin',
      },
      keyframes: {
        'fade-in-up': {
          '0%': {
            opacity: '0',
            transform: 'translateY(10px)',
          },
          '100%': {
            opacity: '1',
            transform: 'translateY(0)',
          },
        },
        'fade-in-down': {
          '0%': {
            opacity: '0',
            transform: 'translateY(-10px)',
          },
          '100%': {
            opacity: '1',
            transform: 'translateY(0)',
          },
        },
        'fade-in': {
          '0%': {
            opacity: '0',
          },
          '100%': {
            opacity: '1',
          },
        },
        'fade-out': {
          '0%': {
            opacity: '1',
          },
          '100%': {
            opacity: '0',
          },
        },
      },
      animation: {
        'fade-in-up': 'fade-in-up 250ms ease-in-out',
        'fade-in-down': 'fade-in-down 250ms ease-in-out',
        'fade-in': 'fade-in 250ms ease-in-out',
        'fade-out': 'fade-out 250ms ease-in-out',
      },
      colors: themeColors,
      variables: {
        DEFAULT: {
          ...themeColors,
        },
      },
      borderRadius: {
        primary: '0.4rem',
      },
      typography: (theme) => ({
        DEFAULT: {
          css: {
            // Typography CSS styles
          },
        },
      }),
    },
  },
  plugins: [forms, variables, typography],
};

```


Build assests

```bash
npm run build
```

