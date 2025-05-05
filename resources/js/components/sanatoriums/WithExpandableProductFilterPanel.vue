<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/forms'),
    ],
  }
  ```
-->
<template>
  <div class="bg-white">
    <div class="px-4 py-16 text-center sm:px-6 lg:px-8">
      <h1 class="text-4xl font-bold tracking-tight text-gray-900">Санатории</h1>
      <p class="mx-auto mt-4 max-w-xl text-base text-gray-500">Поиск санаториев по параметрам <br> Бронирование</p>
    </div>

    <!-- Filters -->
    <Disclosure as="section" aria-labelledby="filter-heading" class="grid items-center border-b border-t border-gray-200">
      <h2 id="filter-heading" class="sr-only">Фильтры</h2>
      <div class="relative col-start-1 row-start-1 py-4">
        <div class="mx-auto flex max-w-7xl space-x-6 divide-x divide-gray-200 px-4 text-sm sm:px-6 lg:px-8">
          <div>
            <DisclosureButton class="group flex items-center font-medium text-gray-700">
              <FunnelIcon class="mr-2 h-5 w-5 flex-none text-gray-400 group-hover:text-gray-500" aria-hidden="true" />
              {N} Фильтров
            </DisclosureButton>
          </div>
          <div class="pl-6">
            <button type="button" class="text-gray-500">Очистить</button>
          </div>
        </div>
      </div>
      <DisclosurePanel class="border-t border-gray-200 py-10">
        <div class="mx-auto grid max-w-7xl grid-cols-2 gap-x-4 px-4 text-sm sm:px-6 md:gap-x-6 lg:px-8">
          <div class="grid auto-rows-min grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-6">
            <fieldset>
              <legend class="block font-medium">Цена</legend>
              <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
                <div v-for="(option, optionIdx) in filters.price" :key="option.value" class="flex items-center text-base sm:text-sm">
                  <input :id="`price-${optionIdx}`" name="price[]" :value="option.value" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" :checked="option.checked" />
                  <label :for="`price-${optionIdx}`" class="ml-3 min-w-0 flex-1 text-gray-600">{{ option.label }}</label>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend class="block font-medium">Регион</legend>
              <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
                <div v-for="(option, optionIdx) in filters.region" :key="option.value" class="flex items-center text-base sm:text-sm">
                  <input :id="`region-${optionIdx}`" name="region[]" :value="option.value" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" :checked="option.checked" />
                  <label :for="`region-${optionIdx}`" class="ml-3 min-w-0 flex-1 text-gray-600">{{ option.label }}</label>
                </div>
              </div>
            </fieldset>
          </div>
          <div class="grid auto-rows-min grid-cols-1 gap-y-10 md:grid-cols-2 md:gap-x-6">
            <fieldset>
              <legend class="block font-medium">Возраст</legend>
              <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
                <div v-for="(option, optionIdx) in filters.age" :key="option.value" class="flex items-center text-base sm:text-sm">
                  <input :id="`age-${optionIdx}`" name="age[]" :value="option.value" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" :checked="option.checked" />
                  <label :for="`age-${optionIdx}`" class="ml-3 min-w-0 flex-1 text-gray-600">{{ option.label }}</label>
                </div>
              </div>
            </fieldset>
            <fieldset>
              <legend class="block font-medium">Категория</legend>
              <div class="space-y-6 pt-6 sm:space-y-4 sm:pt-4">
                <div v-for="(option, optionIdx) in filters.category" :key="option.value" class="flex items-center text-base sm:text-sm">
                  <input :id="`category-${optionIdx}`" name="category[]" :value="option.value" type="checkbox" class="h-4 w-4 flex-shrink-0 rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" :checked="option.checked" />
                  <label :for="`category-${optionIdx}`" class="ml-3 min-w-0 flex-1 text-gray-600">{{ option.label }}</label>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
      </DisclosurePanel>
      <div class="col-start-1 row-start-1 py-4">
        <div class="mx-auto flex max-w-7xl justify-end px-4 sm:px-6 lg:px-8">
          <Menu as="div" class="relative inline-block">
            <div class="flex">
              <MenuButton class="group inline-flex justify-center text-sm font-medium text-gray-700 hover:text-gray-900">
                Сортировка
                <ChevronDownIcon class="-mr-1 ml-1 h-5 w-5 flex-shrink-0 text-gray-400 group-hover:text-gray-500" aria-hidden="true" />
              </MenuButton>
            </div>

            <transition enter-active-class="transition ease-out duration-100" enter-from-class="transform opacity-0 scale-95" enter-to-class="transform opacity-100 scale-100" leave-active-class="transition ease-in duration-75" leave-from-class="transform opacity-100 scale-100" leave-to-class="transform opacity-0 scale-95">
              <MenuItems class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl ring-1 ring-black ring-opacity-5 focus:outline-none">
                <div class="py-1">
                  <MenuItem v-for="option in sortOptions" :key="option.name" v-slot="{ active }">
                    <a :href="option.href" :class="[option.current ? 'font-medium text-gray-900' : 'text-gray-500', active ? 'bg-gray-100' : '', 'block px-4 py-2 text-sm']">{{ option.name }}</a>
                  </MenuItem>
                </div>
              </MenuItems>
            </transition>
          </Menu>
        </div>
      </div>
    </Disclosure>
  </div>
</template>

<script setup>
import { Disclosure, DisclosureButton, DisclosurePanel, Menu, MenuButton, MenuItem, MenuItems } from '@headlessui/vue'
import { ChevronDownIcon, FunnelIcon } from '@heroicons/vue/20/solid'

const filters = {
  price: [
    { value: '0', label: '0 - 2500', checked: false },
    { value: '2500', label: '2500 - 5000', checked: false },
    { value: '5000', label: '5000 - 7500', checked: false },
    { value: '7500', label: '7500+', checked: false },
  ],
  region: [
    { value: 'Крым', label: 'Крым', checked: false },
    { value: 'Беларусь', label: 'Беларусь', checked: false },
    { value: 'Южный регион', label: 'Южный регион', checked: true },
    { value: 'Центральный регион', label: 'Центральный регион', checked: false },
  ],
  age: [
    { value: 'Для взрослых', label: 'Для взрослых', checked: false },
    { value: 'Для детей', label: 'Для детей', checked: true },
    { value: 'Для всех возрастов', label: 'Для всех возрастов', checked: false },
  ],
  category: [
    { value: 'Категория 1', label: 'Категория', checked: false },
    { value: 'Категория 2', label: 'Категория 2', checked: false },
    { value: 'Категория 3', label: 'Категория 3', checked: false },
  ],
} 
const sortOptions = [
  { name: 'Наиболее популярные', href: '#', current: true },
  { name: 'С наивысшим рейтингом', href: '#', current: false },
]
</script>