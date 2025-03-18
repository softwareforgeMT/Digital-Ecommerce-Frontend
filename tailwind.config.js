 /** @type {import('tailwindcss').Config} */
 module.exports = {
  content: [
    "./src/**/*.html",
    "./src/**/*.js",
    "./src/**/*.php",
    "./src/**/**/*.php",
  ],
  theme: {
    extend: {
      backgroundImage: {
        'primary-gradient': "linear-gradient(to right, #7068DE, #D85AB9)",
      },
      colors: {
        primary: "#B88E2F", //gold
        secondary: "#F2E8DC", //softCream
      },
    },
  },
  plugins: [],
  darkMode:'class',
}