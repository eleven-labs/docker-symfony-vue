import Vue from 'vue';

import Page1 from './index.vue';

// eslint-disable-next-line
export const vm = new Vue({
  el: '#app1',
  components: {
    app: Page1,
  },
  render: h => h('app'),
});
