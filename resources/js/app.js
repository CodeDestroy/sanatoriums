import './bootstrap';
import resolveConfig from 'tailwindcss/resolveConfig'
import tailwindConfig from '../../tailwind.config.js'
import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

const fullConfig = resolveConfig(tailwindConfig)

import { createApp } from 'vue';
/* import ThreeTiersWithEmphasizedTier from './components/ThreeTiersWithEmphasizedTier.vue';
import Calendar from './components/Calendar.vue';
 

createApp({
  components: {
    ThreeTiersWithEmphasizedTier,
  }
}).mount('#calendar');
createApp({
  components: {
    Calendar,
  }
}).mount('#price');
createApp({
  components: {
    Plan,
  }
}).mount('#plan'); */
/* createApp({})
  .component('ThreeTiersWithEmphasizedTier', ThreeTiersWithEmphasizedTier)
  .mount('#price') */

/*   createApp({})
  .component('Calendar', Calendar)
  .mount('#calendar')  */ 

import ThreeTiersWithEmphasizedTier from './components/ThreeTiersWithEmphasizedTier.vue';
import ThreeTiersPrice from './components/ThreeTiersPrice.vue';
import ThreeTiersPriceKudryashova from './components/ThreeTiersPriceKudryashova.vue';
import ThreeTiersPriceKudryashova25022025 from './components/ThreeTiersPriceKudryashova25022025.vue';
import ThreeTiersPriceTretyakova02032025 from './components/ThreeTiersPriceTretyakova02032025.vue';
import ThreeTiersPriceTretyakova15032025 from './components/ThreeTiersPriceTretyakova15032025.vue';
import ThreeTiersPriceTurkenich17042025 from './components/ThreeTiersPriceTurkenich17042025.vue';
import Calendar from './components/Calendar.vue';
import Plan from './components/Plan.vue';
import CalendarPlan from './components/CalendarPlan.vue';
import SectionHeadingsWithTabs from './components/SectionHeadingsWithTabs.vue';
import Privacy from './components/Privacy.vue';
import Policy from './components/Policy.vue';
import Agreement from './components/Agreement.vue';
import Offer from './components/Offer.vue';
import Contract from './components/Contract.vue';
import Jitsi from './components/Jitsi.vue';
import { jsPDF } from "jspdf";
import html2canvas from "html2canvas";
import AskQuestion from './components/AskQuestion.vue';
import WithLargeAvatar from './components/WithLargeAvatar.vue';
import WithLargeAvatarKurbatov from './components/WithLargeAvatarKurbatov.vue';
import WithLargeAvatarKudryashova from './components/WithLargeAvatarKudryashova.vue';
import WithLargeAvatarTretyakova from './components/WithLargeAvatarTretyakova.vue';
import WithLargeAvatarTurkenich from './components/WithLargeAvatarTurkenich.vue';
import SideBySideGrid from './components/SidebySideGrid.vue';
import Hero from './components/Hero.vue';
import GridList from './components/GridList.vue';
import Cards from './components/Cards.vue';
import ContentTretyakova15032025 from './components/ContentTretyakova15032025.vue';
import ContentTretyakova02032025 from './components/ContentTretyakova02032025.vue';
import ContentTurkenich17042025 from './components/ContentTurkenich17042025.vue';

createApp({})
.component('ThreeTiersWithEmphasizedTier', ThreeTiersWithEmphasizedTier)
.mount('#price')

createApp({})
.component('ThreeTiersPrice', ThreeTiersPrice)
.mount('#price-webinar')

createApp({})
.component('ThreeTiersPriceKudryashova', ThreeTiersPriceKudryashova)
.mount('#price-webinar')

createApp({})
.component('ThreeTiersPriceKudryashova25022025', ThreeTiersPriceKudryashova25022025)
.mount('#price-webinar')

createApp({})
.component('ThreeTiersPriceTretyakova02032025', ThreeTiersPriceTretyakova02032025)
.mount('#price-webinar')

createApp({})
.component('ThreeTiersPriceTretyakova15032025', ThreeTiersPriceTretyakova15032025)
.mount('#price-webinar')

