import './bootstrap';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router';
import App from './App.vue';
import getNumber from './components/getNumber.vue';
import Home from './components/home.vue';

const routes = [
  { path: '/', component: Home },
  { path: '/get-number', component: getNumber },
]

const router = createRouter({
  history: createWebHistory(),
  routes,
})



const app = createApp({
  components: { App, },
});
app.use(router)
app.mount('#app');

