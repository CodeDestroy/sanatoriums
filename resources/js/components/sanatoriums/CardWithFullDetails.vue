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
      <h2 class="text-4xl font-medium tracking-tight text-gray-900 mb-3">Южный регион</h2>
      <div class="grid grid-cols-1 gap-y-4 sm:grid-cols-2 sm:gap-x-6 sm:gap-y-10 lg:grid-cols-3 lg:gap-x-8">
        <div v-for="product in products" :key="product.id" class="group relative flex flex-col overflow-hidden rounded-lg border border-gray-200 bg-white">
          <div class="aspect-h-4 aspect-w-3 bg-gray-200 sm:aspect-none group-hover:opacity-75 sm:h-96">
            <img :src="product.imageSrc" :alt="product.imageAlt" class="h-full w-full object-cover object-center sm:h-full sm:w-full" />
          </div>
          <div class="flex flex-1 flex-col space-y-2 p-4">
            <h3 class="text-xl font-medium text-gray-900">
              <a :href="product.href">
                <span aria-hidden="true" class="absolute inset-0" />
                {{ product.name }}
              </a>
            </h3>
            <p class="text-sm text-gray-500">{{ product.description }}</p>
            <div class="flex flex-1 flex-col justify-end">
              <p class="text-sm italic text-gray-500">{{ product.region }}</p>
            </div>
            <div class="mt-4 flex justify-between">
              <div>
                <h3 class="text-md text-blue-700">
                  <a :href="product.href">
                    <span aria-hidden="true" class="absolute inset-0" />
                    {{ product.price }}
                  </a>
                </h3>
              </div>
              <!-- <p class="text-sm font-medium text-gray-900">{{ product.price }}</p> -->
              <div class="flex">
                <StarIcon v-for="rating in [0, 1, 2, 3, 4]" :key="rating" :class="[product.rating > rating ? 'text-yellow-400' : 'text-gray-200', 'h-5 w-5 flex-shrink-0']" aria-hidden="true" />
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { StarIcon } from '@heroicons/vue/20/solid'
const products = [
  /* {
    id: 1,
    name: 'Basic Tee 8-Pack',
    href: '#',
    price: '$256',
    description: 'Get the full lineup of our Basic Tees. Have a fresh shirt all week, and an extra for laundry day.',
    options: '8 colors',
    imageSrc: 'img/nest.webp',
    imageAlt: 'Eight shirts arranged on table in black, olive, grey, blue, white, red, mustard, and green.',
  },
  {
    id: 2,
    name: 'Basic Tee',
    href: '#',
    price: '$32',
    description: 'Look like a visionary CEO and wear the same black t-shirt every day.',
    options: 'Black',
    imageSrc: 'img/nest.webp',
    imageAlt: 'Front of plain black t-shirt.',
  }, */
  {
    id: 1,
    name: 'Санаторий им. Дзержинского ',
    href: '/sanatorium/1',
    imageSrc: 'img/dzr.jpg',
    imageAlt: "Санаторий им. Дзержинского",
    price: 'от 1100 ₽ за сутки',
    description: 'Описание санатория',
    region: 'Транспортная ул., 2, Чертовицы, Воронежская обл',
    rating: 4 
  },
  {
    id: 2,
    name: 'Гостевой дом НЭСТА',
    href: '/sanatorium/1',
    imageSrc: 'img/nest.webp',
    imageAlt: "Гостевой дом НЭСТА",
    price: 'от 700 ₽ за сутки',
    description: 'Описание санатория',
    region: 'Краснодарский край, Туапсинский район, п ...',
    rating: 4 
  },
  {
    id: 3,
    name: 'Гостевой дом НЭСТА',
    href: '/sanatorium/1',
    imageSrc: 'img/nest.webp',
    imageAlt: "Гостевой дом НЭСТА",
    price: 'от 700 ₽ за сутки',
    description: 'Описание санатория',
    region: 'Краснодарский край, Туапсинский район, п ...',
    rating: 4 
  },
  // More products...
]
</script>