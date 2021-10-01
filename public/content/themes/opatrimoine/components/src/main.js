import Vue from 'vue'
import router from './router'
import vuetify from './plugins/vuetify'
import 'vuetify/dist/vuetify.min.css'


import Carousel from './Carousel.vue'
import Timeline from './Timeline.vue'
import Calendar from './Calendar.vue'




Vue.config.productionTip = false;

// indicates at which id selector in html corresponds the composant
const components = {
  '#carousel': Carousel,
  '#timeline': Timeline,
  '#tours-calendar': Calendar,
};



for(let selector in components) {
  if(document.querySelector(selector)) {

    const component = components[selector];
    const element = document.querySelector(selector);

  

    

    /*
     nous vérifions sur l'élément qui va accueillir le composant vuejs s'il y a un dataset "vue" (data-vue="......")

     le dataset vue contient du json listant les variables à faire passser au composant vuejs
    */

    if(element.dataset.vue) {
      const data = JSON.parse(element.dataset.vue);
      // nous injection les variables passé dans le template wordpress à tous les composants vuejs
      Vue.prototype.$wordpressData = data;
    }


    new Vue({
      router,
      vuetify,
      render: h => h(component)
    }).$mount(selector)
  }
}