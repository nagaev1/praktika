/** @type {import('tailwindcss').Config} */
export default {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {
      colors: {
        'th-green-dark': '#089E68',
        'th-green': '#04BA78',
        'th-bg-dark': '#E2E3CC',
        'th-bg': '#FDFFE4'
      }
    },
  },
  plugins: [],
}