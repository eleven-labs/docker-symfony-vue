<template>
	<div id="page2">
		<Message :text="message" />
		<a href="/page1">Go the page 1</a>
	</div>
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
		fetch('api/astronauts/1.json')
			.then((response) => response.json())
			.then((data) => this.message = `Welcome ${data.name}`)
  },
};
</script>
