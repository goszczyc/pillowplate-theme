/** @type {import('tailwindcss').Config} */
module.exports = {
  mode: "jit",
  content: [
    "./index.php",
    "./header.php",
    "./footer.php",
    "./single.php",
    "./single-offer.php",
    "./single-documents.php",
    "./page-templates/**/*.php",
    "./template-parts/**/*.php",
    "./components/**/*.php",
    "./src/ts/**/*/.ts"
  ],
  theme: {
    extend: {
      animation: {
        'load' : 'load 400ms ease-in-out alternate infinite',
        'load-100': 'load 400ms 100ms ease-in-out alternate infinite',
        'load-200': 'load 400ms 200ms ease-in-out alternate infinite'
      },
      keyframes: {
        load: {
          '0%': {height: '0px'},
          '100%' : {height: '12px'}
        }
      }
    },
    screens: {
      xs: "576px",
      sm: "768px",
      md: "992px",
      lg: "1200px",
      xl: "1400px",
      "2xl": "1600px",
    },
    container: {
      padding: "20px",
      screens: {
        lg: "1744px",
      },
    },
    colors: {
      primary: "#e30613",
      white: "#fefefe",
      gray: "#9b9b9b",
      dark: "#1f1f1f",
      current: "currentColor",
      black: "#010101",
    },
    borderWidth: {
      DEFAULT: "1px",
      3: "3px",
    },
  },
  plugins: [
    require('@tailwindcss/typography'),
  ],
};
