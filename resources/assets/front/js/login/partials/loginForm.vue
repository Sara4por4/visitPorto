<template>

   <form class="form form--authentication" id="app" @submit="checkForm" action="" method="post">

     <div class="form-group">
        <label for="email">Email*</label>
        <input id="email" type="email" name="" value="" placeholder="O teu email">
     </div>

     <div class="form-group">
        <label for="password">Password*</label>
        <input id="password" type="password" name="" value="" placeholder="Password de acesso">
     </div>

     <div class="form-group">
        <a class="tip" href="#">Esqueceste-te da password?</a>
     </div>

   </form>

</template>

<script>
export default {
   data: {
      errors: [],
      email: null,
      password: null,
    },
    methods:{
     checkForm: function (e) {
        if (this.email && this.password) {
         return true;
        }

        this.errors = [];

        if (!this.password) {
           this.errors.push('Password required.');
        }

        if (!this.email) {
           this.errors.push('Email required.');
         } else if (!this.validEmail(this.email)) {
           this.errors.push('Valid email required.');
        }
        if (!this.errors.length) {
         return true;
        }

        e.preventDefault();
     },
     validEmail: function (email) {
        var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      }
   }
}
</script>

<style lang="css">
</style>
