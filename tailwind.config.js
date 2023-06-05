/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    fontFamily:{
      'outfit' : ['Outfit', 'sans-serif'],
    },
    extend: {
    },
  },
  plugins: [],
}