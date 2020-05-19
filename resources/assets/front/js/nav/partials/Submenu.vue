<template>
   <transition name="fade" :duration="500">
   <div class="header-subs" :class="menu.class" v-show="menu.hover">
      <div class="header-subs__el">
         <div class="header-subs__bg">
            <div class="header-subs__bg-item default">
               <img src="front/img/photos/photo4.png" alt="">
            </div>
            <div class="header-subs__bg-item" :class="{active: option.hover_bg}"  v-for="(option, index) in this.menu.option">
               <img :src="option.img" alt="">
            </div>
         </div>
         <div class="header-subs__wrapper">

            <div class="row" v-if="menu.class == 'menu-map'">
               <div class="col-sm-4">
                  <ul class="header-subs__menu block">
                     <li @mouseover="hoverBg(option.id)" @mouseleave = "option.hover_bg = false; turnOffMap()" v-for="(option, index) in this.menu.option" :key="option.id">
                        <a class="header-subs__item" :class="{active: option.hover_bg}" :href="option.link">
                           <span class="header-subs__item--inner">{{option.name}}</span>
                           <span class="header-subs__item--hover" :data-label="option.name"></span>
                        </a>
                     </li>
                  </ul>
               </div>

               <div class="col-sm-8">
                  <whitemap :menu="menu" @hover = 'hoverBg' @offMap = 'turnOffMap'></whitemap>
               </div>
            </div>

            <div class="" v-if="menu.class == 'banner'">
               <p class="text text--bold text--caps">{{menu.title}}</p>
               <h3 class="section-title section-title--caps">{{menu.text}}</h3>
               <a :href="menu.link" class="btn btn--white">Ver todos +</a>
            </div>

            <ul class="header-subs__menu" v-if="menu.class == 'links'">
               <li  @mouseover="hoverBg(option.id)" v-for="(option, index) in this.menu.option" :key="option.id">
                  <a class="header-subs__item"  :href="option.link">
                     <span class="header-subs__item--inner">{{option.name}}</span>
                     <span class="header-subs__item--hover" :data-label="option.name"></span>
                  </a>
               </li>
            </ul>

            <ul class="header-subs__menu" v-if="menu.class == 'iconographic'">
               <li  @mouseover="hoverBg(option.id)" v-for="(option, index) in this.menu.option" :key="option.id">
                  <a class="header-subs__item" :href="option.link">
                     <img :src="option.icon" alt="">
                     <span class="header-subs__item--inner">{{option.name}}</span>
                     <span class="header-subs__item--hover" :data-label="option.name"></span>
                  </a>
               </li>
            </ul>

         </div>
      </div>
   </div>
</transition>
</template>

<script>
import whitemap from './Whitemap';

export default {
   props: {
      menu: {
         type: Object,
         required: true,
      }
   },

   computed: {

   },
   methods:{
      turnOffMap(id){
         $('#whitemap .cls-1').css('opacity', '.3');
         $('#whitemap .cls-2').css('opacity', '.25');
         $('#whitemap .cls-3').css('opacity', '.35');
         $('#whitemap .cls-4').css('opacity', '.25');
         $('.map-title path').css('fill', '#ffffff');
         $('.map-title').css('fill', '#ffffff');
      },

      hoverBg(id){

         _.map(this.menu.option, function(item, hover_bg){

            if (item.id == id) {
               item.hover_bg = true;
               hover_bg = true;
               $('#whitemap #' + id).css('opacity', '1');
               $('#map-title' + id + ' path').css('fill', '#9095A0');
            }

            else {
               item.hover_bg = false;
               hover_bg = false;
            }

         });
      },


   },


}
</script>

<style lang="css">

.fade-enter .header-subs__wrapper,
.fade-leave-to .header-subs__wrapper{
   opacity: 0 !important;
   visibility: hidden;
   -webkit-transition: opacity 1.4s cubic-bezier(.455,.03,.515,.955) 0s;
   transition: opacity 1.4s cubic-bezier(.455,.03,.515,.955) 0s;
}
.fade-enter-to .header-subs__wrapper,
.fade-enter-active .header-subs__wrapper{
   opacity: 1;
   visibility: visible;
   -webkit-transition: opacity 1.4s cubic-bezier(.455,.03,.515,.955) 0s;
   transition: opacity 1.4s cubic-bezier(.455,.03,.515,.955) 0s;
}
.fade-enter .header-subs__bg-item.default,
.fade-leave-to .header-subs__bg-item.default{
   opacity: 0 !important;
   visibility: hidden !important;
   transform: translateZ(0) scale(1.03) !important;
   -webkit-transition: opacity .8s cubic-bezier(.25,.46,.45,.94),visibility 0s linear 0s,-webkit-transform 6s cubic-bezier(.165,.84,.44,1);
   transition: opacity .8s cubic-bezier(.25,.46,.45,.94),visibility 0s linear 0s,-webkit-transform 6s cubic-bezier(.165,.84,.44,1);
   transition: opacity .8s cubic-bezier(.25,.46,.45,.94),transform 6s cubic-bezier(.165,.84,.44,1),visibility 0s linear 0s;
   transition: opacity .8s cubic-bezier(.25,.46,.45,.94),transform 6s cubic-bezier(.165,.84,.44,1),visibility 0s linear 0s,-webkit-transform 6s cubic-bezier(.165,.84,.44,1);
}
.fade-enter-to .header-subs__bg-item.default,
.fade-enter-active .header-subs__bg-item.default{
   opacity: 1;
   visibility: visible;
   transform: translateZ(0) scale(1);
   -webkit-transform: translateZ(0) scale(1);
   -webkit-transition: opacity .8s cubic-bezier(.25,.46,.45,.94),visibility 0s linear 0s,-webkit-transform 6s cubic-bezier(.165,.84,.44,1);
   transition: opacity .8s cubic-bezier(.25,.46,.45,.94),visibility 0s linear 0s,-webkit-transform 6s cubic-bezier(.165,.84,.44,1);
   transition: opacity .8s cubic-bezier(.25,.46,.45,.94),transform 6s cubic-bezier(.165,.84,.44,1),visibility 0s linear 0s;
   transition: opacity .8s cubic-bezier(.25,.46,.45,.94),transform 6s cubic-bezier(.165,.84,.44,1),visibility 0s linear 0s,-webkit-transform 6s cubic-bezier(.165,.84,.44,1);
}
.fade-enter .header-subs__bg-item.default img{
   opacity: .3;
}
.fade-enter-to .header-subs__bg-item.default img,
.fade-enter-active .header-subs__bg-item.default img{
   opacity: 1;
}
.fade-leave-to {

}
</style>
