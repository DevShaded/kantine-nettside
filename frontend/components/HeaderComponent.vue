<script setup lang="ts">
const route = useRoute();
</script>

<template>
  <header>
    <HeadlessDisclosure v-slot="{ open }" as="nav" class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 justify-between">
          <div class="flex">
            <div class="flex flex-shrink-0 items-center">
              <ApplicationLogoComponent />
            </div>
            <div class="hidden sm:ml-6 sm:flex sm:space-x-8">
              <!-- Current: "border-indigo-500 text-gray-900", Default: "border-transparent text-gray-500 hover:border-gray-300 hover:text-gray-700" -->
              <NavLink to="/" :active="route.path === '/'">Hjem</NavLink>
              <NavLink to="/meny" :active="route.path === '/meny'">Meny</NavLink>
              <NavLink to="/utvalg" :active="route.path === '/utvalg'">Utvalg</NavLink>
            </div>
          </div>
          <NavLink class="rounded-md bg-indigo-600 my-3 px-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600" to="/kontakt">Kontakt Oss</NavLink>
          <div class="-mr-2 flex items-center sm:hidden">
            <!-- Mobile menu button -->
            <HeadlessDisclosureButton class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500">
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
          <ResponsiveNavLink @click="close" to="/" :active="route.path === '/'">Hjem</ResponsiveNavLink>
          <ResponsiveNavLink @click="close" to="/meny" :active="route.path === '/meny'">Meny</ResponsiveNavLink>
          <ResponsiveNavLink @click="close" to="/utvalg" :active="route.path === '/utvalg'">Utvalg</ResponsiveNavLink>
          <ResponsiveNavLink @click="close" to="/kontakt" :active="route.path === '/kontakt'">Kontakt Oss</ResponsiveNavLink>
        </div>
      </HeadlessDisclosurePanel>
    </HeadlessDisclosure>
  </header>
</template>
