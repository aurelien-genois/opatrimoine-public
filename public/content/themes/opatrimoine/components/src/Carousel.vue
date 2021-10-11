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
            src: 'https://cdn.pixabay.com/photo/2020/07/23/21/34/arc-de-triomphe-5432392_960_720.jpg',
          },
          {
            src: 'https://cdn.pixabay.com/photo/2015/07/13/14/40/paris-843229_960_720.jpg',
          },
          {
            src: 'https://cdn.pixabay.com/photo/2015/07/15/20/08/paris-846873_960_720.jpg',
          },
          {
            src: 'https://cdn.pixabay.com/photo/2013/04/11/19/46/building-102840_960_720.jpg',
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

  margin-top: 20px;



}

</style>
