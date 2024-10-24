<script setup lang="ts">
const route = useRoute();
</script>

<template>
  <header>
    <HeadlessDisclosure v-slot="{ open }" as="nav" class="bg-white dark:bg-zinc-800 shadow">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
          <div class="flex">
            <div class="flex flex-shrink-0 items-center">
              <ApplicationLogoComponent />
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
              <!-- Current: "border-indigo-500 text-zinc-900", Default: "border-transparent text-zinc-500 hover:border-zinc-300 hover:text-zinc-700" -->
              <NavLink to="/" :active="route.path === '/'">Hjem</NavLink>
              <NavLink to="/meny" :active="route.path === '/meny'">Meny</NavLink>
              <NavLink to="/utvalg" :active="route.path === '/utvalg'">Utvalg</NavLink>
            </div>
          </div>
          <div class="hidden sm:block my-5">
            <nuxt-link to="/kontakt" class="rounded-md bg-indigo-600 px-2.5 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kontakt oss!</nuxt-link>
          </div>
          <div class="-mr-2 flex items-center sm:hidden">
            <!-- Mobile menu button -->
            <HeadlessDisclosureButton class="relative inline-flex items-center justify-center rounded-md p-2 text-zinc-400 hover:bg-zinc-100 dark:hover:bg-zinc-800 hover:text-zinc-500 dark:hover:text-zinc-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
              <span class="absolute -inset-0.5" />
              <span class="sr-only">Open main menu</span>
              <icon v-if="!open" name="heroicons:bars-3" class="block h-6 w-6" aria-hidden="true" />
              <icon v-else name="heroicons:x-mark" class="block h-6 w-6" aria-hidden="true" />
            </HeadlessDisclosureButton>
          </div>
        </div>
      </div>

      <HeadlessDisclosurePanel v-slot="{ close }" class="sm:hidden">
        <div class="space-y-1 pb-3 pt-2">
          <ResponsiveNavLink to="/" :active="route.path === '/'" @click="close">Hjem</ResponsiveNavLink>
          <ResponsiveNavLink to="/meny" :active="route.path === '/meny'" @click="close">Meny</ResponsiveNavLink>
          <ResponsiveNavLink to="/utvalg" :active="route.path === '/utvalg'" @click="close">Utvalg</ResponsiveNavLink>
          <ResponsiveNavLink to="/kontakt" :active="route.path === '/kontakt'" @click="close">Kontakt Oss</ResponsiveNavLink>
        </div>
      </HeadlessDisclosurePanel>
    </HeadlessDisclosure>
  </header>
</template>
