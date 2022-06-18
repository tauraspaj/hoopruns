module.exports = {
  content: [
    "./resources/**/*.blade.php",
    "./resources/**/*.js",
  ],
  theme: {
    container: {
      center: true,
      padding: '1rem',
    },
    extend: {
      fontFamily: {
        'barlow': ['Barlow', 'sans-serif'],
        'bebas': ['Bebas Neue', 'cursive'],
        'roboto': ['Roboto', 'sans-serif']
      }
    },
  },
  plugins: [],
}
