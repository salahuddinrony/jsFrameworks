<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>VueJS 1st Project</title> 
</head>
<body>
	
	<h1>Welcome To VueJS</h1>

	<div id="header">
		<h2>Header Section </h2>
		{{ message }}
	</div>

	<div id="banner">
		<h2>Banner Section </h2>
		<h4 v-bind:title="caption1">Banner 1</h4>
		<h4 v-bind:title="caption2" v-if="seen">Banner 2</h4>
	</div>

	<div id="menus">
		<h2>Menus Section </h2>
		<ol>
			<li v-for="todo in todos">
				{{ todo.text }}
			</li>
		</ol>
	</div>

	<!-- OnClick Section -->
	<div id="reverse">
		<h2>Reverse Message By On Click Events</h2>
		
		<p>{{message}}</p>
		<button v-on:click="reverseMsg">Reverse Message</button>
	</div>

	<!-- V-Model -->
	<div id="vModel">
		<h1>V-Model Section</h1>

		<p>{{message}}</p>
		<input type="text" v-model="message">
	</div>
	
	<!-- JS Components -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.5.22/vue.js"></script>
	<script>
		// Header Section
		var header = new Vue({
			el:'#header',
			data:{
				message: 'Header Section'
			}
		})

		// Banner Section
		var banner = new Vue({
			el:'#banner',
			data:{
				caption1:'Banner Caption 1. Loading is ' + new Date().toLocaleString(),
				caption2:'Banner Caption 2. Loading is ' + new Date(). toLocaleString(),
				seen:true
			}
		})

		// Menus Section
		var menus = new Vue({
			el: '#menus',
			data: {
				todos: [
					{text: 'Home'},
					{text: 'About'},
					{text: 'Services'},
					{text: 'Profile'},
					{text: 'Contact'}
				]
			}
		})
		menus.todos.push({text: 'Live Chat'})
		
		// Reverse Message
		var reverse = new Vue({
			el: '#reverse',
			data: {
				message: 'Learn With VueJs'
			},
			methods: {
				reverseMsg : function(){
					this.message = this.message.split('').reverse('').join('')
				}
			}
		})

		// V-Model
		var vModel = new Vue({
			el: '#vModel',
			data: {
				message: 'Hello Vue Js Model '
			}
		})

	</script>

</body>
</html>