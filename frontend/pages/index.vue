<script setup lang="ts">
useHead({
  title: 'Hjem - Kantine',
  meta: [
    {
      name: 'description',
      content: 'Velkommen til kantinen! Vi serverer sunn og god mat til deg og dine kollegaer.'
    }
  ]
});
</script>

<template>
  <div>
    <HeroComponent />

    <DailyMenuSection />
  </div>
</template>
