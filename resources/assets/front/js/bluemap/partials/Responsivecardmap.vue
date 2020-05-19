<template>

      <div class="">
         <div class="info-map__wrapper">
            <div class="info-map__img" :style=" {'background-image': 'url(' + zone.photo + ')'}"></div>
            <div class="info-map__caption">
               <img src="front/img/icons/021-car.svg" alt="">
               <h4 class="subtitle">Tempo médio de viagem</h4>
               <h3 class="title">{{zone.title}}</h3>
            </div>
         </div>

         <div class="info-map__list">

            <div class="row" v-for="distance in distances">
               <div class="col-xs-8">
                  <p class="text">{{distance.local}}</p>
               </div>
               <div class="col-xs-4">
                  <p class="text">{{distance.time}}</p>
               </div>
            </div>

         </div>
      </div>

</template>

<script>
export default {
   props: {
      zone: {
         type: Object,
         required: true,
      }
   },
   data() {
    return {
      distances: [
        {
           local: 'Douro',
           time: '90 min',
        },
        {
           local: 'Ave',
           time: '50 min',
        },
        {
           local: 'Cávado',
           time: '90 min',
        },
        {
           local: 'Alto Minho',
           time: '110 min',
        },
        {
           local: 'Grande Porto',
           time: '90 min',
        },
     ],
     }
  }
}
</script>
