<template>

   <div class="select">
      <ul class="select__options" :class="{ open: this.open_input }">
         <li class="select__item" @click="selectValue(option)" v-for="(option, index) in select.option" :key="option.id" :value="option.id" :class="[selected_value === option.id ? 'active' : '']" >{{option.name}}</li>
      </ul>
      <div class="form-filters__field" @click="open" :class="{ open:this.open_input }">
         <img class="form-filters__icon" :src="select.icon" alt="">
         <input :placeholder="select.title" type="text" :value="selected_text" disabled>
      </div>
   </div>


</template>

<script>
export default {
   props: {
      select: {
         type: Object,
         required: true,
      }
   },
   data() {
      return {
         open_input:false,
         selected_value:null,
         selected_text:'',

      }
   },
   methods: {
      open(){
           this.open_input=!this.open_input;
      },
      selectValue(option){
           this.selected_text=option.name;
           this.selected_value=option.id;
           this.open();
           this.$emit('onOptionChanged', this.selected_value);
      }
   },
}
</script>
