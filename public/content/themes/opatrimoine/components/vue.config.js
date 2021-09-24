module.exports = {
  transpileDependencies: [
    'vuetify'
  ],
  css: {
    loaderOptions: {
      scss: {
        additionalData: `@import "src/assets/main.scss";`
      }
    }
  },

  // permet de ne pas renommer les noms de dossier n'importe comment dans le fichier /dist
  filenameHashing: false,
  publicPath: './',

  chainWebpack: config => {
    // config.plugins.delete('html');
    config.plugins.delete('preload');
    config.plugins.delete('prefetch');
    config.optimization.delete('splitChunks')
  },
  devServer: {
    inline: false, // https://webpack.js.org/configuration/dev-server/#devserver-inline
    writeToDisk: true,
    hot: false,
  },
  // productionSourceMap: false
}