import './bootstrap';
import { createApp } from 'vue';
import PostComponent from "@/components/PostComponent.vue";



const app = createApp({});




app.component('post-component', PostComponent);



// Object.entries(import.meta.glob('./**/*.vue', { eager: true })).forEach(([path, definition]) => {
//     app.component(path.split('/').pop().replace(/\.\w+$/, ''), definition.default);
// });


app.mount('#app');
