import './bootstrap';
import { createApp } from 'vue';

// Crear una instancia para el primer componente
const app1 = createApp({});

// Registrar el componente de ejemplo
import ExampleComponent from './components/ExampleComponent.vue';
app1.component('example-component', ExampleComponent);

// Montar el componente Example en el id "app"
app1.mount('#app');

const app2 = createApp({});

import CarruselComponent from './components/CarruselComponent.vue';
app2.component('carrusel-component', CarruselComponent);

app2.mount('#carrusel');


const app3 = createApp({});

import MapComponent from './components/MapComponent.vue';
app3.component('map-component', MapComponent);

app3.mount('#map-component');

