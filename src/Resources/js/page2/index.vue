<template>
	<Message text="i'm on page 2" />
</template>

<script>
import Message from '../components/message/index.vue';

export default {
  name: 'Page2Container',
  data() {
    return {};
  },
  components: {
    Message,
  },
	mounted() {
		fetch('')
			.then(response => response.json)
			.then(
				({ message }) =>
					this.$set(this, 'message', dataLayout.message);
				)
  },
};
</script>
