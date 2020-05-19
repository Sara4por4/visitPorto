<template>

   <div class="modal show"  ref="modalpo">

      <button @click="$emit('close')" :key="1" type="button" name="button" class="modal__close icon icon--close"></button>

      <search :key="2"></search>

   </div>


</template>

<script>

export default {

   methods: {
      documentClick(e) {
          let el = this.$refs.modalpo;
          let target = e.target;
          if ( el != null && el !== target && !el.contains(target)) {
            show=false;
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
</style>
