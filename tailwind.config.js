const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
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
