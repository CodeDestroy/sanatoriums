<template>
    <div class=" pt-12 sm:pt-24" id="content-to-convert">
      <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <p class="text-4xl font-bold tracking-tight text-mona-lisa-600 sm:text-4xl">Хиты</p>
      </div>
      <div class="mx-auto max-w-7xl mt-12  px-6 lg:px-8">
        <ul role="list" class="space-y-3">
          
          <li v-for="item in items" :key="item.id" class="overflow-hidden bg-white px-4 py-4 shadow sm:rounded-md sm:px-6">
              <a class="sm:inline-flex" :href="item.link">
              <div class="mb-4 flex-shrink-0 sm:mb-0 sm:mr-4">
                <img class="h-60 sm:h-48 object-cover sm:object-none rounded-xl" :src="item.image">
              </div>
              <div>
                <p class="text-slate-600 font-semibold">{{ item.datetime }}</p>
                <p class="text-slate-600 font-semibold">{{ item.duration }}</p>
                
                <p class="text-xl text-salt-800 font-semibold py-2">{{ item.theme }}</p>
                <p class="text-slate-600 py-2">{{ item.comment }}</p>
                <p class="text-slate-600">{{ item.target }}</p>
                <p class="text-slate-400 line-through py-2">{{ item.oldcost }}</p>
                <p class="text-mona-lisa-600">{{ item.cost }}</p>
              </div>
            </a>  
          </li>
        
        </ul>
      </div>
    </div>
  </template>
  
  <script setup>
import { comment } from 'postcss';

  const items = [
    { id: 17,
      link: '/kudryashova_15052025',
      image: 'img/1234.jpg',
      datetime: 'с 15.05.25',
      duration: '3 ночи',
      theme: 'Санаторий именни Горького',
      comment: 'Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького',
      target: 'Санаторий именни Горького Санаторий именни Горького Санаторий именни Горького ',
      oldcost: '5000',
      cost: '3500'
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
  </script>