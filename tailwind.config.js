const colors = require('tailwindcss/colors')

module.exports = {
  purge: [
    './resources/**/*.blade.php',
    './resources/**/*.js',
    './resources/**/*.vue',
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors : {
        blueGray : colors.blueGray
      },
      fontFamily: {
        'verdana' : ['Verdana'],
      }
    },
  },
  variants: {
    extend: {
      backgroundColor: ['active','odd']
    },
  },
  plugins: [],
}
