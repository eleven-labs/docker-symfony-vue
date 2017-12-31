import Vue from 'vue';

import Page2 from './index.vue';

// eslint-disable-next-line
export const vm = new Vue({
  el: '#app2',
  components: {
    app: Page2,
  },
  render: h => h('app'),
});
