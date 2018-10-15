<template>
    <div class="px-8 border-t-2 border-40">
        <h3 class="mb-3 pt-6 text-90 font-normal text-xl text-center">{{field.name}}</h3>
    </div>
</template>

<script>
    import {FormField, HandlesValidationErrors} from 'laravel-nova'

    export default {
        mixins: [FormField, HandlesValidationErrors],

        props: ['resourceName', 'resourceId', 'field'],

        methods: {
            /*
             * Set the initial, internal value for the field.
             */
            setInitialValue() {
            },

            /**
             * Fill the given FormData object with the field's internal value.
             */
            fill(formData) {
            },

            /**
             * Update the field's internal value.
             */
            handleChange(value) {
            },
        },
    }
</script>
