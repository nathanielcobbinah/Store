// /** @type {import('tailwindcss').Config} */
// module.exports = {
//   content: [],
//   theme: {
//     extend: {},
//   },
//   plugins: [],
// }


/** @type {import('tailwindcss').Config} */
module.exports = {
  // content: ["./src/**/*.{html,js}"],
  content: ["./src/**/*.{html,js,jsx,ts,tsx}"], 
  theme: {
    screens: {
      'xs': '475px',
    },
    extend: {},
  },
  plugins: [],
}