<template>
<v-app>
    <v-row class="fill-height">
      <v-col>
        <v-sheet height="64">
          <v-toolbar
            flat
          >
            <v-btn
              outlined
              class="mr-4"
              color="grey darken-2"
              @click="setToday"
            >
              Aujourd'hui
            </v-btn>
            <v-btn
              fab
              text
              small
              color="grey darken-2"
              @click="prev"
            >
              <v-icon small>
                mdi-chevron-left
              </v-icon>
            </v-btn>
            <v-btn
              fab
              text
              small
              color="grey darken-2"
              @click="next"
            >
              <v-icon small>
                mdi-chevron-right
              </v-icon>
            </v-btn>
            <v-spacer></v-spacer>
            <v-toolbar-title v-if="$refs.calendar">
              {{ $refs.calendar.title }}
            </v-toolbar-title>
            <v-spacer></v-spacer>
            <v-menu
              bottom
              right
            >
              <template v-slot:activator="{ on, attrs }">
                <v-btn
                  outlined
                  color="grey darken-2"
                  v-bind="attrs"
                  v-on="on"
                >
                  <span>{{ typeToLabel[type] }}</span>
                  <v-icon right>
                    mdi-menu-down
                  </v-icon>
                </v-btn>
              </template>
              <v-list>
                <v-list-item @click="type = 'day'">
                  <v-list-item-title>Jour</v-list-item-title>
                </v-list-item>
                <v-list-item @click="type = 'week'">
                  <v-list-item-title>Semaine</v-list-item-title>
                </v-list-item>
                <v-list-item @click="type = 'month'">
                  <v-list-item-title>Mois</v-list-item-title>
                </v-list-item>
                <!-- <v-list-item @click="type = '4day'">
                  <v-list-item-title>4 days</v-list-item-title>
                </v-list-item> -->
              </v-list>
            </v-menu>
          </v-toolbar>
        </v-sheet>

        <v-sheet height="600">
          <v-calendar
            ref="calendar"
            v-model="focus"
            color="primary"
            :events="events"
            :event-color="getEventColor"
            :type="type"
            @click:event="showEvent"
            @click:more="viewDay"
            @click:date="viewDay"
            locale="fr"
          ></v-calendar>
          
          <!-- pop-up -->
          <v-menu
            v-model="selectedOpen"
            :close-on-content-click="false"
            :activator="selectedElement"
            offset-x
          >
            <v-card
              color="grey lighten-4"
              min-width="350px"
              flat
            >
              <v-toolbar
                :color="selectedEvent.color"
                dark
              >
                <p>{{selectedEvent.hour}}</p>
                <v-toolbar-title v-html="selectedEvent.name"></v-toolbar-title>
                <v-spacer></v-spacer>


              </v-toolbar>
              <v-card-text>
                <p>
                  <v-icon>mdi-timer-outline</v-icon>
                  {{selectedEvent.duration}}</p>
                <p>{{selectedEvent.thematics}}</p>
                <p>Nombre total de places : {{selectedEvent.totalPersons}}</p>
                <p>Nombre total de réservations : {{selectedEvent.totalReservations}}</p>
                <p>Nombre de places disponibles : {{selectedEvent.nbPlacesAvailable}} /  {{selectedEvent.totalPersons}}</p>
              </v-card-text>

              <!-- TODO action = s'inscrire !conditions -->
              <v-card-actions>
                <v-btn
                  text
                  color="secondary"
                  @click="selectedOpen = false"
                >
                  S'inscrire à la visite
                </v-btn>
              </v-card-actions>
            </v-card>
          </v-menu>
        </v-sheet>
      </v-col>
    </v-row>
</v-app>
</template>

<script>
  // get the data from the data- attribute on the div that contains the composant
  // "this.$wordpressData" (in the functions of the export obj)
  export default {
    data: () => ({
      focus: '',
      type: 'month',
      typeToLabel: {
        month: 'Mois',
        week: 'Semaine',
        day: 'Jour',
        // '4day': '4 Days',
      },
      selectedEvent: {},
      selectedElement: null,
      selectedOpen: false,
      events: [],
    }),
    mounted() {
      const calendarDatas = this.$wordpressData['tours-calendar'];

      calendarDatas.forEach(dataObj => {

        const start = new Date(dataObj.date);
        const end = new Date(start.valueOf());
        const durationArr = dataObj.duration.split(':')
        end.setHours(start.getHours() + Number(durationArr[0])); 
        end.setUTCMinutes(start.getUTCMinutes() + durationArr[1]); 

        const startMin = (String(start.getMinutes()).length < 2) ? '0' + start.getMinutes() : start.getMinutes();
        const startHour = start.getHours() + 'h' + startMin;
        
        this.events.push( {
            name: dataObj.post_title,
            start: start,
            end: end,
            color: 'blue',
            timed: true,
            hour: startHour,
            duration: dataObj.duration,
            thematics: dataObj.thematics.join(', '),
            totalPersons: dataObj.totalpersons,
            totalReservations: dataObj.totalreservations,
            nbPlacesAvailable: dataObj.totalpersons - dataObj.totalreservations,
          }
        )
      });
    },

    methods: {
      viewDay ({ date }) {
        this.focus = date
        this.type = 'day'
      },
      getEventColor (event) {
        return event.color
      },
      setToday () {
        this.focus = ''
      },
      prev () {
        this.$refs.calendar.prev()
      },
      next () {
        this.$refs.calendar.next()
      },
      showEvent ({ nativeEvent, event }) {
        const open = () => {
          this.selectedEvent = event
          this.selectedElement = nativeEvent.target
          requestAnimationFrame(() => requestAnimationFrame(() => this.selectedOpen = true))
        }

        if (this.selectedOpen) {
          this.selectedOpen = false
          requestAnimationFrame(() => requestAnimationFrame(() => open()))
        } else {
          open()
        }

        nativeEvent.stopPropagation()
      },
    },
  }
</script>