const path = require('path'),
settings = require('./settings');

module.exports = {
  entry: {
    App: settings.themeLocation + "assets/scripts/index.js"
  },
  output: {
    path: path.resolve(__dirname, settings.themeLocation + "public/scripts"),
    filename: "scripts.js"
  },
  module: {
    rules: [
      {
        test: /\.js$/,
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env']
          }
        }
      }
    ]
  },
  mode: 'development'
}
