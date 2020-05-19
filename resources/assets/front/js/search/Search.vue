<template>
   <div class="filters-bar" :class="{ open: this.plus_input }">

      <form class="form-filters" action="index.html" method="post">

         <div class="form-filters__wrap">

            <!-- begin search input -->
            <div class="form-filters__search" :class="{ show: this.search_input }">
               <div class="form-filters__search-inner">
                  <div class="form-filters__item">
                     <button  @click="show" type="button" name="button" class="icon icon--search"></button>
                  </div>
                  <!-- input field -->
                  <searchfree></searchfree>
                  <!-- input field -->
                  <div class="form-filters__item">
                     <button  @click="show" type="button" name="button" class="icon icon--close"></button>
                  </div>
               </div>
            </div>
            <!-- end search input -->

            <div class="form-filters__line form-filters__top">
               <!-- select area -->
               <div class="form-filters__item" v-for="select in selects">
                  <select-form :select="select" :key="select.id"></select-form>
               </div>
               <!-- select area -->

               <div class="form-filters__item">
                  <button @click="open" type="button" name="button" :class="{ close: this.plus_input }" class="icon icon--plus"></button>
               </div>

            </div>

            <div class="form-filters__line form-filters__bottom">
               <div class="form-filters__item">
                  <!-- begin calendar -->
                  <calendar></calendar>
                  <!-- end calendar -->
               </div>
               <!-- select area -->
               <div class="form-filters__item">
                  <select-form :select="select" :key="select.id"></select-form>
               </div>
               <!-- select area -->

               <!--
               <div class="form-filters__item">
                  <div class="form-filters__field">

                     <img class="form-filters__icon" src="front/img/icons/family.svg" alt="">
                     <button @click="show_count = !show_count" type="button" name="button">0 Adultos - 0 Crianças</button>

                  </div>

                  <counter v-if="show_count"></counter>

               </div>
            -->

            </div>
         </div>

         <div class="form-filters__go">
            <button type="button" name="button" class="go">Validar</button>
         </div>

      </form>
   </div>


</template>

<script>
import Calendar from './partials/Calendar.vue';
import Counter from './partials/Counter.vue';

export default {
   components: {
     Calendar,
     Counter
   },

   data() {
      return {
         counter: 0,
         show_count:false,
         plus_input:false,
         search_input:false,
         selects: [
            { title : 'Onde', icon : 'front/img/icons/info.svg', option: [{id: '1', name: 'Porto'}, {id: '2', name: 'Braga'}] },
            { title : 'Com quem?', icon : 'front/img/icons/family.svg', option: [{id: '1', name: 'Família'}, {id: '2', name: 'Amigos'}]  },
            { title : 'Para quê?', icon : 'front/img/icons/bag.svg', option: [{id: '1', name: 'Passear'}, {id: '2', name: 'Conhecer'}]  },
         ],
         select:
            { title : 'Em que ambiente?', icon : 'front/img/icons/002-road.svg', option: [{id: '1', name: 'Passear'}, {id: '2', name: 'Conhecer'}]  },
      }
   },
   methods: {
      open(){
           this.plus_input=!this.plus_input;
      },
      show(){
           this.search_input=!this.search_input;
      },
   }

}
</script>
