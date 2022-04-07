module.exports = {
  darkMode: "class",
  content: [
    "./storage/framework/views/*.php",
    "./resources/**/*.blade.php",
    "./resoruces/**/*.js",
    "./resources/**/*.vue",
  ],
  theme: {
    extend: {},
  },
  plugins: [require("./plugin")],
};
