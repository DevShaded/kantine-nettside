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
  <footer class="bg-white dark:bg-zinc-800">
    <div class="mx-auto max-w-7xl overflow-hidden px-6 py-20 sm:py-24 lg:px-8">
      <nav class="-mb-6 columns-2 sm:flex sm:justify-center sm:space-x-12" aria-label="Footer">
        <div v-for="item in navigation.main" :key="item.name" class="pb-6">
          <NuxtLink :to="item.href" class="text-sm leading-6 text-zinc-600 hover:text-zinc-900 dark:text-zinc-400 dark:hover:text-zinc-200">{{ item.name }}</NuxtLink>
        </div>
      </nav>
      <div class="flex flex-shrink-0 items-center justify-center mt-10">
        <ApplicationLogoComponent />
        <p class="ml-3 mt-2 text-center text-xs leading-5 text-zinc-500 dark:text-zinc-400">&copy; {{ new Date().getFullYear() }} Kantine. Alle rettigheter reservert.</p>
      </div>
    </div>
  </footer>
</template>
