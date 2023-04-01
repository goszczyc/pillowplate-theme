const path = require("path");

const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const TsconfigPathsPlugin = require("tsconfig-paths-webpack-plugin");
const TerserPlugin = require("terser-webpack-plugin");

module.exports = {
  entry: ["./src/sass/theme.scss", "./src/ts/"],
  output: {
    path: path.resolve(__dirname, "./dist"),
    filename: "js/[name].js",
  },
  watchOptions: {
    poll: true,
    ignored: /node_modules/,
  },
  plugins: [
    new MiniCssExtractPlugin({
      filename: "styles/theme.css",
    }),
  ],
  module: {
    rules: [
      {
        test: /\.tsx?$/,
        use: "ts-loader",
        exclude: /node_modules/,
      },
      {
        test: [/\.sass$/i, /\.scss$/i, /\.css$/i],
        use: [
          MiniCssExtractPlugin.loader,
          {
            loader: "css-loader",
          },
          {
            loader: "postcss-loader",
            options: {
              postcssOptions: {
                plugins: [
                  [
                    "postcss-preset-env",
                    {
                      browsers: "last 6 versions",
                    },
                  ],
                ],
              },
            },
          },
          {
            loader: "sass-loader",
            options: {
              sourceMap: true,
            },
          },
        ],
      },
    ],
  },
  resolve: {
    extensions: [".tsx", ".ts", ".js", ".json"],
    plugins: [
      new TsconfigPathsPlugin({
        configFile: "./src/ts/tsconfig.json",
        baseUrl: path.resolve(__dirname, "./src/ts"),
      }),
    ],
  },
};
