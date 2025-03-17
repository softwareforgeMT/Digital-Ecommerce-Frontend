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
        'gradient-purple-pink': "linear-gradient(to right, #7068DE, #D85AB9)",
      },
      colors: {
        gold: "#B88E2F",
        softCream: "#FCF8F3",
      },
    },
  },
  plugins: [],
  darkMode:'class',
}