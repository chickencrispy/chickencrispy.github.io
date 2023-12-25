module.exports = {
  content: ["./**/*.{html,js}"],
  theme: {
    extend: {
      flex: {
        '0': '0 0 auto'
      }
    },
    fontFamily: {
      'poppins': ['Poppins', 'Sans-serif'],
      'barlow' : ['Barlow', 'Sans-serif']
    },
    fontSize: {
      xs   : '0.65rem',
      sm   : '0.75rem',
      base : '0.875rem',
      lg   : '1rem',
      xl   : '1.2rem',
      '2xl': '1.5rem'
    }
  },
  plugins: [],
}