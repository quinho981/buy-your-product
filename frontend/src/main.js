import { createApp } from 'vue'
import App from './App.vue'
import './registerServiceWorker'
import router from './router'

import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faUserSecret, faShoppingCart } from '@fortawesome/free-solid-svg-icons';

library.add(faUserSecret, faShoppingCart);

createApp(App)
    .component('font-awesome-icon', FontAwesomeIcon)
    .use(router)
    .mount('#app')
