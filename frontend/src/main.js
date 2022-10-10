import { createApp } from 'vue'
import App from './App.vue'
import './registerServiceWorker'
import router from './router'

import { library } from '@fortawesome/fontawesome-svg-core';
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome';
import { faUserSecret, faShoppingCart, faCheck } from '@fortawesome/free-solid-svg-icons';

import VueSweetalert2 from 'vue-sweetalert2';
import 'sweetalert2/dist/sweetalert2.min.css';

library.add(faUserSecret, faShoppingCart, faCheck);

createApp(App)
    .component('font-awesome-icon', FontAwesomeIcon)
    .use(router)
    .use(VueSweetalert2)
    .mount('#app')
