/** @type {import('tailwindcss').Config} */
module.exports = {
  content: require('fast-glob').sync(['**/*.php', '../../plugins/joanantonrechi/**/*.php']),
  theme: {
    extend: {
      container: {
        center: true,
        padding: '1rem',
      },
      colors: {
        primary: {
          100: "#fcfcfa",
          200: "#faf8f5",
          300: "#f7f5f0",
          400: "#f5f1eb",
          500: "#f2eee6",
          600: "#c2beb8",
          700: "#918f8a",
          800: "#615f5c",
          900: "#30302e"
        },
        gray: {
          100: "#ededec",
          200: "#dbdad8",
          300: "#cac8c5",
          400: "#b8b5b1",
          500: "#a6a39e",
          600: "#85827e",
          700: "#64625f",
          800: "#42413f",
          900: "#212120"
        },
        black: {
          100: "#d2d2d2",
          200: "#a4a5a5",
          300: "#777779",
          400: "#494a4c",
          500: "#1c1d1f",
          600: "#161719",
          700: "#111113",
          800: "#0b0c0c",
          900: "#000000"
        },
        pink: {
          100: "#f4dae1",
          200: "#e8b4c3",
          300: "#dd8fa6",
          400: "#d16988",
          500: "#c6446a",
          600: "#9e3655",
          700: "#772940",
          800: "#4f1b2a",
          900: "#280e15"
        },
      },
      fontFamily: {
        'montserrat': ['Montserrat', 'sans-serif'],
      },
    },
  },
  plugins: [
  ],
}
