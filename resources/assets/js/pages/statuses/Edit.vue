<template>

    <div class="columns is-centered">
        <div class="column is-three-quarters animated fadeIn">
            <vue-form-ss class="box animated fadeIn"
                :params="[$route.name, $route.params.id, false]"
                @loaded="initialised = true"
                ref="form">
            </vue-form-ss>
            </div>
        </div>

</template>

<script>
import VueFormSs from '../../components/enso/vueforms/VueFormSs.vue';

export default {
    components: {
	VueFormSs
    },
    data() {
        return {
            initialised: false,
        };
    },
};
</script>
