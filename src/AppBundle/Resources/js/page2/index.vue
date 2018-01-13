<template>
	<Message :text="message" />
</template>

<script>
import Message from '../components/message/index.vue';

export default {
  name: 'Page2Container',
  data() {
    return {
        message: '',
	};
  },
  components: {
    Message,
  },
	mounted() {
      fetch('api/hello/wilson')
		.then(response => response.json())
		.then((message) =>
		  this.message = message
		)
  },
};
</script>
