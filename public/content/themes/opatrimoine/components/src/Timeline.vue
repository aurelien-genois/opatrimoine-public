<template>

  <v-app>

  <div id="timeline">  
    <h2 class="use">Utilisation</h2>
  </div>

  <v-timeline
    align-top
    :dense="$vuetify.breakpoint.smAndDown"
  >
    <v-timeline-item
      v-for="(item, i) in items"
      :key="i"
      :color="item.color"
      :icon="item.icon"
      fill-dot
    >
      <v-card
        :color="item.color"
        dark
      >
        <v-card-title class="text-h6">
          {{ item.title }}
        </v-card-title>
        <v-card-text class="white text--primary">
          <p class="p-cards">{{ item.content }}</p>
          <!-- <v-btn
            :color="item.color"
            class="mx-0"
            outlined
          >
            Button
          </v-btn> -->
        </v-card-text>
      </v-card>

     
    </v-timeline-item>
  </v-timeline>

    </v-app>

</template>

<script>

  export default {
    data: () => ({
      items: [
        {
          color: 'red lighten-2',
          icon: 'mdi-eye',
          title: "étape 1",
          content: "blablabla 1",
        },
        {
          color: 'purple darken-1',
          icon: 'mdi-account-plus',
          title: "étape 2",
          content: "blablabla 2",
        },
        {
          color: 'green lighten-1',
          icon: 'mdi-table-large-plus',
          title: "étape 3",
          content: "blablabla 3",
        },
        {
          color: 'indigo',
          icon: 'mdi-creation',
          title: "étape 4",
          content: "blablabla 4",
        },
      ],
    }),
  }
  
</script>

<style>
#timeline {
 
  font-family: 'Antic Didone', serif;

}



.p-cards {

    padding-top: 1.5em !important;
    min-width: 30vw;
  
}

.v-application .red.lighten-2 {
    background-color: var(--main-color)!important;
    border-color: var(--main-color)!important;

}

.v-application .purple.darken-1 {
    background-color: var(--main-color)!important;
    border-color: var(--main-color)!important;

}

.v-application .green.lighten-1 {
    background-color: var(--main-color)!important;
    border-color: var(--main-color)!important;

}

.v-application .indigo {
    background-color: var(--main-color)!important;
    border-color: var(--main-color)!important;

}



 

</style>
