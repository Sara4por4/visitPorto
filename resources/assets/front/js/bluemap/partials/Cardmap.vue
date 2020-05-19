<template>

      <div class="" v-if="zone.hover">
         <div class="info-map__wrapper">
            <div class="info-map__img" :style=" {'background-image': 'url(' + zone.photo + ')'}"></div>
            <div class="info-map__caption">
               <img src="front/img/icons/021-car.svg" alt="">
               <h4 class="tiny-text tiny-text--caps">Tempo médio de viagem</h4>
               <h3 class="text text--caps">{{zone.title}}</h3>
            </div>
         </div>

         <div class="info-map__list">
           <div class="info-map__subheader row">
              <div class="col-xs-8">
                 <p class="tiny-text tiny-text--caps">Regiões</p>
              </div>
              <div class="col-xs-4">
                 <p class="tiny-text tiny-text--caps">Tempo</p>
              </div>
           </div>
            <div class="row" v-for="distance in distances">
               <div class="col-xs-8">
                  <p class="subtitle subtitle--medium subtitle--lowercase">{{distance.local}}</p>
               </div>
               <div class="col-xs-4">
                  <p class="text text--semibold">{{distance.time}}</p>
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
           local: 'Trás-os-Montes',
           time: '90 min',
        },
        {
           local: 'Minho',
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