createApp({})
.component('ThreeTiersPriceTurkenich17042025', ThreeTiersPriceTurkenich17042025)
.mount('#price-webinar')

createApp({})
.component('Calendar', Calendar)
.mount('#calendar')

createApp({})
.component('Plan', Plan)
.mount('#plan')  

createApp({})
.component('CalendarPlan', CalendarPlan)
.mount('#calendar-plan')  

createApp({})
.component('SectionHeadingsWithTabs', SectionHeadingsWithTabs)
.mount('#docs-heading')  

createApp({})
.component('Policy', Policy)
.mount('#policy')  

createApp({})
.component('Privacy', Privacy)
.mount('#privacy')

createApp({})
.component('Agreement', Agreement)
.mount('#agreement')

createApp({})
.component('Offer', Offer)
.mount('#offer')

createApp({})
.component('Contract', Contract)
.mount('#contract')


createApp({})
.component('Jitsi', Jitsi)
.mount('#jitsi')

createApp({})
.component('AskQuestion', AskQuestion)
.mount('#ask-question')

createApp({})
.component('WithLargeAvatar', WithLargeAvatar)
.mount('#with-large-avatar')

createApp({})
.component('WithLargeAvatarKurbatov', WithLargeAvatarKurbatov)
.mount('#with-large-avatar')

createApp({})
.component('WithLargeAvatarKudryashova', WithLargeAvatarKudryashova)
.mount('#with-large-avatar')

createApp({})
.component('WithLargeAvatarTretyakova', WithLargeAvatarTretyakova)
.mount('#with-large-avatar')

createApp({})
.component('WithLargeAvatarTurkenich', WithLargeAvatarTurkenich)
.mount('#with-large-avatar')

createApp({})
.component('SideBySideGrid', SideBySideGrid)
.mount('#contacts')

createApp({})
.component('Hero', Hero)
.mount('#hero')

createApp({})
.component('GridList', GridList)
.mount('#gridlist')

createApp({})
.component('Cards', Cards)
.mount('#cards')

createApp({})
.component('ContentTretyakova15032025', ContentTretyakova15032025)
.mount('#content')

createApp({})
.component('ContentTretyakova02032025', ContentTretyakova02032025)
.mount('#content')

createApp({})
.component('ContentTurkenich17042025', ContentTurkenich17042025)
.mount('#content')

document.getElementById('generate-pdf')?.addEventListener('click', function () {
/*   const { jsPDF } = window.jspdf; */

  // Создаем экземпляр jsPDF
  const pdf = new jsPDF();
  const pathname = window.location.pathname;
  let name = ''
  switch (pathname) {
    case '/docs/agreement':
      name = 'Согласие на обработку персональных данных.pdf'
      break;
    case '/docs/contract':
      name = 'Договор.pdf'
      break;
    case '/docs/offer':
      name = 'Оферта.pdf'
      break;
    default:
      name = 'document.pdf'
  }
  // Элемент, который мы хотим преобразовать
  const element = document.getElementById('content-to-convert');

  // Рендерим элемент в canvas с помощью html2canvas
  html2canvas(element, { useCORS: true }).then(canvas => {
      const imgData = canvas.toDataURL('image/png'); // Конвертируем canvas в изображение
      const imgWidth = 190; // Ширина изображения в PDF (в мм)
      const pageHeight = 295; // Высота страницы PDF (в мм)
      const imgHeight = (canvas.height * imgWidth) / canvas.width; // Пропорциональная высота изображения
      let heightLeft = imgHeight; // Оставшаяся высота изображения
      let position = 0; // Текущая вертикальная позиция

      // Добавляем первую часть изображения
      pdf.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
      heightLeft -= pageHeight;

      // Добавляем дополнительные страницы, если высота превышает одну страницу
      while (heightLeft > 0) {
          position -= pageHeight; // Смещаемся на высоту страницы
          pdf.addPage();
          pdf.addImage(imgData, 'PNG', 10, position, imgWidth, imgHeight);
          heightLeft -= pageHeight;
      }

      // Сохраняем PDF
      pdf.save(name);
  });
});


