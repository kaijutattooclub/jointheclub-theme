/* eslint-disable */
/** @type {import('tailwindcss').Config} */
import daisyui from "daisyui";

module.exports = {
  content: ["./**/*.php", "./src/**/*.css"],
  theme: {
    extend: {
      aspectRatio: {
        "16/9": "16 / 9",
        "21/9": "21 / 9",
      },
      colors: {
        "kaiju-primary": "#75fbbc",
        "kaiju-stroke": "#1e3a3e",
        "kaiju-hover": "#6CD8A5",
      },
    },
  },
  daisyui: {
    themes: [
      {
        kaiju: {
          primary: "#75fbbc",
          secondary: "#00e000",
          accent: "#75fbbc",
          neutral: "#00201e",
          "base-100": "#f67bb6",
          info: "#67e8f9",
          success: "#4ade80",
          warning: "#ffa022",
          error: "#ef4444",
        },
      },
    ],
  },
  plugins: [daisyui],
};
