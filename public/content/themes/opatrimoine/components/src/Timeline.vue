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
          title: "Étape 1",
          content: "Venez découvrir des lieux insolites du patrimoine Français et parcourez nos nombreuses visites guidées disponibles sur notre site O'Patrimoine.",
        },
        {
          color: 'purple darken-1',
          icon: 'mdi-account-plus',
          title: "Étape 2",
          content: "Créez votre compte utilisateur afin de pouvoir réserver des visites guidées qui sont à votre disposition sur O'Patrimoine.",
        },
        {
          color: 'green lighten-1',
          icon: 'mdi-table-large-plus',
          title: "Étape 3",
          content: "Suite à votre inscription effectuée, vous pouvez dorénavant réserver vos visites guidées en quelques cliques dans les lieux de votre choix.",
        },
        {
          color: 'indigo',
          icon: 'mdi-creation',
          title: "Étape 4",
          content: "Une fois que ces trois étapes ont été accomplies, vous pouvez dès à présent profiter pleinement ce qu'O'Patrimoine a à vous offrir, Let's go !",
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
