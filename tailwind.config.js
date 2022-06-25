/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./app/Views/**/*.{html,php,js}","./app/Config/**/*.{html,php,js}", "./app/**/*.{html,php,js}"],
  // content: ["./app/Views/layout/*.{html,php,js}","./app/Views/pages/*.{html,php,js}"],
  theme: {
    extend: {},
  },
  plugins: [],
  important: true,
}
