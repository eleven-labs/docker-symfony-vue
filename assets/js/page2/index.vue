<template>
	<div id="page-2">
		<h1>Astronaut list</h1>
		<ul>
			<li v-for="astronaut in astronauts" :key="astronaut.id">
				<Message :text="astronaut.name" />
			</li>
		</ul>
		<a href="/page1">Go the page 1</a>
	</div>
</template>

<script>
import Message from '../components/message/index.vue';

export default {
  name: 'Page2Container',
  data() {
    return {
        astronauts: {},
	};
  },
  components: {
    Message,
  },
	mounted() {
      fetch('api/astronauts.json')
		.then(response => response.json())
		.then((astronauts) =>
		  this.astronauts = astronauts
		)
  },
};
</script>
