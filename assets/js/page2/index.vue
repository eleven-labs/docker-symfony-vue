<template>
	<Message :text="message" />
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
		fetch('api/astronauts/2.json')
			.then((response) => response.json())
			.then((data) => {
                this.$set(dataLayout.message, data.name);
            })
  },
};
</script>
