<template>
    <v-alert
        class="v-alert--material"
        dark
        v-bind="$attrs"
        v-on="$listeners"
    >
        <template
            v-if="$attrs.icon"
            v-slot:prepend
        >
            <v-icon
                :color="$attrs.color"
                class="v-alert__icon elevation-6 white"
                light
            >
                {{ $attrs.icon }}
            </v-icon>
        </template>

        <slot/>

        <template
            v-if="$attrs.dismissible"
            v-slot:close="{ toggle }"
        >
            <v-btn
                :aria-label="$vuetify.lang.t('$vuetify.close')"
                @click="toggle"
                color
                icon
                small
            >
                <v-icon>
                    $vuetify.icons.cancel
                </v-icon>
            </v-btn>
        </template>
    </v-alert>
</template>

<script>
    export default {
        name: 'MaterialAlert',
    }
</script>

<style lang="sass">

    .v-alert--material
        margin-top: 32px

        .v-alert__icon
            top: -36px

        .v-alert__dismissible
            align-self: flex-start
            margin: 0 !important
            padding: 0 !important
</style>
