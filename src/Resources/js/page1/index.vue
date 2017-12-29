<template>
	<Message :text="message" />
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
