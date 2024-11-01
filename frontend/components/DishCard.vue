<script setup lang="ts">
export interface DishEntity {
  id: string;
  name: string;
  slug: string;
  description: string;
  price: number;
  image_url?: string | null;
}

defineProps<{
  dish: DishEntity
}>();
</script>

<template>
  <article class="group relative">
    <div v-if="dish.image_url" class="h-56 w-full overflow-hidden rounded-md group-hover:opacity-75 lg:h-72 xl:h-80">
      <NuxtImg :src="'http://server.test' + dish.image_url" :alt="dish.name" class="h-full w-full object-cover object-center" />
    </div>
    <h3 class="mt-4 text-sm text-zinc-700 dark:text-zinc-300">
      <NuxtLink to="/meny">
        <span class="absolute inset-0"></span>
        {{ dish.name }}
      </NuxtLink>
    </h3>
    <p class="mt-1 text-sm font-medium text-zinc-900 dark:text-zinc-400">{{ dish.price }},-</p>
  </article>
</template>

<style scoped></style>
