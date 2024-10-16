// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
  compatibilityDate: '2024-04-03',
  devtools: { enabled: true },
  modules: [
    '@nuxtjs/tailwindcss',
    '@nuxt/fonts',
    '@nuxt/eslint',
    'nuxt-seo-experiments',
    '@nuxt/icon',
    '@nuxtjs/color-mode',
    '@nuxt/content'
  ]
})