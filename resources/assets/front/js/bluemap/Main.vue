<template>

   <div class="row">
      <div class="col-sm-7">

         <!-- begin map -->
         <div class="map">
            <imagemap @changeArea = 'showArea'></imagemap>
         </div>
         <!-- end map -->

      </div>

      <div class="col-sm-5">
         <div class="wrap">

            <!-- card info -->
            <slick class="slideshow-map info-map visible-xs visible-sm">
               <responsivecardmap v-for="zone in zones" :zone="zone" :key="zone.id"></responsivecardmap>
            </slick>
            <!-- <div class="slideshow-map__arrows swiper__arrows"></div>-->

            <div class="info-map hidden-xs hidden-sm">
               <cardmap v-for="zone in zones" :zone="zone" :key="zone.id"></cardmap>
            </div>
            <!-- card info -->

         </div>
      </div>
   </div>

</template>

<script>

import cardmap from './partials/Cardmap.vue';
import responsivecardmap from './partials/Responsivecardmap.vue';
import imagemap from './partials/Imagemap.vue';
import Slick from 'vue-slick';

export default {
   components: {
      Slick
   },
   data() {
    return {
      slickOptions: {
         dots: false,
         slidesToShow: 1,
         arrows: true,
         //appendArrows: '.slideshow-map__arrows',
      },
      zones: [
        {
          title: 'Minho',
          photo: 'front/img/photos/photo2.png',
          hover: true,
          id: 1,
          link: '',
        },
        {
           title: 'Trás-os-Montes',
           photo: 'front/img/photos/photo6.jpg',
           hover: false,
           id: 2,
           link: '',
        },
        {
           title: 'Grande Porto',
           photo: 'front/img/photos/photo1.png',
          hover: false,
          id: 3,
          link: '',
       },
        {
           title: 'Douro',
           photo: 'front/img/photos/photo1.png',
          hover: false,
          id: 4,
          link: '',
       },

      ],
      ItemIndex: null
    };
  },
  methods: {

    selectIndex(Index) {
      this.ItemIndex = Index;
   },

   showArea(id){

      _.map(this.zones, function(item){

         if (item.id == id) {
            item.hover = true;
            console.log(item.id);
         }
         else {
            item.hover = false
         }
      });

   }
  }
}
</script>
