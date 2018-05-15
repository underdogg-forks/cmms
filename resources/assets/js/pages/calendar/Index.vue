<template>
	<div id="app">
		<calendar-view
			:show-date="showDate"
			@show-date-change="setShowDate"
			class="holiday-us-traditional holiday-us-official"
			display-period-uom="month"
		/>
	</div>
</template>
<script>
	import CalendarView from "vue-simple-calendar"
	require("vue-simple-calendar/dist/static/css/default.css")
	require("vue-simple-calendar/dist/static/css/holidays-us.css")

	export default {
		name: 'app',
		data: function() {
			return { showDate: new Date() }
		},
		components: {
			CalendarView
		},
		methods: {
			setShowDate(d) {
				this.showDate = d;
			},
		}
	}
</script>
