<template>
    <textarea class="form-input rounded-md shadow-sm w-full" rows="5" :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)">
    </textarea>

</template>

<script setup>

defineProps({
    modelValue: String,
});

</script>

