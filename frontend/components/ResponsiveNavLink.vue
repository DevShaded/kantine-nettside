<script setup lang="ts">
import { NuxtLink } from "#components";

const props = defineProps<{
  to: string;
  active?: boolean;
}>();

const classes = computed(() =>
  props.active
    ? 'block border-l-4 border-indigo-500 bg-indigo-50 py-2 pl-3 pr-4 text-base font-medium text-indigo-700'
    : 'block border-l-4 border-transparent py-2 pl-3 pr-4 text-base font-medium text-gray-500 hover:border-gray-300 hover:bg-gray-50 hover:text-gray-700'
);
</script>

<template>
  <HeadlessDisclosureButton :as="NuxtLink" :href="to" :class="classes">
    <slot />
  </HeadlessDisclosureButton>
</template>

<style scoped></style>
