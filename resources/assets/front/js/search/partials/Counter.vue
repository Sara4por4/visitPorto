<template>
   <div class="counter">
      <div class="row">

         <div class="col-xs-6">
            <p>Adultos</p>
            <span class="counter__btn" @click="decrementValue">-</span>
            <p class="result">{{counter}}</p>
            <span class="counter__btn" @click="incrementValue">+</span>
         </div>

         <div class="col-xs-6">
            <p>Crianças</p>
            <span class="counter__btn" @click="decrementValue">-</span>
            <p class="result">{{counter}}</p>
            <span class="counter__btn" @click="incrementValue">+</span>
         </div>

      </div>
   </div>
</template> 

<script>
export default {
   data(){
      return{
         counter: 0,
      }

   },

    methods: {
      incrementValue() {
      this.counter++;
    },
    decrementValue() {
      this.counter--;
    },
   }
}
</script>
