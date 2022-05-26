const { defineConfig } = require('@vue/cli-service')
module.exports = defineConfig({
  transpileDependencies: true,
  devServer: {
    proxy: "https://powerful-garden-13553.herokuapp.com/"
  }
})
