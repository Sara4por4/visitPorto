<template>
  <li>
    <a class="small-text small-text--medium" data-toggle="collapse" :data-target="'#drop' + menu.id">
      <img :src="menu.icon" alt="" class="injectable">
      {{menu.title}}<span class="icon icon--caret-down"></span>
    </a>
    <div class="slide-form__checkboxes-wrap collapse" :id="'drop' + menu.id">
      <div class="slide-form__checkbox checkbox-group" v-for="(option, index) in this.menu.option" :key="option.id">
        <label class="small-text">
          <input  class="form-check-input"  type="checkbox" name="rgpd">
          {{option.name}}
          <span class="checkmark"></span>
        </label>
      </div>
    </div>
  </li>

</template>
<script>

export default {
   props: {
      menu: {
         type: Object,
         required: true,
      }
   },
  }
</script>
<style lang="scss" scoped>
</style>
