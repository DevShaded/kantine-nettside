<script setup lang="ts">
const daysOfWeek = ["søndag","mandag", "tirsdag", "onsdag", "torsdag", "fredag", "lørdag"];
const today = new Date();
const dayName = daysOfWeek[today.getDay()];

export interface Menu {
  code: number;
  data: Data;
}
export interface Data {
  id: string;
  day_of_week: string;
  name: string;
  description: string;
  is_published: boolean;
  dishes?: (DishesEntity)[] | null;
}
export interface DishesEntity {
  id: string;
  name: string;
  slug: string;
  description: string;
  price: number;
  image_url?: string | null;
}

const { status, data: menu } = await useFetch(`http://server.test/api/menus/${dayName}`) as AsyncData<Menu>;
</script>

<template>
  <section aria-labelledby="daily-menu">
    <div class="mx-auto max-w-7xl px-4 py-24 sm:px-6 sm:py-32 lg:px-8 lg:pt-32">
      <div class="md:flex md:items-center md:justify-between">
        <h2 id="favorites-heading" class="text-2xl font-bold tracking-tight text-zinc-900 dark:text-zinc-200">Dagens Meny ({{ dayName.charAt(0).toUpperCase() + dayName.slice(1) }})</h2>
        <NuxtLink to="/meny" class="hidden text-sm font-medium text-indigo-600 hover:text-indigo-500 md:block">
          Se hele menyen
          <span aria-hidden="true"> &rarr;</span>
        </NuxtLink>
      </div>

      <div v-if="status === 'pending'">
        <p class="mt-6 text-lg text-zinc-700 dark:text-zinc-300">Henter dagens meny...</p>
      </div>

      <div v-else>
        <div v-if="menu !== null" class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
          <article v-for="dish in menu.data.dishes?.slice(0, 4)" :key="dish.id" class="group relative">
            <div v-if="dish.image_url" class="h-56 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:h-72 xl:h-80">
              <NuxtImg :src="'http://server.test' + dish.image_url" :alt="dish.name" class="h-full w-full object-cover object-center" />
            </div>
            <h3 class="mt-4 text-sm text-zinc-700 dark:text-zinc-300">
              <a href="#">
                <span class="absolute inset-0"></span>
                {{ dish.name }}
              </a>
            </h3>
            <p class="mt-1 text-sm font-medium text-zinc-900 dark:text-zinc-400">{{ dish.price }},-</p>
          </article>
        </div>

        <div v-else>
          <p class="mt-6 text-lg text-zinc-700 dark:text-zinc-300">Ingen meny tilgjengelig for i dag.</p>
        </div>
      </div>

      <div class="mt-8 text-sm md:hidden">
        <NuxtLink to="/meny" class="font-medium text-indigo-600 hover:text-indigo-500 dark:text-indigo-500 dark:hover:text-indigo-400">
          Se hele menyen
          <span aria-hidden="true"> &rarr;</span>
        </NuxtLink>
      </div>
    </div>
  </section>
</template>

<style scoped></style>
