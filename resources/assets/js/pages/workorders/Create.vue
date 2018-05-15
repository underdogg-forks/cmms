<template>
<div>
    <div class="columns is-centered">
        <div class="column is-three-quarters">
            <vue-form-ss class="box animated fadeIn"
                :params="[$route.name, $route.params.id, false]"
                ref="form">
                <template slot="customer_id" slot-scope="{ field, errors }">
                    <vue-select v-model="field.value"
                        :has-error="errors.has(field.name)"
                        @input="errors.clear(field.name)"
                        :source="field.meta.source">
                    </vue-select>
		</template>
                <template slot="contractor_id" slot-scope="{ field, errors }">
                    <vue-select v-model="field.value"
                        :has-error="errors.has(field.name)"
                        @input="errors.clear(field.name)"
                        :source="field.meta.source">
                    </vue-select>
                </template>
                <template slot="status_id" slot-scope="{ field, errors }">
                    <vue-select v-model="field.value"
                        :has-error="errors.has(field.name)"
                        @input="errors.clear(field.name)"
                        :source="field.meta.source">
                    </vue-select>
                </template>
                <template slot="priority_id" slot-scope="{ field, errors }">
                    <vue-select v-model="field.value"
                        :has-error="errors.has(field.name)"
                        @input="errors.clear(field.name)"
                        :source="field.meta.source">
                    </vue-select>
                </template>
            </vue-form-ss>
        </div>
    </div>

</div>
</template>

<script>

import VueFormSs from '../../components/enso/vueforms/VueFormSs.vue';
import VueSelect from '../../components/enso/select/VueSelect.vue';


export default {
    components: { VueFormSs, VueSelect },

    data() {
        return {
            pivotParams: { customers: { id: null } },
        };
    },
};

</script>

