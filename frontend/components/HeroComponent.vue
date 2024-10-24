<script setup lang="ts"></script>

<template>
  <section class="relative isolate">
    <SvgPattern />
    <div class="absolute left-1/2 right-0 top-0 -z-10 -ml-24 transform-gpu overflow-hidden blur-3xl lg:ml-24 xl:ml-48" aria-hidden="true">
      <div class="aspect-[801/1036] w-[50.0625rem] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(63.1% 29.5%, 100% 17.1%, 76.6% 3%, 48.4% 0%, 44.6% 4.7%, 54.5% 25.3%, 59.8% 49%, 55.2% 57.8%, 44.4% 57.2%, 27.8% 47.9%, 35.1% 81.5%, 0% 97.7%, 39.2% 100%, 35.2% 81.4%, 97.2% 52.8%, 63.1% 29.5%)" />
    </div>
    <div class="overflow-hidden">
      <div class="mx-auto max-w-7xl px-6 pb-32 pt-36 sm:pt-60 lg:px-8 lg:pt-32">
        <div class="mx-auto max-w-2xl gap-x-14 lg:mx-0 lg:flex lg:max-w-none lg:items-center">
          <div class="relative w-full lg:max-w-xl lg:shrink-0 xl:max-w-2xl">
            <h1 class="text-pretty text-5xl font-semibold tracking-tight text-zinc-900 dark:text-zinc-100 sm:text-7xl">
              Velkommen til vår kantine på nett
            </h1>
            <p class="mt-8 text-pretty text-lg font-medium text-zinc-500 dark:text-zinc-400 sm:max-w-md sm:text-xl/8 lg:max-w-none">
              Vi har et stort utvalg av retter du kommer til å elske. Vi har også en rekke sunne alternativer for deg som ønsker det.
            </p>
            <div class="mt-10 flex items-center gap-x-6">
              <PrimaryButton to="/meny">
                Se meny
              </PrimaryButton>
              <NuxtLink to="/kontakt" class="text-sm font-semibold leading-6 text-zinc-900 dark:text-zinc-100">
                Kontakt Oss! <span aria-hidden="true">→</span>
              </NuxtLink>
            </div>
          </div>
          <div class="mt-14 flex justify-end gap-8 sm:-mt-44 sm:justify-start sm:pl-20 lg:mt-0 lg:pl-0">
            <div class="ml-auto w-44 flex-none space-y-8 pt-32 sm:ml-0 sm:pt-80 lg:order-last lg:pt-36 xl:order-none xl:pt-80">
              <div class="relative">
                <NuxtImg src="https://images.unsplash.com/photo-1508424757105-b6d5ad9329d0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80" alt="" class="aspect-[2/3] w-full rounded-xl bg-zinc-900/5 dark:bg-zinc-100/5 object-cover shadow-lg" />
                <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-zinc-900/10 dark:ring-zinc-100/10" />
              </div>
            </div>
            <div class="mr-auto w-44 flex-none space-y-8 sm:mr-0 sm:pt-52 lg:pt-36">
              <div class="relative">
                <NuxtImg src="https://images.unsplash.com/photo-1559762665-f2d87882713e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80" alt="" class="aspect-[2/3] w-full rounded-xl bg-zinc-900/5 dark:bg-zinc-100/5 object-cover shadow-lg" />
                <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-zinc-900/10 dark:ring-zinc-100/10" />
              </div>
              <div class="relative">
                <NuxtImg src="https://images.unsplash.com/photo-1560576866-eca28dedc388?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=focalpoint&fp-x=.4&w=396&h=528&q=80" alt="" class="aspect-[2/3] w-full rounded-xl bg-zinc-900/5 dark:bg-zinc-100/5 object-cover shadow-lg" />
                <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-zinc-900/10 dark:ring-zinc-100/10" />
              </div>
            </div>
            <div class="w-44 flex-none space-y-8 pt-32 sm:pt-0">
              <div class="relative">
                <NuxtImg src="https://images.unsplash.com/photo-1556682770-95c132c96568?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&crop=left&w=400&h=528&q=80" alt="" class="aspect-[2/3] w-full rounded-xl bg-zinc-900/5 dark:bg-zinc-100/5 object-cover shadow-lg" />
                <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-zinc-900/10 dark:ring-zinc-100/10" />
              </div>
              <div class="relative">
                <NuxtImg src="https://images.unsplash.com/photo-1670272505284-8faba1c31f7d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDF8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&h=528&q=80" alt="" class="aspect-[2/3] w-full rounded-xl bg-zinc-900/5 dark:bg-zinc-100/5 object-cover shadow-lg" />
                <div class="pointer-events-none absolute inset-0 rounded-xl ring-1 ring-inset ring-zinc-900/10 dark:ring-zinc-100/10" />
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<style scoped></style>
