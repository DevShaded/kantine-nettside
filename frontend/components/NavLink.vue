<script setup lang="ts">
const props = defineProps<{
  to: string;
  active?: boolean;
}>();

const classes = computed(() =>
  props.active
    ? 'inline-flex items-center border-b-2 border-indigo-500 px-1 pt-1 text-sm font-medium text-gray-900'
    : 'inline-flex items-center border-b-2 border-transparent px-1 pt-1 text-sm font-medium text-gray-500'
);
</script>

<template>
  <NuxtLink :to="to" :class="classes">
    <slot />
  </NuxtLink>
</template>

<style scoped></style>
