const colors = require('tailwindcss/colors')

module.exports = {
  purge: [],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors : {
        blueGray : colors.blueGray
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
