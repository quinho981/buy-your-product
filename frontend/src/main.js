import { createApp } from 'vue'
import App from './App.vue'
import './registerServiceWorker'
import router from './router'

import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faUserSecret, faShoppingCart, faCheck } from '@fortawesome/free-solid-svg-icons';

import store from './store'

library.add(faUserSecret, faShoppingCart, faCheck);

createApp(App).use(store)
    .component('font-awesome-icon', FontAwesomeIcon)
    .use(router)
    .mount('#app')
