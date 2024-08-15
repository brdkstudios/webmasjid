/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/views/app.blade.php",
    "./resources/js/app.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      fontFamily: {
        sans: ['Montserrat','Roboto','Open Sans']
      }
    },
  },
  plugins: [],
}


