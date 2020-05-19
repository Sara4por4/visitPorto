<template>

   <span ref="slide">

     <button class="filters-btn small-text small-text--semibold" @click="toggleSlide()">
        Mostrar filtros <span class="icon icon--caret-down"></span>
     </button>
      <!-- <a href="" class="icon-padlock-1" v-if="logged"></a>
      <a href="#" class="icon-padlock" @click="toggleSlide()" v-else></a> -->

      <transition name="slide">
         <div class="slide" v-if="this.visible">
            <div class="slide__header clearfix">
               <div class="slide__header-left">
                  <h4 class="tiny-text tiny-text--bold">Filtros</h4>
                  <p class="small-text">Selecionados <span class="small-text--bold">00</span></p>
               </div>
               <div class="slide__header-right">
                  <button type="button"  @click="toggleSlide()" class="icon icon--close"></button>
               </div>
            </div>

             <div class="slide__container">
               <form class="slide-form">

                 <div class="slide-form__search">
                   <button class="icon icon--search" type="button" name="button"></button>
                   <input type="text" value="" placeholder="O que procura?">
                 </div>

                 <ul class="slide-form__dropdowns">

                     <dropdown v-for="menu in menus" :menu="menu" :key="menu.id"></dropdown>

                 </ul>

               </form>
             </div>

             <div class="slide__footer">
               <a href="" class="large-btn">Limpar pesquisa</a>
                <a href="" class="large-btn large-btn--blue">Validar pesquisa</a>
             </div>

         </div>
      </transition>
      <transition name="fade">
         <span class="bg-white" v-if="this.visible"></span>
      </transition>

   </span>

</template>

<script>
import dropdown from './partials/Dropdown.vue';

export default {
  components: {
     dropdown
  },
   data () {
       return {
           visible: false,
           menus: [
              { id: '1', title : 'Onde', icon: 'front/img/icons/info.svg',
              option: [
                 {id: '2', name: 'Minho', },
                 {id: '3', name: 'Grande Porto', },
              ]},
              { id: '2', title : 'Com quem', icon: 'front/img/icons/family.svg',
              option: [
                 {id: '2', name: 'Opção 1', },
                 {id: '3', name: 'Opção 2', },
              ]},
              { id: '3', title : 'Para quê?', icon: 'front/img/icons/bag.svg',
              option: [
                 {id: '2', name: 'Opção 1', },
                 {id: '3', name: 'Opção 2', },
              ]},
              { id: '4', title : 'Check in', icon: '/front/img/icons/calendar.svg',
              option: [
                 {id: '2', name: 'Opção 1', },
                 {id: '3', name: 'Opção 2', },
              ]},
              { id: '5', title : 'Check out', icon: '/front/img/icons/calendar.svg',
              option: [
                 {id: '2', name: 'Opção 1', },
                 {id: '3', name: 'Opção 2', },
              ]},
              { id: '6', title : 'Em que ambiente?', icon: '/front/img/icons/002-road.svg',
              option: [
                 {id: '2', name: 'Opção 1', },
                 {id: '3', name: 'Opção 2', },
              ]},
            ]
       };
  },
  methods: {

     toggleSlide(){
         this.visible = !this.visible;
     },

     documentClick(e) {
         let el = this.$refs.slide;
         let target = e.target;
         if ( el != null && el !== target && !el.contains(target)) {
             this.visible=false;
         }
     },

 }
}
</script>

<style>
.fade-enter-active, .fade-leave-active {
  transition: opacity .5s;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
  opacity: 0;
}
.slide-enter, .slide-leave-to {
   transform: translateX(100%);
}


.slide-enter-active {
   transition: all .3s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}
.slide-leave-active {
   transition: all .3s cubic-bezier(1.0, 0.5, 0.8, 1.0);
}

</style>
