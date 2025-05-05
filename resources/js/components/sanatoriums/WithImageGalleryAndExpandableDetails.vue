<!--
  This example requires some changes to your config:
  
  ```
  // tailwind.config.js
  module.exports = {
    // ...
    plugins: [
      // ...
      require('@tailwindcss/typography'),
      require('@tailwindcss/aspect-ratio'),
    ],
  }
  ```
-->
<template>
  <div class="bg-white">
    <div class="mx-auto max-w-2xl px-4 py-16 sm:px-6 sm:py-24 lg:max-w-7xl lg:px-8">
      <div class="lg:grid lg:grid-cols-2 lg:items-start lg:gap-x-8">
        <!-- Image gallery -->
        <TabGroup as="div" class="flex flex-col-reverse">
          <!-- Image selector -->
          <div class="mx-auto mt-6 hidden w-full max-w-2xl sm:block lg:max-w-none">
            <TabList class="grid grid-cols-4 gap-6">
              <Tab v-for="image in product.images" :key="image.id" class="relative flex h-24 cursor-pointer items-center justify-center rounded-md bg-white text-sm font-medium uppercase text-gray-900 hover:bg-gray-50 focus:outline-none focus:ring focus:ring-opacity-50 focus:ring-offset-4" v-slot="{ selected }">
                <span class="sr-only">{{ image.name }}</span>
                <span class="absolute inset-0 overflow-hidden rounded-md">
                  <img :src="image.src" alt="" class="h-full w-full object-cover object-center" />
                </span>
                <span :class="[selected ? 'ring-indigo-500' : 'ring-transparent', 'pointer-events-none absolute inset-0 rounded-md ring-2 ring-offset-2']" aria-hidden="true" />
              </Tab>
            </TabList>
          </div>

          <TabPanels class="aspect-h-1 aspect-w-1 w-full">
            <TabPanel v-for="image in product.images" :key="image.id">
              <img :src="image.src" :alt="image.alt" class="h-full w-full object-cover object-center sm:rounded-lg" />
            </TabPanel>
          </TabPanels>
        </TabGroup>

        <!-- Product info -->
        <div class="mt-10 px-4 sm:mt-16 sm:px-0 lg:mt-0">
          <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ product.name }}</h1>

          <div class="mt-3">
            <h2 class="sr-only">Информация</h2>
            <p class="text-3xl tracking-tight text-gray-900">{{ product.price }}</p>
          </div>

          <!-- Reviews -->
          <div class="mt-3">
            <h3 class="sr-only">Отзывы</h3>
            <div class="flex items-center">
              <div class="flex items-center">
                <StarIcon v-for="rating in [0, 1, 2, 3, 4]" :key="rating" :class="[product.rating > rating ? 'text-indigo-500' : 'text-gray-300', 'h-5 w-5 flex-shrink-0']" aria-hidden="true" />
              </div>
              <p class="sr-only">{{ product.rating }} из 5 звёзд</p>
            </div>
          </div>

          <div class="mt-6">
            <h3 class="sr-only">Описание</h3>

            <div class="space-y-6 text-base text-gray-700" v-html="product.description" />
          </div>

          <form class="mt-6">
            <!-- Colors -->
            <!-- <div>
              <h3 class="text-sm font-medium text-gray-600">Color</h3>

              <fieldset aria-label="Choose a color" class="mt-2">
                <RadioGroup v-model="selectedColor" class="flex items-center space-x-3">
                  <RadioGroupOption as="template" v-for="color in product.colors" :key="color.name" :value="color" :aria-label="color.name" v-slot="{ active, checked }">
                    <div :class="[color.selectedColor, active && checked ? 'ring ring-offset-1' : '', !active && checked ? 'ring-2' : '', 'relative -m-0.5 flex cursor-pointer items-center justify-center rounded-full p-0.5 focus:outline-none']">
                      <span aria-hidden="true" :class="[color.bgColor, 'h-8 w-8 rounded-full border border-black border-opacity-10']" />
                    </div>
                  </RadioGroupOption>
                </RadioGroup>
              </fieldset>
            </div> -->

            <div class="mt-10 flex">
              <button type="submit" class="flex max-w-xs flex-1 items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:ring-offset-gray-50 sm:w-full">
                Забронировать
              </button>

              <button type="button" class="ml-4 flex items-center justify-center rounded-md px-3 py-3 text-gray-400 hover:bg-gray-100 hover:text-gray-500">
                <HeartIcon class="h-6 w-6 flex-shrink-0" aria-hidden="true" />
                <span class="sr-only">Добавить в избранное</span>
              </button>
            </div>
          </form>

          <section aria-labelledby="details-heading" class="mt-12">
            <!-- <h2 id="details-heading" class="sr-only">Additional details</h2> -->

            <div class="divide-y divide-gray-200 border-t">
              <Disclosure as="div" v-for="detail in product.details" :key="detail.name" v-slot="{ open }">
                <h3>
                  <DisclosureButton class="group relative flex w-full items-center justify-between py-6 text-left">
                    <span :class="[open ? 'text-indigo-600' : 'text-gray-900', 'text-sm font-medium']">{{ detail.name }}</span>
                    <span class="ml-6 flex items-center">
                      <PlusIcon v-if="!open" class="block h-6 w-6 text-gray-400 group-hover:text-gray-500" aria-hidden="true" />
                      <MinusIcon v-else class="block h-6 w-6 text-indigo-400 group-hover:text-indigo-500" aria-hidden="true" />
                    </span>
                  </DisclosureButton>
                </h3>
                <DisclosurePanel as="div" class="prose prose-sm pb-6">
                  <ul role="list">
                    <li v-for="item in detail.items" :key="item">{{ item }}</li>
                  </ul>
                </DisclosurePanel>
              </Disclosure>
            </div>
          </section>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
