<template>
  <v-app>

  <v-carousel :show-arrows="false" id="carousel">
    <v-carousel-item
      v-for="(item,i) in items"
      :key="i"
      :src="item.src"
    ></v-carousel-item>
  </v-carousel>

  </v-app>
</template>

<script>

  export default {
    data () {
      return {
        items: [
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/squirrel.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/sky.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/bird.jpg',
          },
          {
            src: 'https://cdn.vuetifyjs.com/images/carousel/planet.jpg',
          },
        ],
      }
    },
  }
  
</script>

<style>
.v-application--wrap {
  /* surcharge du style par défault créé par vuetify ; nous ne voulons pas que le composant prenne toute la hauteur */
  min-height: auto !important;
}

#carousel {

 
  padding-top: 30px;



}

</style>
