<template>

   <div class="modal show"  ref="modalpo">

      <button @click="$emit('close')" :key="1" type="button" name="button" class="modal__close icon icon--close"></button>

      <ul class="social-list"  :key="2">
         <li v-for="el in list">
            <a :href="el.link" target="_blank"><img :src="el.icon" alt="">{{el.title}}</a>
         </li>
      </ul>

   </div>


</template>

<script>

export default {

   data() {
      return{
         list: [
            { link: '', icon: 'front/img/icons/social/instagram.svg', title:'Instagram'},
            { link: '', icon: 'front/img/icons/social/twitter.svg', title:'Twitter'},
            { link: '', icon: 'front/img/icons/social/facebook.svg', title:'Facebook'},
            { link: '', icon: 'front/img/icons/social/youtube.svg', title:'Youtube'},
            { link: '', icon: 'front/img/icons/social/vimeo.svg', title:'Vimeo'},
            { link: '', icon: 'front/img/icons/social/pinterest.svg', title:'Pinterest'},
         ]
      }
   },
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
