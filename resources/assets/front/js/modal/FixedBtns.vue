<template>
   <div class="">
      <ul class="fixed-btns">
         <!-- <li>
            <button @click="openSearch" class="icon icon--search"></button>
         </li>
         <li>
            <button @click="openSocial" class="icon icon--share"></button>
         </li> -->
         <li class="scroll">
            <button @click="scrollToTop" class="icon icon--arrow-top"></button>
         </li>
      </ul>

      <transition-group name="fade">
         <modalsearch v-if="search" @close="search=false" :key="1"></modalsearch>
      </transition-group>

      <transition-group name="fade">
         <modalsocial v-if="social" @close="social=false" :key="2"></modalsocial>
      </transition-group>

   </div>

</template>

<script>
export default {

   data() {
      return{
         search: false,
         social: false
      }
   },
   methods: {
      openSearch(){
           this.search=true;
      },
      openSocial(){
           this.social=true;
      },
      scrollToTop() {
         $('html,body').stop().animate({
           scrollTop: 0
         }, 'slow', 'swing');
         }
   },

}
</script>

<style>
.fade-enter-active, .fade-leave-active {
transition: opacity 1s ease-in-out;
}
.fade-enter, .fade-leave-to /* .fade-leave-active below version 2.1.8 */ {
opacity: 0;
}
</style>
