<template>
    <v-card>
      <v-toolbar
        color="cyan"
        dark
        flat
      >
        <v-app-bar-nav-icon></v-app-bar-nav-icon>
  

    enter code here
        <v-toolbar-title>Your Dashboard</v-toolbar-title>
  
        <v-spacer></v-spacer>
  
        <v-btn icon>
          <v-icon>mdi-magnify</v-icon>
        </v-btn>
  
        <v-btn icon>
          <v-icon>mdi-dots-vertical</v-icon>
        </v-btn>
  
        <template v-slot:extension>
          <v-tabs
            v-model="tab"
            align-with-title
          >
            <v-tabs-slider color="yellow"></v-tabs-slider>
  
            <v-tab
              v-for="item in items"
              :key="item"
            >
              {{ item }}
            </v-tab>
          </v-tabs>
        </template>
      </v-toolbar>
  
      <v-tabs-items v-model="tab">
        <v-tab-item
          v-for="item in items"
          :key="item"
        >
         
        </v-tab-item>
      </v-tabs-items>
    </v-card>
</template>

<script>
export default {
  el: '#app',
  data () {
    return {
      tab: null,
      items: [
        'web', 'shopping', 'videos', 'images', 'news',
      ],
    }
  }
}
</script>