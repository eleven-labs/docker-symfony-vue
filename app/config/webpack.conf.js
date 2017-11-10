const path = require('path');
const ExtractTextPlugin = require('extract-text-webpack-plugin');
const webpack = require('webpack');
const autoprefixer = require('autoprefixer');

module.exports = {
  entry: {
    page1: './src/AppBundle/Resources/js/page1/entrypoint.js',
    page2: './src/AppBundle/Resources/js/page2/entrypoint.js',
  },
  output: {
    path: path.resolve(__dirname, '../../src/AppBundle/Resources/public'),
    filename: 'js/[name].js',
  },
  module: {
    rules: [
      {
        test: /\.vue$/,
        loader: 'vue-loader',
        options: {
          scss: 'style!css!sass',
        },
      },
      {
        test: /\.js$/,
        loader: 'babel-loader',
        exclude: /node_modules/,
      },
      {
        test: /\.s[a|c]ss$/,
        use: ExtractTextPlugin.extract({
          fallback: 'style-loader',
          use: [
            'css-loader',
            'postcss-loader',
            {
              loader: 'postcss-loader',
              options: {
                plugins: [
                  autoprefixer({
                    remove: false,
                    browsers: [
                      'last 2 versions',
                      'Chrome >= 52',
                      'FireFox >= 44',
                      'Safari >= 7',
                      'ie >= 10',
                      'last 4 Edge versions',
                    ],
                  }),
                ],
              },
            },
            'sass-loader',
          ],
        }),
      },
      {
        test: /\.(jpg|png|svg)$/,
        loader: 'file-loader',
      },
    ],
  },
  plugins: [
    new ExtractTextPlugin({
      filename: 'css/style.css',
    }),
    new webpack.LoaderOptionsPlugin({
      options: { sassLoader: { includePaths: [path.resolve(__dirname, '../node_modules')] } },
    }),
    new webpack.DefinePlugin({
      'process.env': {
        NODE_ENV: `'${process.env.NODE_ENV}'`,
      },
    }),
  ],
};
