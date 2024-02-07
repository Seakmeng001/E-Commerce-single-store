import HomeVue from './views/Home.vue';
import LoginVue from './views/Login.vue';
import RegisterVue from './views/Register.vue';
import ShopVue from './views/Shop.vue';
import CartVue from './views/Cart.vue';
import PromotionVue from './views/Promotion.vue';
import ContactVue from './views/Contact.vue';
import {createRouter, createWebHistory} from 'vue-router';

const routes = [
    {path: '/login', name: 'login', component: LoginVue},
    {path: '/register', name: 'register', component: RegisterVue},
    {path: '/', name: 'home', component: HomeVue},
    {path: '/shop', name: 'shop', component: ShopVue},
    {path: '/cart', name: 'cart', component: CartVue},
    {path: '/promotion', name: 'promotion', component: PromotionVue},
    {path: '/contact', name: 'contact', component: ContactVue},
]

const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router;