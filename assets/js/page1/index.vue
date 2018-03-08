<template>
	<div id="page-1">
		<Message :text="message" />
		<a href="/page2">Go the page 2</a>
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
