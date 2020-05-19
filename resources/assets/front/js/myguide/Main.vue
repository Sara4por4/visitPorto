<template>

   <span class="guide-toggle" ref="slide">

     <button class="count-btn" @click="toggleSlide()">
        <span class="icon icon--compass"></span>Meu Guia <span class="number">0</span>
     </button>
      <!-- <a href="" class="icon-padlock-1" v-if="logged"></a>
      <a href="#" class="icon-padlock" @click="toggleSlide()" v-else></a> -->

      <transition name="slide">
         <div class="slide" v-if="this.visible">
            <div class="slide__header clearfix">
               <div class="slide__header-left">
                  <h4 class="tiny-text tiny-text--caps">Meu guia</h4>
                  <h4 class="tiny-text">Adicionados <span class="tiny-text--caps">10</span></h4>
               </div>
               <div class="slide__header-right">
                  <button type="button"  @click="toggleSlide()" class="icon icon--close"></button>
               </div>
            </div>

            <div v-if="registed">
               <div class="slide__container">
                 <div class="slide-list">
                   <div class="slide-list__el">
                     <product></product>
                     <button type="button" name="button" class="icon icon--garbage"></button>
                   </div>
                 </div>
               </div>
               <div class="slide__footer">
                  <a href="guide" class="large-btn large-btn--blue">Editar o meu guia</a>
               </div>
            </div>


         </div>
      </transition>
      <transition name="fade">
         <span class="bg-white" v-if="this.visible"></span>
      </transition>

   </span>

</template>

<script>
import product from './partials/product'

export default {
   data () {
       return {
           visible: false,
           logged: false,
           registed: true,
       };
  },
  components: {
   product,
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
