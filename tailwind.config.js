/** @type {import('tailwindcss').Config} */
module.exports = {
  content: ["./public/**/*.php", "./includes/**/*.php"],
  darkMode: 'class',
  theme: {
    extend: {
      colors: {
        primary: {
          DEFAULT: '#0047BB', // Azul Asaas Style
          dark: '#00358E',
          light: '#1A6BFF',
        },
        navy: {
          DEFAULT: '#0A0F1D',
          light: '#161F33',
          dark: '#050810',
        },
        surface: {
          dark: '#F4F7FA', // Background claro bancário
          light: '#FFFFFF',
        }
      },
      fontFamily: {
        sans: ['Inter', 'system-ui', '-apple-system', 'sans-serif'],
      },
    },
  },
  plugins: [],
}
