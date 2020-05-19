<template>
   <div class="nav homepage" @mouseleave = "menuDisappear(), menushow=false">

      <nav class="nav__wrapper">

         <div class="container">
            <div class="clearfix">

               <div class="app-logo nav__logo" @mouseover = "menuDisappear(), menushow=false">
                  <a href="/">Porto e Norte</a>
               </div>

               <div class="nav__responsive nav__right visible-xs">
                  <ul class="nav__submenu">
                     <li>
                        <ul class="nav__langs langs">
                           <a @click="langs()">
                              <li :class="{ active : pt }" v-if="this.pt == true">PT</li>
                              <li :class="{ active : en }" v-if="this.en == true">EN</li>
                           </a>
                        </ul>
                        </a>
                     </li>
                     <li class="count-btn">
                        <a href=""><span class="icon icon--compass"></span>0</a>
                     </li>
                     <li>
                        <a href=""><span class="icon icon--user"></span></a>
                     </li>
                  </ul>
               </div>
            </div>

            <div class="nav__right">

                  <!-- begin top bar -->
                  <ul class="nav__submenu hidden-xs" @mouseover = "menuDisappear(), menushow=false">
                    <li class="hidden-sm">
                       <a href="news">Notícias</a>
                    </li>
                     <li class="hidden-sm">
                        <a href="info">Informações</a>
                     </li>
                     <li class="lang-btn">
                        <a @click="langs()">Idioma
                        <ul class="nav__langs langs">
                           <li :class="{ active : pt }" v-if="this.pt == true">PT</li>
                           <li :class="{ active : en }" v-if="this.en == true">EN</li>
                        </ul>
                        </a>
                     </li>
                     <li class="count-btn">
                       <myguide></myguide>
                        <!-- <a href=""><span class="icon icon--compass"></span>Meu Guia <span>0</span></a> -->
                     </li>
                  </ul>
                  <!-- end top bar -->

                  <!-- begin bottom bar -->
                  <!-- <slick ref="slick" :options="slickOptions"></slick>-->
                  <div class="nav__menu" :class="{active:this.menushow}" @mouseover="menushow=true">
                     <li :key="menu.id" @mouseover="menuClick(menu.id)" :class="{show:menu.hover}" v-for="menu in menus">
                        <a>{{menu.title}}</a>
                     </li>
                  </div>
                  <!-- end bottom bar -->

               </div>
            </div>

      </nav>

      <submenu  v-for="menu in menus"  :menu="menu" :key="menu.id"></submenu>

</div>

</template>

<script>
import submenu from './partials/Submenu';
import Slick from 'vue-slick';

export default {
   components: {
      Slick
   },
   data() {
    return {
       menushow: false,
       hover: false,
       pt: true,
       en: false,
       menus: [
          { id : 1, title : 'Porto e Norte', hover: false, class: 'menu-map',
          option: [
             {id: '2', name: 'Minho', hover_bg:false, img: 'front/img/photos/photo1.png', link: 'regions'},
             {id: '3', name: 'Grande Porto', hover_bg:false, img: 'front/img/photos/photo3.png', link: 'regions'},
             {id: '4', name: 'Douro', hover_bg:false, img: 'front/img/photos/photo7.png', link: 'regions'},
             {id: '1', name: 'Trás-os-Montes', hover_bg:false, img: 'front/img/photos/photo8.png', link: 'regions'},
          ]},

          { id : 2,  title : 'O que procura?', hover: false, class: 'links',
          option: [
             { id: '1', name: 'Monumentos', hover_bg:false, img: 'front/img/photos/photo1.png', link: 'searchfor'},
             {id: '2', name: 'Museus e Centros temáticos', hover_bg:false, img: 'front/img/photos/photo2.png', link: 'searchfor'},
             {id: '3', name: 'templos religiosos', hover_bg:false, img: 'front/img/photos/photo3.png', link: 'searchfor'},
             {id: '4', name: 'centros culturais', hover_bg:false, img: 'front/img/photos/photo4.png', link: 'searchfor'},
             {id: '5', name: 'miradouros', hover_bg:false, img: 'front/img/photos/photo5.png', link: 'searchfor'},
             {id: '6', name: 'comércio', hover_bg:false, img: 'front/img/photos/photo6.png', link: 'searchfor'},
             {id: '7', name: 'quintas e caves', hover_bg:false, img: 'front/img/photos/photo7.png', link: 'searchfor'},
             {id: '8', name: 'espaços desportivos', hover_bg:false, img: 'front/img/photos/photo1.png', link: 'searchfor'},
             {id: '9', name: 'praia e natureza', hover_bg:false, img: 'front/img/photos/photo2.png', link: 'searchfor'},
             {id: '10', name: 'saúde e bem-estar', hover_bg:false, img: 'front/img/photos/photo1.png', link: 'searchfor'}] },

          { id : 3,  title : 'Experiências', hover: false, class: 'iconographic',
          option: [{
             id: '1', name: 'Enoturismo',  icon: 'front/img/icons/008-wine.svg', link: 'experiences' },
             {id: '2', name: 'Gastronomia',  icon: 'front/img/icons/032-sardines.svg', link: 'experiences' },
             {id: '3', name: 'Religioso',  icon: 'front/img/icons/017-prayer.svg', link: 'experiences'},
             {id: '4', name: 'Cultural',  icon: 'front/img/icons/mask.svg', link: 'experiences'},
             {id: '5', name: 'Natureza',  icon: 'front/img/icons/nature.svg', link: 'experiences'},
             {id: '6', name: 'Arquitetura',  icon: 'front/img/icons/arq.svg', link: 'experiences'},
             {id: '7', name: 'Bem-Estar',  icon: 'front/img/icons/005-sauna.svg', link: 'experiences'},
             {id: '8', name: 'Aventura',  icon: 'front/img/icons/aventura.svg', link: 'experiences'}] },
          { id : 4,  title : 'Roteiros', hover: false, class: 'banner', text: 'PLANEIE A SUA VIAGEM, ENCONTRE NOVOS LUGARES, DIVIRTA-SE E CRIE MEMÓRIAS PARA TODA A DIA.', link: 'itinerary'},
          { id : 5,  title : 'Eventos', hover: false, class: 'banner',  text: 'O QUE ESTÁ PARA ACONTECER NO PORTO E NORTE DE PORTUGAL? ENCONTRE TODO O TIPO DE EVENTOS…', link: 'events'},
      ],
      selected_menu: {},
      slickOptions: {
         arrows: false,
         dots: false,
          responsive:[
          {
           breakpoint: 576,
           settings: {
             slidesToShow: 1,
             slidesToScroll: 1,
             infinite: false,
             centerPadding: '120px 0 0',
             centerMode: true,
           }
        },
          {
           breakpoint: 4000,
           settings: "unslick",
        },
         ]
      },
    };
   },
   methods:{
     langs(){
    
    },
     menuShow(){
       menushow = true;
     },
      menuDisappear(){
            _.map(this.menus, function(item, hover){
               item.hover = false
               hover = false;
             })
      },
      menuClick(id){

         _.map(this.menus, function(item, hover){
            item.hover = false
            hover = false;


            if (item.id == id) {
               item.hover = true;
               hover = true;
            }
         });

         this.selected_menu = _.filter(this.menus, function(item){
            return item.hover
         })
      }
   },

}
</script>
