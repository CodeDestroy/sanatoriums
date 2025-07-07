<template>
    <div class=" pt-12 sm:pt-24" id="content-to-convert">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="text-4xl font-bold tracking-tight text-mona-lisa-600 sm:text-4xl">Хиты</p>
      </div>
      <div class="mx-auto max-w-7xl mt-12  px-6 lg:px-8">
        <ul role="list" class="space-y-3">
          
          <li v-for="item in items" :key="item.id" class="overflow-hidden bg-white  py-4 shadow sm:rounded-md">
              <a class="sm:inline-flex" :href="item.link">
              <div class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4">
                <img class="h-60 sm:h-48  rounded-xl" :src="item.image">
              </div>
              <div>
                <p class="text-slate-600 font-semibold">с {{ item.date_start }}</p>
                <p class="text-slate-600 font-semibold">{{ item.days }} дня</p>
                
                <p class="text-xl text-salt-800 font-semibold py-2">{{ item.name }}</p>
                <p class="text-slate-600 py-2" v-html="item.description"></p>
                <p class="text-slate-400 line-through py-2">{{ item.price_old }}</p>
                <p class="text-mona-lisa-600">{{ item.price_new }}</p>
              </div>
            </a>  
          </li>
        
        </ul>
      </div>
    </div>
  </template>

<script setup>
import { ref, onMounted } from 'vue'
const props = defineProps({
  initialHits: Array,
})

const items = ref(props.initialHits.map(hit => ({
  id: hit.id,
  link: `/hit/${hit.id}`,
  image: hit.images[0]?.image_path ?? 'img/default.jpg',
  date_start: hit.date_start ?? '',
  days: hit.days ?? '',
  name: hit.name,
  description: hit.description,
  price_old: hit.price_old,
  price_new: hit.price_new
})))
console.log(items)
</script>  
<!-- <script setup>
import { comment } from 'postcss';

  const items = [
    { id: 17,
      link: '/kudryashova_15052025',
      image: 'img/0001.jpg',
      datetime: 'с 15.08.25',
      duration: '3 ночи',
      theme: 'Санаторий им. Дзержинского',
      comment: 'В 2022 году в санатории полностью модернизировали лечебный корпус, установив новейшее медицинское оборудование для диагностики и терапии',
      target: 'Специалисты санатория разрабатывают индивидуальный план лечения для каждого гостя, чтобы обеспечить максимальную эффективность процедур.',
      oldcost: '7000',
      cost: '5500'
     },
     { id: 16,
      link: '/tretyakova_17052025',
      image: 'img/1234.jpg',
      datetime: 'с 15.05.25',
      duration: '3 ночи',
      theme: 'Санаторий именни Горького',
      comment: 'Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького',
      target: 'Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького ',
      oldcost: '5000',
      cost: '3500'
     },
     { id: 19,
      link: '/nikolaeva_18052025',
      image: 'img/1234.jpg',
      datetime: 'с 15.05.25',
      duration: '3 ночи',
      theme: 'Санаторий именни Горького',
      comment: 'Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького',
      target: 'Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького ',
      oldcost: '5000',
      cost: '3500'
     },
     { id: 11,
      link: '/sotnikova_24052025',
      image: 'img/1234.jpg',
      datetime: 'с 15.05.25',
      duration: '3 ночи',
      theme: 'Санаторий именни Горького',
      comment: 'Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького',
      target: 'Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького ',
      oldcost: '5000',
      cost: '3500'
     },
     { id: 12,
      link: '/lisavenko_26052025',
      image: 'img/1234.jpg',
      datetime: 'с 15.05.25',
      duration: '3 ночи',
      theme: 'Санаторий именни Горького',
      comment: 'Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького',
      target: 'Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького ',
      oldcost: '5000',
      cost: '3500'
     },
  ]
  </script> -->