import { ref } from 'vue'
import {
  Disclosure,
  DisclosureButton,
  DisclosurePanel,
  RadioGroup,
  RadioGroupOption,
  Tab,
  TabGroup,
  TabList,
  TabPanel,
  TabPanels,
} from '@headlessui/vue'
import { StarIcon } from '@heroicons/vue/20/solid'
import { HeartIcon, MinusIcon, PlusIcon } from '@heroicons/vue/24/outline'

const product = {
  name: 'Гостевой дом НЭСТА',
  price: 'от 700 ₽/сут.',
  rating: 4,
  images: [
    {
      id: 1,
      name: 'Гостевой дом НЭСТА',
      src: '/img/nest.webp',
      alt: 'Гостевой дом НЭСТА',
    },
    {
      id: 2,
      name: 'Гостевой дом НЭСТА',
      src: '/img/nest1.webp',
      alt: 'Гостевой дом НЭСТА',
    },
    // More images...
  ],
  
  description: `
    <p style="text-align:justify;"><span style="background-color:rgb(255,255,255);color:rgb(0,0,0);">&nbsp;Гостевой дом «Нэста» расположен в живописном черноморском поселке Небуг, недалеко от Туапсе, что делает его идеальным местом для отдыха и расслабления. Удобное расположение позволяет легко добраться до множества интересных мест: всего в нескольких минутах ходьбы находятся дельфинарий, аквапарк и детский луна-парк, что делает «Нэста» отличным выбором для семейного отдыха. В окрестностях также располагаются магазины, столовые и кафе, где можно попробовать местные деликатесы и насладиться атмосферой курортного городка.</span><br><br><span style="background-color:rgb(255,255,255);color:rgb(0,0,0);">&nbsp;Гостевой дом находится на закрытой территории, что обеспечивает спокойствие и безопасность. Двухэтажный корпус утопает в зелени — благоустроенная территория украшена редкими растениями и цветами, которые радуют глаз на протяжении всего летнего сезона. Небольшой водопад на территории создает атмосферу уюта и гармонии с природой. Гостям предлагаются комфортные одноместные и двухместные номера, а также отдельно стоящие бунгало, что позволяет выбрать оптимальный вариант для любого типа отдыхающих. Все номера оборудованы современными удобствами: индивидуальным санузлом, холодильником, кондиционером и телевизором, что делает пребывание максимально комфортным.</span><br><br><span style="background-color:rgb(255,255,255);color:rgb(0,0,0);">&nbsp;Для любителей кулинарии на территории «Нэста» предусмотрены две полноценные кухни, где можно самостоятельно приготовить любимые блюда. А для тех, кто предпочитает отдыхать на свежем воздухе, обустроена мангальная зона с уютными беседками. В центре двора расположен бассейн с системой очистки воды, где гости могут освежиться в жаркие дни. Вокруг бассейна установлены шезлонги, что создает идеальные условия для загара и релаксации. Галечный пляж находится всего в полутора километрах от гостиницы: до побережья можно дойти пешком за 20 минут или воспользоваться мини-автобусами, которые регулярно курсируют до моря.</span></p>
  `,
  details: [
    {
      name: 'Инфраструктура',
      items: [
        'Wi-Fi на территории',
        'Бассейн',
        'Прачечная',
        'Автостоянка',
        'Мангальная зона',
      ],
    },
    {
      name: 'Инфраструктура',
      items: [
        'Wi-Fi на территории',
        'Бассейн',
        'Прачечная',
        'Автостоянка',
        'Мангальная зона',
      ],
    },
    // More sections...
  ],
}


</script>