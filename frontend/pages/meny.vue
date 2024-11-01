<script setup lang="ts">
useHead({
  title: 'Dagens Meny - Kantine',
  meta: [
    {
      name: 'description',
      content: 'Se dagens meny og bestill mat fra kantinen.'
    }
  ]
});

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
      </div>

      <div v-if="status === 'pending'">
        <p class="mt-6 text-lg text-zinc-700 dark:text-zinc-300">Henter dagens meny...</p>
      </div>

      <div v-else>
        <div v-if="menu !== null" class="mt-6 grid grid-cols-2 gap-x-4 gap-y-10 sm:gap-x-6 md:grid-cols-4 md:gap-y-0 lg:gap-x-8">
          <DishCard
            v-for="dish in menu.data.dishes"
            :key="dish.id"
            :dish="dish"
          />
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

<style scoped>

</style>
