<template>

   <div class="row">
      <div class="col-md-7">

         <!-- begin map -->
         <div class="map">

            <div class="map__local">
               <span :id="'zona-' + zone.id" :key="zone.id" @mouseover="showArea(zone.id)" @mouseleave="zone.hover = false" v-for="zone in zones"></span>
            </div>

            <img class="map__img"  src="front/img/map/blue/exp1.svg" alt="norte de portugal mapa">

            <div v-for="zone in zones" :key="zone.id">
               <img class="map__img" v-show="zone.hover" :src="zone.image" alt="norte de portugal mapa">
            </div>

         </div>
         <!-- end map -->

      </div>
      <div class="col-md-5">
         <div class="wrap">

            <!-- card info -->
            <div class="info-map">
               <cardmap v-for="zone in zones" :zone="zone" :key="zone.id"></cardmap>
            </div>
            <!-- card info -->

         </div>
      </div>
   </div>

</template>

<script>

import cardmap from './partials/Cardmap.vue';


export default {
   data() {
    return {
      zones: [
        {
           title: 'Alto Minho',
           photo: 'front/img/photos/photo2.png',
          image: "front/img/map/blue/altominho.svg",
          hover: true,
          area: false,
          id: 1,
        },
        {
          title: 'Cávado',
          photo: 'front/img/photos/photo3.png',
          image: "front/img/map/blue/cavado.svg",
          hover: false,
          area: false,
          id: 2,
       },
        {
           title: 'Porto',
           photo: 'front/img/photos/photo1.png',
          image: "front/img/map/blue/porto.svg",
          hover: false,
          area: false,
          id: 3,
       },
        {
           title: 'Ave',
          photo: 'front/img/photos/photo1.png',
          image: "front/img/map/blue/ave.svg",
          hover: false,
          area: false,
          id: 4,
       },
        {
           title: 'Tâmega',
          photo: 'front/img/photos/photo1.png',
          image: "front/img/map/blue/tamega.svg",
          hover: false,
          area: false,
          id: 5,
       },
        {
          image: "front/img/map/blue/altotamega.svg",
          hover: false,
          area: false,
          id: 6,
       },
        {
          image: "front/img/map/blue/douro.svg",
          hover: false,
          area: false,
          id: 7,
       },
        {
          image: "front/img/map/blue/trasosmontes.svg",
          hover: false,
          area: false,
          id: 8,
       }
      ],
      ItemIndex: null
    };
  },
  methods: {

    selectIndex(Index) {
      this.ItemIndex = Index;
   },

   showArea(id){
      // alert('ola');

      _.map(this.zones, function(item, hover){

         if (item.id == id) {
            item.hover = true;
            hover = true;
            console.log(item.id);
         }
         else {
            item.hover = false
            hover = false;
         }
      });

   }
  }
}
</script>
