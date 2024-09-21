
<template>
       <div class="col space">
  <div class="card element">

    <img v-if="item.img" :src="'images/' + item.img" class="card-img-top" alt="Imagen de libro">
    <div class="card-body">
<h3 class="card-title">{{ item.nombre || 'Sin título' }}</h3>

<h5 class="card-title">{{ item.categoria?.nombre }}</h5>
<p class="card-text">Autor: {{ item.autor }}</p>
<!-- 
      <div class="buttons">
        <button v-if="item.estado.id === 1" class="btn btn-success">Disponible</button>
        <button v-if="item.estado.id === 2" class="btn btn-warning">Ocupado</button>
        <button v-if="item.estado.id === 3" class="btn btn-danger">No disponible</button>
        <a @click="openMenu(item)" class="btn btn-primary separate">Consultar</a>
      </div> -->
    </div>
  </div></div>
</template>
  
  <script>
  export default {
    props: {
      item: {
        type: Object,
        required: true
      }
    },
    methods: {
      openMenu(nombre, autor, categoria, descripcion, img) {
        document.getElementById('menu-nombre').innerText = nombre;
        document.getElementById('menu-autor').innerText = autor;
        document.getElementById('menu-categoria').innerText = categoria;
        document.getElementById('menu-descripcion').innerText = descripcion;
        document.getElementById('menu-img').src = "images/" + img;
        document.getElementById('menu').style.width = '100%';

        console.log(item);

      }

      
    }


  }
  </script>
