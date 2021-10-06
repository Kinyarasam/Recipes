module.exports = {
  purge: [
    './storage/framework/views/*.php',
    './resources/**/*.blade.php',
    // './resources/**/*.vue',
    // './resources/**/*.js',
    
  ],
  darkMode: false, // or 'media' or 'class'
  theme: {
    extend: {
      colors: {
        primary: '#FF6363',
        secondary: {
          100: 'E2E2D5',
          200: '888883',
        },
        fontFamily: {
          body: ['Nunito']
        }
      },
    },
  },
  variants: {
    extend: {},
  },
  plugins: [],
}
