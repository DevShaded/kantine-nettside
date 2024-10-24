<script setup lang="ts">
import { NuxtLink } from "#components";

const props = defineProps<{
  to: string;
  active?: boolean;
}>();

const classes = computed(() =>
  props.active
    ? 'block border-l-4 border-indigo-500 bg-indigo-50 dark:bg-indigo-800 py-2 pl-3 pr-4 text-base font-medium text-indigo-700 dark:text-indigo-100'
    : 'block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-zinc-500 hover:border-zinc-300 hover:bg-zinc-50 dark:hover:bg-zinc-700 hover:text-zinc-700 dark:hover:text-zinc-100'
);
</script>

<template>
  <HeadlessDisclosureButton :as="NuxtLink" :href="to" :class="classes">
    <slot />
  </HeadlessDisclosureButton>
</template>

<style scoped></style>
