<template>

    <div class="columns is-centered">
        <div class="column is-three-quarters animated fadeIn">
            <vue-form-ss class="box animated fadeIn"
                :params="[$route.name, $route.params.id, false]"
                @loaded="initialised = true"
                ref="form">
                <template slot="customer_id" slot-scope="{ field, errors }">
                    <vue-select v-model="field.value"
                        :has-error="errors.has(field.name)"
                        @input="pivotParams.owners.id=$event;errors.clear(field.name)"
                        :source="field.meta.source">
                    </vue-select>
                </template>
                <template slot="contractor_id" slot-scope="{ field, errors }">
                    <vue-select v-model="field.value"
                        :pivot-params="pivotParams"
                        :has-error="errors.has(field.name)"
                        @input="errors.clear(field.name);"
                        :source="field.meta.source">
                    </vue-select>
                </template>
                <template slot="priority_id" slot-scope="{ field, errors }">
                    <vue-select v-model="field.value"
                        :has-error="errors.has(field.name)"
                        @input="pivotParams.owners.id=$event;errors.clear(field.name)"
                        :source="field.meta.source">
                    </vue-select>
                </template>
                <template slot="status_id" slot-scope="{ field, errors }">
                    <vue-select v-model="field.value"
                        :pivot-params="pivotParams"
                        :has-error="errors.has(field.name)"
                        @input="errors.clear(field.name);"
                        :source="field.meta.source">
                    </vue-select>
                </template>


            </vue-form-ss>
            <div v-if="initialised">
                <comments :id="$route.params.id"
                    type="workorder">
                </comments>
                <documents :id="$route.params.id"
                    type="workorder">
                </documents>
                <addresses :id="$route.params.id"
                    type="workorder">
                </addresses>
            </div>
        </div>
    </div>

</template>

<script>
import Documents from '../../components/enso/documents/Documents.vue';
import Comments from '../../components/enso/comments/Comments.vue';
import Addresses from '../../components/enso/addresses/Addresses.vue';
import VueFormSs from '../../components/enso/vueforms/VueFormSs.vue';
import VueSelect from '../../components/enso/select/VueSelect.vue';

export default {
    components: {
        Comments, Documents, Addresses, VueFormSs, VueSelect,
    },
    data() {
        return {
            initialised: false,
        };
    },
};
</script>
