/** @type {import('tailwindcss').Config} */
/* eslint-disable */

module.exports = {
  content: ["./**/*.php", "./src/*.css"],
  theme: {
    extend: {
      colors: {
        primary: {
          50: "#f1fff8",
          100: "#e3fef2",
          200: "#c8fde4",
          300: "#acfdd7",
          400: "#91fcc9",
          500: "#75fbbc",
          600: "#5ec996",
          700: "#469771",
          800: "#2f644b",
          900: "#173226",
        },
      },
    },
  },
  plugins: [require("daisyui")],
};
