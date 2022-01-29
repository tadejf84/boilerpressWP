const path = require("path");
const BrowserSyncPlugin = require("browser-sync-webpack-plugin");
const MiniCssExtractPlugin = require("mini-css-extract-plugin");
const CopyPlugin = require("copy-webpack-plugin");
const autoprefixer = require("autoprefixer");

module.exports = {
    // Entry point
    entry: "./src/js/main.js",

    // JS Output
    output: {
        path: path.resolve(__dirname, "dist/js"),
        filename: "main.min.js",
    },

    // Set Webpack mode - default is production
    mode: "development",

    plugins: [
        // BrowserSync options
        new BrowserSyncPlugin({
            host: "localhost",
            port: 3000,
            proxy: "http://test.local/",
            files: ["../**/*.php"],
        }),
        // Extracts the compiled CSS from the SASS files defined in the entry
        new MiniCssExtractPlugin({
            filename: "../css/main.min.css",
        }),
        // Move fonts and images from src to dist
        new CopyPlugin({
            patterns: [
                {
                    from: "./src/img",
                    to: "../img",
                    globOptions: {
                        ignore: ["*.md"],
                    },
                },
                {
                    from: "./src/fonts",
                    to: "../fonts",
                    globOptions: {
                        ignore: ["*.md"],
                    },
                },
            ],
        }),
    ],

    module: {
        rules: [
            // Babel config
            {
                test: /\.m?js$/,
                exclude: /(node_modules|bower_components)/,
                use: {
                    loader: "babel-loader",
                    options: {
                        presets: ["@babel/preset-env"],
                    },
                },
            },
            // CSS/SASS config
            {
                test: /\.s[ac]ss$/i,
                use: [
                    MiniCssExtractPlugin.loader,
                    {
                        loader: "css-loader",
                        options: {
                            importLoaders: 2,
                        },
                    },
                    {
                        loader: "postcss-loader",
                        options: {
                            postcssOptions: {
                                plugins: [
                                    [
                                        "autoprefixer",
                                        {
                                            // Options
                                        },
                                    ],
                                ],
                            },
                        },
                    },
                    // Compiles Sass to CSS
                    {
                        loader: "sass-loader",
                        options: {
                            sourceMap: false,
                            sassOptions: {
                                outputStyle: "compressed",
                            },
                        },
                    },
                ],
            },
        ],
    },
};
