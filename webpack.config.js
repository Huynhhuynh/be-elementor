/** 
 * Webpack config 
 */
const webpack = require( 'webpack' )
const path = require( 'path' )

module.exports = {
    mode: 'production',
    entry: './src/main.js',
    module: {
        rules: [
            { test: /\.svg$/, use: 'svg-inline-loader' },
            { test: /\.css$/, use: [ 'style-loader', 'css-loader' ] },
            { test: /\.s[ac]ss$/i, use: [ 'style-loader', 'css-loader', 'sass-loader' ] },
            { test: /\.(js)$/, use: 'babel-loader' },
            { test: /\.(png|jpe?g|gif)$/i, use: [ { loader: 'file-loader' } ] },
        ]
    },
    output: {
        path: path.resolve( __dirname, 'dist' ),
        filename: 'be-elementor.bundle.js'
    },
    plugins: [
        new webpack.ProvidePlugin( {
            $: 'jquery',
            jQuery: 'jquery',
            'window.jQuery': 'jquery'
        } ),
    ],
}