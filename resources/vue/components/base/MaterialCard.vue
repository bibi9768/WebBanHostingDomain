<template>
    <v-card
        :class="classes"
        class="v-card--material pa-3"
        v-bind="$attrs"
    >
        <div class="d-flex grow flex-wrap">
            <v-avatar
                class="mx-auto v-card--material__avatar elevation-6"
                color="grey"
                size="128"
                v-if="avatar"
            >
                <v-img :src="avatar"/>
            </v-avatar>

            <v-sheet
                :class="{
          'pa-7': !$slots.image
        }"
                :color="color"
                :max-height="icon ? 90 : undefined"
                :width="icon ? 'auto' : '100%'"
                class="text-start v-card--material__heading mb-n6"
                dark
                elevation="6"
                v-else
            >
                <slot
                    name="heading"
                    v-if="$slots.heading"
                />

                <slot
                    name="image"
                    v-else-if="$slots.image"
                />

                <div
                    class="display-1 font-weight-light"
                    v-else-if="title && !icon"
                    v-text="title"
                />

                <v-icon
                    size="32"
                    v-else-if="icon"
                    v-text="icon"
                />

                <div
                    class="headline font-weight-thin"
                    v-if="text"
                    v-text="text"
                />
            </v-sheet>

            <div
                class="ml-6"
                v-if="$slots['after-heading']"
            >
                <slot name="after-heading"/>
            </div>

            <div
                class="ml-4"
                v-else-if="icon && title"
            >
                <div

                    class="card-title font-weight-light"
                    v-text="title"
                />
            </div>
        </div>

        <slot/>

        <template v-if="$slots.actions">
            <v-divider class="mt-2"/>

            <v-card-actions class="pb-0">
                <slot name="actions"/>
            </v-card-actions>
        </template>
    </v-card>
</template>

<script>
    export default {
        name: 'MaterialCard',

        props: {
            avatar: {
                type: String,
                default: '',
            },
            color: {
                type: String,
                default: 'success',
            },
            icon: {
                type: String,
                default: undefined,
            },
            image: {
                type: Boolean,
                default: false,
            },
            text: {
                type: String,
                default: '',
            },
            title: {
                type: String,
                default: '',
            },
        },

        computed: {
            classes() {
                return {
                    'v-card--material--has-heading': this.hasHeading,
                }
            },
            hasHeading() {
                return Boolean(this.$slots.heading || this.title || this.icon)
            },
            hasAltHeading() {
                return Boolean(this.$slots.heading || (this.title && this.icon))
            },
        },
    }
</script>

<style lang="sass">
    .v-card--material
        &__avatar
            position: relative
            top: -64px
            margin-bottom: -32px

        &__heading
            position: relative
            top: -40px
            transition: .3s ease
            z-index: 1
</style>
