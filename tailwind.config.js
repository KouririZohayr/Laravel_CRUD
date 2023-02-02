/** @type {import('tailwindcss').Config} */
module.exports = {
   content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {   backgroundImage: {
      'hero-pattern': "url('bg.jpg')"
      
    }},
  },
  plugins: [],
}
