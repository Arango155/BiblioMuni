import './bootstrap';
import { createApp } from 'vue';

// Montar el componente de ejemplo
import ExampleComponent from './components/ExampleComponent.vue';
const app1 = createApp({});
app1.component('example-component', ExampleComponent);
app1.mount('#app');

// Montar el componente de carrusel
import CarruselComponent from './components/CarruselComponent.vue';
const app2 = createApp({});
app2.component('carrusel-component', CarruselComponent);
app2.mount('#carrusel');

// Montar el componente de mapa
import MapComponent from './components/MapComponent.vue';
const app3 = createApp({});
app3.component('mapa-component', MapComponent);
app3.mount('#map-component');


// Montar el componente de footer
import FooterComponent from './components/FooterComponent.vue';
const app4 = createApp({});
app4.component('footer-component', FooterComponent);
app4.mount('#footer');
