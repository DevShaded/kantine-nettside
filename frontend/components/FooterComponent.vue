<script setup lang="ts">
const navigation = {
  main: [
    { name: 'Hjem', href: '/' },
    { name: 'Meny', href: '/meny' },
    { name: 'Utvalg', href: '/utvalg' },
    { name: 'Kontakt oss!', href: '/kontakt' },
  ],
}
</script>

<template>
  <footer class="bg-white">
    <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
      <nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
        <div v-for="item in navigation.main" :key="item.name" class="pb-6">
          <NuxtLink :to="item.href" class="text-sm leading-6 text-gray-600 hover:text-gray-900">{{ item.name }}</NuxtLink>
        </div>
      </nav>
      <div class="flex flex-shrink-0 items-center justify-center mt-10">
        <ApplicationLogoComponent />
        <p class="ml-3 mt-2 text-center text-xs leading-5 text-gray-500">&copy; {{ new Date().getFullYear() }} Kantine. Alle rettigheter reservert.</p>
      </div>
    </div>
  </footer>
</template>
