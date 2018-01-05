<template>
	<div id="page1">
		<Message :text="message" />
		<a href="/page2">Go to the page2</a>
	</div>
</template>

<script>
import Message from '../components/message/index.vue';

export default {
  name: 'Page1Container',
  data() {
    return {
      message: '',
    };
  },
  components: {
    Message,
  },
  mounted() {
    this.$set(this, 'message', dataLayout.message);
  },
};
</script>
