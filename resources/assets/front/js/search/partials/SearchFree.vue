<template>

   <div class="form-filters__item search">
      <div class="form-filters__field">
         <label for="">O que procura?</label>
         <input type="text" value="" name="query" placeholder="Inserir termo" v-model="query" @keyup="autoComplete">
         <!-- <button type="button" name="button" class="go">Pesquisar</button> -->

         <!-- search list -->
          <div>
            <div class="panel-footer search-list" v-if="results.length">
                <ul class="list-group">
                    <li class="list-group-item" v-for="result in results">

                        <a class="media" :href="result.link">
                            <div class="media-left" >
                                <img  class="media-object" :src="result.image" alt="product_image" style="max-width: 50px">
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">{{ result.name }}</h4>
                            </div>
                        </a>

                    </li>
                </ul>
                <b-button type="submit">Ver todos</b-button>
            </div>
        </div>
        <!-- search list -->
      </div>
   </div>

</template>


<script>
    export default {
        data() {
            return {
                query: '',
                results: []
            }
        },
        created () {
            document.addEventListener('click', this.documentClick)
        },
        destroyed () {
            document.removeEventListener('click', this.documentClick)
        },
        methods: {
            autoComplete() {
                if (this.query.length > 2) {
                    axios.get('/api/search', {params: {query: this.query}}).then(response => {
                        this.results = response.data;
                    });
                }
            },

            close() {
                this.results = [];
            },

            documentClick(e) {
                let el = this.$refs.searchForm;
                let target = e.target;
                if ( el != null && el !== target && !el.contains(target)) {
                    this.results=[];
                    this.query='';
                }
            },

        }
    }
</script>
