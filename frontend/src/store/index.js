import { createStore } from 'vuex';
import api from "@/services/config";
import { Promise } from 'core-js';

export default createStore({
  state: {
    cart: []
  },
  getters: {
  },
  mutations: {
    createOrder(state, payload) {
      localStorage.setItem('order_id', payload);
    },

    insertCart(state, payload) {
      try {
        state.cart.push(payload);

        localStorage.setItem('cart', JSON.stringify(state.cart));
      } catch (e) {
        console.log(e);
      }
    }
  },
  actions: {
    createOrder( { commit }, payload) {

      return new Promise((resolve, reject) => {
        api.post('/order', payload)
          .then((response) => {
            commit('createOrder', response.data.id);
            resolve(response);
          })
          .catch(e => console.log(e));
      })
    },

    async insertCart( { commit }, payload) {

      await api.post('/order_items', payload)
        .then((response) => {
          commit('insertCart', payload);
        })
        .catch(e => console.log(e));
    }
  },
  modules: {
  }
})
