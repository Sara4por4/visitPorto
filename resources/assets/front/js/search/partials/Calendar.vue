<template>

  <HotelDatePicker :startDate="new Date(new Date().getFullYear(), new Date().getMonth()+1, 1)"></HotelDatePicker>

</template>


<script>
import HotelDatePicker from 'vue-hotel-datepicker';

export default {
   components: {
     HotelDatePicker
   },
 }

</script>
