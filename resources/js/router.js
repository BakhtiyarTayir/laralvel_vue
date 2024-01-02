import { createRouter, createWebHistory } from 'vue-router';


import PostComponent from './components/PostComponent.vue';
import Index from './components/Index.vue';

const routes = [
  { path: '/', component: Index },
  { path: '/posts', component: PostComponent },

];


const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
