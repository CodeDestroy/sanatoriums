<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<template>
  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <h2 class="text-2xl font-bold tracking-tight text-gray-900">Южный регион</h2>

      <div class="mt-6 grid grid-cols-1 gap-x-6 gap-y-10 sm:grid-cols-2 lg:grid-cols-4 xl:gap-x-8">
        <div v-for="product in products" :key="product.id" class="group relative">
          <div class="aspect-h-1 aspect-w-1 w-full overflow-hidden rounded-md bg-gray-200 lg:aspect-none group-hover:opacity-75 lg:h-80">
            <img :src="product.imageSrc" :alt="product.imageAlt" class="h-full w-full object-cover object-center lg:h-full lg:w-full" />
          </div>
          <div class="mt-4 flex justify-between">
            <div>
              <h3 class="text-2xl text-gray-700">
                <a :href="product.href">
                  <span aria-hidden="true" class="absolute inset-0" />
                  {{ product.name }}
                </a>
              </h3>
              <p class="mt-1 text-sm text-gray-500">{{ product.region }}</p>
              <p class="mt-1 text-xl text-blue-500">{{ product.price }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const products = [
  {
    id: 1,
    name: 'Гостевой дом НЭСТА',
    href: '/sanatorium/1',
    imageSrc: 'img/nest.webp',
    imageAlt: "Гостевой дом НЭСТА",
    price: 'от 700 ₽ за сутки',
    region: 'Краснодарский край, Туапсинский район, п ...',
  },
  {
    id: 2,
    name: 'Гостевой дом НЭСТА',
    href: '/sanatorium/2',
    imageSrc: 'img/nest.webp',
    imageAlt: "Гостевой дом НЭСТА",
    price: 'от 700 ₽ за сутки',
    region: 'Краснодарский край, Туапсинский район, п ...',
  },
  {
    id: 3,
    name: 'Гостевой дом НЭСТА',
    href: '/sanatorium/3',
    imageSrc: 'img/nest.webp',
    imageAlt: "Гостевой дом НЭСТА",
    price: 'от 700 ₽ за сутки',
    region: 'Краснодарский край, Туапсинский район, п ...',
  },
  {
    id: 4,
    name: 'Гостевой дом НЭСТА',
    href: '/sanatorium/4',
    imageSrc: 'img/nest.webp',
    imageAlt: "Гостевой дом НЭСТА",
    price: 'от 700 ₽ за сутки',
    region: 'Краснодарский край, Туапсинский район, п ...',
  },
  {
    id: 5,
    name: 'Гостевой дом НЭСТА',
    href: '/sanatorium/5',
    imageSrc: 'img/nest.webp',
    imageAlt: "Гостевой дом НЭСТА",
    price: 'от 700 ₽ за сутки',
    region: 'Краснодарский край, Туапсинский район, п ...',
  },
  {
    id: 6,
    name: 'Гостевой дом НЭСТА',
    href: '/sanatorium/6',
    imageSrc: 'img/nest.webp',
    imageAlt: "Гостевой дом НЭСТА",
    price: 'от 700 ₽ за сутки',
    region: 'Краснодарский край, Туапсинский район, п ...',
  },
  {
    id: 7,
    name: 'Гостевой дом НЭСТА',
    href: '#',
    imageSrc: 'img/nest.webp',
    imageAlt: "Гостевой дом НЭСТА",
    price: 'от 700 ₽ за сутки',
    region: 'Краснодарский край, Туапсинский район, п ...',
  },
  {
    id: 8,
    name: 'Гостевой дом НЭСТА',
    href: '#',
    imageSrc: 'img/nest.webp',
    imageAlt: "Гостевой дом НЭСТА",
    price: 'от 700 ₽ за сутки',
    region: 'Краснодарский край, Туапсинский район, п ...',
  },
  // More products...
]
</script>