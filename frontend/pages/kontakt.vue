<script setup lang="ts">
useHead({
  title: 'Kontakt Oss - Kantine',
  meta: [
    {
      name: 'description',
      content: 'Ta kontakt med oss for samarbeid, presse, karriere eller bare for å si hei!'
    }
  ]
});
</script>
<template>
  <div class="bg-white dark:bg-zinc-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
      <div class="mx-auto max-w-2xl space-y-16 divide-y divide-zinc-100 dark:divide-zinc-700 lg:mx-0 lg:max-w-none">

        <!-- Kontakt Oss Section -->
        <div class="grid grid-cols-1 gap-10 lg:grid-cols-3">
          <div>
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-zinc-900 dark:text-zinc-100">Kontakt
              Oss</h2>
            <p class="mt-4 text-base/7 text-zinc-600 dark:text-zinc-400">Quam nunc nunc eu sed. Sed rhoncus quis
              ultricies ac pellentesque.</p>
          </div>
          <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-2 lg:gap-8">

            <!-- Samarbeid Card -->
            <div class="rounded-2xl bg-zinc-50 dark:bg-zinc-800 p-10">
              <h3 class="text-base/7 font-semibold text-zinc-900 dark:text-zinc-100">Samarbeid</h3>
              <dl class="mt-3 space-y-1 text-sm/6 text-zinc-600 dark:text-zinc-400">
                <div>
                  <dt class="sr-only">E-post</dt>
                  <dd><a class="font-semibold text-indigo-600 dark:text-indigo-400" href="mailto:samarbeid@kantine.no">samarbeid@kantine.no</a>
                  </dd>
                </div>
                <div class="mt-1">
                  <dt class="sr-only">Telefonnummer</dt>
                  <dd>+1 (555) 905-2345</dd>
                </div>
              </dl>
            </div>

            <!-- Presse Card -->
            <div class="rounded-2xl bg-zinc-50 dark:bg-zinc-800 p-10">
              <h3 class="text-base/7 font-semibold text-zinc-900 dark:text-zinc-100">Presse</h3>
              <dl class="mt-3 space-y-1 text-sm/6 text-zinc-600 dark:text-zinc-400">
                <div>
                  <dt class="sr-only">E-post</dt>
                  <dd><a class="font-semibold text-indigo-600 dark:text-indigo-400" href="mailto:presse@kantine.no">presse@kantine.no</a>
                  </dd>
                </div>
                <div class="mt-1">
                  <dt class="sr-only">Telefonnummer</dt>
                  <dd>+1 (555) 905-3456</dd>
                </div>
              </dl>
            </div>

            <!-- Bli med på laget Card -->
            <div class="rounded-2xl bg-zinc-50 dark:bg-zinc-800 p-10">
              <h3 class="text-base/7 font-semibold text-zinc-900 dark:text-zinc-100">Bli med på laget</h3>
              <dl class="mt-3 space-y-1 text-sm/6 text-zinc-600 dark:text-zinc-400">
                <div>
                  <dt class="sr-only">E-post</dt>
                  <dd><a class="font-semibold text-indigo-600 dark:text-indigo-400" href="mailto:karriere@kantine.no">karriere@kantine.no</a>
                  </dd>
                </div>
                <div class="mt-1">
                  <dt class="sr-only">Telefonnummer</dt>
                  <dd>+1 (555) 905-4567</dd>
                </div>
              </dl>
            </div>

            <!-- Si hei Card -->
            <div class="rounded-2xl bg-zinc-50 dark:bg-zinc-800 p-10">
              <h3 class="text-base/7 font-semibold text-zinc-900 dark:text-zinc-100">Si hei</h3>
              <dl class="mt-3 space-y-1 text-sm/6 text-zinc-600 dark:text-zinc-400">
                <div>
                  <dt class="sr-only">E-post</dt>
                  <dd><a class="font-semibold text-indigo-600 dark:text-indigo-400" href="mailto:hei@kantine.no">hei@kantine.no</a>
                  </dd>
                </div>
                <div class="mt-1">
                  <dt class="sr-only">Telefonnummer</dt>
                  <dd>+1 (555) 905-5678</dd>
                </div>
              </dl>
            </div>
          </div>
        </div>

        <!-- Lokasjoner Section -->
        <div class="grid grid-cols-1 gap-10 pt-16 lg:grid-cols-3">
          <div>
            <h2 class="text-pretty text-4xl font-semibold tracking-tight text-zinc-900 dark:text-zinc-100">
              Lokasjoner</h2>
            <p class="mt-4 text-base/7 text-zinc-600 dark:text-zinc-400">Consequat sunt cillum cillum elit sint. Qui
              occaecat nisi in ipsum commodo.</p>
          </div>
          <div class="grid grid-cols-1 gap-6 sm:grid-cols-2 lg:col-span-2 lg:gap-8">

            <!-- Los Angeles -->
            <div class="rounded-2xl bg-zinc-50 dark:bg-zinc-800 p-10">
              <h3 class="text-base/7 font-semibold text-zinc-900 dark:text-zinc-100">Los Angeles</h3>
              <address class="mt-3 space-y-1 text-sm/6 not-italic text-zinc-600 dark:text-zinc-400">
                <p>4556 Brendan Ferry</p>
                <p>Los Angeles, CA 90210</p>
              </address>
            </div>

            <!-- New York -->
            <div class="rounded-2xl bg-zinc-50 dark:bg-zinc-800 p-10">
              <h3 class="text-base/7 font-semibold text-zinc-900 dark:text-zinc-100">New York</h3>
              <address class="mt-3 space-y-1 text-sm/6 not-italic text-zinc-600 dark:text-zinc-400">
                <p>886 Walter Street</p>
                <p>New York, NY 12345</p>
              </address>
            </div>

            <!-- Toronto -->
            <div class="rounded-2xl bg-zinc-50 dark:bg-zinc-800 p-10">
              <h3 class="text-base/7 font-semibold text-zinc-900 dark:text-zinc-100">Toronto</h3>
              <address class="mt-3 space-y-1 text-sm/6 not-italic text-zinc-600 dark:text-zinc-400">
                <p>7363 Cynthia Pass</p>
                <p>Toronto, ON N3Y 4H8</p>
              </address>
            </div>

            <!-- Chicago -->
            <div class="rounded-2xl bg-zinc-50 dark:bg-zinc-800 p-10">
              <h3 class="text-base/7 font-semibold text-zinc-900 dark:text-zinc-100">Chicago</h3>
              <address class="mt-3 space-y-1 text-sm/6 not-italic text-zinc-600 dark:text-zinc-400">
                <p>726 Mavis Island</p>
                <p>Chicago, IL 60601</p>
              </address>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>
